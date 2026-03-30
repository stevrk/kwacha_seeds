<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Kwacha Seeds | Empowering Malawi's Farmers with Quality Seeds</title>
    <!-- Tailwind + Font Awesome -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
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
    </style>
</head>
<body class="antialiased">

<!-- ========== NAVIGATION ========== -->
<nav class="fixed top-0 left-0 w-full z-50 shadow-lg" style="background: var(--kwacha-green);">
    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 bg-white rounded-full flex items-center justify-center shadow">
                    <i class="fas fa-seedling text-xl" style="color: var(--kwacha-green);"></i>
                </div>
                <span class="text-white text-xl font-bold tracking-tight" style="font-family: 'Playfair Display', serif;">Kwacha Seeds</span>
            </div>
            <div class="hidden md:flex items-center space-x-7">
                <a href="#home" class="text-white/90 hover:text-white text-sm font-medium transition">Home</a>
                <a href="#about" class="text-white/90 hover:text-white text-sm font-medium transition">About</a>
                <a href="#products" class="text-white/90 hover:text-white text-sm font-medium transition">Products</a>
                <a href="#farmers-hub" class="text-white/90 hover:text-white text-sm font-medium transition">Farmer's Hub</a>
                <a href="#stockists" class="text-white/90 hover:text-white text-sm font-medium transition">Stockists</a>
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
                <a href="#stockists" class="text-white/90 hover:text-white py-2">Stockists</a>
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
            <div id="carousel" class="relative h-[520px] md:h-[620px] overflow-hidden">
                <!-- Slide 1 - Hand in Hand -->
                <div class="carousel-slide absolute inset-0 opacity-100" data-active="true">
                    <div class="absolute inset-0">
                        <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?w=1600&auto=format" class="w-full h-full object-cover" alt="Farmers in Malawi">
                        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>
                    </div>
                    <div class="relative h-full flex items-center">
                        <div class="max-w-7xl mx-auto px-6 lg:px-10 w-full">
                            <div class="max-w-2xl slide-content">
                                <span class="inline-block px-4 py-1 rounded-full text-xs font-bold tracking-wider mb-4 badge-pulse" style="background: var(--accent-orange); color:white;">SINCE 1995</span>
                                <h1 class="text-4xl md:text-6xl font-bold text-white mb-4 leading-tight" style="font-family: 'Playfair Display';">We work Hand in Hand<br>with <span style="color:var(--accent-orange);">Farmers</span></h1>
                                <p class="text-lg md:text-xl text-gray-200 mb-6">Partnering with local farming communities to deliver sustainable agricultural solutions across Malawi.</p>
                                <div class="flex flex-wrap gap-4 mb-8">
                                    <div class="flex items-center gap-2"><i class="fas fa-users text-orange-400"></i><span class="text-white text-sm">12,000+ Farmers Served</span></div>
                                    <div class="flex items-center gap-2"><i class="fas fa-map-marker-alt text-orange-400"></i><span class="text-white text-sm">27 Districts Covered</span></div>
                                    <div class="flex items-center gap-2"><i class="fas fa-chart-line text-orange-400"></i><span class="text-white text-sm">+280% Yield Boost</span></div>
                                </div>
                                <div class="flex flex-wrap gap-4"><a href="#stockists" class="px-6 py-3 rounded-md font-semibold btn-primary text-white">Find Stockists</a><a href="#farmers-hub" class="px-6 py-3 rounded-md font-semibold btn-outline-white text-white">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 - Certified Seed -->
                <div class="carousel-slide absolute inset-0 opacity-0" data-active="false">
                    <div class="absolute inset-0"><img src="https://images.unsplash.com/photo-1585325701956-60dd9c8553bc?w=1600&auto=format" class="w-full h-full object-cover"><div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div></div>
                    <div class="relative h-full flex items-center"><div class="max-w-7xl mx-auto px-6 lg:px-10 w-full"><div class="max-w-2xl slide-content"><span class="inline-block px-4 py-1 rounded-full text-xs font-bold" style="background:var(--accent-orange);color:white;">CERTIFIED QUALITY</span><h1 class="text-4xl md:text-6xl font-bold text-white mb-4" style="font-family:'Playfair Display';">Certified Seed for<br><span style="color:var(--accent-orange);">Maximum Results</span></h1><p class="text-gray-200 text-lg mb-6">Every seed batch lab-tested, certified, and proven for Malawian conditions. 98% germination rate guaranteed.</p><div class="flex gap-5 mb-8"><div><i class="fas fa-flask text-orange-400"></i><span class="text-white text-sm ml-1">Lab Tested</span></div><div><i class="fas fa-certificate text-orange-400"></i><span class="text-white text-sm ml-1">ISO Certified</span></div><div><i class="fas fa-chart-simple text-orange-400"></i><span class="text-white text-sm ml-1">98% Germination</span></div></div><a href="#about" class="px-6 py-3 rounded-md font-semibold btn-primary text-white inline-block">View Certifications</a></div></div></div>
                </div>
                <!-- Slide 3 - Abundant Harvest -->
                <div class="carousel-slide absolute inset-0 opacity-0" data-active="false">
                    <div class="absolute inset-0"><img src="https://images.unsplash.com/photo-1471193945509-9ad0617afabf?w=1600&auto=format" class="w-full h-full object-cover"><div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div></div>
                    <div class="relative h-full flex items-center"><div class="max-w-7xl mx-auto px-6 lg:px-10 w-full"><div class="max-w-2xl slide-content"><span class="inline-block px-4 py-1 rounded-full text-xs font-bold" style="background:var(--accent-orange);color:white;">SUCCESS STORIES</span><h1 class="text-4xl md:text-6xl font-bold text-white mb-4" style="font-family:'Playfair Display';">Abundant Harvest<br><span style="color:var(--accent-orange);">Beyond Expectations</span></h1><p class="text-gray-200 text-lg mb-6">Farmers using Kwacha Seeds report transformative harvests. Join thousands securing food and income.</p><div class="flex gap-5 mb-8"><div><i class="fas fa-star text-orange-400"></i><span class="text-white text-sm ml-1">4.9/5 Rating</span></div><div><i class="fas fa-tractor text-orange-400"></i><span class="text-white text-sm ml-1">50+ Varieties</span></div><div><i class="fas fa-leaf text-orange-400"></i><span class="text-white text-sm ml-1">Eco-friendly</span></div></div><a href="#farmers-hub" class="px-6 py-3 rounded-md font-semibold btn-primary text-white inline-block">Read Stories</a></div></div></div>
                </div>
            </div>
            <div class="absolute bottom-5 left-1/2 transform -translate-x-1/2 flex gap-2 z-10"><span class="dot w-2.5 h-2.5 rounded-full bg-white cursor-pointer transition-all"></span><span class="dot w-2.5 h-2.5 rounded-full bg-white/50 cursor-pointer"></span><span class="dot w-2.5 h-2.5 rounded-full bg-white/50 cursor-pointer"></span></div>
            <button id="prevSlide" class="absolute left-4 top-1/2 -translate-y-1/2 w-9 h-9 rounded-full bg-black/30 backdrop-blur-sm text-white hover:bg-black/50 transition"><i class="fas fa-chevron-left text-sm"></i></button>
            <button id="nextSlide" class="absolute right-4 top-1/2 -translate-y-1/2 w-9 h-9 rounded-full bg-black/30 backdrop-blur-sm text-white hover:bg-black/50 transition"><i class="fas fa-chevron-right text-sm"></i></button>
        </div>
    </section>

    <!-- ========== ABOUT US (extended: story, mission, certs) ========== -->
    <section id="about" class="py-16 md:py-20" style="background: var(--kwacha-green-bg);">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold" style="color: var(--kwacha-green);">About Kwacha Seeds</h2>
                <div class="w-20 h-1 mx-auto mt-3 mb-5" style="background: var(--accent-orange);"></div>
                <p class="text-gray-700 max-w-3xl mx-auto">Rooted in Malawi, dedicated to food security and farmer prosperity.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div><h3 class="text-2xl font-bold mb-4" style="color:var(--kwacha-green);">Our Story & Mission</h3><p class="text-gray-700 mb-4">Founded in 1995, Kwacha Seeds began with a simple vision: provide Malawian farmers with affordable, high-yield, and resilient seed varieties. Today we are a trusted partner in the agriculture sector, serving smallholders and commercial growers alike.</p><p class="text-gray-700 mb-4"><strong>Mission:</strong> To empower farmers through superior genetics, agronomy training, and accessible distribution networks, driving food security and economic growth.</p><div class="flex flex-wrap gap-4 mt-5"><span class="bg-white px-4 py-1 rounded-full text-sm shadow-sm"><i class="fas fa-check-circle text-green-700 mr-1"></i> MBS Certified</span><span class="bg-white px-4 py-1 rounded-full text-sm shadow-sm"><i class="fas fa-trophy text-green-700 mr-1"></i> Best Agro Award 2023</span></div></div>
                <div class="bg-white p-6 rounded-2xl shadow-md"><h4 class="font-bold text-xl mb-3" style="color:var(--kwacha-green);">📋 Our Certifications</h4><ul class="space-y-3 text-gray-700"><li><i class="fas fa-flask text-orange-500 w-6"></i> Malawi Bureau of Standards (MBS) Quality Mark</li><li><i class="fas fa-leaf text-orange-500 w-6"></i> ISO 9001:2022 Seed Processing</li><li><i class="fas fa-vial text-orange-500 w-6"></i> ISTA Accredited Laboratory Testing</li><li><i class="fas fa-hand-holding-heart text-orange-500 w-6"></i> Member: Seed Trade Association of Malawi</li></ul><div class="mt-5 pt-4 border-t"><p class="text-sm italic">“We ensure every packet meets rigorous purity and germination thresholds.”</p></div></div>
            </div>
        </div>
    </section>

    <!-- ========== PRODUCTS (detailed categories: Maize, Legumes, Vegetables) ========== -->
    <section id="products" class="py-16 md:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-12"><h2 class="text-3xl md:text-4xl font-bold" style="color:var(--kwacha-green);">Our Seeds</h2><div class="w-20 h-1 mx-auto mt-2 bg-orange-500 mb-3"></div><p class="text-gray-600">Superior genetics for every agro-ecological zone</p></div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="product-card rounded-2xl overflow-hidden bg-gray-50 shadow-md"><div class="h-52 overflow-hidden"><img src="https://images.unsplash.com/photo-1585325701956-60dd9c8553bc?w=600" class="w-full h-full object-cover hover:scale-105 transition duration-500"></div><div class="p-5"><div class="flex justify-between items-start"><h3 class="text-xl font-bold" style="color:var(--kwacha-green);">Premium Maize</h3><span class="bg-orange-100 text-orange-800 text-xs px-2 py-1 rounded-full">Best Seller</span></div><p class="text-gray-600 text-sm mt-2">DK-777, MH30 – drought-tolerant, resistant to MSV & GLS. Maturity: 120–135 days.</p><div class="mt-3 flex justify-between items-center"><span class="text-2xl font-bold text-orange-600">MK 4,800</span><a href="#" class="text-sm font-semibold px-4 py-2 rounded-lg" style="background:var(--kwacha-green);color:white;">View Specs</a></div><div class="text-xs text-gray-500 mt-2"><i class="fas fa-tachometer-alt"></i> Yield potential: 7–9 tons/ha</div></div></div>
                <div class="product-card rounded-2xl overflow-hidden bg-gray-50 shadow-md"><div class="h-52 overflow-hidden"><img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?w=600" class="w-full h-full object-cover hover:scale-105 transition"></div><div class="p-5"><h3 class="text-xl font-bold" style="color:var(--kwacha-green);">Soybean Elite</h3><p class="text-gray-600 text-sm mt-2">High protein (45%), nodulation superior, ideal for crop rotation & soil fertility.</p><div class="mt-3 flex justify-between items-center"><span class="text-2xl font-bold text-orange-600">MK 3,500</span><a href="#" class="text-sm font-semibold px-4 py-2 rounded-lg" style="background:var(--kwacha-green);color:white;">Details</a></div><div class="text-xs text-gray-500 mt-2"><i class="fas fa-chart-line"></i> Maturity: 100–110 days</div></div></div>
                <div class="product-card rounded-2xl overflow-hidden bg-gray-50 shadow-md"><div class="h-52 overflow-hidden"><img src="https://images.unsplash.com/photo-1471193945509-9ad0617afabf?w=600" class="w-full h-full object-cover hover:scale-105 transition"></div><div class="p-5"><h3 class="text-xl font-bold" style="color:var(--kwacha-green);">Groundnut Gold</h3><p class="text-gray-600 text-sm mt-2">Drought-tolerant, high oil content, resistant to rosette virus. Great for smallholders.</p><div class="mt-3 flex justify-between items-center"><span class="text-2xl font-bold text-orange-600">MK 4,200</span><a href="#" class="text-sm font-semibold px-4 py-2 rounded-lg" style="background:var(--kwacha-green);color:white;">Learn More</a></div><div class="text-xs text-gray-500 mt-2"><i class="fas fa-water"></i> Suitable for low-rainfall areas</div></div></div>
            </div>
            <div class="mt-10 text-center"><a href="#" class="inline-block px-8 py-3 rounded-lg font-semibold border-2 border-green-800 text-green-800 hover:bg-green-800 hover:text-white transition">View All Products <i class="fas fa-arrow-right ml-1"></i></a></div>
        </div>
    </section>

    <!-- ========== FARMER'S HUB (Resources: agronomy tips, FAQ, planting calendar) ========== -->
    <section id="farmers-hub" class="py-16 md:py-20" style="background: #FEF9E6;">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-12"><h2 class="text-3xl md:text-4xl font-bold" style="color:var(--kwacha-green);">Farmer’s Hub</h2><div class="w-20 h-1 mx-auto mt-2 bg-orange-500"></div><p class="text-gray-700 mt-3">Practical knowledge, agronomy tips & seasonal guides</p></div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition"><i class="fas fa-calendar-alt text-3xl text-orange-500 mb-3"></i><h3 class="text-xl font-bold mb-2">Planting Calendar</h3><p class="text-gray-600 text-sm">Optimal maize planting: Nov–Dec; Soybeans: Dec–Jan; follow soil moisture updates.</p><a href="#" class="text-green-800 text-sm font-semibold mt-2 inline-block">Download PDF <i class="fas fa-download"></i></a></div>
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition"><i class="fas fa-bug text-3xl text-orange-500 mb-3"></i><h3 class="text-xl font-bold mb-2">Pest & Disease Control</h3><p class="text-gray-600 text-sm">Integrated pest management: fall armyworm alerts, use recommended pesticides & crop rotation.</p><a href="#" class="text-green-800 text-sm font-semibold mt-2 inline-block">Read Guide →</a></div>
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition"><i class="fas fa-question-circle text-3xl text-orange-500 mb-3"></i><h3 class="text-xl font-bold mb-2">FAQ</h3><ul class="text-sm text-gray-600 space-y-2 list-disc pl-4"><li>When to apply fertilizer? 2–3 weeks after germination.</li><li>Seed rate per hectare? Maize: 25kg, Soybean: 50kg.</li><li>How to store leftover seeds? Cool dry place, avoid moisture.</li></ul></div>
            </div>
            <div class="mt-10 bg-green-50 p-6 rounded-xl max-w-3xl mx-auto text-center"><i class="fas fa-headset text-2xl text-orange-500"></i><h4 class="font-bold text-lg mt-1">Agronomy Hotline: +265 888 123 456</h4><p class="text-gray-600 text-sm">Call our experts for personalized farming advice, Mon–Sat 8am–5pm</p></div>
        </div>
    </section>

    <!-- ========== STOCKISTS (Where to Buy / Dealer Locator) ========== -->
    <section id="stockists" class="py-16 md:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center"><h2 class="text-3xl md:text-4xl font-bold" style="color:var(--kwacha-green);">Where to Buy</h2><div class="w-20 h-1 mx-auto mt-2 bg-orange-500 mb-3"></div><p class="text-gray-600">Find an authorized Kwacha Seeds stockist near you</p></div>
            <div class="grid md:grid-cols-3 gap-6 mt-10">
                <div class="stockist-card border rounded-xl p-5 bg-gray-50"><i class="fas fa-map-pin text-orange-500 text-2xl mb-2"></i><h3 class="font-bold">Lilongwe City Centre</h3><p class="text-sm text-gray-600">AgroPlus Dealers, Opposite Area 18 Market<br> +265 999 123 456</p></div>
                <div class="stockist-card border rounded-xl p-5 bg-gray-50"><i class="fas fa-map-pin text-orange-500 text-2xl mb-2"></i><h3 class="font-bold">Blantyre - Limbe</h3><p class="text-sm text-gray-600">Farmers Choice Ltd, Ginnery Corner<br> +265 888 765 432</p></div>
                <div class="stockist-card border rounded-xl p-5 bg-gray-50"><i class="fas fa-map-pin text-orange-500 text-2xl mb-2"></i><h3 class="font-bold">Mzuzu</h3><p class="text-sm text-gray-600">Northern Agro Hub, Opposite Mzuzu Stadium<br> +265 881 234 567</p></div>
            </div>
            <div class="mt-8 text-center"><a href="#" class="inline-flex items-center gap-2 bg-green-800 text-white px-6 py-2 rounded-full text-sm font-semibold"><i class="fas fa-store"></i> View All 50+ Stockists by District</a><p class="text-xs text-gray-500 mt-3">Interested in selling Kwacha Seeds? <a href="#contact" class="text-orange-600 font-bold">Become a stockist →</a></p></div>
        </div>
    </section>

    <!-- ========== GALLERY / MEDIA SECTION ========== -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center"><h2 class="text-3xl font-bold" style="color:var(--kwacha-green);">Field & Success Gallery</h2><div class="w-16 h-1 bg-orange-500 mx-auto mt-2 mb-8"></div></div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?w=400" class="rounded-lg shadow-md h-40 w-full object-cover hover:scale-105 transition" alt="harvest">
                <img src="https://images.unsplash.com/photo-1585325701956-60dd9c8553bc?w=400" class="rounded-lg shadow-md h-40 w-full object-cover hover:scale-105 transition" alt="maize field">
                <img src="https://images.unsplash.com/photo-1471193945509-9ad0617afabf?w=400" class="rounded-lg shadow-md h-40 w-full object-cover hover:scale-105 transition" alt="soybeans">
                <img src="https://images.unsplash.com/photo-1592982537447-2f6c6a7d9a3b?w=400" class="rounded-lg shadow-md h-40 w-full object-cover hover:scale-105 transition" alt="farmers meeting">
            </div>
            <div class="text-center mt-6"><p class="text-sm text-gray-500">Watch farmer testimonials on <i class="fab fa-youtube text-red-600"></i> YouTube & <i class="fab fa-facebook"></i> Facebook</p></div>
        </div>
    </section>

    <!-- ========== CONTACT + BECOME A STOCKIST FORM ========== -->
    <section id="contact" class="py-16 md:py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12">
                <div><h3 class="text-2xl font-bold mb-4" style="color:var(--kwacha-green);">📞 Contact Us</h3><p class="text-gray-700 mb-5">We’re here to help with seed inquiries, bulk orders, or partnership opportunities.</p><div class="space-y-3"><div><i class="fas fa-location-dot w-6 text-orange-500"></i> Head Office: Lilongwe, Area 12, Plot 45, Malawi</div><div><i class="fas fa-phone-alt w-6 text-orange-500"></i> +265 123 456 789 / +265 991 234 567</div><div><i class="fas fa-envelope w-6 text-orange-500"></i> sales@kwachaseeds.mw | info@kwachaseeds.mw</div><div><i class="fab fa-whatsapp w-6 text-green-500"></i> WhatsApp Agronomy: +265 888 654 321</div></div><div class="mt-6 flex gap-4"><a href="#" class="text-gray-600 hover:text-green-800 text-2xl"><i class="fab fa-facebook-square"></i></a><a href="#" class="text-gray-600 hover:text-green-800 text-2xl"><i class="fab fa-instagram"></i></a><a href="#" class="text-gray-600 hover:text-green-800 text-2xl"><i class="fab fa-whatsapp"></i></a></div></div>
                <div class="bg-gray-50 p-6 rounded-2xl shadow"><h4 class="text-xl font-bold mb-3">Become a Stockist / Get a Quote</h4><form><div class="grid grid-cols-1 gap-4"><input type="text" placeholder="Full Name" class="p-3 rounded-lg border border-gray-300"><input type="email" placeholder="Email Address" class="p-3 rounded-lg border border-gray-300"><input type="tel" placeholder="Phone Number" class="p-3 rounded-lg border border-gray-300"><select class="p-3 rounded-lg border border-gray-300"><option>I'm interested in: Buying seeds</option><option>Becoming an authorized stockist</option><option>Bulk purchase (cooperative/NGO)</option><option>Agronomy support</option></select><textarea rows="3" placeholder="Your message" class="p-3 rounded-lg border border-gray-300"></textarea><button type="submit" class="btn-primary text-white font-semibold py-3 rounded-lg">Send Message <i class="fas fa-paper-plane"></i></button></div></form></div>
            </div>
        </div>
    </section>

    <!-- ========== CALL TO ACTION (BANNER) ========== -->
    <div class="py-12" style="background: var(--kwacha-green);"><div class="max-w-3xl mx-auto text-center px-4"><h2 class="text-2xl md:text-3xl font-bold text-white">Ready to Transform Your Harvest?</h2><p class="text-green-100 my-3">Join thousands of successful farmers who trust Kwacha Seeds</p><a href="#stockists" class="inline-block bg-white px-8 py-3 rounded-md font-bold text-green-800 shadow-lg hover:shadow-xl transition">Get Your Seeds Today</a></div></div>

    <!-- FOOTER -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 grid md:grid-cols-4 gap-8">
            <div><div class="flex items-center gap-2 mb-3"><i class="fas fa-seedling text-2xl text-orange-400"></i><span class="text-xl font-bold">Kwacha Seeds</span></div><p class="text-gray-400 text-sm">Empowering Malawian farmers with certified, high-yield seeds since 1995.</p></div>
            <div><h4 class="font-semibold mb-3">Quick Links</h4><ul class="space-y-1 text-gray-400 text-sm"><li><a href="#home" class="hover:text-white">Home</a></li><li><a href="#about" class="hover:text-white">About</a></li><li><a href="#products" class="hover:text-white">Products</a></li><li><a href="#farmers-hub" class="hover:text-white">Farmer's Hub</a></li><li><a href="#stockists" class="hover:text-white">Stockists</a></li></ul></div>
            <div><h4 class="font-semibold mb-3">Legal</h4><ul class="space-y-1 text-gray-400 text-sm"><li>Terms of Sale</li><li>Privacy Policy</li><li>Seed Guarantee Policy</li></ul></div>
            <div><h4 class="font-semibold mb-3">Newsletter</h4><p class="text-gray-400 text-sm mb-2">Get seasonal planting alerts & offers.</p><div class="flex"><input type="email" placeholder="Your email" class="p-2 rounded-l-md w-full text-gray-800"><button class="bg-orange-500 px-3 rounded-r-md"><i class="fas fa-arrow-right text-white"></i></button></div></div>
        </div>
        <div class="border-t border-gray-800 mt-10 pt-6 text-center text-gray-500 text-sm">&copy; 2025 Kwacha Seeds Company. Growing Malawi, One Seed at a Time.</div>
    </footer>
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
    next.addEventListener('click', nextSlide);
    prev.addEventListener('click', prevSlide);
    dots.forEach((dot, i) => dot.addEventListener('click', () => updateSlide(i)));
    let autoTimer = setInterval(nextSlide, 5500);
    const carouselDiv = document.getElementById('carousel');
    carouselDiv.addEventListener('mouseenter', () => clearInterval(autoTimer));
    carouselDiv.addEventListener('mouseleave', () => { autoTimer = setInterval(nextSlide, 5500); });
    updateSlide(0);
    // Mobile menu toggle
    const menuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenuDiv = document.getElementById('mobileMenu');
    menuBtn.addEventListener('click', () => mobileMenuDiv.classList.toggle('hidden'));
    // Smooth anchor scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const target = document.querySelector(this.getAttribute('href'));
            if(target) { e.preventDefault(); target.scrollIntoView({ behavior: 'smooth', block: 'start' }); mobileMenuDiv.classList.add('hidden'); }
        });
    });
</script>
</body>
</html>