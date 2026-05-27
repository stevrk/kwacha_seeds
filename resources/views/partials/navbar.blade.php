<nav class="fixed top-0 left-0 w-full z-50 shadow-md bg-white">
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8 xl:px-12">
        
        <!-- Top Row: Contact + Social (Green background) - DESKTOP ONLY -->
        <div class="hidden md:flex items-center justify-between py-2.5 px-4 rounded-b-lg mb-0" style="background: var(--kwacha-green); border-radius: 0 0 12px 12px;">
            
            <!-- Left Side: Contact Info -->
            <div class="flex items-center gap-6">
                <div class="flex items-center gap-2 text-white/90 text-sm">
                    <i class="fas fa-phone-alt" style="color: white; font-size: 12px;"></i>
                    <span>+265 998 823 330</span>
                </div>
                <div class="flex items-center gap-2 text-white/90 text-sm">
                    <i class="fas fa-envelope" style="color: white; font-size: 12px;"></i>
                    <span>info@kwachaseeds.mw</span>
                </div>
            </div>
            
            <!-- Right Side: Follow Us + Social Icons -->
            <div class="flex items-center gap-4">
                <span class="text-white/80 text-sm">Follow us online</span>
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
        <div class="flex items-center justify-between py-3 md:py-4">
            
            <!-- Logo Section -->
            <div class="flex items-center gap-2 md:gap-4 lg:gap-5 flex-shrink-0">
                <a href="{{ url('/') }}" class="logo-container flex items-center justify-center flex-shrink-0 w-[40px] h-[40px] md:w-[55px] md:h-[55px] lg:w-[65px] lg:h-[65px] hover:scale-105 overflow-hidden" style="cursor: pointer;">
                    <img src="{{ asset('images/midium quality.png') }}" alt="Kwacha Seeds Logo" class="object-cover w-full h-full">
                </a>

                <div class="flex flex-col leading-tight">
                    <span class="text-sm md:text-2xl lg:text-3xl xl:text-4xl font-bold tracking-tight whitespace-nowrap" style="font-family: 'Inter', sans-serif; color: var(--kwacha-green);">
                        Kwacha <span style="color: var(--accent-orange);">Seeds</span>
                    </span>
                    <span class="text-[8px] md:text-xs lg:text-sm text-gray-500 tracking-wide hidden sm:block">Providing Top Reliable Seeds</span>
                </div>
            </div>
            
            <!-- Desktop Navigation Links -->
            <!-- Desktop Navigation Links -->
<div class="hidden md:flex items-center space-x-4 lg:space-x-5 xl:space-x-6">
    <a href="{{ url('/#home') }}" class="nav-link text-gray-700 hover:text-orange-500 text-xs lg:text-sm font-medium transition whitespace-nowrap {{ request()->is('/') ? 'active' : '' }}" style="{{ request()->is('/') ? 'color: var(--accent-orange);' : '' }}">
        Home
    </a>
    <a href="{{ url('/#about') }}" class="nav-link text-gray-700 hover:text-orange-500 text-xs lg:text-sm font-medium transition whitespace-nowrap">
        About
    </a>
    <a href="{{ url('/#products') }}" class="nav-link text-gray-700 hover:text-orange-500 text-xs lg:text-sm font-medium transition whitespace-nowrap">
        Products
    </a>
    <a href="{{ url('/#farmers-hub') }}" class="nav-link text-gray-700 hover:text-orange-500 text-xs lg:text-sm font-medium transition whitespace-nowrap">
        Farmer's Hub
    </a>
    <a href="{{ url('/#dealers') }}" class="nav-link text-gray-700 hover:text-orange-500 text-xs lg:text-sm font-medium transition whitespace-nowrap">
        Dealers
    </a>
    <a href="{{ url('/gallery') }}" class="nav-link text-gray-700 hover:text-orange-500 text-xs lg:text-sm font-medium transition whitespace-nowrap {{ request()->is('gallery') ? 'active' : '' }}" style="{{ request()->is('gallery') ? 'color: var(--accent-orange);' : '' }}">
        Gallery
    </a>
    <a href="{{ url('/#testimonials') }}" class="nav-link text-gray-700 hover:text-orange-500 text-xs lg:text-sm font-medium transition whitespace-nowrap">
        Testimonials
    </a>
    <a href="{{ url('/#contact') }}" class="nav-link text-gray-700 hover:text-orange-500 text-xs lg:text-sm font-medium transition whitespace-nowrap">
        Contact
    </a>
    <a href="{{ url('/quote') }}" class="btn-quote px-4 py-1.5 lg:px-5 lg:py-2 text-xs lg:text-sm font-semibold rounded-md shadow-md transition whitespace-nowrap" style="background: var(--kwacha-green); color: white;">
    Get a Quote
