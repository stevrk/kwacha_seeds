<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Kwacha Seeds | Clean Navbar - No Scroll Effect</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
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
            --accent-orange: #e67e22;
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
            box-shadow: 0 8px 20px rgba(255,255,255,0.2);
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
    <!-- ========== TOP CONTACT BAR ========== -->
    <div class="hidden md:block" style="background: var(--kwacha-green); border-bottom: 1px solid rgba(255,255,255,0.15);">
        <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10 py-2.5">
            <div class="flex justify-end items-center gap-6 text-white/80 text-sm">
                <div class="flex items-center gap-2">
                    <i class="fas fa-phone-alt text-orange-400 text-xs"></i>
                    <span>+265 998 823 330</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-envelope text-orange-400 text-xs"></i>
                    <span>info@kwachaseeds.mw</span>
                </div>
                <div class="flex items-center gap-3">
                    <a href="#" class="text-white/70 hover:text-white transition"><i class="fab fa-facebook-f text-sm"></i></a>
                    <a href="#" class="text-white/70 hover:text-white transition"><i class="fab fa-whatsapp text-sm"></i></a>
                    <a href="#" class="text-white/70 hover:text-white transition"><i class="fab fa-instagram text-sm"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- ========== MAIN NAVIGATION (NO SCROLL EFFECT) ========== -->
    <nav class="fixed top-0 left-0 w-full z-50 shadow-md" style="background: var(--kwacha-green);">
        <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">
            
            <!-- Row 1: Logo + Contact Info -->
            <div class="flex items-center justify-between py-4 md:py-5">
                
                <!-- Logo Section - Single instance (FIXED - removed duplicate) -->
                <div class="flex items-center gap-3 md:gap-5 lg:gap-6">
                    
                    <!-- Logo Container -->
                    <div class="logo-container rounded-full bg-white flex items-center justify-center 
                                shadow-md hover:shadow-xl transition-all duration-300 ease-in-out 
                                flex-shrink-0
                                w-[45px] h-[45px] 
                                md:w-[65px] md:h-[65px] 
                                lg:w-[75px] lg:h-[75px]
                                hover:scale-105"
                         style="cursor: pointer;">
                        <img src="{{ asset('images/kwacha_seeds_logo.png') }}" 
                             alt="Kwacha Seeds Logo" 
                             class="object-contain 
                                    w-12 h-12
                                    md:w-20 md:h-20 
                                    lg:w-19 lg:h-19">
                    </div>

                    <!-- Brand Text -->
                    <div class="flex flex-col leading-tight">
                        <span class="text-base md:text-3xl lg:text-4xl xl:text-5xl font-bold tracking-tight whitespace-nowrap"
                              style="font-family: 'Inter', sans-serif; color: white;">
                            Kwacha <span style="color: var(--accent-orange);">Seeds</span>
                        </span>
                        <span class="text-[10px] md:text-xs lg:text-sm text-white/80 tracking-wide hidden sm:block"
                              style="font-family: 'Inter', sans-serif;">
                            Empowering Malawi's Farmers
                        </span>
                    </div>
                </div>
                
                <!-- Contact Info -->
             <div id="topContactBar" class="hidden md:block top-contact-bar" style="background: var(--kwacha-green); border-bottom: 1px solid rgba(255,255,255,0.15);">
    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10 py-2.5">
        <div class="flex justify-end items-center gap-6 text-white/80 text-sm">
            <div class="flex items-center gap-2">
                <i class="fas fa-phone-alt text-orange-400 text-xs"></i>
                <span>+265 998 823 330</span>
            </div>
            <div class="flex items-center gap-2">
                <i class="fas fa-envelope text-orange-400 text-xs"></i>
                <span>info@kwachaseeds.mw</span>
            </div>
            <div class="flex items-center gap-3">
                <a href="#" class="text-white/70 hover:text-white transition"><i class="fab fa-facebook-f text-sm"></i></a>
                <a href="#" class="text-white/70 hover:text-white transition"><i class="fab fa-whatsapp text-sm"></i></a>
                <a href="#" class="text-white/70 hover:text-white transition"><i class="fab fa-instagram text-sm"></i></a>
                <a href="#" class="text-white/70 hover:text-white transition"><i class="fab fa-tiktok text-sm"></i></a>
            </div>
        </div>
    </div>
