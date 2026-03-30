<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Kwacha Seeds | Empowering Malawi's Farmers with Quality Seeds</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">
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
        /* Carousel transitions */
        .carousel-slide {
            transition: opacity 0.7s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        }
        .slide-content {
            animation: slideInLeft 0.7s ease-out forwards;
        }
        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-40px); }
            to { opacity: 1; transform: translateX(0); }
        }
        .badge-pulse {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.75; }
        }
        .product-card {
            transition: all 0.35s ease;
        }
        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 30px -12px rgba(0,0,0,0.2);
        }
        .btn-primary {
            background: var(--kwacha-green);
            transition: all 0.25s ease;
        }
        .btn-primary:hover {
            background: var(--kwacha-green-light);
            transform: translateY(-2px);
            box-shadow: 0 8px 18px rgba(10,59,10,0.3);
        }
        .btn-outline-white {
            border: 2px solid white;
            transition: all 0.25s ease;
        }
        .btn-outline-white:hover {
            background: white;
            color: var(--kwacha-green);
            transform: translateY(-2px);
        }
        .float-icon {
            animation: float 3s ease-in-out infinite;
        }
        @keyframes float {
            0%,100% { transform: translateY(0); }
            50% { transform: translateY(-6px); }
        }
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: var(--kwacha-green);
            border-radius: 8px;
        }
        .stockist-card:hover {
            background: white;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
            transition: all 0.2s;
        }
         .stockist-card {
        transition: all 0.3s ease;
        border-color: #e5e7eb;
    }
    .stockist-card:hover {
        border-color: var(--kwacha-green);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.02);
    }
    
    /* Custom select styling */
    select {
        cursor: pointer;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3E%3Cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3E%3C/svg%3E");
        background-position: right 0.75rem center;
        background-repeat: no-repeat;
        background-size: 1.25rem;
        padding-right: 2.5rem;
    }
    
    /* Animation for results */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    #dealersGrid > div {
        animation: fadeIn 0.4s ease-out;
    }
    
    
       /* Timeline animations */
    #eventsTimeline > div {
        animation: fadeInUp 0.5s ease-out;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Carousel styles */
    .carousel-slide-2 {
        transition: opacity 0.5s ease-in-out;
    }
    
    /* Hover effect for cards */
    .bg-white.rounded-xl {
        transition: all 0.3s ease;
    }

    </style>




   

</head>
<body class="antialiased">

<!-- ========== NAVIGATION ========== -->
<nav class="fixed top-0 left-0 w-full z-50 shadow-lg" style="background: var(--kwacha-green);">
    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 bg-white rounded-full flex items-center justify-center shadow">
                   <img src="{{ asset('images/kwacha_seeds_logo.png') }}" alt="Kwacha Seeds Logo" class="h-10 md:h-12 w-auto object-contain">
                </div>
                <span class="text-xl font-bold tracking-tight" style="font-family: 'Montserrat', sans-serif;">
    <span style="color: var(--accent-orange);">Kwacha</span>
    <span class="text-white"> Seeds</span>
</span>
            </span>
            </div>
            <div class="hidden md:flex items-center space-x-7">
                <a href="#home" class="text-white/90 hover:text-white text-sm font-medium transition">Home</a>
                <a href="#about" class="text-white/90 hover:text-white text-sm font-medium transition">About</a>
                <a href="#products" class="text-white/90 hover:text-white text-sm font-medium transition">Products</a>
                <a href="#farmers-hub" class="text-white/90 hover:text-white text-sm font-medium transition">Farmer's Hub</a>
                <a href="#dealers" class="text-white/90 hover:text-white text-sm font-medium transition">Dealers</a>
                <a href="#contact" class="text-white/90 hover:text-white text-sm font-medium transition">Contact</a>
                <a href="#get-quote" class="px-5 py-1.5 text-sm font-semibold rounded-md shadow-md transition" style="background: white; color: var(--kwacha-green);">Get a Quote</a>
            </div>
            <button id="mobileMenuBtn" class="md:hidden text-white text-2xl"><i class="fas fa-bars"></i></button>
        </div>
        <div id="mobileMenu" class="hidden md:hidden pb-4">
            <div class="flex flex-col space-y-3">
                <a href="#home" class="text-white/90 hover:text-white py-2">Home</a>
                <a href="#about" class="text-white/90 hover:text-white py-2">About</a>
                <a href="#products" class="text-white/90 hover:text-white py-2">Products</a>
                <a href="#farmers-hub" class="text-white/90 hover:text-white py-2">Farmer's Hub</a>
                <a href="#dealers" class="text-white/90 hover:text-white py-2">Dealers</a>
                <a href="#contact" class="text-white/90 hover:text-white py-2">Contact</a>
                <a href="#get-quote" class="px-5 py-2 text-sm font-semibold rounded-md text-center" style="background: white; color: var(--kwacha-green);">Get a Quote</a>
            </div>
        </div>
    </div>
</nav>

<main class="mt-16">
    <!-- ========== HERO / HOME SECTION (CAROUSEL) ========== -->
   <section id="home">
    <div class="relative w-full">
        <div id="carousel" class="relative h-[480px] md:h-[600px] overflow-hidden">

            <!-- Slide 1 - Soya Field -->
            <div class="carousel-slide absolute inset-0 opacity-100" data-active="true">
                <div class="absolute inset-0">
                    <img src="{{ asset('images/soya_field.jpg') }}" class="w-full h-full object-cover" alt="Soya field">
                    <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-transparent"></div>
                </div>

                <div class="relative h-full flex items-center">
                    <div class="max-w-7xl mx-auto px-6 lg:px-10 w-full">
                        <div class="max-w-xl">
                            
                            <h1 class="text-2xl md:text-5xl font-bold text-white mb-4 leading-tight" style="font-family: 'Playfair Display';">
                                Fast-Maturing Seeds<br>
                                <span style="color:var(--accent-orange);">Perfect for Malawi’s Climate</span>
                            </h1>

                            <p class="text-sm md:text-lg text-gray-200 mb-6">
                                Reliable performance, early maturity, and high yields for every season.
                            </p>

                            <a href="#products" class="px-5 py-2.5 md:px-6 md:py-3 rounded-md font-semibold btn-primary text-white inline-block">
                                View Seeds
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

                <div class="relative h-full flex items-center">
                    <div class="max-w-7xl mx-auto px-6 lg:px-10 w-full">
                        <div class="max-w-xl">

                            <h1 class="text-2xl md:text-5xl font-bold text-white mb-4" style="font-family:'Playfair Display';">
                                Abundant Harvests<br>
                                <span style="color:var(--accent-orange);">Season After Season</span>
                            </h1>

                            <p class="text-sm md:text-lg text-gray-200 mb-6">
                                Strong, reliable maize varieties that deliver consistent and high yields.
                            </p>

                            <a href="#products" class="px-5 py-2.5 md:px-6 md:py-3 rounded-md font-semibold btn-primary text-white inline-block">
                                Explore Seeds
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

                <div class="relative h-full flex items-center">
                    <div class="max-w-7xl mx-auto px-6 lg:px-10 w-full">
                        <div class="max-w-xl">

                            <h1 class="text-2xl md:text-5xl font-bold text-white mb-4" style="font-family:'Playfair Display';">
                                Growing Together<br>
                                <span style="color:var(--accent-orange);">With Malawi’s Farmers</span>
                            </h1>

                            <p class="text-sm md:text-lg text-gray-200 mb-6">
                                We work hand in hand with farmers to improve yields, incomes, and livelihoods.
                            </p>

                            <a href="#contact" class="px-5 py-2.5 md:px-6 md:py-3 rounded-md font-semibold btn-primary text-white inline-block">
                                Get in Touch
                            </a>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Dots -->
        <div class="absolute bottom-5 left-1/2 transform -translate-x-1/2 flex gap-2 z-10">
            <span class="dot w-2.5 h-2.5 rounded-full bg-white cursor-pointer"></span>
            <span class="dot w-2.5 h-2.5 rounded-full bg-white/50 cursor-pointer"></span>
            <span class="dot w-2.5 h-2.5 rounded-full bg-white/50 cursor-pointer"></span>
        </div>

        <!-- Controls -->
        <button id="prevSlide" class="absolute left-4 top-1/2 -translate-y-1/2 w-9 h-9 rounded-full bg-black/30 text-white hover:bg-black/50 transition">
            <i class="fas fa-chevron-left text-sm"></i>
        </button>

        <button id="nextSlide" class="absolute right-4 top-1/2 -translate-y-1/2 w-9 h-9 rounded-full bg-black/30 text-white hover:bg-black/50 transition">
            <i class="fas fa-chevron-right text-sm"></i>
        </button>
    </div>
