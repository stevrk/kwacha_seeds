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
    <main>
        <div class="min-h-[50vh] flex items-center justify-center bg-gradient-to-b from-gray-50 to-gray-100 py-16">
            <div class="text-center px-4">
                <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-check-circle text-green-600 text-5xl"></i>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4" style="font-family: 'Inter', sans-serif;">Welcome to Kwacha Seeds</h2>
                <p class="text-gray-600 max-w-md mx-auto text-lg" style="font-family: 'Inter', sans-serif;">
                    Your trusted partner for quality seeds in Malawi.
                </p>
                <div class="mt-8 flex flex-wrap gap-3 justify-center">
                    <div class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm" style="font-family: 'Inter', sans-serif;">🌱 Quality Seeds</div>
                    <div class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm" style="font-family: 'Inter', sans-serif;">🚜 Farmer Support</div>
                    <div class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm" style="font-family: 'Inter', sans-serif;">📈 High Yields</div>
                    <div class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm" style="font-family: 'Inter', sans-serif;">💪 Resilient Varieties</div>
                </div>
            </div>
        </div>
    </main>

    <!-- ========== FOOTER ========== -->
    <footer style="background: var(--kwacha-green);" class="text-white py-12 mt-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Footer Columns - Changed from 5 to 4 columns -->
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
            
            <!-- Social Media Column - Centered -->
            <div class="text-center">
                <h4 class="font-semibold mb-3 text-lg text-white" style="font-family: 'Inter', sans-serif;">Follow Us Online</h4>
                <div class="flex items-center justify-center gap-4">
                    <a href="#" class="text-white/80 hover:text-white transition text-xl"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white/80 hover:text-white transition text-xl"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" class="text-white/80 hover:text-white transition text-xl"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white/80 hover:text-white transition text-xl"><i class="fab fa-tiktok"></i></a>
                    <a href="#" class="text-white/80 hover:text-white transition text-xl"><i class="fab fa-youtube"></i></a>
                </div>
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

</body>
</html>