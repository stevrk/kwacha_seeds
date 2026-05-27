@extends('layouts.app')

@section('title', 'Kwacha Seeds - Home')

@section('content')
<!-- ========== HERO CAROUSEL SECTION ========== -->

<section id="home" class="relative overflow-hidden" style="background: linear-gradient(135deg, #0a3b0a 0%, #0e4e0e 100%);">
    <div class="relative w-full">
        <!-- Spacer for fixed navbar -->
        <div class="h-[70px] md:h-[140px] lg:h-[150px]"></div>
        
        <div id="carousel" class="relative min-h-[420px] sm:min-h-[450px] md:min-h-[420px] overflow-hidden">
            
            <!-- Slide 1 - Soya Field -->
            <div class="carousel-slide absolute inset-0 opacity-100 transition-all duration-700" data-active="true">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 h-full">
                    <div class="flex flex-col md:flex-row items-center justify-between gap-6 md:gap-12 py-4 md:py-6">
                        
                        <!-- Left Side: Image -->
                        <div class="w-full md:w-1/2">
                            <div class="rounded-2xl overflow-hidden shadow-2xl bg-gray-100">
                                <img src="{{ asset('images/soya_field.jpg') }}" class="w-full h-[200px] sm:h-[240px] md:h-[350px] object-cover" alt="Soya field">
                            </div>
                        </div>
                        
                        <!-- Right Side: Text Content -->
                        <div class="w-full md:w-1/2 text-center md:text-left">
                            <div class="max-w-lg mx-auto md:mx-0">
                                <span class="inline-block text-orange-400 text-xs sm:text-sm font-semibold uppercase tracking-wide mb-1">Premium Seeds</span>
                                <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold mb-2 leading-tight text-white" style="font-family: 'Inter', sans-serif;">
                                    Fast-Maturing <span style="color: var(--accent-orange);">Seeds</span>
                                </h1>
                                <p class="text-white/80 text-xs sm:text-sm md:text-base mb-0 leading-relaxed" style="font-family: 'Inter', sans-serif;">
                                    Reliable performance, early maturity, and high yields for every season.
                                </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <!-- Slide 2 - Maize Harvest -->
            <div class="carousel-slide absolute inset-0 opacity-0 transition-all duration-700" data-active="false">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 h-full">
                    <div class="flex flex-col md:flex-row items-center justify-between gap-6 md:gap-12 py-4 md:py-6">
                        
                        <!-- Left Side: Image -->
                        <div class="w-full md:w-1/2">
                            <div class="rounded-2xl overflow-hidden shadow-2xl bg-gray-100">
                                <img src="{{ asset('images/malawi_harvest.jpg') }}" class="w-full h-[200px] sm:h-[240px] md:h-[350px] object-cover" alt="Maize harvest">
                            </div>
                        </div>
                        
                        <!-- Right Side: Text Content -->
                        <div class="w-full md:w-1/2 text-center md:text-left">
                            <div class="max-w-lg mx-auto md:mx-0">
                                <span class="inline-block text-orange-400 text-xs sm:text-sm font-semibold uppercase tracking-wide mb-1">Best Seller</span>
                                <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold mb-2 leading-tight text-white" style="font-family: 'Inter', sans-serif;">
                                    Abundant <span style="color: var(--accent-orange);">Harvests</span>
                                </h1>
                                <p class="text-white/80 text-xs sm:text-sm md:text-base mb-0 leading-relaxed" style="font-family: 'Inter', sans-serif;">
                                    Strong, reliable maize varieties that deliver consistent yields.
                                </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <!-- Slide 3 - Farmer Support -->
            <div class="carousel-slide absolute inset-0 opacity-0 transition-all duration-700" data-active="false">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 h-full">
                    <div class="flex flex-col md:flex-row items-center justify-between gap-6 md:gap-12 py-4 md:py-6">
                        
                        <!-- Left Side: Image -->
                        <div class="w-full md:w-1/2">
                            <div class="rounded-2xl overflow-hidden shadow-2xl bg-gray-100">
                                <img src="{{ asset('images/Farmer_guide.jpg') }}" class="w-full h-[200px] sm:h-[240px] md:h-[350px] object-cover" alt="Farmer support">
                            </div>
                        </div>
                        
                        <!-- Right Side: Text Content -->
                        <div class="w-full md:w-1/2 text-center md:text-left">
                            <div class="max-w-lg mx-auto md:mx-0">
                                <span class="inline-block text-orange-400 text-xs sm:text-sm font-semibold uppercase tracking-wide mb-1">Community First</span>
                                <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold mb-2 leading-tight text-white" style="font-family: 'Inter', sans-serif;">
                                    Growing <span style="color: var(--accent-orange);">Together</span>
                                </h1>
                                <p class="text-white/80 text-xs sm:text-sm md:text-base mb-0 leading-relaxed" style="font-family: 'Inter', sans-serif;">
                                    We work hand in hand with farmers to improve livelihoods.
                                </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- Navigation Dots -->
        <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex gap-2 z-20">
            <span class="dot-nav w-2 h-2 rounded-full cursor-pointer transition-all" style="background:#ffffff;"></span>
            <span class="dot-nav w-2 h-2 rounded-full cursor-pointer transition-all" style="background:rgba(255,255,255,0.4);"></span>
            <span class="dot-nav w-2 h-2 rounded-full cursor-pointer transition-all" style="background:rgba(255,255,255,0.4);"></span>
        </div>
        
        <!-- Navigation Arrows - Hidden on mobile, visible on tablet+ -->
        <button id="prevSlide" class="carousel-btn hidden sm:flex absolute left-2 sm:left-4 top-1/2 -translate-y-1/2 w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-white/20 hover:bg-white/40 text-white shadow-md transition-all duration-300 items-center justify-center z-20 backdrop-blur-sm">
            <i class="fas fa-chevron-left text-xs sm:text-sm"></i>
        </button>
        
        <button id="nextSlide" class="carousel-btn hidden sm:flex absolute right-2 sm:right-4 top-1/2 -translate-y-1/2 w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-white/20 hover:bg-white/40 text-white shadow-md transition-all duration-300 items-center justify-center z-20 backdrop-blur-sm">
            <i class="fas fa-chevron-right text-xs sm:text-sm"></i>
        </button>
        
    </div>