</section>

    <!-- ========== ABOUT US ========== -->
    <section id="about" class="py-16 md:py-20" style="background: var(--kwacha-green-bg);">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-12">
               
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center px-3 sm:px-4" style="color:var(--kwacha-green); line-height: 1.2;">
                   About Kwacha Seeds
                </h2>
                <div class="w-20 h-1 mx-auto mt-3 mb-5" style="background: var(--accent-orange);"></div>
                <p class="text-gray-700 max-w-3xl mx-auto">Rooted in Malawi, dedicated to food security and farmer prosperity.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
    <div class="text-center md:text-left">
        <h3 class="text-2xl font-bold mb-4" style="color:var(--kwacha-green);">Our Story & Mission</h3>
        <p class="text-gray-700 mb-4">Founded in 2024, Kwacha Seeds began with a simple vision: provide Malawian farmers with affordable, high-yield, and resilient seed varieties. Today we are a trusted partner in the agriculture sector, serving smallholders and commercial growers alike with premium maize, soybeans, wheat, and groundnut seeds.</p>
        <p class="text-gray-700 mb-4"><strong>Mission:</strong> To empower farmers through superior genetics, agronomy training, and accessible distribution networks, driving food security and economic growth.</p>
        <div class="flex flex-wrap gap-4 mt-5 justify-center md:justify-start">
            <span class="bg-white px-4 py-1 rounded-full text-sm shadow-sm"><i class="fas fa-check-circle text-green-700 mr-1"></i> MBS Certified</span>
            <span class="bg-white px-4 py-1 rounded-full text-sm shadow-sm"><i class="fas fa-trophy text-green-700 mr-1"></i> Best Agro Award 2023</span>
        </div>
    </div>
    <div class="bg-white p-6 rounded-2xl shadow-md text-center md:text-left">
        <h4 class="font-bold text-xl mb-3" style="color:var(--kwacha-green);">📋 Our Certifications</h4>
        <ul class="space-y-3 text-gray-700">
            <li class="flex items-center justify-center md:justify-start gap-2">
                <i class="fas fa-flask text-orange-500 w-6"></i>
                <span>Malawi Bureau of Standards (MBS) Quality Mark</span>
            </li>
            <li class="flex items-center justify-center md:justify-start gap-2">
                <i class="fas fa-leaf text-orange-500 w-6"></i>
                <span>ISO 9001:2022 Seed Processing</span>
            </li>
            <li class="flex items-center justify-center md:justify-start gap-2">
                <i class="fas fa-vial text-orange-500 w-6"></i>
                <span>ISTA Accredited Laboratory Testing</span>
            </li>
            <li class="flex items-center justify-center md:justify-start gap-2">
                <i class="fas fa-hand-holding-heart text-orange-500 w-6"></i>
                <span>Member: Seed Trade Association of Malawi</span>
            </li>
        </ul>
        <div class="mt-5 pt-4 border-t">
            <p class="text-sm italic">“We ensure every packet meets rigorous purity and germination thresholds.”</p>
        </div>
    </div>
</div>
         
        </div>
    </section>

