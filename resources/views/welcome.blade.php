<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Kwacha Seeds</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Inter', sans-serif;
            background: #FFFFFF;
            scroll-behavior: smooth;
        }
        :root {
            --kwacha-green: #0a3b0a;
            --kwacha-green-light: #1e6b1e;
            --kwacha-green-bg: #f0f7f0;
            --accent-orange: #ff6600;
        }
        
        /* Loading Screen Styles */
        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--kwacha-green);
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: opacity 0.5s ease-out, visibility 0.5s ease-out;
        }
        
        .loading-content {
            text-align: center;
            animation: fadeInUp 0.6s ease-out;
        }
        
        .loading-logo {
            width: 120px;
            height: 120px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            animation: pulse 1.5s ease-in-out infinite;
        }
        
        .loading-logo img {
            width: 80px;
            height: 80px;
            object-fit: contain;
        }
        
        /* Loading Dots */
        .loading-dots {
            display: flex;
            gap: 12px;
            justify-content: center;
            margin-top: 30px;
        }
        
        .dot {
            width: 12px;
            height: 12px;
            background: var(--accent-orange);
            border-radius: 50%;
            animation: bounce 1.4s ease-in-out infinite;
        }
        
        .dot:nth-child(1) {
            animation-delay: 0s;
        }
        
        .dot:nth-child(2) {
            animation-delay: 0.2s;
        }
        
        .dot:nth-child(3) {
            animation-delay: 0.4s;
        }
        
        @keyframes bounce {
            0%, 60%, 100% {
                transform: translateY(0);
                opacity: 0.5;
            }
            30% {
                transform: translateY(-15px);
                opacity: 1;
            }
        }
        
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Main content - initially hidden */
        .main-content {
            opacity: 0;
            transition: opacity 0.5s ease-in;
        }
        
        .main-content.visible {
            opacity: 1;
        }
        
        /* Carousel Styles */
        .carousel-slide {
            transition: opacity 0.7s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        }
        
        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-40px); }
            to { opacity: 1; transform: translateX(0); }
        }
        
        .slide-content {
            animation: slideInLeft 0.7s ease-out forwards;
        }
        
        /* Hover effects */
        .logo-container:hover {
            transform: scale(1.02);
            transition: all 0.3s ease;
        }
        
        .nav-link {
            position: relative;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent-orange);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .btn-quote:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
        }
        
        /* Carousel button hover */
        .carousel-btn:hover {
            background: rgba(0,0,0,0.7);
            transform: scale(1.05);
        }
        
        /* Mobile menu button animation */
        .menu-icon {
            transition: all 0.3s ease-in-out;
        }
        
        .menu-icon.rotated {
            transform: rotate(90deg);
        }
        
        /* Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="antialiased">

<!-- ========== LOADING SCREEN ========== -->
<div id="loadingScreen" class="loading-screen">
    <div class="loading-content">
        <div class="loading-logo">
            <img src="{{ asset('images/kwacha_seeds_logo.png') }}" alt="Kwacha Seeds Logo">
        </div>
        <div class="loading-dots">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
        <p class="text-white/80 text-sm mt-4" style="font-family: 'Inter', sans-serif;">Loading...</p>
    </div>
</div>

<!-- ========== MAIN CONTENT ========== -->
<div id="mainContent" class="main-content">
    
    <!-- ========== MAIN NAVIGATION ========== -->
    <nav class="fixed top-0 left-0 w-full z-50 shadow-md bg-white">
        <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">
            
            <!-- Top Row: Contact + Social (Green background) - DESKTOP ONLY -->
            <div class="hidden md:flex items-center justify-between py-3 px-4 rounded-b-lg mb-0" style="background: var(--kwacha-green); border-radius: 0 0 12px 12px;">
                
                <!-- Left Side: Contact Info -->
                <div class="flex items-center gap-6">
                <div class="flex items-center gap-2 text-white/90 text-sm" style="font-family: 'Inter', sans-serif;">
                    <i class="fas fa-phone-alt" style="color: white; font-size: 12px;"></i>
                    <span>+265 998 823 330</span>
                </div>
                <div class="flex items-center gap-2 text-white/90 text-sm" style="font-family: 'Inter', sans-serif;">
                    <i class="fas fa-envelope" style="color: white; font-size: 12px;"></i>
                    <span>info@kwachaseeds.mw</span>
                </div>
            </div>
                            
                
                <!-- Right Side: Follow Us + Social Icons -->
                <div class="flex items-center gap-4">
                    <span class="text-white/80 text-sm" style="font-family: 'Inter', sans-serif;">Follow us online</span>
                    <div class="flex items-center gap-3">
                        <a href="#" class="text-white/80 hover:text-white transition"><i class="fab fa-facebook-f text-base"></i></a>
                        <a href="#" class="text-white/80 hover:text-white transition"><i class="fab fa-whatsapp text-base"></i></a>
                        <a href="#" class="text-white/80 hover:text-white transition"><i class="fab fa-instagram text-base"></i></a>
                        <a href="#" class="text-white/80 hover:text-white transition"><i class="fab fa-tiktok text-base"></i></a>
                        <a href="#" class="text-white/80 hover:text-white transition"><i class="fab fa-youtube text-base"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Bottom Row: Logo + Navigation Menu (White background) -->
            <div class="flex items-center justify-between py-4 md:py-5">
                
                <!-- Logo Section -->
                <div class="flex items-center gap-3 md:gap-5 lg:gap-6">
                
                    <div class="logo-container flex items-center justify-center 
                                flex-shrink-0
                                w-[45px] h-[45px] 
                                md:w-[65px] md:h-[65px] 
                                lg:w-[75px] lg:h-[75px]
                                hover:scale-105
                                overflow-hidden"
                         style="cursor: pointer;">
                        <img src="{{ asset('images/midium quality.png') }}" 
                             alt="Kwacha Seeds Logo" 
                             class="object-cover w-full h-full">
                    </div>

                    <!-- Brand Text -->
                    <div class="flex flex-col leading-tight">
                        <span class="text-base md:text-3xl lg:text-4xl xl:text-5xl font-bold tracking-tight whitespace-nowrap" style="font-family: 'Inter', sans-serif; color: var(--kwacha-green);">
                            Kwacha <span style="color: var(--accent-orange);">Seeds</span>
                        </span>
                        <span class="text-[10px] md:text-xs lg:text-sm text-gray-500 tracking-wide hidden sm:block" style="font-family: 'Inter', sans-serif;">
                            Providing Top Reliable Seeds
                        </span>
                    </div>
                </div>
                
                <!-- Desktop Navigation Links -->
                <div class="hidden md:flex items-center space-x-6 lg:space-x-8">
                    <a href="#home" class="nav-link text-gray-700 hover:text-orange-500 text-sm font-medium transition" style="font-family: 'Inter', sans-serif;">Home</a>
                    <a href="#about" class="nav-link text-gray-700 hover:text-orange-500 text-sm font-medium transition" style="font-family: 'Inter', sans-serif;">About</a>
                    <a href="#products" class="nav-link text-gray-700 hover:text-orange-500 text-sm font-medium transition" style="font-family: 'Inter', sans-serif;">Products</a>
                    <a href="#farmers-hub" class="nav-link text-gray-700 hover:text-orange-500 text-sm font-medium transition" style="font-family: 'Inter', sans-serif;">Farmer's Hub</a>
                    <a href="#dealers" class="nav-link text-gray-700 hover:text-orange-500 text-sm font-medium transition" style="font-family: 'Inter', sans-serif;">Dealers</a>
                    <a href="#contact" class="nav-link text-gray-700 hover:text-orange-500 text-sm font-medium transition" style="font-family: 'Inter', sans-serif;">Contact</a>
                    <a href="#get-quote" class="btn-quote px-5 py-2 text-sm font-semibold rounded-md shadow-md transition" style="background: var(--kwacha-green); color: white; font-family: 'Inter', sans-serif;">Get a Quote</a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobileMenuBtn" class="md:hidden text-gray-700 text-2xl focus:outline-none menu-icon">
                    <i id="menuIcon" class="fas fa-bars"></i>
                </button>
            </div>
            
            <!-- Mobile Menu - Contact & Social info inside the menu panel -->
            <div id="mobileMenu" class="hidden md:hidden pb-6">
                <div class="flex flex-col space-y-3 text-center">
                    <!-- Mobile Contact & Social with Green Background (inside menu) -->
                    <div class="pt-3 pb-3 rounded-lg mb-2" style="background: var(--kwacha-green);">
                        <div class="text-white/90 text-sm space-y-2" style="font-family: 'Inter', sans-serif;">
                            <div><i class="fas fa-phone-alt" style="color: var(--accent-orange); margin-right: 8px; width: 16px;"></i> +265 998 823 330</div>
                            <div><i class="fas fa-envelope" style="color: var(--accent-orange); margin-right: 8px; width: 16px;"></i> info@kwachaseeds.mw</div>
                            <div class="flex justify-center gap-4 pt-2">
                                <a href="#" class="text-white/80 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="text-white/80 hover:text-white"><i class="fab fa-whatsapp"></i></a>
                                <a href="#" class="text-white/80 hover:text-white"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="text-white/80 hover:text-white"><i class="fab fa-tiktok"></i></a>
                                <a href="#" class="text-white/80 hover:text-white"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Nav Links -->
                    <a href="#home" class="text-gray-700 hover:text-orange-500 py-2" style="font-family: 'Inter', sans-serif;">Home</a>
                    <a href="#about" class="text-gray-700 hover:text-orange-500 py-2" style="font-family: 'Inter', sans-serif;">About</a>
                    <a href="#products" class="text-gray-700 hover:text-orange-500 py-2" style="font-family: 'Inter', sans-serif;">Products</a>
                    <a href="#farmers-hub" class="text-gray-700 hover:text-orange-500 py-2" style="font-family: 'Inter', sans-serif;">Farmer's Hub</a>
                    <a href="#dealers" class="text-gray-700 hover:text-orange-500 py-2" style="font-family: 'Inter', sans-serif;">Dealers</a>
                    <a href="#contact" class="text-gray-700 hover:text-orange-500 py-2" style="font-family: 'Inter', sans-serif;">Contact</a>
                    <a href="#get-quote" class="px-5 py-2 text-sm font-semibold rounded-md text-center" style="background: var(--kwacha-green); color: white; font-family: 'Inter', sans-serif;">Get a Quote</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- ========== HERO CAROUSEL SECTION ========== -->
    <section id="home">
        <div class="relative w-full">
            <!-- Spacer for fixed navbar -->
            <div class="h-[70px] md:h-[140px] lg:h-[150px]"></div>
            <div id="carousel" class="relative h-[400px] md:h-[500px] overflow-hidden">

                <!-- Slide 1 - Soya Field -->
                <div class="carousel-slide absolute inset-0 opacity-100" data-active="true">
                    <div class="absolute inset-0">
                        <img src="{{ asset('images/soya_field.jpg') }}" class="w-full h-full object-cover" alt="Soya field">
                        <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-transparent"></div>
                    </div>
                    <div class="relative h-full flex items-center justify-center">
                        <div class="max-w-7xl mx-auto px-6 lg:px-10 w-full">
                            <div class="max-w-xl text-center md:text-left">
                                <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-2 md:mb-3 leading-tight" style="font-family: 'Inter', sans-serif;">
                                    Fast-Maturing Seeds<br>
                                    <span style="color: var(--accent-orange);">Perfect for Malawi's Climate</span>
                                </h1>
                                <p class="text-xs sm:text-sm md:text-base text-gray-200 mb-3 md:mb-4 slide-content" style="font-family: 'Inter', sans-serif;">
                                    Reliable performance, early maturity, and high yields for every season.
                                </p>
                                <a href="#products" class="inline-block px-4 py-1.5 md:px-5 md:py-2.5 rounded-md font-semibold text-white transition hover:opacity-90 slide-content text-sm md:text-base" style="background: var(--kwacha-green); font-family: 'Inter', sans-serif;">
                                    View Seeds <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 - Maize Harvest -->
                <div class="carousel-slide absolute inset-0 opacity-0" data-active="false">
                    <div class="absolute inset-0">
                        <img src="{{ asset('images/malawi_harvest.jpg') }}" class="w-full h-full object-cover" alt="Maize harvest">
                        <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-transparent"></div>
                    </div>
                    <div class="relative h-full flex items-center justify-center">
                        <div class="max-w-7xl mx-auto px-6 lg:px-10 w-full">
                            <div class="max-w-xl text-center md:text-left">
                                <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-2 md:mb-3" style="font-family: 'Inter', sans-serif;">
                                    Abundant Harvests<br>
                                    <span style="color: var(--accent-orange);">Season After Season</span>
                                </h1>
                                <p class="text-xs sm:text-sm md:text-base text-gray-200 mb-3 md:mb-4 slide-content" style="font-family: 'Inter', sans-serif;">
                                    Strong, reliable maize varieties that deliver consistent and high yields.
                                </p>
                                <a href="#products" class="inline-block px-4 py-1.5 md:px-5 md:py-2.5 rounded-md font-semibold text-white transition hover:opacity-90 slide-content text-sm md:text-base" style="background: var(--kwacha-green); font-family: 'Inter', sans-serif;">
                                    Explore Seeds <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 - Farmer Support -->
                <div class="carousel-slide absolute inset-0 opacity-0" data-active="false">
                    <div class="absolute inset-0">
                        <img src="{{ asset('images/Farmer_guide.jpg') }}" class="w-full h-full object-cover" alt="Farmer support">
                        <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-transparent"></div>
                    </div>
                    <div class="relative h-full flex items-center justify-center">
                        <div class="max-w-7xl mx-auto px-6 lg:px-10 w-full">
                            <div class="max-w-xl text-center md:text-left">
                                <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-2 md:mb-3" style="font-family: 'Inter', sans-serif;">
                                    Growing Together<br>
                                    <span style="color: var(--accent-orange);">With Malawi's Farmers</span>
                                </h1>
                                <p class="text-xs sm:text-sm md:text-base text-gray-200 mb-3 md:mb-4 slide-content" style="font-family: 'Inter', sans-serif;">
                                    We work hand in hand with farmers to improve yields, incomes, and livelihoods.
                                </p>
                                <a href="#contact" class="inline-block px-4 py-1.5 md:px-5 md:py-2.5 rounded-md font-semibold text-white transition hover:opacity-90 slide-content text-sm md:text-base" style="background: var(--kwacha-green); font-family: 'Inter', sans-serif;">
                                    Get in Touch <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="absolute bottom-3 left-1/2 transform -translate-x-1/2 flex gap-2 z-10">
                <span class="dot-nav w-2 h-2 rounded-full bg-white cursor-pointer transition-all"></span>
                <span class="dot-nav w-2 h-2 rounded-full bg-white/50 cursor-pointer transition-all"></span>
                <span class="dot-nav w-2 h-2 rounded-full bg-white/50 cursor-pointer transition-all"></span>
            </div>

            <!-- Previous Button -->
            <button id="prevSlide" class="carousel-btn absolute left-4 top-1/2 -translate-y-1/2 w-8 h-8 md:w-10 md:h-10 rounded-full bg-black/30 text-white hover:bg-black/50 transition flex items-center justify-center">
                <i class="fas fa-chevron-left text-xs md:text-sm"></i>
            </button>

            <!-- Next Button -->
            <button id="nextSlide" class="carousel-btn absolute right-4 top-1/2 -translate-y-1/2 w-8 h-8 md:w-10 md:h-10 rounded-full bg-black/30 text-white hover:bg-black/50 transition flex items-center justify-center">
                <i class="fas fa-chevron-right text-xs md:text-sm"></i>
            </button>
        </div>
    </section>

    <!-- ========== MAIN CONTENT ========== -->

 <!-- ========== ABOUT SECTION ========== -->
<section id="about" class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">
        
        <!-- Section Header -->
        <div class="text-center mb-12 md:mb-16">
            <span class="text-sm md:text-base font-semibold tracking-wide uppercase" style="color: var(--accent-orange); letter-spacing: 2px;">Who We Are</span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mt-2 mb-4" style="font-family: 'Inter', sans-serif; color: var(--kwacha-green);">
                About <span style="color: var(--accent-orange);">Kwacha Seeds</span>
            </h2>
            <div class="w-20 h-1 mx-auto rounded-full" style="background: var(--accent-orange);"></div>
        </div>
        
        <!-- Company Description - No card, just clean text -->
        <div class="mb-16 max-w-5xl mx-auto">
            <p class="text-gray-700 text-base md:text-lg leading-relaxed text-center" style="font-family: 'Inter', sans-serif; line-height: 1.8;">
                <span class="font-bold text-xl" style="color: var(--kwacha-green);">Kwacha Seeds Limited</span> is a visionary seed company dedicated to transforming agriculture through high-quality hybrid seeds like <span class="font-semibold" style="color: var(--accent-orange);">maize MH 36</span>, vitamin A-rich orange maize <span class="font-semibold" style="color: var(--accent-orange);">MH42A</span>, wheat (<span class="font-semibold" style="color: var(--accent-orange);">KARS 52</span>), Soybean <span class="font-semibold" style="color: var(--accent-orange);">Chitedze-4</span>, and Groundnuts <span class="font-semibold" style="color: var(--accent-orange);">CG9</span>, prioritizing farmer-centric innovation and sustainability to boost productivity and livelihoods. Committed to excellence over scale, we empower farmers with resilient, nutrient-enhanced crops while fostering integrity, collaboration, and environmental stewardship for a food-secure future.
            </p>
        </div>
        
        <!-- Vision & Mission Row -->
        <div class="grid md:grid-cols-2 gap-8 mb-16">
            <!-- Vision Card -->
            <div class="rounded-2xl p-6 md:p-8 transition-all duration-300 hover:transform hover:-translate-y-2" style="background: linear-gradient(135deg, var(--kwacha-green) 0%, #0e4e0e 100%);">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: rgba(255, 102, 0, 0.2);">
                        <i class="fas fa-eye text-2xl" style="color: var(--accent-orange);"></i>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-bold text-white" style="font-family: 'Inter', sans-serif;">Our Vision</h3>
                </div>
                <p class="text-white/90 text-base md:text-lg leading-relaxed" style="font-family: 'Inter', sans-serif; line-height: 1.6;">
                    To inspire excellence by being the best in the production and supply of hybrid seeds that consistently meet the evolving needs of farmers.
                </p>
            </div>
            
            <!-- Mission Card -->
            <div class="rounded-2xl p-6 md:p-8 transition-all duration-300 hover:transform hover:-translate-y-2" style="background: linear-gradient(135deg, var(--kwacha-green) 0%, #0e4e0e 100%);">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: rgba(255, 102, 0, 0.2);">
                        <i class="fas fa-bullseye text-2xl" style="color: var(--accent-orange);"></i>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-bold text-white" style="font-family: 'Inter', sans-serif;">Our Mission</h3>
                </div>
                <p class="text-white/90 text-base md:text-lg leading-relaxed" style="font-family: 'Inter', sans-serif; line-height: 1.6;">
                    To provide high-yielding, quality seeds that boost agricultural productivity, elevate livelihoods, and foster a thriving agricultural sector, powered by a purpose-driven workforce.
                </p>
            </div>
        </div>
        
        <!-- Core Values Section -->
        <div>
            <div class="text-center mb-10">
                <h3 class="text-2xl md:text-3xl font-bold mb-3" style="font-family: 'Inter', sans-serif; color: var(--kwacha-green);">
                    Our <span style="color: var(--accent-orange);">Core Values</span>
                </h3>
                <div class="w-16 h-1 mx-auto rounded-full" style="background: var(--accent-orange);"></div>
                <p class="text-gray-500 mt-3 text-sm md:text-base">The principles that guide everything we do</p>
            </div>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Value 1 - Quality & Excellence -->
                <div class="bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-xl border border-gray-100 group">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 transition-all duration-300 group-hover:scale-110" style="background: rgba(255, 102, 0, 0.1);">
                        <i class="fas fa-star text-2xl" style="color: var(--accent-orange);"></i>
                    </div>
                    <h4 class="text-lg font-bold mb-3" style="color: var(--kwacha-green); font-family: 'Inter', sans-serif;">QUALITY & EXCELLENCE</h4>
                    <p class="text-gray-600 text-sm leading-relaxed" style="font-family: 'Inter', sans-serif;">
                        We prioritize rigorous research, testing, and certification to ensure our seeds meet the highest standards of germination, disease resistance, and yield performance.
                    </p>
                </div>
                
                <!-- Value 2 - Empowerment & Collaboration -->
                <div class="bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-xl border border-gray-100 group">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 transition-all duration-300 group-hover:scale-110" style="background: rgba(255, 102, 0, 0.1);">
                        <i class="fas fa-handshake text-2xl" style="color: var(--accent-orange);"></i>
                    </div>
                    <h4 class="text-lg font-bold mb-3" style="color: var(--kwacha-green); font-family: 'Inter', sans-serif;">EMPOWERMENT & COLLABORATION</h4>
                    <p class="text-gray-600 text-sm leading-relaxed" style="font-family: 'Inter', sans-serif;">
                        We invest in our workforce, partners, and farming communities through training, knowledge-sharing, and inclusive partnerships that drive collective success.
                    </p>
                </div>
                
                <!-- Value 3 - Sustainability -->
                <div class="bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-xl border border-gray-100 group">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 transition-all duration-300 group-hover:scale-110" style="background: rgba(255, 102, 0, 0.1);">
                        <i class="fas fa-leaf text-2xl" style="color: var(--accent-orange);"></i>
                    </div>
                    <h4 class="text-lg font-bold mb-3" style="color: var(--kwacha-green); font-family: 'Inter', sans-serif;">SUSTAINABILITY</h4>
                    <p class="text-gray-600 text-sm leading-relaxed" style="font-family: 'Inter', sans-serif;">
                        We promote environmentally responsible practices and seed varieties that conserve resources, enhance soil health, and support long-term food security.
                    </p>
                </div>
                
                <!-- Value 4 - Integrity & Transparency -->
                <div class="bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-xl border border-gray-100 group">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 transition-all duration-300 group-hover:scale-110" style="background: rgba(255, 102, 0, 0.1);">
                        <i class="fas fa-shield-alt text-2xl" style="color: var(--accent-orange);"></i>
                    </div>
                    <h4 class="text-lg font-bold mb-3" style="color: var(--kwacha-green); font-family: 'Inter', sans-serif;">INTEGRITY & TRANSPARENCY</h4>
                    <p class="text-gray-600 text-sm leading-relaxed" style="font-family: 'Inter', sans-serif;">
                        We operate with honesty, fairness, and accountability in every interaction, building trust with farmers, suppliers, and stakeholders.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- CTA Banner -->
        <div class="mt-16 rounded-2xl overflow-hidden">
            <div class="py-8 px-6 text-center" style="background: linear-gradient(135deg, #fff5eb 0%, #ffe8d9 100%);">
                <p class="text-gray-700 text-base md:text-lg mb-4" style="font-family: 'Inter', sans-serif;">
                    🌱 <span class="font-semibold" style="color: var(--kwacha-green);">Join us</span> in transforming agriculture across Malawi — one seed at a time.
                </p>
                <a href="#contact" class="inline-block px-6 py-3 rounded-lg font-semibold transition-all duration-300 hover:transform hover:-translate-y-1" style="background: var(--accent-orange); color: white; font-family: 'Inter', sans-serif;">
                    Partner With Us <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
        
    </div>
</section>
<!-- ========== PRODUCTS SECTION ========== -->

<section id="products" class="py-16 md:py-24" style="background: linear-gradient(135deg, var(--kwacha-green) 0%, #0e4e0e 100%);">
    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">
        
        <!-- Section Header -->
        <div class="text-center mb-12 md:mb-16">
            <span class="text-sm md:text-base font-semibold tracking-wide uppercase" style="color: var(--accent-orange); letter-spacing: 2px;">Our Premium Range</span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mt-2 mb-4" style="font-family: 'Inter', sans-serif; color: white;">
                Our <span style="color: var(--accent-orange);">Products</span>
            </h2>
            <div class="w-20 h-1 mx-auto rounded-full" style="background: var(--accent-orange);"></div>
            <p class="text-white/80 mt-4 max-w-2xl mx-auto">High-quality, high-yielding seed varieties trusted by farmers across Malawi</p>
        </div>
        
        <!-- Products Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Product 1 - Soybean (Chitedze 4) -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="relative h-56 overflow-hidden">
                    <img src="{{ asset('images/products/soybean.jpg') }}" class="w-full h-full object-cover" alt="Soybean Chitedze 4">
                    <div class="absolute top-4 right-4 px-3 py-1 bg-white/90 backdrop-blur-sm rounded-full text-xs font-bold" style="color: var(--kwacha-green);">
                        New Variety
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-xl font-bold" style="color: var(--kwacha-green);">SOYBEAN SEED</h3>
                        <span class="text-sm font-semibold px-2 py-1 rounded" style="background: rgba(255, 102, 0, 0.1); color: var(--accent-orange);">CHITEDZE 4</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                        Chitedze-4 is the newest soybean variety in Malawi since Tikolore was released in 2011.
                    </p>
                    <div class="space-y-2 mb-4">
                        <div class="flex items-start gap-2 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                            <span>Adaptable to climate change</span>
                        </div>
                        <div class="flex items-start gap-2 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                            <span>Resistant to pests and diseases</span>
                        </div>
                        <div class="flex items-start gap-2 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                            <span>Rust tolerant</span>
                        </div>
                        <div class="flex items-start gap-2 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                            <span>Medium maturity (120-130 days)</span>
                        </div>
                    </div>
                    <div class="border-t pt-3 mt-2">
                        <p class="text-sm font-semibold" style="color: var(--kwacha-green);">Yield: <span class="text-gray-700">Up to 4,000 kg/hectare</span></p>
                    </div>
                    <button class="enquire-btn w-full mt-4 px-4 py-2 rounded-lg font-semibold transition-all duration-300 hover:transform hover:scale-105" style="background: var(--kwacha-green); color: white;" data-product="Soybean (Chitedze 4)">
                        <i class="fas fa-shopping-cart mr-2"></i> Enquire Now
                    </button>
                </div>
            </div>
            
            <!-- Product 2 - Wheat (KARS Wheat 52) -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="relative h-56 overflow-hidden">
                    <img src="{{ asset('images/products/wheat-seed.jpg') }}" alt="Wheat KARS 52" class="w-full h-full object-cover object-center">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-xl font-bold" style="color: var(--kwacha-green);">WHEAT SEED</h3>
                        <span class="text-sm font-semibold px-2 py-1 rounded" style="background: rgba(255, 102, 0, 0.1); color: var(--accent-orange);">KARS Wheat 52</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <div class="flex items-start gap-2 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                            <span>77cm tall plant height</span>
                        </div>
                        <div class="flex items-start gap-2 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                            <span>Early maturity (92 days)</span>
                        </div>
                        <div class="flex items-start gap-2 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                            <span>Brown grains with stem borer tolerance (score 2.0)</span>
                        </div>
                        <div class="flex items-start gap-2 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                            <span>Wheat rust disease tolerant (score 1.8)</span>
                        </div>
                        <div class="flex items-start gap-2 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                            <span>Suitable for irrigation in mid & low altitude areas</span>
                        </div>
                    </div>
                    <div class="border-t pt-3 mt-2">
                        <p class="text-sm font-semibold" style="color: var(--kwacha-green);">Yield: <span class="text-gray-700">Up to 9 tons/hectare</span></p>
                    </div>
                    <button class="enquire-btn w-full mt-4 px-4 py-2 rounded-lg font-semibold transition-all duration-300 hover:transform hover:scale-105" style="background: var(--kwacha-green); color: white;" data-product="Wheat (KARS 52)">
                        <i class="fas fa-shopping-cart mr-2"></i> Enquire Now
                    </button>
                </div>
            </div>
            
            <!-- Product 3 - White Maize (MH36) -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="relative h-56 overflow-hidden">
                    <img src="{{ asset('images/products/maize-seed.jpg') }}" alt="White Maize MH36" class="w-full h-full object-cover object-center">
                    <div class="absolute top-4 right-4 px-3 py-1 bg-white/90 backdrop-blur-sm rounded-full text-xs font-bold" style="color: var(--kwacha-green);">
                        Best Seller
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-xl font-bold" style="color: var(--kwacha-green);">WHITE MAIZE SEED</h3>
                        <span class="text-sm font-semibold px-2 py-1 rounded" style="background: rgba(255, 102, 0, 0.1); color: var(--accent-orange);">MH36</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-3">Poundable flint hybrid with excellent grain texture (score 2.8)</p>
                    <div class="space-y-2 mb-4">
                        <div class="flex items-start gap-2 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                            <span>Plant height: 193cm | Ear height: 94cm</span>
                        </div>
                        <div class="flex items-start gap-2 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                            <span>Grey leaf spot tolerant (1.2)</span>
                        </div>
                        <div class="flex items-start gap-2 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                            <span>Rust tolerant (1.2) | Leaf blight tolerant (2.1)</span>
                        </div>
                        <div class="flex items-start gap-2 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                            <span>Medium maturity (140 days)</span>
                        </div>
                    </div>
                    <div class="border-t pt-3 mt-2">
                        <p class="text-sm font-semibold" style="color: var(--kwacha-green);">Yield: <span class="text-gray-700">8-10 tons/hectare</span></p>
                    </div>
                    <button class="enquire-btn w-full mt-4 px-4 py-2 rounded-lg font-semibold transition-all duration-300 hover:transform hover:scale-105" style="background: var(--kwacha-green); color: white;" data-product="White Maize (MH36)">
                        <i class="fas fa-shopping-cart mr-2"></i> Enquire Now
                    </button>
                </div>
            </div>
            
            <!-- Product 4 - Orange Maize (MH42A) -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="relative h-56 overflow-hidden">
                    <img src="{{ asset('images/products/maize-orange1.jpg') }}" alt="Orange Maize MH42A" class="w-full h-full object-cover object-center">
                    <div class="absolute top-4 right-4 px-3 py-1 bg-orange-500 text-white rounded-full text-xs font-bold shadow-md">
                        Rich in Vitamin A
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-xl font-bold" style="color: var(--kwacha-green);">ORANGE MAIZE SEED</h3>
                        <span class="text-sm font-semibold px-2 py-1 rounded" style="background: rgba(255, 102, 0, 0.1); color: var(--accent-orange);">MH42A</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <div class="flex items-start gap-2 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                            <span>High yielding (up to 11,000 kg/Ha)</span>
                        </div>
                        <div class="flex items-start gap-2 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                            <span>Medium maturity (140 days)</span>
                        </div>
                        <div class="flex items-start gap-2 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                            <span>Drought tolerant</span>
                        </div>
                        <div class="flex items-start gap-2 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                            <span>Disease resistant</span>
                        </div>
                        <div class="flex items-start gap-2 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                            <span>Long shelf life</span>
                        </div>
                        <div class="flex items-start gap-2 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                            <span>Nutrient dense (rich in Vitamin A)</span>
                        </div>
                    </div>
                    <button class="enquire-btn w-full mt-4 px-4 py-2 rounded-lg font-semibold transition-all duration-300 hover:transform hover:scale-105" style="background: var(--kwacha-green); color: white;" data-product="Orange Maize (MH42A)">
                        <i class="fas fa-shopping-cart mr-2"></i> Enquire Now
                    </button>
                </div>
            </div>
            
            <!-- Product 5 - Groundnut (CG9) -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="relative h-56 overflow-hidden">
                    <img src="{{ asset('images/products/red-nuts.jpg') }}" alt="Groundnut CG9" class="w-full h-full object-cover object-center">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-xl font-bold" style="color: var(--kwacha-green);">GROUNDNUT SEED</h3>
                        <span class="text-sm font-semibold px-2 py-1 rounded" style="background: rgba(255, 102, 0, 0.1); color: var(--accent-orange);">CG9</span>
                    </div>
                    <div class="space-y-2 mb-4">
                        <div class="flex items-start gap-2 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                            <span>High yielding (2,000-2,500 kg/Ha)</span>
                        </div>
                        <div class="flex items-start gap-2 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                            <span>Medium maturity (145-160 days)</span>
                        </div>
                        <div class="flex items-start gap-2 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                            <span>Resistant to Rosette disease</span>
                        </div>
                        <div class="flex items-start gap-2 text-sm text-gray-600">
                            <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                            <span>Drought tolerant</span>
                        </div>
                    </div>
                    <button class="enquire-btn w-full mt-4 px-4 py-2 rounded-lg font-semibold transition-all duration-300 hover:transform hover:scale-105" style="background: var(--kwacha-green); color: white;" data-product="Groundnut (CG9)">
                        <i class="fas fa-shopping-cart mr-2"></i> Enquire Now
                    </button>
                </div>
            </div>
            
        </div>
        
    </div>
</section>

<!--Framers Hub -->
<!-- ========== FARMER'S HUB SECTION ========== -->
<section id="farmers-hub" class="py-16 md:py-24" style="background: #f8f9fa;">
    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">
        
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold" style="font-family: 'Inter', sans-serif; color: var(--kwacha-green);">
                Farmer's <span style="color: var(--accent-orange);">Hub</span>
            </h2>
            <div class="w-16 h-0.5 mx-auto mt-3 rounded-full" style="background: var(--accent-orange);"></div>
            <p class="text-gray-500 mt-3 text-sm">Your go-to resource for successful farming</p>
        </div>
        
        <!-- 3 Column Grid -->
        <div class="grid md:grid-cols-3 gap-8">
            
            <!-- Card 1: Educational Resource Center -->
            <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-300 group">
                <div class="w-12 h-12 rounded-full flex items-center justify-center mb-4" style="background: rgba(255, 102, 0, 0.1);">
                    <i class="fas fa-graduation-cap text-xl" style="color: var(--accent-orange);"></i>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: var(--kwacha-green);">Educational Resource Center</h3>
                <p class="text-gray-500 text-sm mb-4">Learn best farming practices, planting techniques, and crop management tips.</p>
                
                <div class="space-y-3">
                    <div class="flex items-start gap-2">
                        <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                        <span class="text-sm text-gray-600">Step-by-step planting guides</span>
                    </div>
                    <div class="flex items-start gap-2">
                        <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                        <span class="text-sm text-gray-600">Pest and disease identification</span>
                    </div>
                    <div class="flex items-start gap-2">
                        <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                        <span class="text-sm text-gray-600">Fertilizer application tips</span>
                    </div>
                    <div class="flex items-start gap-2">
                        <i class="fas fa-check-circle text-xs mt-0.5" style="color: var(--accent-orange);"></i>
                        <span class="text-sm text-gray-600">Harvesting and storage techniques</span>
                    </div>
                </div>
                
                <button class="w-full mt-5 text-sm font-medium py-2 rounded-lg transition" style="color: var(--accent-orange); border: 1px solid var(--accent-orange); background: transparent;">
                    Explore Resources
                </button>
            </div>
            
            <!-- Card 2: Frequently Asked Questions -->
            <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-300">
                <div class="w-12 h-12 rounded-full flex items-center justify-center mb-4" style="background: rgba(255, 102, 0, 0.1);">
                    <i class="fas fa-question-circle text-xl" style="color: var(--accent-orange);"></i>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: var(--kwacha-green);">Frequently Asked Questions</h3>
                <p class="text-gray-500 text-sm mb-4">Quick answers about seeds, farming, and our company.</p>
                
                <div class="space-y-3">
                    <details class="group">
                        <summary class="cursor-pointer list-none flex justify-between items-center text-gray-700 font-medium text-sm">
                            What makes your seeds different?
                            <i class="fas fa-chevron-down group-open:rotate-180 transition-transform text-xs"></i>
                        </summary>
                        <p class="text-gray-500 text-xs mt-2 pl-2">Our seeds are MBS certified, disease-resistant, and tested for high germination rates.</p>
                    </details>
                    <details class="group">
                        <summary class="cursor-pointer list-none flex justify-between items-center text-gray-700 font-medium text-sm">
                            How do I become a dealer?
                            <i class="fas fa-chevron-down group-open:rotate-180 transition-transform text-xs"></i>
                        </summary>
                        <p class="text-gray-500 text-xs mt-2 pl-2">Contact our sales team to discuss partnership opportunities and requirements.</p>
                    </details>
                    <details class="group">
                        <summary class="cursor-pointer list-none flex justify-between items-center text-gray-700 font-medium text-sm">
                            Do you offer bulk discounts?
                            <i class="fas fa-chevron-down group-open:rotate-180 transition-transform text-xs"></i>
                        </summary>
                        <p class="text-gray-500 text-xs mt-2 pl-2">Yes, contact us for volume-based pricing on large orders.</p>
                    </details>
                    <details class="group">
                        <summary class="cursor-pointer list-none flex justify-between items-center text-gray-700 font-medium text-sm">
                            How should I store seeds?
                            <i class="fas fa-chevron-down group-open:rotate-180 transition-transform text-xs"></i>
                        </summary>
                        <p class="text-gray-500 text-xs mt-2 pl-2">Keep in cool, dry place away from direct sunlight and moisture.</p>
                    </details>
                </div>
                
                <button class="w-full mt-5 text-sm font-medium py-2 rounded-lg transition" style="color: var(--accent-orange); border: 1px solid var(--accent-orange); background: transparent;">
                    View All FAQs
                </button>
            </div>
            
            <!-- Card 3: Downloadable Resources -->
            <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-300">
                <div class="w-12 h-12 rounded-full flex items-center justify-center mb-4" style="background: rgba(255, 102, 0, 0.1);">
                    <i class="fas fa-download text-xl" style="color: var(--accent-orange);"></i>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: var(--kwacha-green);">Downloadable Resources</h3>
                <p class="text-gray-500 text-sm mb-4">Free PDF guides, calendars, and tools for farmers.</p>
                
                <div class="space-y-3">
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-50 transition cursor-pointer" id="downloadCalendar">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-calendar-alt" style="color: var(--accent-orange);"></i>
                            <span class="text-sm text-gray-700">Planting Calendar 2025</span>
                        </div>
                        <i class="fas fa-download text-xs text-gray-400"></i>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-50 transition cursor-pointer" id="downloadPestGuide">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-bug" style="color: var(--accent-orange);"></i>
                            <span class="text-sm text-gray-700">Pest Control Guide</span>
                        </div>
                        <i class="fas fa-download text-xs text-gray-400"></i>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-50 transition cursor-pointer" id="downloadFertilizerGuide">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-leaf" style="color: var(--accent-orange);"></i>
                            <span class="text-sm text-gray-700">Fertilizer Application Chart</span>
                        </div>
                        <i class="fas fa-download text-xs text-gray-400"></i>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-50 transition cursor-pointer" id="downloadSeedGuide">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-seedling" style="color: var(--accent-orange);"></i>
                            <span class="text-sm text-gray-700">Seed Selection Guide</span>
                        </div>
                        <i class="fas fa-download text-xs text-gray-400"></i>
                    </div>
                </div>
                
                <button class="w-full mt-5 text-sm font-medium py-2 rounded-lg transition" style="color: var(--accent-orange); border: 1px solid var(--accent-orange); background: transparent;">
                    More Resources
                </button>
            </div>
        </div>
        
        <!-- Hotline Banner -->
        <div class="mt-10 text-center p-4 rounded-xl" style="background: #e8f5e9;">
            <p class="text-sm text-gray-700">
                <i class="fas fa-headset mr-2" style="color: var(--accent-orange);"></i>
                Still have questions? Call our agronomy expert: 
                <strong style="color: var(--kwacha-green);">+265 888 123 456</strong>
                <span class="text-gray-500 text-xs ml-2">Mon-Sat, 8am-5pm</span>
            </p>
        </div>
        
    </div>
</section>

<script>
    // Download handlers
    const downloadCalendar = document.getElementById('downloadCalendar');
    const downloadPestGuide = document.getElementById('downloadPestGuide');
    const downloadFertilizerGuide = document.getElementById('downloadFertilizerGuide');
    const downloadSeedGuide = document.getElementById('downloadSeedGuide');
    
    function handleDownload(resourceName) {
        alert(`📄 "${resourceName}" will be available for download soon.\n\nFor immediate assistance, please contact our support team.`);
    }
    
    if (downloadCalendar) {
        downloadCalendar.addEventListener('click', () => handleDownload('Planting Calendar 2025'));
    }
    if (downloadPestGuide) {
        downloadPestGuide.addEventListener('click', () => handleDownload('Pest Control Guide'));
    }
    if (downloadFertilizerGuide) {
        downloadFertilizerGuide.addEventListener('click', () => handleDownload('Fertilizer Application Chart'));
    }
    if (downloadSeedGuide) {
        downloadSeedGuide.addEventListener('click', () => handleDownload('Seed Selection Guide'));
    }
    
    // Button handlers
    const exploreBtn = document.querySelector('.group .w-full');
    const faqBtn = document.querySelectorAll('.bg-white .w-full')[2];
    const moreResourcesBtn = document.querySelectorAll('.bg-white .w-full')[3];
    
    if (exploreBtn) {
        exploreBtn.addEventListener('click', () => {
            alert('📚 Educational resources coming soon! Check back for guides, videos, and tutorials.');
        });
    }
    
    if (faqBtn) {
        faqBtn.addEventListener('click', () => {
            alert('❓ Visit our FAQ section for more answers or contact our support team directly.');
        });
    }
    
    if (moreResourcesBtn) {
        moreResourcesBtn.addEventListener('click', () => {
            alert('📁 More downloadable resources will be added regularly. Stay tuned!');
        });
    }
</script>



<!-- ========== DEALERS SECTION ========== -->

<section id="dealers" class="py-16 md:py-24" style="background: linear-gradient(135deg, #fff5eb 0%, #ffe8d9 100%);">
    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">
        
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold" style="font-family: 'Inter', sans-serif; color: var(--kwacha-green);">
                Find a <span style="color: var(--accent-orange);">Dealer</span>
            </h2>
            <div class="w-16 h-0.5 mx-auto mt-3 rounded-full" style="background: var(--accent-orange);"></div>
            <p class="text-gray-600 mt-3 text-sm">Locate authorized Kwacha Seeds dealers near you</p>
        </div>
        
        <!-- Search and Filter Section -->
        <div class="max-w-4xl mx-auto mb-10">
            <div class="grid md:grid-cols-2 gap-4">
                <!-- District Filter -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Select District</label>
                    <select id="districtFilter" class="w-full p-3 border border-orange-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent bg-white">
                        <option value="">All Districts</option>
                        <option value="Lilongwe">Lilongwe</option>
                        <option value="Blantyre">Blantyre</option>
                        <option value="Mzuzu">Mzuzu</option>
                        <option value="Zomba">Zomba</option>
                        <option value="Kasungu">Kasungu</option>
                        <option value="Mangochi">Mangochi</option>
                        <option value="Salima">Salima</option>
                        <option value="Dedza">Dedza</option>
                        <option value="Ntcheu">Ntcheu</option>
                        <option value="Mchinji">Mchinji</option>
                        <option value="Nkhotakota">Nkhotakota</option>
                        <option value="Karonga">Karonga</option>
                        <option value="Chitipa">Chitipa</option>
                    </select>
                </div>
                
                <!-- Trading Center Filter -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Trading Center</label>
                    <select id="tradingCenterFilter" class="w-full p-3 border border-orange-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent bg-white">
                        <option value="">All Trading Centers</option>
                    </select>
                </div>
            </div>
            
            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-3 justify-between items-center mt-5">
                <div class="flex gap-3">
                    <button id="searchDealersBtn" class="px-6 py-2 rounded-lg font-medium transition flex items-center gap-2" style="background: var(--accent-orange); color: white;">
                        <i class="fas fa-search"></i> Search
                    </button>
                    <button id="resetFiltersBtn" class="px-6 py-2 rounded-lg font-medium transition flex items-center gap-2 bg-white text-gray-700 hover:bg-orange-50 border border-orange-200">
                        <i class="fas fa-undo-alt"></i> Reset
                    </button>
                </div>
                <div id="resultsCount" class="text-sm text-gray-500">
                    <i class="fas fa-store mr-1" style="color: var(--accent-orange);"></i> <span id="dealerCount">0</span> dealers found
                </div>
            </div>
        </div>
        
        <!-- Dealers Grid -->
        <div id="dealersGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Dealers will be dynamically loaded here -->
        </div>
        
        <!-- Pagination -->
        <div id="paginationControls" class="flex justify-center items-center gap-3 mt-10">
            <button id="prevPageBtn" class="px-4 py-2 border border-orange-200 rounded-lg bg-white text-gray-700 hover:bg-orange-50 transition disabled:opacity-50 disabled:cursor-not-allowed">
                <i class="fas fa-chevron-left"></i> Previous
            </button>
            <div id="pageNumbers" class="flex gap-2"></div>
            <button id="nextPageBtn" class="px-4 py-2 border border-orange-200 rounded-lg bg-white text-gray-700 hover:bg-orange-50 transition disabled:opacity-50 disabled:cursor-not-allowed">
                Next <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        
        <!-- No Results Message -->
        <div id="noResultsMessage" class="text-center py-12 hidden">
            <i class="fas fa-map-marker-alt text-5xl text-orange-300 mb-4"></i>
            <h3 class="text-xl font-semibold text-gray-600 mb-2">No Dealers Found</h3>
            <p class="text-gray-500">Try selecting a different district or contact us directly.</p>
            <a href="#contact" class="inline-block mt-4 px-6 py-2 rounded-lg transition" style="background: var(--accent-orange); color: white;">
                Contact Us for Help
            </a>
        </div>
        
        <!-- Become a Dealer CTA -->
        <div class="mt-12 text-center p-8 rounded-2xl" style="background: linear-gradient(135deg, var(--accent-orange) 0%, #e05a00 100%);">
            <i class="fas fa-handshake text-3xl mb-3 text-white/80"></i>
            <h3 class="text-2xl font-bold mb-2 text-white">Want to Become a Kwacha Seeds Dealer?</h3>
            <p class="text-white/80 mb-4">Join our network of authorized stockists across Malawi.</p>
            <a href="#contact" class="inline-block bg-white px-8 py-3 rounded-lg font-semibold transition hover:transform hover:-translate-y-1" style="color: var(--accent-orange);">
                Apply to Become a Stockist →
            </a>
        </div>
    </div>
</section>

<script>
    // Dealers Data
    const dealersData = [
        // Lilongwe
        { id: 1, name: "AgroPlus Dealers", district: "Lilongwe", tradingCenter: "City Centre", address: "Opposite Area 18 Market", phone: "+265 999 123 456", hours: "Mon-Sat 8am-5pm", rating: 4.8 },
        { id: 2, name: "Green Harvest Supplies", district: "Lilongwe", tradingCenter: "Area 25", address: "Near Shoprite, Area 25", phone: "+265 888 234 567", hours: "Mon-Fri 7:30am-6pm", rating: 4.5 },
        { id: 3, name: "Kwacha Seeds Depot", district: "Lilongwe", tradingCenter: "Kanengo", address: "Industrial Area, Plot 12", phone: "+265 991 345 678", hours: "Mon-Sat 8am-4:30pm", rating: 4.9 },
        { id: 4, name: "Farmers Choice Agro", district: "Lilongwe", tradingCenter: "Lumbadzi", address: "Main Road", phone: "+265 881 456 789", hours: "Mon-Sat 7am-6pm", rating: 4.3 },
        { id: 5, name: "Lilongwe Agro Center", district: "Lilongwe", tradingCenter: "Kawale", address: "Kawale Market, Shop 8", phone: "+265 999 567 890", hours: "Mon-Sat 8am-5pm", rating: 4.4 },
        // Blantyre
        { id: 6, name: "Farmers Choice Ltd", district: "Blantyre", tradingCenter: "Limbe", address: "Ginnery Corner", phone: "+265 888 765 432", hours: "Mon-Fri 8am-5pm", rating: 4.7 },
        { id: 7, name: "Blantyre Agro Center", district: "Blantyre", tradingCenter: "Chichiri", address: "Chichiri Shopping Mall", phone: "+265 999 876 543", hours: "Mon-Sat 8am-6pm", rating: 4.4 },
        { id: 8, name: "Southern Seeds Supplies", district: "Blantyre", tradingCenter: "Manase", address: "Manase Township", phone: "+265 881 987 654", hours: "Mon-Sat 7:30am-5pm", rating: 4.6 },
        // Mzuzu
        { id: 9, name: "Northern Agro Hub", district: "Mzuzu", tradingCenter: "City Centre", address: "Opposite Mzuzu Stadium", phone: "+265 881 234 567", hours: "Mon-Fri 8am-5pm", rating: 4.8 },
        { id: 10, name: "Mzuzu Seed Store", district: "Mzuzu", tradingCenter: "Chibavi", address: "Chibavi Township", phone: "+265 999 345 678", hours: "Mon-Sat 8am-5pm", rating: 4.3 },
        // Zomba
        { id: 11, name: "Zomba Agro Center", district: "Zomba", tradingCenter: "City Centre", address: "Opposite Zomba Market", phone: "+265 991 567 890", hours: "Mon-Sat 8am-5pm", rating: 4.4 },
        // Kasungu
        { id: 12, name: "Kasungu Farmers Hub", district: "Kasungu", tradingCenter: "Town Centre", address: "Main Road", phone: "+265 999 789 012", hours: "Mon-Sat 7am-5pm", rating: 4.6 },
        // Mangochi
        { id: 13, name: "Mangochi Agro Dealers", district: "Mangochi", tradingCenter: "Town Centre", address: "Near Mangochi Boma", phone: "+265 991 901 234", hours: "Mon-Sat 8am-5pm", rating: 4.3 },
        // Salima
        { id: 14, name: "Salima Agro Supplies", district: "Salima", tradingCenter: "Town Centre", address: "Opposite Salima Market", phone: "+265 999 123 890", hours: "Mon-Sat 7:30am-5pm", rating: 4.4 },
        // Dedza
        { id: 15, name: "Dedza Farmers Choice", district: "Dedza", tradingCenter: "Town Centre", address: "Main Road", phone: "+265 888 234 901", hours: "Mon-Sat 8am-5pm", rating: 4.5 },
        // Ntcheu
        { id: 16, name: "Ntcheu Agro Center", district: "Ntcheu", tradingCenter: "Town Centre", address: "Along M1 Road", phone: "+265 991 345 012", hours: "Mon-Sat 8am-5pm", rating: 4.3 },
        // Mchinji
        { id: 17, name: "Mchinji Seed Store", district: "Mchinji", tradingCenter: "Border Post", address: "Near Mchinji Border", phone: "+265 881 456 123", hours: "Mon-Sat 7am-6pm", rating: 4.1 },
        // Karonga
        { id: 18, name: "Karonga Farmers Hub", district: "Karonga", tradingCenter: "Town Centre", address: "Main Market Area", phone: "+265 888 678 345", hours: "Mon-Sat 7:30am-5pm", rating: 4.3 }
    ];

    let currentPage = 1;
    let currentDealers = [...dealersData];
    const itemsPerPage = 6;

    // Get unique trading centers
    function getTradingCenters(district) {
        if (!district) {
            return [...new Set(dealersData.map(d => d.tradingCenter))].sort();
        }
        return [...new Set(dealersData.filter(d => d.district === district).map(d => d.tradingCenter))].sort();
    }

    // Populate trading center dropdown
    function populateTradingCenters(district) {
        const tradingSelect = document.getElementById('tradingCenterFilter');
        if (!tradingSelect) return;
        
        const centers = getTradingCenters(district);
        tradingSelect.innerHTML = '<option value="">All Trading Centers</option>';
        centers.forEach(center => {
            const option = document.createElement('option');
            option.value = center;
            option.textContent = center;
            tradingSelect.appendChild(option);
        });
    }

    // Display dealers
    function displayDealers(dealers) {
        const grid = document.getElementById('dealersGrid');
        const noResults = document.getElementById('noResultsMessage');
        const countSpan = document.getElementById('dealerCount');
        const pagination = document.getElementById('paginationControls');
        
        if (!grid) return;
        
        countSpan.textContent = dealers.length;
        
        if (dealers.length === 0) {
            grid.innerHTML = '';
            grid.classList.add('hidden');
            if (noResults) noResults.classList.remove('hidden');
            if (pagination) pagination.classList.add('hidden');
            return;
        }
        
        grid.classList.remove('hidden');
        if (noResults) noResults.classList.add('hidden');
        if (pagination) pagination.classList.remove('hidden');
        
        const totalPages = Math.ceil(dealers.length / itemsPerPage);
        const start = (currentPage - 1) * itemsPerPage;
        const end = start + itemsPerPage;
        const dealersToShow = dealers.slice(start, end);
        
        grid.innerHTML = dealersToShow.map(dealer => `
            <div class="border border-orange-100 rounded-xl p-5 bg-white hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div class="flex items-start justify-between mb-3">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-store text-xl" style="color: var(--accent-orange);"></i>
                        <h3 class="font-bold text-lg" style="color: var(--kwacha-green);">${dealer.name}</h3>
                    </div>
                    <div class="flex items-center gap-1 px-2 py-1 rounded-full" style="background: rgba(255, 102, 0, 0.1);">
                        <i class="fas fa-star text-xs" style="color: var(--accent-orange);"></i>
                        <span class="text-xs font-semibold" style="color: var(--kwacha-green);">${dealer.rating}</span>
                    </div>
                </div>
                <div class="space-y-2 text-sm text-gray-600">
                    <div class="flex items-start gap-2">
                        <i class="fas fa-map-marker-alt text-xs mt-1" style="color: var(--accent-orange);"></i>
                        <div>
                            <p class="font-medium">${dealer.district} - ${dealer.tradingCenter}</p>
                            <p class="text-gray-400 text-xs">${dealer.address}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-phone-alt text-xs" style="color: var(--accent-orange);"></i>
                        <a href="tel:${dealer.phone}" class="hover:underline">${dealer.phone}</a>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-clock text-xs text-gray-400"></i>
                        <span class="text-gray-400 text-xs">${dealer.hours}</span>
                    </div>
                </div>
                <div class="mt-4 pt-3 border-t border-orange-100 flex gap-2">
                    <button onclick="window.location.href='tel:${dealer.phone}'" class="flex-1 py-2 rounded-lg text-sm font-medium transition" style="background: var(--accent-orange); color: white;">
                        <i class="fas fa-phone-alt text-xs mr-1"></i> Call
                    </button>
                    <button onclick="showDirections('${dealer.name}')" class="flex-1 py-2 rounded-lg text-sm font-medium transition border" style="border-color: var(--accent-orange); color: var(--accent-orange);">
                        <i class="fas fa-directions text-xs mr-1"></i> Directions
                    </button>
                </div>
            </div>
        `).join('');
        
        updatePagination(dealers.length, totalPages);
    }

    // Update pagination controls
    function updatePagination(total, totalPages) {
        const prevBtn = document.getElementById('prevPageBtn');
        const nextBtn = document.getElementById('nextPageBtn');
        const pageNumbers = document.getElementById('pageNumbers');
        
        if (!prevBtn || !nextBtn || !pageNumbers) return;
        
        prevBtn.disabled = currentPage === 1;
        nextBtn.disabled = currentPage === totalPages;
        
        pageNumbers.innerHTML = '';
        
        let startPage = Math.max(1, currentPage - 2);
        let endPage = Math.min(totalPages, currentPage + 2);
        
        if (startPage > 1) {
            pageNumbers.appendChild(createPageBtn(1));
            if (startPage > 2) {
                const dots = document.createElement('span');
                dots.className = 'px-2 text-gray-500';
                dots.textContent = '...';
                pageNumbers.appendChild(dots);
            }
        }
        
        for (let i = startPage; i <= endPage; i++) {
            pageNumbers.appendChild(createPageBtn(i));
        }
        
        if (endPage < totalPages) {
            if (endPage < totalPages - 1) {
                const dots = document.createElement('span');
                dots.className = 'px-2 text-gray-500';
                dots.textContent = '...';
                pageNumbers.appendChild(dots);
            }
            pageNumbers.appendChild(createPageBtn(totalPages));
        }
    }

    // Create page button
    function createPageBtn(page) {
        const btn = document.createElement('button');
        btn.textContent = page;
        btn.className = `px-3 py-1 rounded-lg transition ${currentPage === page ? 'text-white' : 'bg-white border border-orange-200 text-gray-700 hover:bg-orange-50'}`;
        if (currentPage === page) {
            btn.style.background = '#ff6600';
        } else {
            btn.style.background = 'white';
        }
        btn.onclick = () => {
            currentPage = page;
            displayDealers(currentDealers);
            document.getElementById('dealers').scrollIntoView({ behavior: 'smooth', block: 'start' });
        };
        return btn;
    }

    // Filter dealers
    function filterDealers() {
        const district = document.getElementById('districtFilter').value;
        const tradingCenter = document.getElementById('tradingCenterFilter').value;
        
        let filtered = [...dealersData];
        if (district) filtered = filtered.filter(d => d.district === district);
        if (tradingCenter) filtered = filtered.filter(d => d.tradingCenter === tradingCenter);
        
        currentDealers = filtered;
        currentPage = 1;
        displayDealers(currentDealers);
    }

    // Reset filters
    function resetFilters() {
        document.getElementById('districtFilter').value = '';
        document.getElementById('tradingCenterFilter').value = '';
        populateTradingCenters('');
        currentDealers = [...dealersData];
        currentPage = 1;
        displayDealers(currentDealers);
    }

    // Show directions
    function showDirections(storeName) {
        alert(`📍 Directions to ${storeName}\n\nGoogle Maps link will be available soon. Please call the dealer for directions.`);
    }

    // Initialize event listeners
    document.addEventListener('DOMContentLoaded', function() {
        // Get elements
        const districtFilter = document.getElementById('districtFilter');
        const tradingFilter = document.getElementById('tradingCenterFilter');
        const searchBtn = document.getElementById('searchDealersBtn');
        const resetBtn = document.getElementById('resetFiltersBtn');
        const prevBtn = document.getElementById('prevPageBtn');
        const nextBtn = document.getElementById('nextPageBtn');
        
        // Add event listeners
        if (districtFilter) {
            districtFilter.addEventListener('change', function() {
                populateTradingCenters(this.value);
                filterDealers();
            });
        }
        
        if (tradingFilter) tradingFilter.addEventListener('change', filterDealers);
        if (searchBtn) searchBtn.addEventListener('click', filterDealers);
        if (resetBtn) resetBtn.addEventListener('click', resetFilters);
        
        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                if (currentPage > 1) {
                    currentPage--;
                    displayDealers(currentDealers);
                    document.getElementById('dealers').scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        }
        
        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                const totalPages = Math.ceil(currentDealers.length / itemsPerPage);
                if (currentPage < totalPages) {
                    currentPage++;
                    displayDealers(currentDealers);
                    document.getElementById('dealers').scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        }
        
        // Initialize
        populateTradingCenters('');
        displayDealers(dealersData);
    });
</script>













    <!-- ========== FOOTER ========== -->
<footer id="contact" style="background: var(--kwacha-green);" class="text-white py-12 mt-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Footer Columns - 4 columns -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <!-- Logo & Brand Column - Centered content -->
            <div class="text-center">
                <div class="logo-container flex items-center justify-center 
                            transition-all duration-300 ease-in-out 
                            flex-shrink-0
                            w-[75px] h-[75px] 
                            md:w-[85px] md:h-[85px] 
                            lg:w-[100px] lg:h-[100px]
                            hover:scale-105
                            overflow-hidden mb-4 mx-auto"
                     style="cursor: pointer;">
                    <img src="{{ asset('images/white log.png') }}" 
                         alt="Kwacha Seeds Logo" 
                         class="object-cover w-full h-full">
                </div>
                
                <p class="text-white/70 text-xs md:text-sm mt-3" style="font-family: 'Inter', sans-serif;">
                    Providing Top Reliable Seeds that Boosts Agricultural Productivity, Powered by a Purpose Driven Work Force
                </p>
            </div>
            
            <!-- Quick Links Column - Centered -->
            <div class="text-center">
                <h4 class="font-semibold mb-3 text-lg text-white" style="font-family: 'Inter', sans-serif;">Quick Links</h4>
                <ul class="space-y-2 text-white/70 text-sm" style="font-family: 'Inter', sans-serif;">
                    <li><a href="#home" class="hover:opacity-80 transition" style="color: var(--accent-orange);">Home</a></li>
                    <li><a href="#about" class="hover:text-orange-400 transition">About</a></li>
                    <li><a href="#products" class="hover:text-orange-400 transition">Products</a></li>
                    <li><a href="#farmers-hub" class="hover:text-orange-400 transition">Farmer's Hub</a></li>
                    <li><a href="#dealers" class="hover:text-orange-400 transition">Dealers</a></li>
                    <li><a href="#contact" class="hover:text-orange-400 transition">Contact</a></li>
                </ul>
            </div>
            
            <!-- Contact Info Column - Centered -->
            <div class="text-center">
                <h4 class="font-semibold mb-3 text-lg text-white" style="font-family: 'Inter', sans-serif;">Contact Us</h4>
                <ul class="space-y-2 text-white/70 text-sm" style="font-family: 'Inter', sans-serif;">
                    <li class="flex items-center justify-center gap-2">
                        <i class="fas fa-map-marker-alt" style="color: white; font-size: 12px;"></i>
                        <span>Lilongwe, Malawi</span>
                    </li>
                    <li class="flex items-center justify-center gap-2">
                        <i class="fas fa-phone-alt" style="color: white; font-size: 12px;"></i>
                        <span>+265 998 823 330</span>
                    </li>
                    <li class="flex items-center justify-center gap-2">
                        <i class="fas fa-envelope" style="color: white; font-size: 12px;"></i>
                        <span>info@kwachaseeds.mw</span>
                    </li>
                </ul>
            </div>
            
            <!-- Newsletter Column - Centered (Restored) -->
            <div class="text-center">
                <h4 class="font-semibold mb-3 text-lg text-white" style="font-family: 'Inter', sans-serif;">Newsletter</h4>
                <p class="text-white/70 text-sm mb-2" style="font-family: 'Inter', sans-serif;">Get seasonal planting alerts & offers.</p>
                <div class="flex max-w-xs mx-auto">
                    <input type="email" placeholder="Your email" class="flex-1 p-2 rounded-l-md text-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-orange-500" style="font-family: 'Inter', sans-serif;">
                    <button class="px-4 rounded-r-md hover:opacity-80 transition" style="background: var(--accent-orange);">
                        <i class="fas fa-arrow-right text-white"></i>
                    </button>
                </div>
                <p class="text-xs text-white/50 mt-2" style="font-family: 'Inter', sans-serif;">We respect your privacy. Unsubscribe anytime.</p>
            </div>
        </div>
        
        <!-- Bottom Footer -->
        <div class="border-t border-white/20 mt-10 pt-6">
            <div class="flex flex-col gap-4 text-center">
                <div>
                    <p class="text-white/60 text-xs sm:text-sm" style="font-family: 'Inter', sans-serif;">
                        &copy; <span id="currentYear"></span> Kwacha Seeds Limited
                    </p>
                    <p class="text-xs sm:text-sm font-medium mt-1" style="color: var(--accent-orange); font-family: 'Inter', sans-serif;">
                        Providing Top Reliable Seeds
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row justify-center items-center gap-2 sm:gap-3">
                    <p class="text-white/60 text-xs sm:text-sm" style="font-family: 'Inter', sans-serif;">
                        Designed and Developed by <span style="color: var(--accent-orange); font-weight: 600;">ICT LABS MW</span>
                    </p>
                    <span class="hidden sm:inline text-white/30">|</span>
                    <p class="text-white/60 text-xs sm:text-sm" style="font-family: 'Inter', sans-serif;">
                        <i class="fas fa-phone-alt" style="color: var(--accent-orange); margin-right: 4px;"></i> 
                        +265 998 823 330
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
    
</div>



<script>
    // Set current year
    document.getElementById('currentYear').textContent = new Date().getFullYear();
    
    // Loading screen simulation
    window.addEventListener('load', function() {
        setTimeout(function() {
            const loadingScreen = document.getElementById('loadingScreen');
            const mainContent = document.getElementById('mainContent');
            
            loadingScreen.style.opacity = '0';
            
            setTimeout(function() {
                loadingScreen.style.display = 'none';
                mainContent.classList.add('visible');
            }, 500);
        }, 1500);
    });
    
    // ========== CAROUSEL LOGIC ==========
    const slides = document.querySelectorAll('.carousel-slide');
    const dots = document.querySelectorAll('.dot-nav');
    const prevBtn = document.getElementById('prevSlide');
    const nextBtn = document.getElementById('nextSlide');
    let currentIndex = 0;
    let transitioning = false;
    let autoTimer;

    function updateSlide(index) {
        if (transitioning) return;
        transitioning = true;
        
        let newIndex = (index + slides.length) % slides.length;
        
        slides.forEach((slide, i) => {
            slide.style.opacity = i === newIndex ? '1' : '0';
            slide.setAttribute('data-active', i === newIndex ? 'true' : 'false');
        });
        
        dots.forEach((dot, i) => {
            dot.style.background = i === newIndex ? 'white' : 'rgba(255,255,255,0.5)';
            dot.style.transform = i === newIndex ? 'scale(1.2)' : 'scale(1)';
        });
        
        currentIndex = newIndex;
        
        setTimeout(() => {
            transitioning = false;
        }, 700);
    }

    function nextSlide() {
        updateSlide(currentIndex + 1);
        resetAutoTimer();
    }

    function prevSlide() {
        updateSlide(currentIndex - 1);
        resetAutoTimer();
    }

    function resetAutoTimer() {
        if (autoTimer) clearInterval(autoTimer);
        autoTimer = setInterval(nextSlide, 5500);
    }

    // Event listeners
    if (nextBtn) nextBtn.addEventListener('click', nextSlide);
    if (prevBtn) prevBtn.addEventListener('click', prevSlide);
    
    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => {
            updateSlide(i);
            resetAutoTimer();
        });
    });

    // Pause on hover
    const carouselDiv = document.getElementById('carousel');
    if (carouselDiv) {
        carouselDiv.addEventListener('mouseenter', () => {
            if (autoTimer) clearInterval(autoTimer);
        });
        carouselDiv.addEventListener('mouseleave', () => {
            autoTimer = setInterval(nextSlide, 5500);
        });
    }

    // Initialize
    updateSlide(0);
    autoTimer = setInterval(nextSlide, 5500);
    
    // ========== MOBILE MENU TOGGLE WITH ICON ANIMATION ==========
    const menuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenuDiv = document.getElementById('mobileMenu');
    const menuIcon = document.getElementById('menuIcon');
    
    if(menuBtn) {
        menuBtn.addEventListener('click', () => {
            mobileMenuDiv.classList.toggle('hidden');
            
            // Animate icon between hamburger and X
            if (!mobileMenuDiv.classList.contains('hidden')) {
                // Menu is open - change to X
                menuIcon.classList.remove('fa-bars');
                menuIcon.classList.add('fa-times');
                menuBtn.classList.add('rotated');
            } else {
                // Menu is closed - change back to hamburger
                menuIcon.classList.remove('fa-times');
                menuIcon.classList.add('fa-bars');
                menuBtn.classList.remove('rotated');
            }
        });
    }
    
    // Smooth anchor scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const target = document.querySelector(this.getAttribute('href'));
            if(target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                if(mobileMenuDiv && !mobileMenuDiv.classList.contains('hidden')) {
                    mobileMenuDiv.classList.add('hidden');
                    // Reset icon when closing menu via link click
                    menuIcon.classList.remove('fa-times');
                    menuIcon.classList.add('fa-bars');
                    menuBtn.classList.remove('rotated');
                }
            }
        });
    });
</script>





<!-- ========== QUOTE MODAL POPUP ========== -->

<style>
    /* Modal Styles */
    .quote-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.85);
        z-index: 9999;
        justify-content: center;
        align-items: center;
        backdrop-filter: blur(8px);
    }
    
    .quote-modal.active {
        display: flex;
    }
    
    .quote-modal-content {
        background: white;
        border-radius: 24px;
        max-width: 1000px;
        width: 90%;
        max-height: 85vh;
        overflow-y: auto;
        position: relative;
        animation: modalSlideIn 0.3s ease-out;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
    }
    
    @media (min-width: 1280px) {
        .quote-modal-content {
            max-width: 1100px;
        }
    }
    
    @keyframes modalSlideIn {
        from {
            opacity: 0;
            transform: translateY(-50px) scale(0.95);
        }
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }
    
    .quote-modal-header {
        background: var(--kwacha-green);
        color: white;
        padding: 24px 28px;
        border-radius: 24px 24px 0 0;
        position: sticky;
        top: 0;
        z-index: 10;
    }
    
    .quote-modal-header h3 {
        font-size: 1.5rem;
        font-weight: 700;
        margin: 0;
    }
    
    @media (min-width: 768px) {
        .quote-modal-header h3 {
            font-size: 1.75rem;
        }
    }
    
    .quote-modal-body {
        padding: 30px;
    }
    
    @media (min-width: 768px) {
        .quote-modal-body {
            padding: 40px;
        }
    }
    
    .quote-modal-close {
        position: absolute;
        right: 24px;
        top: 20px;
        font-size: 28px;
        cursor: pointer;
        color: white;
        transition: transform 0.2s;
        background: rgba(255,255,255,0.2);
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .quote-modal-close:hover {
        transform: rotate(90deg);
        background: rgba(255,255,255,0.3);
    }
    
    .form-group {
        margin-bottom: 20px;
    }
    
    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #333;
        font-size: 14px;
    }
    
    .form-group input, .form-group select {
        width: 100%;
        padding: 12px 14px;
        border: 1.5px solid #e5e7eb;
        border-radius: 12px;
        font-size: 14px;
        transition: all 0.2s;
        font-family: 'Inter', sans-serif;
    }
    
    .form-group input:focus, .form-group select:focus {
        outline: none;
        border-color: var(--accent-orange);
        box-shadow: 0 0 0 3px rgba(255, 102, 0, 0.1);
    }
    
    /* Seed Items Table */
    .seeds-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }
    
    .seeds-table th {
        background: #f5f5f5;
        padding: 12px;
        text-align: left;
        font-weight: 600;
        color: var(--kwacha-green);
        font-size: 14px;
    }
    
    .seeds-table td {
        padding: 12px;
        border-bottom: 1px solid #e5e7eb;
        vertical-align: middle;
    }
    
    .seed-quantity {
        width: 100px;
        padding: 8px;
        border: 1.5px solid #e5e7eb;
        border-radius: 8px;
        text-align: center;
        font-size: 14px;
    }
    
    .seed-quantity:focus {
        outline: none;
        border-color: var(--accent-orange);
    }
    
    .remove-row-btn {
        background: #fee2e2;
        border: none;
        color: #dc2626;
        width: 32px;
        height: 32px;
        border-radius: 8px;
        cursor: pointer;
        font-size: 16px;
        transition: all 0.2s;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .remove-row-btn:hover {
        background: #dc2626;
        color: white;
        transform: scale(1.05);
    }
    
    .grand-total {
        background: linear-gradient(135deg, var(--kwacha-green) 0%, #0e4e0e 100%);
        color: white;
        padding: 16px 20px;
        border-radius: 12px;
        margin-top: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 18px;
        font-weight: bold;
    }
    
    .submit-btn {
        width: 100%;
        padding: 16px;
        background: var(--kwacha-green);
        color: white;
        border: none;
        border-radius: 12px;
        font-size: 17px;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s;
        font-family: 'Inter', sans-serif;
        margin-top: 20px;
    }
    
    .submit-btn:hover {
        background: var(--kwacha-green-light);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(10, 59, 10, 0.3);
    }
    
    .section-title {
        font-size: 18px;
        font-weight: bold;
        color: var(--kwacha-green);
        margin: 20px 0 15px 0;
        padding-bottom: 8px;
        border-bottom: 2px solid var(--accent-orange);
        display: inline-block;
    }
    
    /* Two-column layout for large screens */
    @media (min-width: 768px) {
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
    }
    
    .add-more-btn {
        background: transparent;
        border: 2px dashed var(--accent-orange);
        color: var(--accent-orange);
        padding: 10px 20px;
        border-radius: 30px;
        cursor: pointer;
        font-weight: 600;
        margin: 10px 0;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    
    .add-more-btn:hover {
        background: var(--accent-orange);
        color: white;
    }
    
    /* Custom Confirmation Modal */
    .confirm-modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        z-index: 10000;
        display: none;
        justify-content: center;
        align-items: center;
        backdrop-filter: blur(10px);
    }
    
    .confirm-modal-overlay.active {
        display: flex;
    }
    
    .confirm-modal {
        background: white;
        border-radius: 28px;
        max-width: 500px;
        width: 90%;
        overflow: hidden;
        animation: modalSlideIn 0.3s ease-out;
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4);
    }
    
    .confirm-modal-header {
        background: linear-gradient(135deg, var(--kwacha-green) 0%, #0e4e0e 100%);
        color: white;
        padding: 20px 24px;
    }
    
    .confirm-modal-header h4 {
        margin: 0;
        font-size: 1.4rem;
        font-weight: 700;
    }
    
    .confirm-modal-body {
        padding: 24px;
        max-height: 60vh;
        overflow-y: auto;
    }
    
    .confirm-modal-footer {
        padding: 16px 24px;
        background: #f8f9fa;
        display: flex;
        justify-content: flex-end;
        gap: 12px;
    }
    
    .confirm-btn {
        padding: 10px 24px;
        border-radius: 10px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s;
        border: none;
        font-size: 14px;
    }
    
    .confirm-btn-primary {
        background: var(--kwacha-green);
        color: white;
    }
    
    .confirm-btn-primary:hover {
        background: var(--kwacha-green-light);
        transform: translateY(-2px);
    }
    
    .confirm-btn-secondary {
        background: #e5e7eb;
        color: #333;
    }
    
    .confirm-btn-secondary:hover {
        background: #d1d5db;
    }
    
    .order-summary-item {
        background: #f8f9fa;
        padding: 12px;
        border-radius: 12px;
        margin-bottom: 10px;
        font-size: 14px;
    }
    
    .detail-row {
        display: flex;
        margin-bottom: 10px;
        padding-bottom: 8px;
        border-bottom: 1px solid #e5e7eb;
    }
    
    .detail-label {
        width: 100px;
        font-weight: 600;
        color: var(--kwacha-green);
    }
    
    .detail-value {
        flex: 1;
        color: #333;
    }
    
    .warning-box {
        background: #fff3e0;
        border-left: 4px solid var(--accent-orange);
        padding: 12px 16px;
        border-radius: 12px;
        margin-top: 16px;
    }
    
    /* Success Modal with Tick Animation */
    .success-modal {
        text-align: center;
    }
    
    .success-check {
        width: 80px;
        height: 80px;
        background: var(--kwacha-green);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        animation: scaleIn 0.3s ease-out, pulse 0.5s ease-out 0.3s;
    }
    
    @keyframes scaleIn {
        0% {
            transform: scale(0);
            opacity: 0;
        }
        100% {
            transform: scale(1);
            opacity: 1;
        }
    }
    
    @keyframes pulse {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.1);
        }
        100% {
            transform: scale(1);
        }
    }
    
    .success-check i {
        font-size: 40px;
        color: white;
        animation: checkDraw 0.4s ease-out 0.2s both;
    }
    
    @keyframes checkDraw {
        0% {
            transform: scale(0);
        }
        100% {
            transform: scale(1);
        }
    }