</div>
                
                <!-- Mobile Menu Button - Animated -->
                <button id="mobileMenuBtn" class="md:hidden text-white text-2xl focus:outline-none menu-icon">
                    <i id="menuIcon" class="fas fa-bars"></i>
                </button>
            </div>
            
            <!-- Row 2: Centered Navigation Links -->
            <div class="hidden md:flex items-center justify-center space-x-6 lg:space-x-8 py-3 border-t border-white/20">
                <a href="#home" class="nav-link text-white/90 hover:text-white text-sm font-medium transition" style="font-family: 'Inter', sans-serif;">Home</a>
                <a href="#about" class="nav-link text-white/90 hover:text-white text-sm font-medium transition" style="font-family: 'Inter', sans-serif;">About</a>
                <a href="#products" class="nav-link text-white/90 hover:text-white text-sm font-medium transition" style="font-family: 'Inter', sans-serif;">Products</a>
                <a href="#farmers-hub" class="nav-link text-white/90 hover:text-white text-sm font-medium transition" style="font-family: 'Inter', sans-serif;">Farmer's Hub</a>
                <a href="#dealers" class="nav-link text-white/90 hover:text-white text-sm font-medium transition" style="font-family: 'Inter', sans-serif;">Dealers</a>
                <a href="#contact" class="nav-link text-white/90 hover:text-white text-sm font-medium transition" style="font-family: 'Inter', sans-serif;">Contact</a>
                <a href="#get-quote" class="btn-quote px-5 py-2 text-sm font-semibold rounded-md shadow-md transition" style="background: white; color: var(--kwacha-green); font-family: 'Inter', sans-serif;">Get a Quote</a>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden md:hidden pb-6">
                <div class="flex flex-col space-y-3 text-center">
                    <div class="pt-2 pb-3 border-b border-white/20 text-white/80 text-sm space-y-2">
                        <div><i class="fas fa-phone-alt text-orange-400 mr-2 w-4"></i> +265 998 823 330</div>
                        <div><i class="fas fa-envelope text-orange-400 mr-2 w-4"></i> info@kwachaseeds.mw</div>
                        <div class="flex justify-center gap-4 pt-2">
                        <a href="#" class="text-white/70 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white/70 hover:text-white"><i class="fab fa-whatsapp"></i></a>
                        <a href="#" class="text-white/70 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white/70 hover:text-white"><i class="fab fa-tiktok"></i></a>
                    </div>
                    </div>
                    <a href="#home" class="text-white/90 hover:text-white py-2" style="font-family: 'Inter', sans-serif;">Home</a>
                    <a href="#about" class="text-white/90 hover:text-white py-2" style="font-family: 'Inter', sans-serif;">About</a>
                    <a href="#products" class="text-white/90 hover:text-white py-2" style="font-family: 'Inter', sans-serif;">Products</a>
                    <a href="#farmers-hub" class="text-white/90 hover:text-white py-2" style="font-family: 'Inter', sans-serif;">Farmer's Hub</a>
                    <a href="#dealers" class="text-white/90 hover:text-white py-2" style="font-family: 'Inter', sans-serif;">Dealers</a>
                    <a href="#contact" class="text-white/90 hover:text-white py-2" style="font-family: 'Inter', sans-serif;">Contact</a>
                    <a href="#get-quote" class="px-5 py-2 text-sm font-semibold rounded-md text-center" style="background: white; color: var(--kwacha-green); font-family: 'Inter', sans-serif;">Get a Quote</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- ========== HERO CAROUSEL SECTION ========== -->
    <!-- ========== HERO CAROUSEL SECTION ========== -->