<section id="products" class="py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold" style="color:var(--kwacha-green);">Our Premium Seeds</h2>
            <div class="w-20 h-1 mx-auto mt-2 bg-orange-500 mb-3"></div>
            <p class="text-gray-600">Superior genetics for every agro-ecological zone in Malawi</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Maize Seed Card -->
            <div class="product-card rounded-2xl overflow-hidden bg-gray-50 shadow-md">
                <div class="h-52 overflow-hidden">
                    <img src="https://images.pexels.com/photos/1431333/pexels-photo-1431333.jpeg?auto=compress&cs=tinysrgb&w=600" class="w-full h-full object-cover hover:scale-105 transition duration-500" alt="Premium Maize Seeds">
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold" style="color:var(--kwacha-green);">Premium Maize</h3>
                    
                    <!-- Facts -->
                    <ul class="mt-3 space-y-1">
                        <li class="text-sm text-gray-600 flex items-start gap-2">
                            <i class="fas fa-check-circle text-green-600 text-xs mt-1"></i>
                            <span>Drought-tolerant variety</span>
                        </li>
                        <li class="text-sm text-gray-600 flex items-start gap-2">
                            <i class="fas fa-check-circle text-green-600 text-xs mt-1"></i>
                            <span>Resistant to MSV & GLS</span>
                        </li>
                        <li class="text-sm text-gray-600 flex items-start gap-2">
                            <i class="fas fa-check-circle text-green-600 text-xs mt-1"></i>
                            <span>Matures in 120-135 days</span>
                        </li>
                    </ul>
                    
                    <!-- Pack Sizes -->
                    <div class="mt-4">
                        <p class="text-xs font-semibold text-gray-500 mb-2">PACK SIZES</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-gray-200 text-gray-700 text-xs px-3 py-1 rounded-full">2kg</span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-3 py-1 rounded-full">5kg</span>
                         
                            <span class="bg-gray-200 text-gray-700 text-xs px-3 py-1 rounded-full">25kg</span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-3 py-1 rounded-full">50kg</span>
                        </div>
                    </div>
                    
                    <!-- View Details Button -->
                    <div class="mt-5">
                        <a href="#" class="block text-center text-sm font-semibold px-4 py-2 rounded-lg transition hover:opacity-90" style="background:var(--kwacha-green);color:white;">
                            View details
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Soybean Seed Card -->
            <div class="product-card rounded-2xl overflow-hidden bg-gray-50 shadow-md">
                <div class="h-52 overflow-hidden">
                    <img src="{{ asset('images/product.jpg.jpeg') }}" class="w-full h-full object-cover hover:scale-105 transition" alt="Soybean Seeds">
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold" style="color:var(--kwacha-green);">Soybean</h3>
                    
                    <!-- Facts -->
                    <ul class="mt-3 space-y-1">
                        <li class="text-sm text-gray-600 flex items-start gap-2">
                            <i class="fas fa-check-circle text-green-600 text-xs mt-1"></i>
                            <span>Chitedze 4 variety</span>
                        </li>
                        <li class="text-sm text-gray-600 flex items-start gap-2">
                            <i class="fas fa-check-circle text-green-600 text-xs mt-1"></i>
                            <span>Medium maturity</span>
                        </li>
                        <li class="text-sm text-gray-600 flex items-start gap-2">
                            <i class="fas fa-check-circle text-green-600 text-xs mt-1"></i>
                            <span>Rust tolerant</span>
                        </li>
                    </ul>
                    
                    <!-- Pack Sizes -->
                    <div class="mt-4">
                        <p class="text-xs font-semibold text-gray-500 mb-2">PACK SIZES</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-gray-200 text-gray-700 text-xs px-3 py-1 rounded-full">2kg</span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-3 py-1 rounded-full">5kg</span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-3 py-1 rounded-full">25kg</span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-3 py-1 rounded-full">50kg</span>
                        </div>
                    </div>
                    
                    <!-- View Details Button -->
                    <div class="mt-5">
                        <a href="#" class="block text-center text-sm font-semibold px-4 py-2 rounded-lg transition hover:opacity-90" style="background:var(--kwacha-green);color:white;">
                            View details
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Wheat Seed Card -->
            <div class="product-card rounded-2xl overflow-hidden bg-gray-50 shadow-md">
                <div class="h-52 overflow-hidden">
                    <img src="" class="w-full h-full object-cover hover:scale-105 transition" alt="Wheat Seeds">
                </div>
                <div class="p-5">
                    <div class="flex justify-between items-start">
                        <h3 class="text-xl font-bold" style="color:var(--kwacha-green);">Wheat</h3>
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">New</span>
                    </div>
                    
                    <!-- Facts -->
                    <ul class="mt-3 space-y-1">
                        <li class="text-sm text-gray-600 flex items-start gap-2">
                            <i class="fas fa-check-circle text-green-600 text-xs mt-1"></i>
                            <span>Kilimo variety</span>
                        </li>
                        <li class="text-sm text-gray-600 flex items-start gap-2">
                            <i class="fas fa-check-circle text-green-600 text-xs mt-1"></i>
                            <span>Rust-resistant</span>
                        </li>
                        <li class="text-sm text-gray-600 flex items-start gap-2">
                            <i class="fas fa-check-circle text-green-600 text-xs mt-1"></i>
                            <span>Matures in 100-115 days</span>
                        </li>
                    </ul>
                    
                    <!-- Pack Sizes -->
                    <div class="mt-4">
                        <p class="text-xs font-semibold text-gray-500 mb-2">PACK SIZES</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-gray-200 text-gray-700 text-xs px-3 py-1 rounded-full">2kg</span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-3 py-1 rounded-full">5kg</span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-3 py-1 rounded-full">25kg</span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-3 py-1 rounded-full">50kg</span>
                        </div>
                    </div>
                    
                    <!-- View Details Button -->
                    <div class="mt-5">
                        <a href="#" class="block text-center text-sm font-semibold px-4 py-2 rounded-lg transition hover:opacity-90" style="background:var(--kwacha-green);color:white;">
                            View details
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Groundnut Seed Card -->
            <div class="product-card rounded-2xl overflow-hidden bg-gray-50 shadow-md">
                <div class="h-52 overflow-hidden">
                    <img src="" class="w-full h-full object-cover hover:scale-105 transition" alt="Groundnut Seeds">
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold" style="color:var(--kwacha-green);">Groundnut</h3>
                    
                    <!-- Facts -->
                    <ul class="mt-3 space-y-1">
                        <li class="text-sm text-gray-600 flex items-start gap-2">
                            <i class="fas fa-check-circle text-green-600 text-xs mt-1"></i>
                            <span>CG7 variety</span>
                        </li>
                        <li class="text-sm text-gray-600 flex items-start gap-2">
                            <i class="fas fa-check-circle text-green-600 text-xs mt-1"></i>
                            <span>Drought-tolerant</span>
                        </li>
                        <li class="text-sm text-gray-600 flex items-start gap-2">
                            <i class="fas fa-check-circle text-green-600 text-xs mt-1"></i>
                            <span>Resistant to rosette virus</span>
                        </li>
                    </ul>
                    
                    <!-- Pack Sizes -->
                    <div class="mt-4">
                        <p class="text-xs font-semibold text-gray-500 mb-2">PACK SIZES</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-gray-200 text-gray-700 text-xs px-3 py-1 rounded-full">2kg</span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-3 py-1 rounded-full">5kg</span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-3 py-1 rounded-full">10kg</span>
                            <span class="bg-gray-200 text-gray-700 text-xs px-3 py-1 rounded-full">25kg</span>
                        </div>
                    </div>
                    
                    <!-- View Details Button -->
                    <div class="mt-5">
                        <a href="#" class="block text-center text-sm font-semibold px-4 py-2 rounded-lg transition hover:opacity-90" style="background:var(--kwacha-green);color:white;">
                            View details
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-10 text-center">
            <a href="#" class="inline-block px-8 py-3 rounded-lg font-semibold border-2 border-green-800 text-green-800 hover:bg-green-800 hover:text-white transition">
                View All Products <i class="fas fa-arrow-right ml-1"></i>
            </a>
        </div>
    </div>
</section>

    <!-- ========== FARMER'S HUB ========== -->
    <section id="farmers-hub" class="py-16 md:py-20" style="background: #FEF9E6;">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-12"><h2 class="text-3xl md:text-4xl font-bold" style="color:var(--kwacha-green);">Farmer's Hub</h2><div class="w-20 h-1 mx-auto mt-2 bg-orange-500"></div><p class="text-gray-700 mt-3">Practical knowledge, agronomy tips & seasonal guides</p></div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition"><i class="fas fa-calendar-alt text-3xl text-orange-500 mb-3"></i><h3 class="text-xl font-bold mb-2">Planting Calendar</h3><p class="text-gray-600 text-sm">Maize: Nov–Dec | Soybeans: Dec–Jan | Wheat: May–June | Groundnuts: Nov–Dec. Follow soil moisture updates.</p><a href="#" class="text-green-800 text-sm font-semibold mt-2 inline-block">Download PDF <i class="fas fa-download"></i></a></div>
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition"><i class="fas fa-bug text-3xl text-orange-500 mb-3"></i><h3 class="text-xl font-bold mb-2">Pest & Disease Control</h3><p class="text-gray-600 text-sm">Integrated pest management: Fall armyworm in maize, soybean rust, groundnut rosette virus. Use recommended pesticides & crop rotation.</p><a href="#" class="text-green-800 text-sm font-semibold mt-2 inline-block">Read Guide →</a></div>
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition"><i class="fas fa-question-circle text-3xl text-orange-500 mb-3"></i><h3 class="text-xl font-bold mb-2">FAQ</h3><ul class="text-sm text-gray-600 space-y-2 list-disc pl-4"><li>Seed rate per hectare: Maize 25kg, Soybean 50kg, Wheat 120kg, Groundnut 40kg</li><li>When to apply fertilizer? 2–3 weeks after germination</li><li>How to store leftover seeds? Cool dry place, avoid moisture</li></ul></div>
            </div>
            <div class="mt-10 bg-green-50 p-6 rounded-xl max-w-3xl mx-auto text-center"><i class="fas fa-headset text-2xl text-orange-500"></i><h4 class="font-bold text-lg mt-1">Agronomy Hotline: +265 888 123 456</h4><p class="text-gray-600 text-sm">Call our experts for personalized farming advice, Mon–Sat 8am–5pm</p></div>
        </div>
    </section>

    <!-- ========== Dealers ========== -->
   <section id="dealers" class="py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <!-- Updated Responsive Headings Section -->
<div class="text-center mb-8">
   <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center px-3 sm:px-4" style="color:var(--kwacha-green); line-height: 1.2;">
    Find a Dealer <span class="whitespace-nowrap">Near You</span>
</h2>
    <div class="w-16 sm:w-20 h-1 mx-auto mt-2 sm:mt-3 bg-orange-500 mb-2 sm:mb-3"></div>
    <p class="text-sm sm:text-base text-gray-600 px-4 max-w-2xl mx-auto">
        Search by district and trading center to locate authorized Kwacha Seeds dealers
    </p>