</section>

<style>
    /* Carousel transitions */
    .carousel-slide {
        transition: opacity 0.7s ease-in-out;
    }
    
    /* Carousel button hover */
    .carousel-btn {
        backdrop-filter: blur(4px);
    }
    
    .carousel-btn:hover {
        transform: scale(1.05);
    }
    
    /* Dot navigation */
    .dot-nav {
        transition: all 0.3s ease;
    }
    
    .dot-nav:hover {
        transform: scale(1.2);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.carousel-slide');
        const dots = document.querySelectorAll('.dot-nav');
        const prevBtn = document.getElementById('prevSlide');
        const nextBtn = document.getElementById('nextSlide');
        
        if (!slides.length) return;
        
        let currentIndex = 0;
        let autoTimer = null;
        let isTransitioning = false;
        
        function updateSlide(index) {
            if (isTransitioning) return;
            isTransitioning = true;
            
            slides.forEach((slide, i) => {
                if (i === index) {
                    slide.style.opacity = '1';
                    slide.style.visibility = 'visible';
                    slide.setAttribute('data-active', 'true');
                } else {
                    slide.style.opacity = '0';
                    slide.style.visibility = 'hidden';
                    slide.setAttribute('data-active', 'false');
                }
            });
            
            dots.forEach((dot, i) => {
                if (i === index) {
                    dot.style.background = '#ffffff';
                    dot.style.transform = 'scale(1.2)';
                } else {
                    dot.style.background = 'rgba(255,255,255,0.4)';
                    dot.style.transform = 'scale(1)';
                }
            });
            
            currentIndex = index;
            
            setTimeout(() => {
                isTransitioning = false;
            }, 700);
        }
        
        function nextSlide() {
            let newIndex = (currentIndex + 1) % slides.length;
            updateSlide(newIndex);
            resetAutoTimer();
        }
        
        function prevSlide() {
            let newIndex = (currentIndex - 1 + slides.length) % slides.length;
            updateSlide(newIndex);
            resetAutoTimer();
        }
        
        function resetAutoTimer() {
            if (autoTimer) clearInterval(autoTimer);
            autoTimer = setInterval(nextSlide, 6000);
        }
        
        if (prevBtn) prevBtn.addEventListener('click', prevSlide);
        if (nextBtn) nextBtn.addEventListener('click', nextSlide);
        
        dots.forEach((dot, i) => {
            dot.addEventListener('click', () => {
                updateSlide(i);
                resetAutoTimer();
            });
        });
        
        // Touch swipe for mobile
        let touchStartX = 0;
        let touchEndX = 0;
        
        const carousel = document.getElementById('carousel');
        
        if (carousel) {
            carousel.addEventListener('mouseenter', () => {
                if (autoTimer) clearInterval(autoTimer);
                autoTimer = null;
            });
            
            carousel.addEventListener('mouseleave', () => {
                autoTimer = setInterval(nextSlide, 6000);
            });
            
            carousel.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
                if (autoTimer) clearInterval(autoTimer);
                autoTimer = null;
            });
            
            carousel.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].screenX;
                const diff = touchStartX - touchEndX;
                if (Math.abs(diff) > 50) {
                    if (diff > 0) {
                        nextSlide();
                    } else {
                        prevSlide();
                    }
                }
                autoTimer = setInterval(nextSlide, 6000);
            });
        }
        
        updateSlide(0);
        autoTimer = setInterval(nextSlide, 6000);
    });
