<footer id="contact" style="background: var(--kwacha-green);" class="text-white py-12 mt-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <div class="text-center">
                <div class="logo-container flex items-center justify-center w-[75px] h-[75px] md:w-[85px] md:h-[85px] lg:w-[100px] lg:h-[100px] hover:scale-105 overflow-hidden mb-4 mx-auto" style="cursor: pointer;">
                    <img src="{{ asset('images/white log.png') }}" alt="Kwacha Seeds Logo" class="object-cover w-full h-full">
                </div>
                <p class="text-white/70 text-xs md:text-sm mt-3">Providing Top Reliable Seeds that Boosts Agricultural Productivity, Powered by a Purpose Driven Work Force</p>
            </div>
            
            <div class="text-center">
                <h4 class="font-semibold mb-3 text-lg text-white">Quick Links</h4>
                <ul class="space-y-2 text-white/70 text-sm">
                    <li><a href="{{ url('/#home') }}" class="hover:opacity-80 transition" style="color: var(--accent-orange);">Home</a></li>
                    <li><a href="{{ url('/#about') }}" class="hover:text-orange-400 transition">About</a></li>
                    <li><a href="{{ url('/#products') }}" class="hover:text-orange-400 transition">Products</a></li>
                    <li><a href="{{ url('/#farmers-hub') }}" class="hover:text-orange-400 transition">Farmer's Hub</a></li>
                    <li><a href="{{ url('/#dealers') }}" class="hover:text-orange-400 transition">Dealers</a></li>
                    <li><a href="{{ url('/gallery') }}" class="hover:text-orange-400 transition">Gallery</a></li>
                    <li><a href="{{ url('/#contact') }}" class="hover:text-orange-400 transition">Contact</a></li>
                </ul>
            </div>
            
            <div class="text-center">
                <h4 class="font-semibold mb-3 text-lg text-white">Contact Us</h4>
                <ul class="space-y-2 text-white/70 text-sm">
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
            
            <div class="text-center">
                <h4 class="font-semibold mb-3 text-lg text-white">Newsletter</h4>
                <p class="text-white/70 text-sm mb-2">Get seasonal planting alerts & offers.</p>
                <div class="flex max-w-xs mx-auto">
                    <input type="email" placeholder="Your email" class="flex-1 p-2 rounded-l-md text-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-orange-500">
                    <button class="px-4 rounded-r-md hover:opacity-80 transition" style="background: var(--accent-orange);">
                        <i class="fas fa-arrow-right text-white"></i>
                    </button>
                </div>
                <p class="text-xs text-white/50 mt-2">We respect your privacy. Unsubscribe anytime.</p>
            </div>
        </div>
        
        <div class="border-t border-white/20 mt-10 pt-6">
            <div class="flex flex-col gap-4 text-center">
                <div>
                    <p class="text-white/60 text-xs sm:text-sm">&copy; <span id="currentYear"></span> Kwacha Seeds Limited</p>
                    <p class="text-xs sm:text-sm font-medium mt-1" style="color: var(--accent-orange);">Providing Top Reliable Seeds</p>
                </div>
                <div class="flex flex-col sm:flex-row justify-center items-center gap-2 sm:gap-3">
                    <p class="text-white/60 text-xs sm:text-sm">Designed and Developed by <span style="color: var(--accent-orange); font-weight: 600;">ICT Masters</span></p>
                    <span class="hidden sm:inline text-white/30">|</span>
                    <p class="text-white/60 text-xs sm:text-sm"><i class="fas fa-phone-alt" style="color: var(--accent-orange); margin-right: 4px;"></i> +265 998 823 330</p>
                </div>
            </div>
        </div>
    </div>
</footer>