</div>

        <!-- Search and Filter Section -->
        <div class="max-w-4xl mx-auto mb-12">
            <div class="bg-gradient-to-r from-green-50 to-orange-50 p-6 rounded-2xl shadow-md">
                <div class="grid md:grid-cols-2 gap-4">
                    <!-- District Filter -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-map-marker-alt text-orange-500 mr-1"></i> Select District
                        </label>
                        <select id="districtFilter" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent bg-white">
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
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-city text-orange-500 mr-1"></i> Trading Center
                        </label>
                        <select id="tradingCenterFilter" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent bg-white">
                            <option value="">All Trading Centers</option>
                        </select>
                    </div>
                </div>
                
                <!-- Search Button and Results Count -->
                <div class="mt-4 flex flex-wrap gap-3 justify-between items-center">
                    <button id="searchDealersBtn" class="bg-green-700 text-white px-6 py-2 rounded-lg hover:bg-green-800 transition flex items-center gap-2">
                        <i class="fas fa-search"></i> Search Dealers
                    </button>
                    <button id="resetFiltersBtn" class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-400 transition flex items-center gap-2">
                        <i class="fas fa-undo-alt"></i> Reset
                    </button>
                    <div id="resultsCount" class="text-sm text-gray-600 font-medium">
                        <i class="fas fa-store"></i> <span id="dealerCount">0</span> dealers found
                    </div>
                </div>
            </div>
        </div>

        <!-- Dealers Grid -->
        <div id="dealersGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            <!-- Dealers will be dynamically loaded here -->
        </div>

        <!-- Pagination Controls -->
        <div id="paginationControls" class="flex justify-center items-center gap-3 mt-10 mb-8">
            <button id="prevPageBtn" class="px-4 py-2 border border-gray-300 rounded-lg bg-white text-gray-700 hover:bg-gray-50 transition disabled:opacity-50 disabled:cursor-not-allowed">
                <i class="fas fa-chevron-left"></i> Previous
            </button>
            <div id="pageNumbers" class="flex gap-2">
                <!-- Page numbers will be dynamically inserted here -->
            </div>
            <button id="nextPageBtn" class="px-4 py-2 border border-gray-300 rounded-lg bg-white text-gray-700 hover:bg-gray-50 transition disabled:opacity-50 disabled:cursor-not-allowed">
                Next <i class="fas fa-chevron-right"></i>
            </button>
        </div>

        <!-- No Results Message -->
        <div id="noResultsMessage" class="text-center py-12 hidden">
            <i class="fas fa-map-marker-alt text-6xl text-gray-300 mb-4"></i>
            <h3 class="text-xl font-semibold text-gray-600 mb-2">No Dealers Found</h3>
            <p class="text-gray-500">Try selecting a different district or trading center, or contact us directly for assistance.</p>
            <a href="#contact" class="inline-block mt-4 bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600 transition">Contact Us for Help</a>
        </div>

        <!-- Become a Stockist CTA -->
        <div class="mt-12 text-center bg-gradient-to-r from-green-600 to-green-700 rounded-2xl p-8 text-white">
            <i class="fas fa-handshake text-3xl mb-3"></i>
            <h3 class="text-2xl font-bold mb-2">Want to Become a Kwacha Seeds Dealer?</h3>
            <p class="mb-4">Join our network of authorized stockists and help farmers access quality seeds across Malawi.</p>
            <a href="#contact" class="inline-block bg-white text-green-700 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition transform hover:scale-105">Apply to Become a Stockist →</a>
        </div>
    </div>
</section>

