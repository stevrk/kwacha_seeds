@extends('layouts.app')

@section('title', 'Kwacha Seeds - Gallery')

@section('content')
<!-- Spacer for fixed navbar -->
<div class="h-[60px] sm:h-[80px] md:h-[120px] lg:h-[140px]"></div>

<section class="py-8 md:py-12 bg-gradient-to-b from-white to-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Hero Section - Smaller -->
        <div class="text-center mb-8 md:mb-10">
            <div class="inline-flex items-center gap-2 bg-orange-100 rounded-full px-3 py-1.5 mb-3">
                <i class="fas fa-images text-orange-500 text-xs"></i>
                <span class="text-xs font-semibold text-orange-600">Our Visual Story</span>
            </div>
            <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-2" style="color: var(--kwacha-green);">
                Moments That Matter<!--<span style="color: var(--accent-orange);">Matter</span>-->
            </h1>
            <p class="text-gray-500 text-sm max-w-2xl mx-auto">
                A collection of our favorite moments from the field, events, and community engagements
            </p>
        </div>
        
        <!-- Category Pills - Smaller -->
        <div class="flex flex-wrap justify-center gap-2 mb-8 md:mb-10">
            <button class="category-pill active px-3 py-1.5 rounded-full text-xs font-medium transition-all" data-cat="all">
                <i class="fas fa-th mr-1 text-xs"></i> All
            </button>
            <button class="category-pill px-3 py-1.5 rounded-full text-xs font-medium transition-all" data-cat="photo">
                <i class="fas fa-image mr-1 text-xs"></i> Photos 
                <span class="ml-0.5 text-[10px]">(6)</span>
            </button>
            <button class="category-pill px-3 py-1.5 rounded-full text-xs font-medium transition-all" data-cat="video">
                <i class="fab fa-youtube mr-1 text-xs"></i> Videos 
                <span class="ml-0.5 text-[10px]">(4)</span>
            </button>
        </div>
        
        <!-- Gallery Grid - Smaller items -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-3 md:gap-4" id="galleryGrid">
            <!-- Content loaded dynamically -->
        </div>
        
        <!-- Empty State -->
        <div id="emptyState" class="text-center py-12 hidden">
            <i class="fas fa-camera-slash text-4xl text-gray-300 mb-3"></i>
            <h3 class="text-lg font-semibold text-gray-600">No media found</h3>
            <p class="text-gray-400 text-sm mt-1">Try selecting a different category</p>
        </div>
        
    </div>
</section>

<!-- Lightbox Modal -->
<div id="lightboxModal" class="fixed inset-0 bg-black/95 z-[1000] hidden items-center justify-center p-4 cursor-pointer">
    <button class="absolute top-4 right-4 text-white text-2xl hover:text-orange-500 transition z-10">&times;</button>
    <img id="lightboxImage" class="max-w-full max-h-[85vh] object-contain">
    <div class="absolute bottom-0 left-0 right-0 bg-black/70 text-white text-center py-2 px-3 text-sm">
        <p id="lightboxCaption"></p>
    </div>
</div>

<!-- Video Modal -->
<div id="videoModal" class="fixed inset-0 bg-black/95 z-[1000] hidden items-center justify-center p-4">
    <div class="relative max-w-3xl w-full">
        <button class="absolute -top-10 right-0 text-white text-2xl hover:text-orange-500 transition">&times;</button>
        <div class="relative pb-[56.25%] h-0 bg-black rounded-lg overflow-hidden">
            <iframe id="videoIframe" class="absolute top-0 left-0 w-full h-full" src="" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="bg-white rounded-b-lg p-3">
            <h3 id="videoTitle" class="font-bold text-base" style="color: var(--kwacha-green);"></h3>
            <p id="videoDescription" class="text-gray-600 text-xs mt-1"></p>
        </div>
    </div>
</div>