<section id="home">
    <div class="relative w-full">
        <!-- Final precise adjustment - eliminating the last tiny pixel -->
        <!-- Mobile: 66px, Tablet: 122px, Desktop: 132px -->
        <div class="h-[66px] md:h-[122px] lg:h-[132px]"></div>
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
                            <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-2 md:mb-3 leading-tight slide-content" style="font-family: 'Playfair Display', serif;">
                                Fast-Maturing Seeds<br>
                                <span style="color: var(--accent-orange);">Perfect for Malawi's Climate</span>
                            </h1>
                            <p class="text-xs sm:text-sm md:text-base text-gray-200 mb-3 md:mb-4 slide-content">
                                Reliable performance, early maturity, and high yields for every season.
                            </p>
                            <a href="#products" class="inline-block px-4 py-1.5 md:px-5 md:py-2.5 rounded-md font-semibold text-white transition hover:opacity-90 slide-content text-sm md:text-base" style="background: var(--kwacha-green);">
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
                            <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-2 md:mb-3 slide-content" style="font-family: 'Playfair Display', serif;">
                                Abundant Harvests<br>
                                <span style="color: var(--accent-orange);">Season After Season</span>
                            </h1>
                            <p class="text-xs sm:text-sm md:text-base text-gray-200 mb-3 md:mb-4 slide-content">
                                Strong, reliable maize varieties that deliver consistent and high yields.
                            </p>
                            <a href="#products" class="inline-block px-4 py-1.5 md:px-5 md:py-2.5 rounded-md font-semibold text-white transition hover:opacity-90 slide-content text-sm md:text-base" style="background: var(--kwacha-green);">
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
                            <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-2 md:mb-3 slide-content" style="font-family: 'Playfair Display', serif;">
                                Growing Together<br>
                                <span style="color: var(--accent-orange);">With Malawi's Farmers</span>
                            </h1>
                            <p class="text-xs sm:text-sm md:text-base text-gray-200 mb-3 md:mb-4 slide-content">
                                We work hand in hand with farmers to improve yields, incomes, and livelihoods.
                            </p>
                            <a href="#contact" class="inline-block px-4 py-1.5 md:px-5 md:py-2.5 rounded-md font-semibold text-white transition hover:opacity-90 slide-content text-sm md:text-base" style="background: var(--kwacha-green);">
                                Get in Touch <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Dots Navigation -->
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
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Welcome to Kwacha Seeds</h2>
                <p class="text-gray-600 max-w-md mx-auto text-lg">
                    Your trusted partner for quality seeds in Malawi.
                </p>
                <div class="mt-8 flex flex-wrap gap-3 justify-center">
                    <div class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm">🌱 Quality Seeds</div>
                    <div class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm">🚜 Farmer Support</div>
                    <div class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm">📈 High Yields</div>
                    <div class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm">💪 Resilient Varieties</div>
                </div>
            </div>
        </div>
    </main>

    <!-- ========== FOOTER ========== -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center sm:text-left">
                    <div class="flex items-center justify-center sm:justify-start gap-3 mb-4">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 bg-white rounded-full flex items-center justify-center shadow-md flex-shrink-0">
                            <img src="{{ asset('images/kwacha_seeds_logo.png') }}" alt="Kwacha Seeds Logo" class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 object-contain">
                        </div>
                        <div class="flex-shrink-0">
                            <span class="text-lg sm:text-xl md:text-2xl font-bold" style="font-family: 'Playfair Display', serif;">Kwacha Seeds</span>
                            <p class="text-xs text-orange-400">Est. 2024</p>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm mb-3" style="font-family: 'Inter', sans-serif;">Empowering Malawian farmers with certified, high-yield seeds. Specializing in maize, soybeans, wheat, and groundnuts.</p>
                    <div class="flex items-center justify-center sm:justify-start gap-2 text-sm text-gray-400" style="font-family: 'Inter', sans-serif;">
                        <i class="fas fa-phone-alt text-orange-400 text-xs"></i>
                        <span>+265 998 823 330</span>
                    </div>
                </div>
                
                <div class="text-center sm:text-left">
                    <h4 class="font-semibold mb-3 text-lg" style="font-family: 'Inter', sans-serif;">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400 text-sm" style="font-family: 'Inter', sans-serif;">
                        <li><a href="#home" class="hover:text-orange-400 transition">Home</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition">About</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition">Products</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition">Farmer's Hub</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition">Stockists</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition">Contact</a></li>
                    </ul>
                </div>
                
                <div class="text-center sm:text-left">
                    <h4 class="font-semibold mb-3 text-lg" style="font-family: 'Inter', sans-serif;">Our Seeds</h4>
                    <ul class="space-y-2 text-gray-400 text-sm" style="font-family: 'Inter', sans-serif;">
                        <li class="hover:text-orange-400 transition cursor-pointer">Premium Maize</li>
                        <li class="hover:text-orange-400 transition cursor-pointer">Soybean (Chitedze 4)</li>
                        <li class="hover:text-orange-400 transition cursor-pointer">Wheat Kilimo</li>
                        <li class="hover:text-orange-400 transition cursor-pointer">Groundnut CG7</li>
                    </ul>
                </div>
                
                <div class="text-center sm:text-left">
                    <h4 class="font-semibold mb-3 text-lg" style="font-family: 'Inter', sans-serif;">Newsletter</h4>
                    <p class="text-gray-400 text-sm mb-3" style="font-family: 'Inter', sans-serif;">Get seasonal planting alerts & offers.</p>
                    <div class="flex max-w-xs mx-auto sm:mx-0">
                        <input type="email" placeholder="Your email" class="flex-1 p-2 rounded-l-md text-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-orange-500" style="font-family: 'Inter', sans-serif;">
                        <button class="bg-orange-500 px-4 rounded-r-md hover:bg-orange-600 transition">
                            <i class="fas fa-arrow-right text-white"></i>
                        </button>
                    </div>
                    <p class="text-xs text-gray-500 mt-3" style="font-family: 'Inter', sans-serif;">We respect your privacy. Unsubscribe anytime.</p>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-10 pt-6">
                <div class="flex flex-col gap-4 text-center">
                    <div>
                        <p class="text-gray-500 text-xs sm:text-sm" style="font-family: 'Inter', sans-serif;">
                            &copy; <span id="currentYear"></span> Kwacha Seeds Company
                        </p>
                        <p class="text-orange-400 text-xs sm:text-sm font-medium mt-1" style="font-family: 'Inter', sans-serif;">
                            Growing Malawi, One Seed at a Time.
                        </p>
                    </div>
                    <div class="flex flex-col sm:flex-row justify-center items-center gap-2 sm:gap-3">
                        <p class="text-gray-500 text-xs sm:text-sm" style="font-family: 'Inter', sans-serif;">
                            <i class="fas fa-code text-orange-400 mr-1"></i> 
                            Designed and Developed by <span class="text-orange-400 font-semibold">Innobotics</span>
                        </p>
                        <span class="hidden sm:inline text-gray-600">|</span>
                        <p class="text-gray-500 text-xs sm:text-sm" style="font-family: 'Inter', sans-serif;">
                            <i class="fas fa-phone-alt text-orange-400 mr-1"></i> 
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