<script>
    // Dummy Dealers Data - Malawi Districts and Trading Centers
    const dealersData = [
        // Lilongwe District Dealers
        { id: 1, name: "AgroPlus Dealers", district: "Lilongwe", tradingCenter: "City Centre", address: "Opposite Area 18 Market", phone: "+265 999 123 456", hours: "Mon-Sat 8am-5pm", rating: 4.8 },
        { id: 2, name: "Green Harvest Supplies", district: "Lilongwe", tradingCenter: "Area 25", address: "Near Shoprite, Area 25", phone: "+265 888 234 567", hours: "Mon-Fri 7:30am-6pm", rating: 4.5 },
        { id: 3, name: "Kwacha Seeds Depot", district: "Lilongwe", tradingCenter: "Kanengo", address: "Industrial Area, Plot 12", phone: "+265 991 345 678", hours: "Mon-Sat 8am-4:30pm", rating: 4.9 },
        { id: 4, name: "Farmers Choice Agro", district: "Lilongwe", tradingCenter: "Lumbadzi", address: "Main Road, Opposite Filling Station", phone: "+265 881 456 789", hours: "Mon-Sat 7am-6pm", rating: 4.3 },
        { id: 5, name: "Lilongwe Agro Center", district: "Lilongwe", tradingCenter: "Kawale", address: "Kawale Market, Shop 8", phone: "+265 999 567 890", hours: "Mon-Sat 8am-5pm", rating: 4.4 },
        { id: 6, name: "Central Seeds Ltd", district: "Lilongwe", tradingCenter: "Area 49", address: "Area 49 Shopping Mall", phone: "+265 888 678 901", hours: "Mon-Sat 7:30am-6pm", rating: 4.6 },
        
        // Blantyre District Dealers
        { id: 7, name: "Farmers Choice Ltd", district: "Blantyre", tradingCenter: "Limbe", address: "Ginnery Corner, Limbe", phone: "+265 888 765 432", hours: "Mon-Fri 8am-5pm, Sat 8am-1pm", rating: 4.7 },
        { id: 8, name: "Blantyre Agro Center", district: "Blantyre", tradingCenter: "Chichiri", address: "Chichiri Shopping Mall, Shop 45", phone: "+265 999 876 543", hours: "Mon-Sat 8am-6pm", rating: 4.4 },
        { id: 9, name: "Southern Seeds Supplies", district: "Blantyre", tradingCenter: "Manase", address: "Manase Township, Near Post Office", phone: "+265 881 987 654", hours: "Mon-Sat 7:30am-5pm", rating: 4.6 },
        { id: 10, name: "Mighty Agro Dealers", district: "Blantyre", tradingCenter: "Ndirande", address: "Ndirande Market, Shop B12", phone: "+265 991 098 765", hours: "Mon-Sat 8am-5pm", rating: 4.2 },
        { id: 11, name: "Blantyre Seed Store", district: "Blantyre", tradingCenter: "Bangwe", address: "Bangwe Township, Main Road", phone: "+265 888 109 876", hours: "Mon-Sat 8am-5pm", rating: 4.3 },
        
        // Mzuzu District Dealers
        { id: 12, name: "Northern Agro Hub", district: "Mzuzu", tradingCenter: "City Centre", address: "Opposite Mzuzu Stadium", phone: "+265 881 234 567", hours: "Mon-Fri 8am-5pm, Sat 9am-2pm", rating: 4.8 },
        { id: 13, name: "Mzuzu Seed Store", district: "Mzuzu", tradingCenter: "Chibavi", address: "Chibavi Township, Main Road", phone: "+265 999 345 678", hours: "Mon-Sat 8am-5pm", rating: 4.3 },
        { id: 14, name: "Luwinga Agro Supplies", district: "Mzuzu", tradingCenter: "Luwinga", address: "Luwinga Technical College Area", phone: "+265 888 456 789", hours: "Mon-Sat 7am-6pm", rating: 4.5 },
        
        // Zomba District Dealers
        { id: 15, name: "Zomba Agro Center", district: "Zomba", tradingCenter: "City Centre", address: "Opposite Zomba Market", phone: "+265 991 567 890", hours: "Mon-Sat 8am-5pm", rating: 4.4 },
        { id: 16, name: "Chancellor College Supplies", district: "Zomba", tradingCenter: "Chancellor", address: "Near Chancellor College Gate", phone: "+265 881 678 901", hours: "Mon-Fri 8am-4:30pm", rating: 4.1 },
        
        // Kasungu District Dealers
        { id: 17, name: "Kasungu Farmers Hub", district: "Kasungu", tradingCenter: "Town Centre", address: "Main Road, Near Market", phone: "+265 999 789 012", hours: "Mon-Sat 7am-5pm", rating: 4.6 },
        { id: 18, name: "Central Region Seeds", district: "Kasungu", tradingCenter: "Chinkhota", address: "Chinkhota Trading Center", phone: "+265 888 890 123", hours: "Mon-Sat 8am-5pm", rating: 4.2 },
        
        // Mangochi District Dealers
        { id: 19, name: "Mangochi Agro Dealers", district: "Mangochi", tradingCenter: "Town Centre", address: "Near Mangochi Boma", phone: "+265 991 901 234", hours: "Mon-Sat 8am-5pm", rating: 4.3 },
        { id: 20, name: "Lakeshore Seeds", district: "Mangochi", tradingCenter: "Monkey Bay", address: "Monkey Bay Trading Center", phone: "+265 881 012 345", hours: "Mon-Sat 8am-4pm", rating: 4.0 },
        
        // Salima District Dealers
        { id: 21, name: "Salima Agro Supplies", district: "Salima", tradingCenter: "Town Centre", address: "Opposite Salima Market", phone: "+265 999 123 890", hours: "Mon-Sat 7:30am-5pm", rating: 4.4 },
        
        // Dedza District Dealers
        { id: 22, name: "Dedza Farmers Choice", district: "Dedza", tradingCenter: "Town Centre", address: "Main Road, Near Boma", phone: "+265 888 234 901", hours: "Mon-Sat 8am-5pm", rating: 4.5 },
        
        // Ntcheu District Dealers
        { id: 23, name: "Ntcheu Agro Center", district: "Ntcheu", tradingCenter: "Town Centre", address: "Along M1 Road", phone: "+265 991 345 012", hours: "Mon-Sat 8am-5pm", rating: 4.3 },
        
        // Mchinji District Dealers
        { id: 24, name: "Mchinji Seed Store", district: "Mchinji", tradingCenter: "Border Post", address: "Near Mchinji Border", phone: "+265 881 456 123", hours: "Mon-Sat 7am-6pm", rating: 4.1 },
        
        // Nkhotakota District Dealers
        { id: 25, name: "Nkhotakota Agro", district: "Nkhotakota", tradingCenter: "Town Centre", address: "Lakeshore Road", phone: "+265 999 567 234", hours: "Mon-Sat 8am-5pm", rating: 4.2 },
        
        // Karonga District Dealers
        { id: 26, name: "Karonga Farmers Hub", district: "Karonga", tradingCenter: "Town Centre", address: "Main Market Area", phone: "+265 888 678 345", hours: "Mon-Sat 7:30am-5pm", rating: 4.3 },
        
        // Chitipa District Dealers
        { id: 27, name: "Chitipa Agro Supplies", district: "Chitipa", tradingCenter: "Town Centre", address: "Near District Council", phone: "+265 991 789 456", hours: "Mon-Fri 8am-4pm", rating: 4.0 }
    ];

    let currentPage = 1;
    let currentDealers = [...dealersData];
    const itemsPerPageDesktop = 6; // 6 cards on large screens (PC)
    const itemsPerPageMobile = 3;   // 3 cards on mobile/tablet

    // Determine items per page based on screen size
    function getItemsPerPage() {
        return window.innerWidth < 768 ? itemsPerPageMobile : itemsPerPageDesktop;
    }

    // Get unique trading centers based on selected district
    function getTradingCenters(district) {
        if (!district) {
            return [...new Set(dealersData.map(dealer => dealer.tradingCenter))].sort();
        }
        return [...new Set(dealersData.filter(dealer => dealer.district === district).map(dealer => dealer.tradingCenter))].sort();
    }

    // Populate trading center dropdown
    function populateTradingCenters(district) {
        const tradingCenterSelect = document.getElementById('tradingCenterFilter');
        const centers = getTradingCenters(district);
        
        tradingCenterSelect.innerHTML = '<option value="">All Trading Centers</option>';
        centers.forEach(center => {
            const option = document.createElement('option');
            option.value = center;
            option.textContent = center;
            tradingCenterSelect.appendChild(option);
        });
    }

    // Display dealers with pagination
    function displayDealers(dealers) {
        const dealersGrid = document.getElementById('dealersGrid');
        const noResultsMessage = document.getElementById('noResultsMessage');
        const dealerCountSpan = document.getElementById('dealerCount');
        const paginationControls = document.getElementById('paginationControls');
        
        dealerCountSpan.textContent = dealers.length;
        
        if (dealers.length === 0) {
            dealersGrid.innerHTML = '';
            dealersGrid.classList.add('hidden');
            noResultsMessage.classList.remove('hidden');
            paginationControls.classList.add('hidden');
            return;
        }
        
        dealersGrid.classList.remove('hidden');
        noResultsMessage.classList.add('hidden');
        paginationControls.classList.remove('hidden');
        
        const itemsPerPage = getItemsPerPage();
        const totalPages = Math.ceil(dealers.length / itemsPerPage);
        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;
        const dealersToShow = dealers.slice(startIndex, endIndex);
        
        dealersGrid.innerHTML = dealersToShow.map(dealer => `
            <div class="stockist-card border-2 rounded-xl p-5 bg-white hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex items-start justify-between mb-3">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-store text-orange-500 text-2xl"></i>
                        <h3 class="font-bold text-lg text-green-800">${dealer.name}</h3>
                    </div>
                    <div class="flex items-center gap-1 bg-green-100 px-2 py-1 rounded-full">
                        <i class="fas fa-star text-yellow-500 text-xs"></i>
                        <span class="text-xs font-semibold text-green-800">${dealer.rating}</span>
                    </div>
                </div>
                <div class="space-y-2 text-sm text-gray-600">
                    <div class="flex items-start gap-2">
                        <i class="fas fa-map-marker-alt text-orange-500 mt-1 w-4"></i>
                        <div>
                            <p class="font-medium">${dealer.district} - ${dealer.tradingCenter}</p>
                            <p class="text-gray-500 text-xs">${dealer.address}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-phone-alt text-green-600"></i>
                        <a href="tel:${dealer.phone}" class="hover:text-green-700">${dealer.phone}</a>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-clock text-gray-500"></i>
                        <span class="text-gray-500 text-xs">${dealer.hours}</span>
                    </div>
                </div>
                <div class="mt-3 pt-3 border-t flex gap-2">
                    <button onclick="window.location.href='tel:${dealer.phone}'" class="flex-1 bg-green-600 text-white px-3 py-1.5 rounded-lg text-sm hover:bg-green-700 transition flex items-center justify-center gap-1">
                        <i class="fas fa-phone-alt text-xs"></i> Call
                    </button>
                    <button onclick="showDirections('${dealer.name}', '${dealer.district}', '${dealer.tradingCenter}')" class="flex-1 border border-green-600 text-green-600 px-3 py-1.5 rounded-lg text-sm hover:bg-green-50 transition flex items-center justify-center gap-1">
                        <i class="fas fa-directions text-xs"></i> Directions
                    </button>
                </div>
            </div>
        `).join('');
        
        updatePaginationControls(dealers.length, totalPages);
    }

    // Update pagination controls
    function updatePaginationControls(totalItems, totalPages) {
        const prevBtn = document.getElementById('prevPageBtn');
        const nextBtn = document.getElementById('nextPageBtn');
        const pageNumbersDiv = document.getElementById('pageNumbers');
        
        prevBtn.disabled = currentPage === 1;
        nextBtn.disabled = currentPage === totalPages;
        
        // Generate page numbers
        pageNumbersDiv.innerHTML = '';
        
        // Show limited page numbers for better UX
        let startPage = Math.max(1, currentPage - 2);
        let endPage = Math.min(totalPages, currentPage + 2);
        
        if (startPage > 1) {
            pageNumbersDiv.appendChild(createPageButton(1));
            if (startPage > 2) {
                const dots = document.createElement('span');
                dots.className = 'px-2 text-gray-500';
                dots.textContent = '...';
                pageNumbersDiv.appendChild(dots);
            }
        }
        
        for (let i = startPage; i <= endPage; i++) {
            pageNumbersDiv.appendChild(createPageButton(i));
        }
        
        if (endPage < totalPages) {
            if (endPage < totalPages - 1) {
                const dots = document.createElement('span');
                dots.className = 'px-2 text-gray-500';
                dots.textContent = '...';
                pageNumbersDiv.appendChild(dots);
            }
            pageNumbersDiv.appendChild(createPageButton(totalPages));
        }
    }

    // Create page button
    function createPageButton(pageNum) {
        const button = document.createElement('button');
        button.textContent = pageNum;
        button.className = `px-3 py-1 rounded-lg transition ${currentPage === pageNum ? 'bg-green-700 text-white' : 'bg-white border border-gray-300 text-gray-700 hover:bg-gray-50'}`;
        button.onclick = () => {
            currentPage = pageNum;
            displayDealers(currentDealers);
            window.scrollTo({ top: document.getElementById('dealers').offsetTop - 100, behavior: 'smooth' });
        };
        return button;
    }

    // Filter dealers based on selections
    function filterDealers() {
        const selectedDistrict = document.getElementById('districtFilter').value;
        const selectedTradingCenter = document.getElementById('tradingCenterFilter').value;
        
        let filteredDealers = [...dealersData];
        
        if (selectedDistrict) {
            filteredDealers = filteredDealers.filter(dealer => dealer.district === selectedDistrict);
        }
        
        if (selectedTradingCenter) {
            filteredDealers = filteredDealers.filter(dealer => dealer.tradingCenter === selectedTradingCenter);
        }
        
        currentDealers = filteredDealers;
        currentPage = 1;
        displayDealers(currentDealers);
    }

    // Show directions (simulated)
    function showDirections(storeName, district, tradingCenter) {
        alert(`📍 Directions to ${storeName}\n\nLocation: ${district} - ${tradingCenter}\n\nGoogle Maps link will be available soon. For immediate assistance, please call the dealer directly.`);
    }

    // Reset all filters
    function resetFilters() {
        document.getElementById('districtFilter').value = '';
        document.getElementById('tradingCenterFilter').value = '';
        populateTradingCenters('');
        currentDealers = [...dealersData];
        currentPage = 1;
        displayDealers(currentDealers);
    }

    // Handle window resize to adjust pagination
    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            if (currentDealers.length > 0) {
                displayDealers(currentDealers);
            }
        }, 250);
    });

    // Event Listeners
    document.getElementById('districtFilter').addEventListener('change', function() {
        populateTradingCenters(this.value);
        filterDealers();
    });
    
    document.getElementById('tradingCenterFilter').addEventListener('change', filterDealers);
    document.getElementById('searchDealersBtn').addEventListener('click', filterDealers);
    document.getElementById('resetFiltersBtn').addEventListener('click', resetFilters);
    document.getElementById('prevPageBtn').addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            displayDealers(currentDealers);
            window.scrollTo({ top: document.getElementById('dealers').offsetTop - 100, behavior: 'smooth' });
        }
    });
    document.getElementById('nextPageBtn').addEventListener('click', () => {
        const itemsPerPage = getItemsPerPage();
        const totalPages = Math.ceil(currentDealers.length / itemsPerPage);
        if (currentPage < totalPages) {
            currentPage++;
            displayDealers(currentDealers);
            window.scrollTo({ top: document.getElementById('dealers').offsetTop - 100, behavior: 'smooth' });
        }
    });
    
    // Initialize page with all dealers
    populateTradingCenters('');
    displayDealers(dealersData);
