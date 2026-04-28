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
                    <a href="#gallery" class="nav-link text-gray-700 hover:text-orange-500 text-sm font-medium transition" style="font-family: 'Inter', sans-serif;">Gallery</a>
                    <a href="#testimonials" class="nav-link text-gray-700 hover:text-orange-500 text-sm font-medium transition" style="font-family: 'Inter', sans-serif;">Testimonials</a>
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
                    <a href="#gallery" class="text-gray-700 hover:text-orange-500 py-2" style="font-family: 'Inter', sans-serif;">Gallery</a>
                    <a href="#testimonials" class="text-gray-700 hover:text-orange-500 py-2" style="font-family: 'Inter', sans-serif;">Testmonials</a>
                    <a href="#contact" class="text-gray-700 hover:text-orange-500 py-2" style="font-family: 'Inter', sans-serif;">Contact</a>
                    
                    
                    <a href="#get-quote" class="px-5 py-2 text-sm font-semibold rounded-md text-center" style="background: var(--kwacha-green); color: white; font-family: 'Inter', sans-serif;">Get a Quote</a>
                </div>
            </div>
        </div>
    </nav>