@push('styles')
<style>
    .gallery-card {
        background: white;
        border-radius: 0.75rem;
        overflow: hidden;
        box-shadow: 0 2px 4px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        cursor: pointer;
        position: relative;
    }
    
    .gallery-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    }
    
    .gallery-image {
        width: 100%;
        aspect-ratio: 1;
        object-fit: cover;
        transition: transform 0.4s ease;
    }
    
    .gallery-card:hover .gallery-image {
        transform: scale(1.03);
    }
    
    .category-pill {
        background: #f3f4f6;
        color: #4b5563;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    
    .category-pill.active {
        background: var(--kwacha-green);
        color: white;
        box-shadow: 0 2px 6px rgba(10,59,10,0.2);
    }
    
    .category-pill:hover:not(.active) {
        background: #e5e7eb;
        transform: translateY(-1px);
    }
    
    /* Overlay text - smaller */
    .gallery-card .overlay-text {
        font-size: 0.7rem;
        line-height: 1.3;
    }
</style>
@endpush

@push('scripts')
<script>
    const galleryData = {
        photos: [
            { id: 1, url: "{{ asset('images/product.jpeg') }}", caption: "Our SoyBean Package", date: "2024-03-18" },
            { id: 2, url: "{{ asset('images/kwacha seeds 4.jpg') }}", caption: "Chitedze Trade Fair", date: "2024-03-12" },
            { id: 3, url: "{{ asset('images/crop insp.jpg') }}", caption: "Crop inspection at LUANAR", date: "2024-03-08" },
            { id: 4, url: "{{ asset('images/promo.jpg') }}", caption: "Gulani Mbeu Yamakono", date: "2024-03-01" },
            { id: 5, url: "{{ asset('images/promo1.jpg') }}", caption: "Seed distribution event", date: "2024-02-25" },
            { id: 6, url: "{{ asset('images/promo3.jpg') }}", caption: "Farmers Day Celebration", date: "2024-02-20" },
        ],
        videos: [
            { id: 1, videoId: "HFtCxKmemEY", title: "Chitedze 4 Soybean", description: "Rouging demonstration", date: "2024-03-20", thumbnail: "https://img.youtube.com/vi/HFtCxKmemEY/mqdefault.jpg" },
            { id: 2, videoId: "ryZvXbA_Bcw", title: "Farmer Testimonies", description: "Hear from our farmers", date: "2024-03-15", thumbnail: "https://img.youtube.com/vi/ryZvXbA_Bcw/mqdefault.jpg" },
            { id: 3, videoId: "igPvaO1GV6s", title: "Agriculture Trade Fair", description: "Showcasing our seeds", date: "2024-03-10", thumbnail: "https://img.youtube.com/vi/igPvaO1GV6s/mqdefault.jpg" },
            { id: 4, videoId: "WyQbYjUDmC0", title: "Tidziwe Zambiri", description: "About Chitedze 4", date: "2024-03-05", thumbnail: "https://img.youtube.com/vi/WyQbYjUDmC0/mqdefault.jpg" },
        ]
    };
    
    let currentCategory = 'all';
    
    function formatDate(dateString) {
        const date = new Date(dateString);
        const now = new Date();
        const diffDays = Math.floor((now - date) / (1000 * 60 * 60 * 24));
        if (diffDays === 0) return 'Today';
        if (diffDays === 1) return 'Yesterday';
        if (diffDays < 7) return `${diffDays}d`;
        return date.toLocaleDateString('en-US', { month: 'short', day: 'numeric' });
    }
    
    function renderGallery() {
        const grid = document.getElementById('galleryGrid');
        const emptyState = document.getElementById('emptyState');
        if (!grid) return;
        
        let items = [];
        if (currentCategory === 'all') {
            const photos = galleryData.photos.map(p => ({ ...p, type: 'photo' }));
            const videos = galleryData.videos.map(v => ({ ...v, type: 'video' }));
            items = [...photos, ...videos].sort((a, b) => new Date(b.date) - new Date(a.date));
        } else if (currentCategory === 'photo') {
            items = galleryData.photos.map(p => ({ ...p, type: 'photo' }));
        } else {
            items = galleryData.videos.map(v => ({ ...v, type: 'video' }));
        }
        
        if (items.length === 0) {
            grid.innerHTML = '';
            emptyState.classList.remove('hidden');
            return;
        }
        
        emptyState.classList.add('hidden');
        
        grid.innerHTML = items.map(item => {
            if (item.type === 'photo') {
                return `
                    <div class="gallery-card group" onclick="openLightbox('${item.url}', '${item.caption}')">
                        <img src="${item.url}" alt="${item.caption}" class="gallery-image" loading="lazy">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-2">
                            <div class="text-white w-full">
                                <p class="text-[10px] sm:text-xs font-medium truncate">${item.caption}</p>
                                <p class="text-[8px] sm:text-[10px] text-white/70">${formatDate(item.date)}</p>
                            </div>
                        </div>
                        <div class="absolute top-1 left-1 bg-green-600 text-white text-[9px] px-1.5 py-0.5 rounded-full">
                            <i class="fas fa-camera mr-0.5 text-[8px]"></i> Photo
                        </div>
                    </div>
                `;
            } else {
                return `
                    <div class="gallery-card group" onclick="openVideo('${item.videoId}', '${item.title}', '${item.description}')">
                        <img src="${item.thumbnail}" alt="${item.title}" class="gallery-image" loading="lazy">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center transform scale-0 group-hover:scale-100 transition-transform">
                                <i class="fas fa-play text-white text-sm ml-0.5"></i>
                            </div>
                        </div>
                        <div class="absolute top-1 left-1 bg-red-600 text-white text-[9px] px-1.5 py-0.5 rounded-full">
                            <i class="fab fa-youtube mr-0.5 text-[8px]"></i> Video
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-2">
                            <p class="text-white text-[10px] sm:text-xs font-medium truncate">${item.title}</p>
                            <p class="text-white/70 text-[8px] sm:text-[10px]">${formatDate(item.date)}</p>
                        </div>
                    </div>
                `;
            }
        }).join('');
    }
    
    function openLightbox(url, caption) {
        const modal = document.getElementById('lightboxModal');
        const img = document.getElementById('lightboxImage');
        const captionEl = document.getElementById('lightboxCaption');
        if (modal && img && captionEl) {
            img.src = url;
            captionEl.textContent = caption;
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    }
    
    function openVideo(videoId, title, description) {
        const modal = document.getElementById('videoModal');
        const iframe = document.getElementById('videoIframe');
        const titleEl = document.getElementById('videoTitle');
        const descEl = document.getElementById('videoDescription');
        
        iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
        titleEl.textContent = title;
        descEl.textContent = description;
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }
    
    function closeModals() {
        const lightbox = document.getElementById('lightboxModal');
        const videoModal = document.getElementById('videoModal');
        const iframe = document.getElementById('videoIframe');
        
        if (lightbox) {
            lightbox.classList.add('hidden');
            lightbox.classList.remove('flex');
        }
        if (videoModal) {
            videoModal.classList.add('hidden');
            videoModal.classList.remove('flex');
            if (iframe) iframe.src = '';
        }
    }
    
    document.addEventListener('DOMContentLoaded', function() {
        renderGallery();
        
        const pills = document.querySelectorAll('.category-pill');
        pills.forEach(pill => {
            pill.addEventListener('click', () => {
                pills.forEach(p => p.classList.remove('active'));
                pill.classList.add('active');
                currentCategory = pill.dataset.cat;
                renderGallery();
            });
        });
        
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeModals();
        });
        
        const lightboxClose = document.querySelector('#lightboxModal button');
        const videoClose = document.querySelector('#videoModal button');
        
        if (lightboxClose) lightboxClose.addEventListener('click', closeModals);
        if (videoClose) videoClose.addEventListener('click', closeModals);
        
        document.querySelectorAll('#lightboxModal, #videoModal').forEach(modal => {
            modal.addEventListener('click', (e) => {
                if (e.target === modal) closeModals();
            });
        });
    });
</script>
@endpush
@endsection