</script>








   

    <!-- ========== GALLERY / MEDIA SECTION ========== -->
  <section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold" style="color:var(--kwacha-green);">Latest News & Events</h2>
            <div class="w-16 h-1 bg-orange-500 mx-auto mt-2 mb-3"></div>
            <p class="text-gray-600">Stay updated with our seasonal promotions, events, and community updates</p>
        </div>

        <!-- Timeline/Posts Grid -->
        <div id="eventsTimeline" class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            <!-- Events will be dynamically loaded here -->
        </div>

        <!-- View More Button -->
        <div class="text-center mt-10">
            <button id="viewMoreBtn" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg font-semibold border-2 border-green-800 text-green-800 hover:bg-green-800 hover:text-white transition">
                View All Updates <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
</section>

<script>
    // Event/Post Data with multiple images support
    const eventsData = [
        {
            id: 1,
            title: "🌙 Eid Mubarak from Kwacha Seeds",
            date: "March 31, 2025",
            category: "Holiday",
            badgeColor: "bg-green-100 text-green-700",
            description: "Wishing all our Muslim farmers and partners a blessed Eid al-Fitr. May your harvests be abundant and your families be blessed. Special Eid discounts available on all seed varieties!",
            images: [
                "{{ asset('images/Eid.jpg') }}",
                
            ],
            link: "#"
        },
        {
            id: 2,
            title: "🤝 LUANAR Partnership: Advancing Agriculture Together",
            date: "February 10, 2025",
            category: "Partnership",
            badgeColor: "bg-blue-100 text-blue-700",
            description: "We're proud to announce our new partnership with Lilongwe University of Agriculture and Natural Resources (LUANAR)! Together, we're working to improve seed research, provide training to farmers, and develop climate-resilient crop varieties for Malawi.",
            images: [
                "{{ asset('images/luanar.jpg') }}",
                "{{ asset('images/luanar2.jpg') }}",
                "{{ asset('images/luanar3.jpg') }}"
            ],
            link: "#"
        },
        {
            id: 3,
            title: "💖 Valentine's Special: Love Your Land",
            date: "February 14, 2025",
            category: "Promotion",
            badgeColor: "bg-pink-100 text-pink-700",
            description: "Show your land some love this Valentine's season! Buy any 10kg seed pack and get 2kg FREE. Plus, free agronomy consultation for all orders placed this week. Love your land, and it will love you back.",
            images: [
                "{{ asset('images/valentine.jpg') }}",
                
            ],
            link: "#"
        }
    ];

    let visibleCount = 3; // Show 3 posts initially
    let allEvents = [...eventsData];

    // Sort events by date (most recent first)
    function sortEventsByDate(events) {
        return events.sort((a, b) => new Date(b.date) - new Date(a.date));
    }

    // Display events with image carousel for multiple images
    function displayEvents(events, count) {
        const timelineGrid = document.getElementById('eventsTimeline');
        const viewMoreBtn = document.getElementById('viewMoreBtn');
        const eventsToShow = events.slice(0, count);
        
        if (timelineGrid) {
            timelineGrid.innerHTML = eventsToShow.map(event => {
                // Create image carousel if multiple images
                const hasMultipleImages = event.images && event.images.length > 1;
                const imageHtml = hasMultipleImages ? `
                    <div class="relative h-48 overflow-hidden">
                        <div class="carousel-container-${event.id} relative h-full w-full">
                            ${event.images.map((img, idx) => `
                                <div class="carousel-slide-${event.id} absolute inset-0 transition-opacity duration-500 ${idx === 0 ? 'opacity-100' : 'opacity-0'}">
                                    <img src="${img}" class="w-full h-full object-cover" alt="${event.title}">
                                </div>
                            `).join('')}
                            <button class="carousel-prev-${event.id} absolute left-2 top-1/2 -translate-y-1/2 bg-black/50 text-white w-7 h-7 rounded-full hover:bg-black/70 transition z-10">
                                <i class="fas fa-chevron-left text-xs"></i>
                            </button>
                            <button class="carousel-next-${event.id} absolute right-2 top-1/2 -translate-y-1/2 bg-black/50 text-white w-7 h-7 rounded-full hover:bg-black/70 transition z-10">
                                <i class="fas fa-chevron-right text-xs"></i>
                            </button>
                            <div class="absolute bottom-2 left-1/2 -translate-x-1/2 flex gap-1 z-10">
                                ${event.images.map((_, idx) => `
                                    <span class="carousel-dot-${event.id} w-1.5 h-1.5 rounded-full ${idx === 0 ? 'bg-white' : 'bg-white/50'} cursor-pointer transition-all"></span>
                                `).join('')}
                            </div>
                        </div>
                    </div>
                ` : `
                    <div class="h-48 overflow-hidden">
                        <img src="${event.images[0]}" class="w-full h-full object-cover hover:scale-105 transition duration-500" alt="${event.title}">
                    </div>
                `;
                
                return `
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        ${imageHtml}
                        <div class="p-5">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-calendar-alt text-orange-500 text-xs"></i>
                                    <span class="text-xs text-gray-500">${event.date}</span>
                                </div>
                                <span class="${event.badgeColor} text-xs px-3 py-1 rounded-full font-semibold">${event.category}</span>
                            </div>
                            <h3 class="text-lg font-bold mb-2" style="color:var(--kwacha-green);">${event.title}</h3>
                            <p class="text-sm text-gray-600 mb-4">${event.description}</p>
                            <a href="${event.link}" class="inline-flex items-center text-sm font-semibold text-orange-600 hover:text-orange-700 transition">
                                Read more <i class="fas fa-arrow-right ml-1 text-xs"></i>
                            </a>
                        </div>
                    </div>
                `;
            }).join('');
            
            // Initialize carousels for events with multiple images
            eventsToShow.forEach(event => {
                if (event.images && event.images.length > 1) {
                    initCarousel(event.id, event.images.length);
                }
            });
        }
        
        // Hide view more button if all events are shown
        if (viewMoreBtn) {
            if (count >= events.length) {
                viewMoreBtn.style.display = 'none';
            } else {
                viewMoreBtn.style.display = 'inline-flex';
            }
        }
    }
    
    // Initialize carousel for an event
    function initCarousel(eventId, totalSlides) {
        let currentSlide = 0;
        
        const slides = document.querySelectorAll(`.carousel-slide-${eventId}`);
        const dots = document.querySelectorAll(`.carousel-dot-${eventId}`);
        const prevBtn = document.querySelector(`.carousel-prev-${eventId}`);
        const nextBtn = document.querySelector(`.carousel-next-${eventId}`);
        
        function updateCarousel(index) {
            slides.forEach((slide, i) => {
                slide.style.opacity = i === index ? '1' : '0';
            });
            dots.forEach((dot, i) => {
                dot.style.backgroundColor = i === index ? 'white' : 'rgba(255,255,255,0.5)';
            });
            currentSlide = index;
        }
        
        function nextSlide() {
            const newIndex = (currentSlide + 1) % totalSlides;
            updateCarousel(newIndex);
        }
        
        function prevSlide() {
            const newIndex = (currentSlide - 1 + totalSlides) % totalSlides;
            updateCarousel(newIndex);
        }
        
        if (prevBtn) prevBtn.addEventListener('click', prevSlide);
        if (nextBtn) nextBtn.addEventListener('click', nextSlide);
        
        dots.forEach((dot, idx) => {
            dot.addEventListener('click', () => updateCarousel(idx));
        });
        
        // Auto-advance carousel every 5 seconds
        let autoInterval = setInterval(nextSlide, 5000);
        
        // Pause auto-advance on hover
        const container = document.querySelector(`.carousel-container-${eventId}`);
        if (container) {
            container.addEventListener('mouseenter', () => clearInterval(autoInterval));
            container.addEventListener('mouseleave', () => {
                autoInterval = setInterval(nextSlide, 5000);
            });
        }
    }

    // Load more events
    function loadMoreEvents() {
        visibleCount += 3;
        displayEvents(allEvents, visibleCount);
    }

    // Initialize
    allEvents = sortEventsByDate(allEvents);
    displayEvents(allEvents, visibleCount);
    
    // Add event listener to view more button
    const viewMoreBtn = document.getElementById('viewMoreBtn');
    if (viewMoreBtn) {
        viewMoreBtn.addEventListener('click', loadMoreEvents);
    }
