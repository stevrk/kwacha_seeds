<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Kwacha Seeds | Navbar Preview</title>
    
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
        
        /* Navbar transition styles */
        .navbar {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        /* Top contact bar fade out */
        .top-contact-bar {
            transition: all 0.4s ease-in-out;
        }
        
        .top-contact-bar-shrink {
            opacity: 0;
            transform: translateY(-100%);
            display: none;
        }
        
        /* Large logo section - Original layout (visible before scroll) */
        .large-logo-section {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            transform-origin: center;
        }
        
        .large-logo-section-shrink {
            opacity: 0;
            transform: scale(0.8) translateY(-20px);
            pointer-events: none;
            height: 0;
            padding: 0;
            margin: 0;
            overflow: hidden;
            width: 0;
            display: none;
        }
        
        /* Nav links below (original layout) */
        .nav-links-below {
            transition: all 0.4s ease-in-out;
        }
        
        .nav-links-below-shrink {
            display: none;
        }
        
        /* Small brand container (hidden before scroll, appears on scroll) */
        .small-brand-container {
            transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            transform: scale(0) translateX(-30px);
            opacity: 0;
            display: none;
            align-items: center;
            gap: 12px;
        }
        
        .small-brand-container-show {
            transform: scale(1) translateX(0);
            opacity: 1;
            display: flex;
        }
        
        /* Nav links inline (hidden before scroll, appears on scroll) */
        .nav-links-inline {
            transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            transform: translateX(30px);
            opacity: 0;
            display: none;
        }
        
        .nav-links-inline-show {
            transform: translateX(0);
            opacity: 1;
            display: flex;
        }
        
        /* Contact info fade out */
        .contact-info-shrink {
            opacity: 0;
            transform: translateX(20px);
            pointer-events: none;
            display: none;
        }
        
        /* Navbar compact mode */
        .navbar-shrink {
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.15);
        }
        
        /* Hover effects */
        .small-logo-container:hover {
            transform: scale(1.05) rotate(5deg);
            transition: all 0.3s ease;
        }
        
        .small-brand-text:hover {
            transform: translateX(2px);
            transition: all 0.2s ease;
        }
        
        /* Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="antialiased">

<!-- ========== TOP CONTACT BAR ========== -->
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


<!-- ========== MAIN NAVIGATION ========== -->
<nav id="mainNavbar" class="navbar fixed top-0 left-0 w-full z-50 shadow-md" style="background: var(--kwacha-green);">
    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">
        
        <!-- ORIGINAL LAYOUT (visible before scroll) -->
        <div id="originalLayout">
            <!-- Row 1: Logo + Contact Info -->
            <div class="flex items-center justify-between py-4 md:py-5" id="originalRow1">
                <!-- Large Logo Section - BIGGER SIZE -->
                <div id="largeLogoSection" class="large-logo-section flex items-center gap-5">
                    <!-- Larger Circular Logo Container -->
                    <div class="rounded-full bg-white flex items-center justify-center shadow-lg flex-shrink-0" style="width: 70px; height: 70px;">
                        <img src="{{ asset('images/kwacha_seeds_logo.png') }}" alt="Kwacha Seeds Logo" class="w-19 h-19 object-contain">
                    </div>
                    <!-- Larger Brand Text -->
                    <div class="flex flex-col">
                        <span class="text-2xl md:text-3xl lg:text-4xl font-bold tracking-tight whitespace-nowrap" style="font-family: 'Inter', sans-serif; color: white;">
                            Kwacha <span style="color: var(--accent-orange);">Seeds</span>
                        </span>
                        <span class="text-[11px] md:text-sm text-white/80 tracking-wide hidden sm:block" style="font-family: 'Inter', sans-serif;">Empowering Malawi's Farmers</span>
                    </div>
                </div>
                
                <!-- Contact Info (original) -->
                <div id="contactInfo" class="hidden md:flex items-center gap-4 lg:gap-6">
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
            
            <!-- Row 2: Navigation Links (below) -->
            <div id="navLinksBelow" class="hidden md:flex items-center justify-center space-x-6 lg:space-x-8 py-3 border-t border-white/20 nav-links-below">
                <a href="#home" class="text-white/90 hover:text-white text-sm font-medium transition" style="font-family: 'Inter', sans-serif;">Home</a>
                <a href="#about" class="text-white/90 hover:text-white text-sm font-medium transition" style="font-family: 'Inter', sans-serif;">About</a>
                <a href="#products" class="text-white/90 hover:text-white text-sm font-medium transition" style="font-family: 'Inter', sans-serif;">Products</a>
                <a href="#farmers-hub" class="text-white/90 hover:text-white text-sm font-medium transition" style="font-family: 'Inter', sans-serif;">Farmer's Hub</a>
                <a href="#dealers" class="text-white/90 hover:text-white text-sm font-medium transition" style="font-family: 'Inter', sans-serif;">Dealers</a>
                <a href="#contact" class="text-white/90 hover:text-white text-sm font-medium transition" style="font-family: 'Inter', sans-serif;">Contact</a>
                <a href="#get-quote" class="px-5 py-2 text-sm font-semibold rounded-md shadow-md transition" style="background: white; color: var(--kwacha-green); font-family: 'Inter', sans-serif;">Get a Quote</a>
            </div>
        </div>
        
        <!-- SCROLL LAYOUT (appears when scrolling) - Single Row -->
        <div id="scrollLayout" class="flex items-center justify-between" style="display: none;">
            <!-- Left: Small Logo + Kwacha Seeds Text -->
            <div id="smallBrandContainer" class="small-brand-container">
                <div class="small-logo-container rounded-full bg-white flex items-center justify-center shadow-lg flex-shrink-0" style="width: 40px; height: 40px; cursor: pointer;">
                    <img src="{{ asset('images/kwacha_seeds_logo.png') }}" alt="Kwacha Seeds Logo" class="w-10 h-10 object-contain">
                </div>
                <div class="small-brand-text" style="font-family: 'Inter', sans-serif;">
                    <span class="text-lg md:text-xl font-bold tracking-tight whitespace-nowrap" style="color: white;">
                        Kwacha <span style="color: var(--accent-orange);">Seeds</span>
                    </span>
                </div>
            </div>
            
            <!-- Right: Navigation Links (inline, shifted right) -->
            <div id="navLinksInline" class="nav-links-inline items-center gap-6 lg:gap-8">
                <a href="#home" class="text-white/90 hover:text-white text-sm font-medium transition whitespace-nowrap" style="font-family: 'Inter', sans-serif;">Home</a>
                <a href="#about" class="text-white/90 hover:text-white text-sm font-medium transition whitespace-nowrap" style="font-family: 'Inter', sans-serif;">About</a>
                <a href="#products" class="text-white/90 hover:text-white text-sm font-medium transition whitespace-nowrap" style="font-family: 'Inter', sans-serif;">Products</a>
                <a href="#farmers-hub" class="text-white/90 hover:text-white text-sm font-medium transition whitespace-nowrap" style="font-family: 'Inter', sans-serif;">Farmer's Hub</a>
                <a href="#dealers" class="text-white/90 hover:text-white text-sm font-medium transition whitespace-nowrap" style="font-family: 'Inter', sans-serif;">Dealers</a>
                <a href="#contact" class="text-white/90 hover:text-white text-sm font-medium transition whitespace-nowrap" style="font-family: 'Inter', sans-serif;">Contact</a>
                <a href="#get-quote" class="px-5 py-2 text-sm font-semibold rounded-md shadow-md transition whitespace-nowrap" style="background: white; color: var(--kwacha-green); font-family: 'Inter', sans-serif;">Get a Quote</a>
            </div>
        </div>
        
        <!-- Mobile Menu (same for both layouts) -->
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
    <div class="min-h-[150vh] flex items-center justify-center bg-gradient-to-b from-gray-50 to-gray-100">
        <div class="text-center px-4">
            <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6 animate-bounce">
                <i class="fas fa-arrow-down text-green-600 text-4xl"></i>
            </div>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 mb-3">✨ Scroll Down to See the Magic ✨</h2>
            <p class="text-gray-500 max-w-md mx-auto">
                <strong class="text-orange-600">Before scroll:</strong> Larger logo (70px) + bigger brand text<br><br>
                <strong class="text-orange-600">When scrolling:</strong> Transforms into a <strong class="text-green-600">single row</strong> with<br>
                small logo + text on left, nav links shifted to the right!
            </p>
            <div class="mt-6 flex flex-wrap gap-3 justify-center">
                <div class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">📐 Larger logo (70px circle)</div>
                <div class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">📝 Bigger brand text (text-3xl/4xl)</div>
                <div class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">✅ Consistent 'Inter' font</div>
                <div class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">➡️ Scroll transforms to 1 row</div>
                <div class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">✨ Smooth elastic animation</div>
            </div>
            
            <!-- Scroll indicator -->
            <div class="mt-12">
                <div class="w-6 h-10 border-2 border-gray-400 rounded-full mx-auto relative">
                    <div class="w-1.5 h-1.5 bg-gray-400 rounded-full absolute top-2 left-1/2 transform -translate-x-1/2 animate-ping"></div>
                    <div class="w-1.5 h-1.5 bg-gray-500 rounded-full absolute top-2 left-1/2 transform -translate-x-1/2"></div>
                </div>
                <p class="text-xs text-gray-400 mt-2">Scroll down</p>
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

<script>
    // Set current year
    document.getElementById('currentYear').textContent = new Date().getFullYear();
    
    // Scroll magic - switch between original and scroll layout
    let ticking = false;
    const scrollThreshold = 50;
    
    function handleScroll() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const isScrolled = scrollTop > scrollThreshold;
        
        // Get elements
        const topContactBar = document.getElementById('topContactBar');
        const originalLayout = document.getElementById('originalLayout');
        const scrollLayout = document.getElementById('scrollLayout');
        const navbar = document.getElementById('mainNavbar');
        const smallBrandContainer = document.getElementById('smallBrandContainer');
        const navLinksInline = document.getElementById('navLinksInline');
        
        if (isScrolled) {
            // Switch to scroll layout (single row)
            originalLayout.style.display = 'none';
            scrollLayout.style.display = 'flex';
            
            // Animate the elements
            topContactBar?.classList.add('top-contact-bar-shrink');
            navbar?.classList.add('navbar-shrink');
            
            // Trigger animations for scroll layout elements
            setTimeout(() => {
                smallBrandContainer?.classList.add('small-brand-container-show');
                navLinksInline?.classList.add('nav-links-inline-show');
            }, 10);
            
        } else {
            // Switch back to original layout
            originalLayout.style.display = 'block';
            scrollLayout.style.display = 'none';
            
            // Remove animations
            topContactBar?.classList.remove('top-contact-bar-shrink');
            navbar?.classList.remove('navbar-shrink');
            smallBrandContainer?.classList.remove('small-brand-container-show');
            navLinksInline?.classList.remove('nav-links-inline-show');
        }
        
        ticking = false;
    }
    
    // Throttle scroll events for better performance
    window.addEventListener('scroll', () => {
        if (!ticking) {
            requestAnimationFrame(handleScroll);
            ticking = true;
        }
    });
    
    // Initial check
    handleScroll();
    
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