</a>
</div>
            
            <!-- Mobile Menu Button -->
            <button id="mobileMenuBtn" class="md:hidden text-gray-700 text-2xl focus:outline-none menu-icon">
                <i id="menuIcon" class="fas fa-bars"></i>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden pb-6">
            <div class="flex flex-col space-y-3 text-center">
                <div class="pt-3 pb-3 rounded-lg mb-2" style="background: var(--kwacha-green);">
                    <div class="text-white/90 text-sm space-y-2">
                        <div><i class="fas fa-phone-alt" style="color: var(--accent-orange); margin-right: 8px;"></i> +265 998 823 330</div>
                        <div><i class="fas fa-envelope" style="color: var(--accent-orange); margin-right: 8px;"></i> info@kwachaseeds.mw</div>
                        <div class="flex justify-center gap-4 pt-2">
                            <a href="#" class="text-white/80 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-white/80 hover:text-white"><i class="fab fa-whatsapp"></i></a>
                            <a href="#" class="text-white/80 hover:text-white"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-white/80 hover:text-white"><i class="fab fa-tiktok"></i></a>
                            <a href="#" class="text-white/80 hover:text-white"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <a href="{{ url('/#home') }}" class="text-gray-700 hover:text-orange-500 py-2 {{ request()->is('/') ? 'text-orange-500 font-semibold' : '' }}">
                    Home
                </a>
                <a href="{{ url('/#about') }}" class="text-gray-700 hover:text-orange-500 py-2">
                    About
                </a>
                <a href="{{ url('/#products') }}" class="text-gray-700 hover:text-orange-500 py-2">
                    Products
                </a>
                <a href="{{ url('/#farmers-hub') }}" class="text-gray-700 hover:text-orange-500 py-2">
                    Farmer's Hub
                </a>
                <a href="{{ url('/#dealers') }}" class="text-gray-700 hover:text-orange-500 py-2">
                    Dealers
                </a>
                <a href="{{ url('/gallery') }}" class="text-gray-700 hover:text-orange-500 py-2 {{ request()->is('gallery') ? 'text-orange-500 font-semibold' : '' }}">
                    Gallery
                </a>
                <a href="{{ url('/#testimonials') }}" class="text-gray-700 hover:text-orange-500 py-2">
                    Testimonials
                </a>
                <a href="{{ url('/#contact') }}" class="text-gray-700 hover:text-orange-500 py-2">
                    Contact
                </a>
                <a href="{{ url('/quote') }}" class="btn-quote px-4 py-1.5 lg:px-5 lg:py-2 text-xs lg:text-sm font-semibold rounded-md shadow-md transition whitespace-nowrap" style="background: var(--kwacha-green); color: white;">
                    Get a Quote
                </a>
            </div>
        </div>
    </div>
</nav>

<style>
    /* Active link styling */
    .nav-link.active {
        color: var(--accent-orange) !important;
    }
    
    .nav-link.active::after {
        width: 100%;
        background: var(--accent-orange);
    }
</style>