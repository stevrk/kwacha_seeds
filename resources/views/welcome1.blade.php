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
                
                <!-- Large Logo Section -->
                <div class="flex items-center gap-5">
                    <!-- Large Circular Logo Container -->
                    <div class="logo-container rounded-full bg-white flex items-center justify-center shadow-lg flex-shrink-0" style="width: 70px; height: 70px; cursor: pointer;">
                        <img src="{{ asset('images/kwacha_seeds_logo.png') }}" alt="Kwacha Seeds Logo" class="w-19 h-19 object-contain">
                    </div>
                    <!-- Large Brand Text -->
                    <div class="flex flex-col">
                        <span class="text-2xl md:text-3xl lg:text-4xl font-bold tracking-tight whitespace-nowrap" style="font-family: 'Inter', sans-serif; color: white;">
                            Kwacha <span style="color: var(--accent-orange);">Seeds</span>
                        </span>
                        <span class="text-[11px] md:text-sm text-white/80 tracking-wide hidden sm:block" style="font-family: 'Inter', sans-serif;">Empowering Malawi's Farmers</span>
                    </div>
                </div>
                
                <!-- Contact Info -->
                <div class="hidden md:flex items-center gap-4 lg:gap-6">
                    <div class="flex items-center gap-2 text-white/80 text-sm" style="font-family: 'Inter', sans-serif;">
                        <i class="fas fa-phone-alt text-orange-400 text-xs"></i>
                        <span>+265 998 823 330</span>
                    </div>
                    <div class="flex items-center gap-2 text-white/80 text-sm" style="font-family: 'Inter', sans-serif;">
                        <i class="fas fa-envelope text-orange-400 text-xs"></i>
                        <span>info@kwachaseeds.mw</span>
                    </div>
                    <div class="flex items-center gap-3 border-l border-white/20 pl-4">
                        <a href="#" class="text-white/70 hover:text-white transition"><i class="fab fa-facebook-f text-base"></i></a>
                        <a href="#" class="text-white/70 hover:text-white transition"><i class="fab fa-whatsapp text-base"></i></a>
                        <a href="#" class="text-white/70 hover:text-white transition"><i class="fab fa-instagram text-base"></i></a>
                        <a href="#" class="text-white/70 hover:text-white transition"><i class="fab fa-twitter text-base"></i></a>
                    </div>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobileMenuBtn" class="md:hidden text-white text-2xl">
                    <i class="fas fa-bars"></i>
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

    <!-- ========== MAIN CONTENT ========== -->
    <main class="mt-[160px] md:mt-[180px]">
        <div class="min-h-screen flex items-center justify-center bg-gradient-to-b from-gray-50 to-gray-100">
            <div class="text-center px-4">
                <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-check-circle text-green-600 text-5xl"></i>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Clean Navbar - No Scroll Effect</h2>
                <p class="text-gray-600 max-w-md mx-auto text-lg">
                    This version has a <strong class="text-orange-600">fixed large navbar</strong> that never shrinks.<br>
                    Perfect for desktop viewing!
                </p>
                <div class="mt-8 flex flex-wrap gap-3 justify-center">
                    <div class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm">📐 Large logo (70px circle)</div>
                    <div class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm">📝 Big brand text (text-3xl/4xl)</div>
                    <div class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm">✅ Consistent 'Inter' font</div>
                    <div class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm">🎯 No scroll transformation</div>
                    <div class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm">💫 Smooth hover effects</div>
                </div>
                
                <!-- Navigation hint -->
                <div class="mt-10 p-4 bg-white rounded-lg shadow-md max-w-md mx-auto">
                    <p class="text-gray-500 text-sm">
                        <i class="fas fa-mouse-pointer text-orange-500 mr-2"></i>
                        Hover over the nav links to see the underline animation!
                    </p>
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
                        <li><a href="#" class="hover:text-orange-400 transition">Home</a></li>
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
        // Wait 1.5 seconds to show the loading animation
        setTimeout(function() {
            const loadingScreen = document.getElementById('loadingScreen');
            const mainContent = document.getElementById('mainContent');
            
            // Fade out loading screen
            loadingScreen.style.opacity = '0';
            
            // After fade out, hide loading screen and show main content
            setTimeout(function() {
                loadingScreen.style.display = 'none';
                mainContent.classList.add('visible');
            }, 500);
        }, 1500); // Adjust this value to control how long the loading screen shows
    });
    
    // Mobile menu toggle
    const menuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenuDiv = document.getElementById('mobileMenu');
    if(menuBtn) {
        menuBtn.addEventListener('click', () => {
            mobileMenuDiv.classList.toggle('hidden');
        });
    }
    
    // Smooth anchor scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const target = document.querySelector(this.getAttribute('href'));
            if(target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                if(mobileMenuDiv) mobileMenuDiv.classList.add('hidden');
            }
        });
    });
</script>

</body>
</html>