</script>


<!-- ========== PRODUCTS SECTION ========== -->

<section id="products" class="py-16 md:py-24" style="background: white;">
    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">
        
        <!-- Section Header -->
        <div class="text-center mb-12 md:mb-16">
            <span class="text-sm md:text-base font-semibold tracking-wide uppercase" style="color: var(--accent-orange); letter-spacing: 2px;">Our Premium Range</span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mt-2 mb-4" style="font-family: 'Inter', sans-serif; color: var(--kwacha-green);">
                Our Products
            </h2>
            <div class="w-20 h-1 mx-auto rounded-full" style="background: var(--accent-orange);"></div>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">High-quality, high-yielding seed varieties trusted by farmers across Malawi</p>
        </div>
        
        <!-- Products Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Product 1 - Soybean (Chitedze 4) -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-2 border-green-200 hover:border-green-500" style="border-color: var(--kwacha-green);">
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
                    <a href="{{ url('/quote?product=Soybean&type=soybean&packSize=2') }}" class="enquire-btn w-full mt-4 px-4 py-2 rounded-lg font-semibold transition-all duration-300 hover:transform hover:scale-105 inline-block text-center" style="background: var(--kwacha-green); color: white;">
                        <i class="fas fa-shopping-cart mr-2"></i> Enquire Now
                    </a>
                </div>
            </div>
            
            <!-- Product 2 - Wheat (KARS Wheat 52) -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-2 border-green-200 hover:border-green-500" style="border-color: var(--kwacha-green);">
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
                    <a href="{{ url('/quote?product=Wheat&type=wheat&packSize=2') }}" class="enquire-btn w-full mt-4 px-4 py-2 rounded-lg font-semibold transition-all duration-300 hover:transform hover:scale-105 inline-block text-center" style="background: var(--kwacha-green); color: white;">
                        <i class="fas fa-shopping-cart mr-2"></i> Enquire Now
                    </a>
                </div>
            </div>
            
            <!-- Product 3 - White Maize (MH36) -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-2 border-green-200 hover:border-green-500" style="border-color: var(--kwacha-green);">
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
                    <a href="{{ url('/quote?product=White+Maize&type=maize&packSize=2') }}" class="enquire-btn w-full mt-4 px-4 py-2 rounded-lg font-semibold transition-all duration-300 hover:transform hover:scale-105 inline-block text-center" style="background: var(--kwacha-green); color: white;">
                        <i class="fas fa-shopping-cart mr-2"></i> Enquire Now
                    </a>
                </div>
            </div>
            
            <!-- Product 4 - Orange Maize (MH42A) -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-2 border-green-200 hover:border-green-500" style="border-color: var(--kwacha-green);">
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
                    <a href="{{ url('/quote?product=Orange+Maize&type=orange-maize&packSize=2') }}" class="enquire-btn w-full mt-4 px-4 py-2 rounded-lg font-semibold transition-all duration-300 hover:transform hover:scale-105 inline-block text-center" style="background: var(--kwacha-green); color: white;">
                        <i class="fas fa-shopping-cart mr-2"></i> Enquire Now
                    </a>
                </div>
            </div>
            
            <!-- Product 5 - Groundnut (CG9) -->
            <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-2 border-green-200 hover:border-green-500" style="border-color: var(--kwacha-green);">
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
                    <a href="{{ url('/quote?product=Groundnut&type=groundnut&packSize=2') }}" class="enquire-btn w-full mt-4 px-4 py-2 rounded-lg font-semibold transition-all duration-300 hover:transform hover:scale-105 inline-block text-center" style="background: var(--kwacha-green); color: white;">
                        <i class="fas fa-shopping-cart mr-2"></i> Enquire Now
                    </a>
                </div>
            </div>
            
        </div>
        
    </div>
