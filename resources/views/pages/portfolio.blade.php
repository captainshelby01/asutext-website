@extends('layouts.app')

@section('title', 'Work Gallery & Portfolio | Asutext Group Nigeria Limited')

@section('content')
  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  HERO BANNER                                               -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-20 bg-brand-dark text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <p class="section-label section-label--red mb-3">Our Work</p>
      <h1 class="font-display text-4xl sm:text-5xl font-black leading-tight">
        See What We Deliver
      </h1>
      <p class="text-gray-300 mt-4 max-w-xl text-base leading-relaxed">
        Real projects, real results. Browse through our multi-industry service portfolio and watch us in action.
      </p>
    </div>
    <div class="absolute inset-0 bg-gradient-to-r from-brand-dark to-black opacity-90 z-0"></div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  PORTFOLIO SECTION                                         -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section id="portfolio" class="py-14 sm:py-20 lg:py-24 bg-brand-dark overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <!-- Category Filter Tabs -->
      <div class="flex flex-wrap gap-3 mb-8 sm:mb-12 justify-center reveal">
        <button class="portfolio-filter-btn px-6 py-2 rounded-full text-sm font-semibold border border-white/20 text-white bg-brand-red active-filter" data-filter="all">
          All Works
        </button>
        @foreach($services as $service)
          <button class="portfolio-filter-btn px-6 py-2 rounded-full text-sm font-semibold border border-white/10 text-gray-400 hover:text-white hover:border-white/20 transition-all" data-filter="service-{{ $service->id }}">
            {{ $service->name }}
          </button>
        @endforeach
      </div>

      <!-- Works Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 reveal">
        @forelse($portfolioItems as $item)
          <div class="portfolio-card portfolio-item-element" data-category="service-{{ $item->service_id }}" data-src="{{ asset('storage/' . $item->media_path) }}" data-type="{{ $item->media_type }}">
            @if($item->media_type === 'image')
              <img src="{{ asset('storage/' . $item->media_path) }}" alt="{{ $item->title }}" loading="lazy" />
            @else
              <video src="{{ asset('storage/' . $item->media_path) }}" muted preload="metadata" class="w-full h-full object-cover opacity-60"></video>
            @endif
            <div class="portfolio-card-overlay"></div>
            <div class="portfolio-card-content">
              <span class="portfolio-card-tag" style="background: var(--brand-red);">{{ $item->service->name }}</span>
              <p class="portfolio-card-title">{{ $item->title }}</p>
              <span class="portfolio-card-action">
                View Full {{ ucfirst($item->media_type) }}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3" class="w-3.5 h-3.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
              </span>
            </div>
          </div>
        @empty
          <!-- Static Fallback Items if DB is empty -->
          <div class="portfolio-card portfolio-item-element" data-category="all" data-src="/Images/cleaning-floor-polishing.jpg" data-type="image">
            <img src="/Images/cleaning-floor-polishing.jpg" alt="Floor Polishing" />
            <div class="portfolio-card-overlay"></div>
            <div class="portfolio-card-content">
              <span class="portfolio-card-tag" style="background: var(--brand-red);">Cleaning</span>
              <p class="portfolio-card-title">Floor Polishing & Cleaning</p>
              <span class="portfolio-card-action">View Image</span>
            </div>
          </div>
        @endforelse
      </div>

      <!-- Lightbox Modal -->
      <div class="portfolio-lightbox" id="portfolio-lightbox">
        <button class="portfolio-lightbox-close" id="lightbox-close" aria-label="Close image preview">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
        <div class="portfolio-lightbox-content">
          <img id="lightbox-img" src="" alt="Portfolio Image Preview" class="hidden" />
          <video id="lightbox-video" src="" controls autoplay class="hidden" style="max-height:80vh; max-width:100%; object-fit:contain;"></video>
        </div>
      </div>

    </div>
  </section>

  <!-- JS integration for gallery filters -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      // Filter functionality
      const filterBtns = document.querySelectorAll('.portfolio-filter-btn');
      const items = document.querySelectorAll('.portfolio-item-element');

      filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
          // Remove active classes
          filterBtns.forEach(b => {
            b.classList.remove('bg-brand-red', 'text-white');
            b.classList.add('text-gray-400', 'border-white/10');
          });

          // Set active class
          btn.classList.add('bg-brand-red', 'text-white');
          btn.classList.remove('text-gray-400', 'border-white/10');

          const filterVal = btn.getAttribute('data-filter');

          items.forEach(item => {
            if (filterVal === 'all' || item.getAttribute('data-category') === filterVal) {
              item.style.display = 'block';
            } else {
              item.style.display = 'none';
            }
          });
        });
      });
    });
  </script>
@endsection
