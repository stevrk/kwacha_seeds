FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libsqlite3-dev \
    zip \
    unzip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd pdo_sqlite

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy project
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress

# Create necessary directories
RUN mkdir -p storage/framework/{sessions,views,cache} \
    bootstrap/cache \
    database

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache database

# Create SQLite database if needed
RUN touch database/database.sqlite && chmod 666 database/database.sqlite

# Configure Apache for Render
RUN sed -i 's/Listen 80/Listen 10000/g' /etc/apache2/ports.conf \
    && sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Configure .htaccess support
RUN echo '<Directory /var/www/html/public>' > /etc/apache2/conf-available/laravel.conf && \
    echo '    Options Indexes FollowSymLinks' >> /etc/apache2/conf-available/laravel.conf && \
    echo '    AllowOverride All' >> /etc/apache2/conf-available/laravel.conf && \
    echo '    Require all granted' >> /etc/apache2/conf-available/laravel.conf && \
    echo '</Directory>' >> /etc/apache2/conf-available/laravel.conf && \
    a2enconf laravel

# Enable PHP error logging
RUN echo "display_errors=On" >> /usr/local/etc/php/conf.d/errors.ini \
    && echo "display_startup_errors=On" >> /usr/local/etc/php/conf.d/errors.ini \
    && echo "error_reporting=E_ALL" >> /usr/local/etc/php/conf.d/errors.ini \
    && echo "log_errors=On" >> /usr/local/etc/php/conf.d/errors.ini

EXPOSE 10000

CMD ["apache2-foreground"]