</section>

<!--Testimonials-->
<section id="testimonials" class="py-16 md:py-24" style="background: linear-gradient(135deg, var(--kwacha-green) 0%, #0e4e0e 100%);">
    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">
        
        <!-- Section Header -->
        <div class="text-center mb-12">
            <span class="text-sm md:text-base font-semibold tracking-wide uppercase" style="color: var(--accent-orange); letter-spacing: 2px;">Success Stories</span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mt-2 mb-4" style="font-family: 'Inter', sans-serif; color: white;">
                What Farmers Say<!--<span style="color: var(--accent-orange);">Farmers Say</span>-->
            </h2>
            <div class="w-20 h-1 mx-auto rounded-full" style="background: var(--accent-orange);"></div>
            <p class="text-white/80 mt-4 max-w-2xl mx-auto">Real stories from farmers and partners who trust Kwacha Seeds</p>
        </div>
        
        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="testimonialsGrid">
            <!-- Testimonials will be loaded here -->
        </div>
        
    </div>
</section>

<style>
    /* Testimonial Card Styles - HORIZONTAL WITH LARGER TEXT */
    .testimonial-card {
        background: white;
        border-radius: 16px;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 16px;
    }
    
    .testimonial-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        background: #fefefe;
    }
    
    /* Person Avatar */
    .person-avatar {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--kwacha-green) 0%, #0e4e0e 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .person-avatar i {
        font-size: 30px;
        color: white;
    }
    
    /* Card Content */
    .testimonial-content {
        flex: 1;
        min-width: 0;
    }
    
    .person-name {
        font-size: 18px;
        font-weight: 700;
        color: var(--kwacha-green);
        margin-bottom: 4px;
    }
    
    .person-position {
        font-size: 13px;
        font-weight: 600;
        color: var(--accent-orange);
        margin-bottom: 4px;
    }
    
    .person-org {
        font-size: 12px;
        color: #666;
        display: flex;
        align-items: center;
        gap: 4px;
        margin-bottom: 8px;
    }
    
    .person-org i {
        font-size: 11px;
        color: var(--accent-orange);
    }
    
    /* Read More Link */
    .read-more-link {
        font-size: 13px;
        font-weight: 600;
        color: var(--accent-orange);
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: all 0.2s;
    }
    
    .read-more-link:hover {
        gap: 10px;
        color: var(--kwacha-green);
    }
    
    .read-more-link i {
        font-size: 12px;
    }
    
    /* Modal Styles */
    .testimonial-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.95);
        z-index: 10050;
        justify-content: center;
        align-items: center;
        backdrop-filter: blur(5px);
    }
    
    .testimonial-modal.active {
        display: flex;
    }
    
    .testimonial-modal-content {
        background: white;
        border-radius: 24px;
        max-width: 550px;
        width: 90%;
        position: relative;
        animation: modalPopIn 0.4s ease-out;
        overflow: hidden;
    }
    
    @keyframes modalPopIn {
        from {
            opacity: 0;
            transform: scale(0.9) translateY(20px);
        }
        to {
            opacity: 1;
            transform: scale(1) translateY(0);
        }
    }
    
    .testimonial-modal-header {
        background: linear-gradient(135deg, var(--kwacha-green) 0%, #0e4e0e 100%);
        padding: 20px 25px;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .testimonial-modal-header h3 {
        margin: 0;
        font-size: 1.3rem;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .testimonial-modal-close {
        font-size: 28px;
        cursor: pointer;
        transition: transform 0.2s;
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: rgba(255,255,255,0.2);
    }
    
    .testimonial-modal-close:hover {
        transform: rotate(90deg);
        background: rgba(255,255,255,0.3);
    }
    
    .testimonial-modal-body {
        padding: 25px;
    }
    
    .modal-person-info {
        display: flex;
        gap: 15px;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 1px solid #eee;
    }
    
    .modal-avatar {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, var(--kwacha-green) 0%, #0e4e0e 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    
    .modal-avatar i {
        font-size: 32px;
        color: white;
    }
    
    .modal-details {
        flex: 1;
    }
    
    .modal-name {
        font-size: 20px;
        font-weight: 700;
        color: var(--kwacha-green);
        margin-bottom: 4px;
    }
    
    .modal-position {
        font-size: 14px;
        color: var(--accent-orange);
        font-weight: 500;
        margin-bottom: 4px;
    }
    
    .modal-org {
        font-size: 13px;
        color: #888;
        margin-bottom: 8px;
    }
    
    .modal-rating {
        display: flex;
        gap: 3px;
    }
    
    .modal-rating i {
        font-size: 14px;
        color: #ffc107;
    }
    
    .modal-rating i.far {
        color: #ddd;
    }
    
    .modal-testimonial {
        font-size: 15px;
        line-height: 1.7;
        color: #444;
        margin-top: 20px;
        font-style: italic;
    }
    
    .modal-testimonial::before {
        content: '"';
        font-size: 40px;
        color: var(--accent-orange);
        opacity: 0.3;
        position: relative;
        top: 10px;
        left: -5px;
        font-family: serif;
    }
</style>

<script>
    // ========== TESTIMONIALS DATA ==========
    const testimonialsData = [
        {
            id: 1,
            name: "John Banda",
            position: "Lead Farmer",
            organization: "Kasungu Farmers Cooperative",
            testimonial: "Kwacha Seeds has transformed our farming cooperative. The MH36 maize variety gave us the highest yield we've ever recorded - 9 tons per hectare! The seeds are drought-resistant and the support team is always available to help. I highly recommend Kwacha Seeds to any farmer looking to improve their harvest.",
            rating: 5
        },
        {
            id: 2,
            name: "Grace Phiri",
            position: "Agri-Business Owner",
            organization: "Phiri Farms Ltd",
            testimonial: "I've been using Chitedze 4 soybean seeds for two seasons now. The germination rate is excellent and the plants are very disease-resistant. My profits have increased by 40% since switching to Kwacha Seeds. The quality is unmatched!",
            rating: 5
        },
        {
            id: 3,
            name: "Michael Chavula",
            position: "Agricultural Extension Officer",
            organization: "Ministry of Agriculture",
            testimonial: "As an extension officer, I recommend Kwacha Seeds to all farmers I work with. Their seeds are certified, consistently high-performing, and backed by excellent agronomic support. The MH42A orange maize is particularly impressive for its nutritional value and drought tolerance.",
            rating: 5
        },
        {
            id: 4,
            name: "Esther Mwale",
            position: "Smallholder Farmer",
            organization: "Dedza Women Farmers Group",
            testimonial: "The KARS 52 wheat variety has been a game-changer for my farm. It matures early so I can harvest before the rains come. The support from Kwacha Seeds has been incredible - they even came to my farm to give planting advice. My yields have doubled!",
            rating: 4
        },
        {
            id: 5,
            name: "David Chimwala",
            position: "Farm Manager",
            organization: "Green Valley Estates",
            testimonial: "We've been using Kwacha Seeds exclusively for our 200-hectare farm. The consistency and quality are unmatched. The CG9 groundnuts have excellent shelling percentage and market demand is very high. Best decision we ever made.",
            rating: 5
        },
        {
            id: 6,
            name: "Dr. Sarah Kachingwe",
            position: "Agricultural Researcher",
            organization: "Lilongwe University of Agriculture",
            testimonial: "From a research perspective, Kwacha Seeds maintains excellent quality control. We've tested their seeds in our trials and the results consistently exceed expectations. A trusted partner for Malawian agriculture and food security.",
            rating: 5
        }
    ];
    
    // Render stars for modal
    function renderStars(rating) {
        let stars = '';
        for (let i = 1; i <= 5; i++) {
            if (i <= rating) {
                stars += '<i class="fas fa-star"></i>';
            } else {
                stars += '<i class="far fa-star"></i>';
            }
        }
        return stars;
    }
    
    // Show testimonial modal
    function showTestimonialModal(testimonial) {
        const modal = document.getElementById('testimonialModal');
        const modalName = document.getElementById('modalName');
        const modalPosition = document.getElementById('modalPosition');
        const modalOrg = document.getElementById('modalOrg');
        const modalTestimonial = document.getElementById('modalTestimonial');
        const modalRating = document.getElementById('modalRating');
        
        if (modal) {
            modalName.textContent = testimonial.name;
            modalPosition.textContent = testimonial.position;
            modalOrg.textContent = testimonial.organization;
            modalTestimonial.textContent = testimonial.testimonial;
            modalRating.innerHTML = renderStars(testimonial.rating);
            modal.classList.add('active');
        }
    }
    
    function closeTestimonialModal() {
        const modal = document.getElementById('testimonialModal');
        if (modal) {
            modal.classList.remove('active');
        }
    }
    
    // Render testimonials grid
    function renderTestimonials() {
        const grid = document.getElementById('testimonialsGrid');
        if (!grid) return;
        
        if (testimonialsData.length === 0) {
            grid.innerHTML = `
                <div class="col-span-full text-center py-12">
                    <i class="fas fa-comments text-4xl text-white/50 mb-3"></i>
                    <p class="text-white/70">Testimonials coming soon...</p>
                </div>
            `;
            return;
        }
        
        grid.innerHTML = testimonialsData.map(testimonial => `
            <div class="testimonial-card" data-id="${testimonial.id}" onclick="showTestimonialModal(${JSON.stringify(testimonial).replace(/"/g, '&quot;')})">
                <div class="person-avatar">
                    <i class="fas fa-user-circle"></i>
                </div>
                <div class="testimonial-content">
                    <h3 class="person-name">${testimonial.name}</h3>
                    <p class="person-position">${testimonial.position}</p>
                    <p class="person-org">
                        <i class="fas fa-building"></i>
                        <span>${testimonial.organization}</span>
                    </p>
                    <div class="read-more-link" onclick="event.stopPropagation(); showTestimonialModal(${JSON.stringify(testimonial).replace(/"/g, '&quot;')})">
                        Read full story <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        `).join('');
    }
    
    // Initialize testimonials on page load
    document.addEventListener('DOMContentLoaded', function() {
        renderTestimonials();
        
        // Setup modal close handlers
        const modal = document.getElementById('testimonialModal');
        const closeBtn = document.querySelector('.testimonial-modal-close');
        
        if (modal) {
            modal.addEventListener('click', (e) => {
                if (e.target === modal) closeTestimonialModal();
            });
        }
        
        if (closeBtn) closeBtn.addEventListener('click', closeTestimonialModal);
        
        // Close with escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeTestimonialModal();
            }
        });
    });
</script>

<!-- Testimonial Modal -->
<div id="testimonialModal" class="testimonial-modal">
    <div class="testimonial-modal-content">
        <div class="testimonial-modal-header">
            <h3>
                <i class="fas fa-quote-left"></i>
                Farmer's Testimonial
            </h3>
            <span class="testimonial-modal-close">&times;</span>
        </div>
        <div class="testimonial-modal-body">
            <div class="modal-person-info">
                <div class="modal-avatar">
                    <i class="fas fa-user-circle"></i>
                </div>
                <div class="modal-details">
                    <div class="modal-name" id="modalName">John Banda</div>
                    <div class="modal-position" id="modalPosition">Lead Farmer</div>
                    <div class="modal-org" id="modalOrg">Kasungu Farmers Cooperative</div>
                    <div class="modal-rating" id="modalRating"></div>
                </div>
            </div>
            <div class="modal-testimonial" id="modalTestimonial">
                Testimonial text will appear here...
            </div>
        </div>
    </div>
</div>
<!--Framers Hub -->
<!-- ========== FARMER'S HUB SECTION ========== -->
<section id="farmers-hub" class="py-16 md:py-24" style="background: #f8f9fa;">
    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">
        
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold" style="font-family: 'Inter', sans-serif; color: var(--kwacha-green);">
                Farmer's Hub<!--<span style="color: var(--accent-orange);">Hub</span>-->
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
                Find a Dealer<!--<span style="color: var(--accent-orange);">Dealer</span>-->
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







<!-- ========== FARMER'S HUB SECTION ========== -->
<section id="farmers-hub" class="py-16 md:py-24" style="background: #f8f9fa;">
    <!-- Copy your Farmer's Hub section code here -->
</section>




<section id="about" class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">
        
        <!-- Split Layout: Left (Title) + Right (Content) with Separator -->
        <div class="flex flex-col md:flex-row gap-6 md:gap-8 lg:gap-12">
    
            <!-- LEFT SIDE: Who We Are & About Kwacha Seeds - CENTERED -->
            <div class="md:w-1/2 flex flex-col justify-center text-center md:text-center">
                <span class="text-xs md:text-sm font-semibold tracking-wide uppercase" style="color: var(--accent-orange); letter-spacing: 2px;">Who We Are</span>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mt-2 mb-3" style="font-family: 'Inter', sans-serif; color: var(--kwacha-green);">
                    About Kwacha Seeds<!--<span style="color: var(--accent-orange);">Kwacha Seeds</span>-->
                </h2>
                <div class="w-12 h-0.5 rounded-full mx-auto md:mx-auto" style="background: var(--accent-orange);"></div>
            </div>
            
            <!-- VERTICAL SEPARATOR / BAR -->
            <div class="hidden md:block w-px bg-gray-200 self-stretch"></div>
            
            <!-- RIGHT SIDE: Company Description - LEFT ALIGNED -->
            <div class="md:w-1/2 flex flex-col justify-center">
                <p class="text-gray-700 text-sm md:text-base leading-relaxed text-left" style="font-family: 'Inter', sans-serif; line-height: 1.7;">
                    <span class="font-bold text-base md:text-lg" style="color: var(--kwacha-green);">Kwacha Seeds Limited</span> is a visionary seed company dedicated to transforming agriculture through high-quality hybrid seeds like <span class="font-semibold" style="color: var(--accent-orange);">maize MH 36</span>, vitamin A-rich orange maize <span class="font-semibold" style="color: var(--accent-orange);">MH42A</span>, wheat (<span class="font-semibold" style="color: var(--accent-orange);">KARS 52</span>), Soybean <span class="font-semibold" style="color: var(--accent-orange);">Chitedze-4</span>, and Groundnuts <span class="font-semibold" style="color: var(--accent-orange);">CG9</span>, prioritizing farmer-centric innovation and sustainability to boost productivity and livelihoods.
                </p>
                <p class="text-gray-700 text-sm md:text-base leading-relaxed mt-4 text-left" style="font-family: 'Inter', sans-serif; line-height: 1.7;">
                    Committed to excellence over scale, we empower farmers with resilient, nutrient-enhanced crops while fostering integrity, collaboration, and environmental stewardship for a food-secure future.
                </p>
            </div>
            
        </div>
        
        <!-- Vision & Mission Row - REDUCED CARD SIZES -->
        <div class="grid md:grid-cols-2 gap-5 md:gap-6 mt-16 mb-12">
            <!-- Vision Card - SMALLER -->
            <div class="rounded-xl p-5 md:p-6 transition-all duration-300 hover:transform hover:-translate-y-1" style="background: linear-gradient(135deg, var(--kwacha-green) 0%, #0e4e0e 100%);">
                <div class="flex items-center gap-2 mb-3">
                    <div class="w-9 h-9 rounded-full flex items-center justify-center" style="background: rgba(255, 102, 0, 0.2);">
                        <i class="fas fa-eye text-lg" style="color: var(--accent-orange);"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-bold text-white" style="font-family: 'Inter', sans-serif;">Our Vision</h3>
                </div>
                <p class="text-white/90 text-sm md:text-base leading-relaxed" style="font-family: 'Inter', sans-serif; line-height: 1.5;">
                    To inspire excellence by being the best in the production and supply of hybrid seeds that consistently meet the evolving needs of farmers.
                </p>
            </div>
            
            <!-- Mission Card - SMALLER -->
            <div class="rounded-xl p-5 md:p-6 transition-all duration-300 hover:transform hover:-translate-y-1" style="background: linear-gradient(135deg, var(--kwacha-green) 0%, #0e4e0e 100%);">
                <div class="flex items-center gap-2 mb-3">
                    <div class="w-9 h-9 rounded-full flex items-center justify-center" style="background: rgba(255, 102, 0, 0.2);">
                        <i class="fas fa-bullseye text-lg" style="color: var(--accent-orange);"></i>
                    </div>
                    <h3 class="text-xl md:text-2xl font-bold text-white" style="font-family: 'Inter', sans-serif;">Our Mission</h3>
                </div>
                <p class="text-white/90 text-sm md:text-base leading-relaxed" style="font-family: 'Inter', sans-serif; line-height: 1.5;">
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
        
        <!-- CTA Banner - RESTORED TO ORIGINAL -->
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
@endsection

@push('styles')
<style>
    /* Carousel Styles */
    .carousel-slide {
        transition: opacity 0.7s cubic-bezier(0.2, 0.9, 0.4, 1.1);
    }
    
    /* Gallery Card Styles */
    .gallery-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 2px 12px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
    }
    /* Add all your Gallery styles here */
</style>
@endpush

@push('scripts')
<script>
    // Carousel logic here
    // Gallery logic here
    // Quote modal logic here
</script>
@endpush