</script>





    <!-- ========== CONTACT FORM ========== -->
   <section id="contact" class="py-16 md:py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-8 md:gap-12">
            <!-- Left Column - Contact Info -->
            <div>
                <h3 class="text-2xl font-bold mb-4 text-center md:text-left" style="color:var(--kwacha-green);">📞 Contact Us</h3>
                <p class="text-gray-700 mb-6 text-center md:text-left">We're here to help with seed inquiries, bulk orders, or partnership opportunities.</p>
                
                <div class="space-y-4">
                    <!-- Address -->
                    <div class="flex items-start gap-3 justify-center md:justify-start">
                        <i class="fas fa-location-dot text-orange-500 text-lg mt-1 flex-shrink-0"></i>
                        <span class="text-gray-700 text-sm md:text-base">Head Office: Lilongwe, Area 12, Plot 45, Malawi</span>
                    </div>
                    
                    <!-- Phone -->
                    <div class="flex items-start gap-3 justify-center md:justify-start">
                        <i class="fas fa-phone-alt text-orange-500 text-lg mt-1 flex-shrink-0"></i>
                        <span class="text-gray-700 text-sm md:text-base">+265 123 456 789 / +265 991 234 567</span>
                    </div>
                    
                    <!-- Email -->
                    <div class="flex items-start gap-3 justify-center md:justify-start">
                        <i class="fas fa-envelope text-orange-500 text-lg mt-1 flex-shrink-0"></i>
                        <div class="text-gray-700 text-sm md:text-base">
                            <span>sales@kwachaseeds.mw</span><br>
                            <span>info@kwachaseeds.mw</span>
                        </div>
                    </div>
                    
                    <!-- WhatsApp -->
                    <div class="flex items-start gap-3 justify-center md:justify-start">
                        <i class="fab fa-whatsapp text-green-500 text-lg mt-1 flex-shrink-0"></i>
                        <span class="text-gray-700 text-sm md:text-base">WhatsApp Agronomy: +265 888 654 321</span>
                    </div>
                </div>
                
                <!-- Social Links -->
                <div class="mt-8 flex gap-5 justify-center md:justify-start">
                    <a href="#" class="text-gray-500 hover:text-green-700 text-2xl transition">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-green-700 text-2xl transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-green-700 text-2xl transition">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-green-700 text-2xl transition">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
            
            <!-- Right Column - Form -->
            <div class="bg-gray-50 p-5 sm:p-6 rounded-2xl shadow">
                <h4 class="text-xl font-bold mb-4 text-center md:text-left" style="color:var(--kwacha-green);">Become a Stockist / Get a Quote</h4>
                <form id="contactForm">
                    <div class="grid grid-cols-1 gap-4">
                        <input type="text" placeholder="Full Name" class="p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        <input type="email" placeholder="Email Address" class="p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        <input type="tel" placeholder="Phone Number" class="p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        <select class="p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            <option>I'm interested in: Buying seeds</option>
                            <option>Becoming an authorized stockist</option>
                            <option>Bulk purchase (cooperative/NGO)</option>
                            <option>Agronomy support</option>
                        </select>
                        <textarea rows="3" placeholder="Your message" class="p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"></textarea>
                        <button type="submit" class="btn-primary text-white font-semibold py-3 rounded-lg transition hover:opacity-90" style="background:var(--kwacha-green);">
                            Send Message <i class="fas fa-paper-plane ml-1"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

    <!-- ========== CALL TO ACTION ========== -->
    <div class="py-12" style="background: var(--kwacha-green);"><div class="max-w-3xl mx-auto text-center px-4"><h2 class="text-2xl md:text-3xl font-bold text-white">Ready to Transform Your Harvest?</h2>
    <p class="text-green-100 my-3">Join thousands of successful farmers who trust Kwacha Seeds for maize, soybeans, wheat, and groundnuts</p>
    <a href="#stockists" class="inline-block bg-white px-8 py-3 rounded-md font-bold text-green-800 shadow-lg hover:shadow-xl transition">Get Your Seeds Today</a>
    </div>
    </div>

    <!-- FOOTER -->
    <footer class="bg-gray-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Company Info with Logo -->
            <div class="text-center sm:text-left">
    <div class="flex items-center justify-center sm:justify-start gap-3 mb-4">
        <!-- Logo Container - Perfect Circle -->
        <div class="w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 bg-white rounded-full flex items-center justify-center shadow-md flex-shrink-0">
            <img src="{{ asset('images/kwacha_seeds_logo.png') }}" alt="Kwacha Seeds Logo" class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 object-contain">
        </div>
        <div class="flex-shrink-0">
            <span class="text-lg sm:text-xl md:text-2xl font-bold" style="font-family: 'Playfair Display', serif;">Kwacha Seeds</span>
            <p class="text-xs text-orange-400">Est. 2024</p>
        </div>
    </div>
    <p class="text-gray-400 text-sm mb-3">Empowering Malawian farmers with certified, high-yield seeds since 1995. Specializing in maize, soybeans, wheat, and groundnuts.</p>
    <div class="flex items-center justify-center sm:justify-start gap-2 text-sm text-gray-400">
        <i class="fas fa-phone-alt text-orange-400 text-xs"></i>
        <span>+265 998 823 330</span>
    </div>