</style>

<div id="quoteModal" class="quote-modal">
    <div class="quote-modal-content">
        <div class="quote-modal-header">
            <h3 style="font-family: 'Inter', sans-serif;">Bulk Quote Request</h3>
            <span class="quote-modal-close">&times;</span>
        </div>
        <div class="quote-modal-body">
            <form id="quoteForm">
                <div class="form-row">
                    <div class="form-group">
                        <label>Customer/Organisation Name</label>
                        <input type="text" id="fullName" required placeholder="Enter your full name">
                    </div>
                    
                    <div class="form-group">
                        <label>Email Address *</label>
                        <input type="email" id="email" required placeholder="your@email.com">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label>Phone Number *</label>
                        <input type="tel" id="phone" required placeholder="+265 XXXX XXXX">
                    </div>
                    
                    <div class="form-group">
                        <label>Delivery Location</label>
                        <input type="text" id="location" placeholder="City/District, Malawi">
                    </div>
                </div>
                
                <div>
                    <h4 class="section-title">Select Seeds & Quantities</h4>
                </div>
                
                <!-- Seeds Table -->
                <table class="seeds-table" id="seedsTable">
                    <thead>
                        <tr>
                            <th>Seed Type</th>
                            <th>Pack Size</th>
                            <th>Quantity (packs)</th>
                            <th>Subtotal</th>
                            <th style="width: 50px;"></th>
                        </tr>
                    </thead>
                    <tbody id="seedsTableBody">
                        <tr class="seed-row">
                            <td>
                                <select class="seed-type">
                                    <option value="maize">Premium Maize (MH36)</option>
                                    <option value="orange-maize">Orange Maize (MH42A)</option>
                                    <option value="soybean">Soybean (Chitedze 4)</option>
                                    <option value="wheat">Wheat (KARS 52)</option>
                                    <option value="groundnut">Groundnut (CG9)</option>
                                </select>
                            </td>
                            <td>
                                <select class="pack-size">
                                    <option value="2">2kg Pack</option>
                                    <option value="5">5kg Pack</option>
                                    <option value="25">25kg Pack</option>
                                </select>
                            </td>
                            <td>
                                <input type="number" class="seed-quantity" value="0" min="0" step="1">
                            </td>
                            <td class="seed-subtotal">MK 0</td>
                            <td class="text-center">
                                <button type="button" class="remove-row-btn" title="Remove this seed">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <div class="text-center">
                    <button type="button" class="add-more-btn" id="addMoreSeedsBtn">
                        + Add Another Seed Type
                    </button>
                </div>
                
                <!-- Grand Total -->
                <div class="grand-total">
                    <span>GRAND TOTAL:</span>
                    <span id="grandTotal">MK 0</span>
                </div>
                
                <button type="submit" class="submit-btn">
                    Submit Quote Request
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Custom Confirmation Modal -->
<div id="customConfirmModal" class="confirm-modal-overlay">
    <div class="confirm-modal">
        <div class="confirm-modal-header">
            <h4 id="confirmModalTitle">Verify Your Information</h4>
        </div>
        <div class="confirm-modal-body" id="confirmModalBody">
            <!-- Dynamic content will be inserted here -->
        </div>
        <div class="confirm-modal-footer">
            <button class="confirm-btn confirm-btn-secondary" id="confirmModalCancel">Go Back</button>
            <button class="confirm-btn confirm-btn-primary" id="confirmModalOk">Confirm & Submit</button>
        </div>
    </div>
