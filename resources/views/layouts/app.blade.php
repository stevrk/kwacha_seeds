<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>@yield('title', 'Kwacha Seeds')</title>
    
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
        
        .dot:nth-child(1) { animation-delay: 0s; }
        .dot:nth-child(2) { animation-delay: 0.2s; }
        .dot:nth-child(3) { animation-delay: 0.4s; }
        
        @keyframes bounce {
            0%, 60%, 100% { transform: translateY(0); opacity: 0.5; }
            30% { transform: translateY(-15px); opacity: 1; }
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
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
            transition: color 0.3s ease;
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
        
        /* Active nav link styling */
        .nav-link.active {
            color: var(--accent-orange) !important;
        }
        
        .nav-link.active::after {
            width: 100%;
            background: var(--accent-orange);
        }
        
        .btn-quote:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
        }
        
        .menu-icon {
            transition: all 0.3s ease-in-out;
        }
        
        .menu-icon.rotated {
            transform: rotate(90deg);
        }
        
        html {
            scroll-behavior: smooth;
        }
    </style>
    
    @stack('styles')
</head>
<body class="antialiased @yield('body-class')">

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
        <!--<p class="text-white/80 text-sm mt-4">Loading...</p>-->
    </div>
</div>

<!-- ========== MAIN CONTENT ========== -->
<div id="mainContent" class="main-content">
    
    @include('partials.navbar')
    
    <main>
        @yield('content')
    </main>
    
    @include('partials.footer')
    
</div>

<script>
    // Set current year
    const yearElement = document.getElementById('currentYear');
    if (yearElement) {
        yearElement.textContent = new Date().getFullYear();
    }
    
    // Loading screen simulation
    window.addEventListener('load', function() {
        setTimeout(function() {
            const loadingScreen = document.getElementById('loadingScreen');
            const mainContent = document.getElementById('mainContent');
            
            if (loadingScreen && mainContent) {
                loadingScreen.style.opacity = '0';
                
                setTimeout(function() {
                    loadingScreen.style.display = 'none';
                    mainContent.classList.add('visible');
                }, 500);
            }
        }, 1500);
    });
    
    // ========== MOBILE MENU FUNCTIONS ==========
    function closeMobileMenu() {
        const mobileMenuDiv = document.getElementById('mobileMenu');
        const menuIcon = document.getElementById('menuIcon');
        const menuBtn = document.getElementById('mobileMenuBtn');
        
        if (mobileMenuDiv && !mobileMenuDiv.classList.contains('hidden')) {
            mobileMenuDiv.classList.add('hidden');
            if (menuIcon && menuBtn) {
                menuIcon.classList.remove('fa-times');
                menuIcon.classList.add('fa-bars');
                menuBtn.classList.remove('rotated');
            }
        }
    }
    
    function toggleMobileMenu() {
        const mobileMenuDiv = document.getElementById('mobileMenu');
        const menuIcon = document.getElementById('menuIcon');
        const menuBtn = document.getElementById('mobileMenuBtn');
        
        if (mobileMenuDiv) {
            mobileMenuDiv.classList.toggle('hidden');
            
            if (!mobileMenuDiv.classList.contains('hidden')) {
                if (menuIcon && menuBtn) {
                    menuIcon.classList.remove('fa-bars');
                    menuIcon.classList.add('fa-times');
                    menuBtn.classList.add('rotated');
                }
            } else {
                if (menuIcon && menuBtn) {
                    menuIcon.classList.remove('fa-times');
                    menuIcon.classList.add('fa-bars');
                    menuBtn.classList.remove('rotated');
                }
            }
        }
    }
    
    // Mobile menu button event
    const menuBtn = document.getElementById('mobileMenuBtn');
    if (menuBtn) {
        menuBtn.addEventListener('click', toggleMobileMenu);
    }
    
    // ========== ACTIVE SECTION HIGHLIGHT ON SCROLL ==========
    document.addEventListener('DOMContentLoaded', function() {
        // Only run on home page (not on gallery page)
        const currentPath = window.location.pathname;
        const isHomePage = currentPath === '/' || currentPath === '';
        
        if (isHomePage) {
            // Get all sections and nav links
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link');
            
            if (sections.length === 0) return;
            
            // Function to update active section based on scroll position
            function updateActiveSection() {
                let currentSection = '';
                const scrollPosition = window.scrollY + 150;
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionBottom = sectionTop + section.offsetHeight;
                    
                    if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                        currentSection = section.getAttribute('id');
                    }
                });
                
                // Remove active class from all nav links
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    link.style.color = '';
                });
                
                // Add active class to corresponding nav link
                if (currentSection) {
                    const activeLink = document.querySelector(`.nav-link[href*="#${currentSection}"]`);
                    if (activeLink) {
                        activeLink.classList.add('active');
                        activeLink.style.color = 'var(--accent-orange)';
                    }
                }
                
                // If at the very top, highlight Home
                if (window.scrollY < 100) {
                    const homeLink = document.querySelector('.nav-link[href*="#home"]');
                    if (homeLink) {
                        homeLink.classList.add('active');
                        homeLink.style.color = 'var(--accent-orange)';
                    }
                }
            }
            
            // Throttled scroll event for better performance
            let ticking = false;
            window.addEventListener('scroll', function() {
                if (!ticking) {
                    requestAnimationFrame(function() {
                        updateActiveSection();
                        ticking = false;
                    });
                    ticking = true;
                }
            });
            
            // Call on load
            updateActiveSection();
        }
    });
    
    // ========== SMOOTH ANCHOR SCROLL WITH MENU CLOSE ==========
    // Close mobile menu when clicking on nav links
    const mobileNavLinks = document.querySelectorAll('#mobileMenu a');
    mobileNavLinks.forEach(link => {
        link.addEventListener('click', function() {
            closeMobileMenu();
        });
    });
    
    // Smooth anchor scroll for all hash links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            const target = document.querySelector(targetId);
            
            if (target) {
                e.preventDefault();
                
                // Close mobile menu
                closeMobileMenu();
                
                // Scroll to target
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
    
    // Close mobile menu when clicking outside (optional)
    document.addEventListener('click', function(event) {
        const mobileMenuDiv = document.getElementById('mobileMenu');
        const menuBtn = document.getElementById('mobileMenuBtn');
        
        if (mobileMenuDiv && !mobileMenuDiv.classList.contains('hidden')) {
            // Check if click is outside the menu and not on the menu button
            if (!mobileMenuDiv.contains(event.target) && !menuBtn.contains(event.target)) {
                closeMobileMenu();
            }
        }
    });
</script>

@stack('scripts')

</body>
</html>