</div>
            
            <!-- Quick Links -->
            <div class="text-center sm:text-left">
                <h4 class="font-semibold mb-3 text-lg">Quick Links</h4>
                <ul class="space-y-2 text-gray-400 text-sm">
                    <li><a href="#home" class="hover:text-orange-400 transition">Home</a></li>
                    <li><a href="#about" class="hover:text-orange-400 transition">About</a></li>
                    <li><a href="#products" class="hover:text-orange-400 transition">Products</a></li>
                    <li><a href="#farmers-hub" class="hover:text-orange-400 transition">Farmer's Hub</a></li>
                    <li><a href="#stockists" class="hover:text-orange-400 transition">Stockists</a></li>
                    <li><a href="#contact" class="hover:text-orange-400 transition">Contact</a></li>
                </ul>
            </div>
            
            <!-- Our Seeds -->
            <div class="text-center sm:text-left">
                <h4 class="font-semibold mb-3 text-lg">Our Seeds</h4>
                <ul class="space-y-2 text-gray-400 text-sm">
                    <li class="hover:text-orange-400 transition cursor-pointer">Premium Maize</li>
                    <li class="hover:text-orange-400 transition cursor-pointer">Soybean (Chitedze 4)</li>
                    <li class="hover:text-orange-400 transition cursor-pointer">Wheat Kilimo</li>
                    <li class="hover:text-orange-400 transition cursor-pointer">Groundnut CG7</li>
                </ul>
            </div>
            
            <!-- Newsletter -->
            <div class="text-center sm:text-left">
                <h4 class="font-semibold mb-3 text-lg">Newsletter</h4>
                <p class="text-gray-400 text-sm mb-3">Get seasonal planting alerts & offers.</p>
                <div class="flex max-w-xs mx-auto sm:mx-0">
                    <input type="email" placeholder="Your email" class="flex-1 p-2 rounded-l-md text-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-orange-500">
                    <button class="bg-orange-500 px-4 rounded-r-md hover:bg-orange-600 transition">
                        <i class="fas fa-arrow-right text-white"></i>
                    </button>
                </div>
                <p class="text-xs text-gray-500 mt-3">We respect your privacy. Unsubscribe anytime.</p>
            </div>
        </div>
        
        <!-- Bottom Footer - Responsive -->
        <div class="border-t border-gray-800 mt-10 pt-6">
    <div class="flex flex-col gap-4 text-center">
        <!-- Copyright Line -->
        <div>
            <p class="text-gray-500 text-xs sm:text-sm">
                &copy; <span id="currentYear"></span> Kwacha Seeds Company
            </p>
            <p class="text-orange-400 text-xs sm:text-sm font-medium mt-1">
                Growing Malawi, One Seed at a Time.
            </p>
        </div>
        
        <!-- Design Credit Line -->
        <div class="flex flex-col sm:flex-row justify-center items-center gap-2 sm:gap-3">
            <p class="text-gray-500 text-xs sm:text-sm">
                <i class="fas fa-code text-orange-400 mr-1"></i> 
                Designed and Developed by <span class="text-orange-400 font-semibold">Innobotics</span>
            </p>
            <span class="hidden sm:inline text-gray-600">|</span>
            <p class="text-gray-500 text-xs sm:text-sm">
                <i class="fas fa-phone-alt text-orange-400 mr-1"></i> 
                +265 998 823 330
            </p>
        </div>
    </div>
</div>
    </div>
</footer>

<script>
    // Set current year dynamically
    document.getElementById('currentYear').textContent = new Date().getFullYear();
</script>
    
</main>

<script>
    // Carousel logic
    const slides = document.querySelectorAll('.carousel-slide');
    const dots = document.querySelectorAll('.dot');
    const prev = document.getElementById('prevSlide');
    const next = document.getElementById('nextSlide');
    let currentIdx = 0, transitioning = false;
    function updateSlide(index) {
        if(transitioning) return;
        transitioning = true;
        let newIdx = (index + slides.length) % slides.length;
        slides.forEach((s, i) => { s.style.opacity = i===newIdx ? '1' : '0'; s.setAttribute('data-active', i===newIdx ? 'true' : 'false'); });
        dots.forEach((d, i) => { d.style.background = i===newIdx ? 'white' : 'rgba(255,255,255,0.5)'; d.style.transform = i===newIdx ? 'scale(1.2)' : 'scale(1)'; });
        currentIdx = newIdx;
        setTimeout(() => { transitioning = false; }, 700);
    }
    function nextSlide() { updateSlide(currentIdx+1); }
    function prevSlide() { updateSlide(currentIdx-1); }
    if(next) next.addEventListener('click', nextSlide);
    if(prev) prev.addEventListener('click', prevSlide);
    dots.forEach((dot, i) => dot.addEventListener('click', () => updateSlide(i)));
    let autoTimer = setInterval(nextSlide, 5500);
    const carouselDiv = document.getElementById('carousel');
    if(carouselDiv) {
        carouselDiv.addEventListener('mouseenter', () => clearInterval(autoTimer));
        carouselDiv.addEventListener('mouseleave', () => { autoTimer = setInterval(nextSlide, 5500); });
    }
    updateSlide(0);
    // Mobile menu toggle
    const menuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenuDiv = document.getElementById('mobileMenu');
    if(menuBtn) menuBtn.addEventListener('click', () => mobileMenuDiv.classList.toggle('hidden'));
    // Smooth anchor scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const target = document.querySelector(this.getAttribute('href'));
            if(target) { e.preventDefault(); target.scrollIntoView({ behavior: 'smooth', block: 'start' }); if(mobileMenuDiv) mobileMenuDiv.classList.add('hidden'); }
        });
    });
    // Contact form handler
    const contactForm = document.getElementById('contactForm');
    if(contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Thank you for your message! A Kwacha Seeds representative will contact you within 24 hours.');
            contactForm.reset();
        });
    }
    // Newsletter handler
    const newsletterBtn = document.querySelector('.bg-orange-500');
    if(newsletterBtn) {
        newsletterBtn.addEventListener('click', () => {
            const emailInput = document.querySelector('.flex input[type="email"]');
            if(emailInput && emailInput.value) {
                alert(`Thank you for subscribing with ${emailInput.value}! You'll receive our latest updates.`);
                emailInput.value = '';
            } else {
                alert('Please enter a valid email address.');
            }
        });
    }
</script>
</body>
</html>