</div>

<script>
    // Seed Prices (per pack in Malawi Kwacha)
    const seedPrices = {
        maize: { 2: 3500, 5: 8000, 25: 35000 },
        'orange-maize': { 2: 3800, 5: 8500, 25: 38000 },
        soybean: { 2: 4000, 5: 9000, 25: 40000 },
        wheat: { 2: 3000, 5: 7000, 25: 30000 },
        groundnut: { 2: 4500, 5: 10000, 25: 45000 }
    };
    
    // Store form data for confirmation
    let pendingFormData = null;
    
    // Function to calculate subtotal for a row
    function calculateRowSubtotal(row) {
        const seedType = row.querySelector('.seed-type').value;
        const packSize = row.querySelector('.pack-size').value;
        const quantity = parseInt(row.querySelector('.seed-quantity').value) || 0;
        
        const price = seedPrices[seedType][packSize] || 0;
        const subtotal = price * quantity;
        
        const subtotalCell = row.querySelector('.seed-subtotal');
        subtotalCell.textContent = `MK ${subtotal.toLocaleString()}`;
        
        return subtotal;
    }
    
    // Function to calculate grand total
    function calculateGrandTotal() {
        const rows = document.querySelectorAll('#seedsTableBody .seed-row');
        let grandTotal = 0;
        
        rows.forEach(row => {
            const subtotal = calculateRowSubtotal(row);
            grandTotal += subtotal;
        });
        
        document.getElementById('grandTotal').textContent = `MK ${grandTotal.toLocaleString()}`;
        return grandTotal;
    }
    
    // Add event listeners to a row
    function addRowEventListeners(row) {
        const inputs = row.querySelectorAll('.seed-type, .pack-size, .seed-quantity');
        inputs.forEach(input => {
            input.addEventListener('change', () => {
                calculateRowSubtotal(row);
                calculateGrandTotal();
            });
            input.addEventListener('input', () => {
                calculateRowSubtotal(row);
                calculateGrandTotal();
            });
        });
        
        // Add remove button event listener
        const removeBtn = row.querySelector('.remove-row-btn');
        if (removeBtn) {
            removeBtn.addEventListener('click', function() {
                const rows = document.querySelectorAll('#seedsTableBody .seed-row');
                if (rows.length > 1) {
                    row.remove();
                    calculateGrandTotal();
                } else {
                    // Reset the only row instead of removing it
                    row.querySelector('.seed-quantity').value = 0;
                    calculateRowSubtotal(row);
                    calculateGrandTotal();
                }
            });
        }
    }
    
    // Add new seed row
    function addNewSeedRow() {
        const tbody = document.getElementById('seedsTableBody');
        const newRow = document.createElement('tr');
        newRow.className = 'seed-row';
        newRow.innerHTML = `
            <td>
                <select class="seed-type">
                    <option value="maize">Premium Maize (MH36)</option>
                    <option value="orange-maize">Orange Maize (MH42A)</option>
                    <option value="soybean">Soybean (Chitedze 4)</option>
                    <option value="wheat">Wheat (KARS 52)</option>
                    <option value="groundnut">Groundnut (CG9)</option>
                </select>
            </td>
            <td>
                <select class="pack-size">
                    <option value="2">2kg Pack</option>
                    <option value="5">5kg Pack</option>
                    <option value="25">25kg Pack</option>
                </select>
            </td>
            <td>
                <input type="number" class="seed-quantity" value="0" min="0" step="1">
            </td>
            <td class="seed-subtotal">MK 0</td>
            <td class="text-center">
                <button type="button" class="remove-row-btn" title="Remove this seed">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </td>
        </tr>
        `;
        tbody.appendChild(newRow);
        addRowEventListeners(newRow);
    }
    
    // Modal functionality
    const modal = document.getElementById('quoteModal');
    const closeBtn = document.querySelector('.quote-modal-close');
    const addMoreBtn = document.getElementById('addMoreSeedsBtn');
    
    // Add more seeds button
    if (addMoreBtn) {
        addMoreBtn.addEventListener('click', addNewSeedRow);
    }
    
    // Function to open modal
    function openModal() {
        if (modal) {
            document.getElementById('quoteForm').reset();
            const tbody = document.getElementById('seedsTableBody');
            tbody.innerHTML = `
                <tr class="seed-row">
                    <td>
                        <select class="seed-type">
                            <option value="maize">Premium Maize (MH36)</option>
                            <option value="orange-maize">Orange Maize (MH42A)</option>
                            <option value="soybean">Soybean (Chitedze 4)</option>
                            <option value="wheat">Wheat (KARS 52)</option>
                            <option value="groundnut">Groundnut (CG9)</option>
                        </select>
                    </td>
                    <td>
                        <select class="pack-size">
                            <option value="2">2kg Pack</option>
                            <option value="5">5kg Pack</option>
                            <option value="25">25kg Pack</option>
                        </select>
                    </td>
                    <td>
                        <input type="number" class="seed-quantity" value="0" min="0" step="1">
                    </td>
                    <td class="seed-subtotal">MK 0</td>
                    <td class="text-center">
                        <button type="button" class="remove-row-btn" title="Remove this seed">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
            `;
            const firstRow = document.querySelector('#seedsTableBody .seed-row');
            if (firstRow) addRowEventListeners(firstRow);
            calculateGrandTotal();
            modal.classList.add('active');
        }
    }
    
    // Open modal when clicking Get a Quote buttons
    const getQuoteBtns = document.querySelectorAll('a[href="#get-quote"], .btn-quote, .enquire-btn');
    getQuoteBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            openModal();
        });
    });
    
    // Close modal
    function closeModal() {
        if (modal) modal.classList.remove('active');
    }
    
    if (closeBtn) closeBtn.addEventListener('click', closeModal);
    
    if (modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === modal) closeModal();
        });
    }
    
    // Initialize first row event listeners
    const firstRow = document.querySelector('#seedsTableBody .seed-row');
    if (firstRow) addRowEventListeners(firstRow);
    
    // Custom confirmation modal handlers
    const confirmModal = document.getElementById('customConfirmModal');
    const confirmModalBody = document.getElementById('confirmModalBody');
    const confirmModalTitle = document.getElementById('confirmModalTitle');
    const confirmOkBtn = document.getElementById('confirmModalOk');
    const confirmCancelBtn = document.getElementById('confirmModalCancel');
    
    function closeConfirmModal() {
        confirmModal.classList.remove('active');
        pendingFormData = null;
    }
    
    confirmCancelBtn.addEventListener('click', closeConfirmModal);
    confirmModal.addEventListener('click', function(e) {
        if (e.target === confirmModal) closeConfirmModal();
    });
    
    // Show success modal with tick animation
    function showSuccessModal() {
        const successHTML = `
            <div class="success-modal">
                <div class="success-check">
                    <i class="fas fa-check"></i>
                </div>
                <h3 style="color: var(--kwacha-green); margin-bottom: 15px;">Quote Request Submitted!</h3>
                <p style="color: #555; margin-bottom: 20px;">We will contact you for confirmation.</p>
                
                <div style="background: #f0f7f0; padding: 15px; border-radius: 12px; text-align: left; margin-bottom: 20px;">
                    <p style="margin-bottom: 10px;"><strong>What happens next:</strong></p>
                    <ol style="margin-left: 20px; color: #555; line-height: 1.6;">
                        <li>Our sales team will review your request</li>
                        <li>You will receive a confirmation call within 24 hours</li>
                        <li>We will discuss payment options and delivery schedule</li>
                        <li>A formal quote will be sent to your email</li>
                    </ol>
                </div>
                
                <button class="confirm-btn confirm-btn-primary" id="closeSuccessBtn" style="padding: 12px 30px;">Close</button>
            </div>
        `;
        
        confirmModalTitle.innerHTML = 'Request Submitted!';
        confirmModalBody.innerHTML = successHTML;
        confirmModal.classList.add('active');
        
        // Re-attach event listener after modal content is updated
        const closeSuccessBtn = document.getElementById('closeSuccessBtn');
        if (closeSuccessBtn) {
            closeSuccessBtn.addEventListener('click', function() {
                closeConfirmModal();
                closeModal();
            });
        }
    }
    
    // Show verification modal
    function showVerificationModal(formData, seedsList, grandTotal) {
        const seedsHTML = seedsList.map(seed => `<div class="order-summary-item">${seed}</div>`).join('');
        
        const verificationHTML = `
            <div class="detail-row">
                <div class="detail-label">Name:</div>
                <div class="detail-value">${formData.fullName}</div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Email:</div>
                <div class="detail-value">${formData.email}</div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Phone:</div>
                <div class="detail-value">${formData.phone}</div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Location:</div>
                <div class="detail-value">${formData.location}</div>
            </div>
            
            <div style="margin-top: 20px; margin-bottom: 15px;">
                <strong>Order Summary:</strong>
            </div>
            ${seedsHTML}
            
            <div class="detail-row" style="border-top: 2px solid var(--kwacha-green); margin-top: 10px; padding-top: 12px;">
                <div class="detail-label" style="font-weight: bold;">GRAND TOTAL:</div>
                <div class="detail-value" style="font-weight: bold; color: var(--accent-orange);">MK ${grandTotal.toLocaleString()}</div>
            </div>
            
            <div class="warning-box">
                <strong>Please verify your contact details are correct!</strong><br>
                A sales representative will contact you using the information above for confirmation, payment, and delivery logistics.
            </div>
        `;
        
        confirmModalTitle.innerHTML = 'Verify Your Information';
        confirmModalBody.innerHTML = verificationHTML;
        confirmModal.classList.add('active');
        
        // Store form data for submission
        pendingFormData = { formData, seedsList, grandTotal };
    }
    
    // Handle form submission
    const quoteForm = document.getElementById('quoteForm');
    if (quoteForm) {
        quoteForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const fullName = document.getElementById('fullName').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const location = document.getElementById('location').value || 'Not specified';
            
            // Collect seed details
            const rows = document.querySelectorAll('#seedsTableBody .seed-row');
            let seedsList = [];
            let grandTotal = 0;
            
            rows.forEach(row => {
                const seedTypeSelect = row.querySelector('.seed-type');
                const seedType = seedTypeSelect.options[seedTypeSelect.selectedIndex].text;
                const packSize = row.querySelector('.pack-size').value;
                const quantity = parseInt(row.querySelector('.seed-quantity').value) || 0;
                const price = seedPrices[seedTypeSelect.value][packSize] || 0;
                const subtotal = price * quantity;
                
                if (quantity > 0) {
                    seedsList.push(`${seedType} (${packSize}kg) - ${quantity} pack(s) = MK ${subtotal.toLocaleString()}`);
                    grandTotal += subtotal;
                }
            });
            
            if (seedsList.length === 0) {
                alert('Please add at least one seed type with quantity greater than 0.');
                return;
            }
            
            const formData = { fullName, email, phone, location };
            
            // Show verification modal
            showVerificationModal(formData, seedsList, grandTotal);
        });
    }
    
    // Handle confirm submission
    confirmOkBtn.addEventListener('click', function() {
        if (pendingFormData) {
            // Show success modal with tick animation
            showSuccessModal();
            pendingFormData = null;
        }
        closeConfirmModal();
    });
    
    // Calculate initial grand total
    calculateGrandTotal();
</script>





</body>
</html>




