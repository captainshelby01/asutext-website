@extends('layouts.app')

@section('title', $globalSettings['seo_title'] ?? 'Asutext Group Nigeria Limited | Multi-Service Excellence in Lagos')

@section('content')

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  HERO                                                      -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section id="home" class="hero-section">
    <div class="hero-accent-line"></div>
    <div class="hero-slider">
      <div class="hero-slide" style="background-image: url('{{ !empty($globalSettings['hero_slide_1']) ? asset('storage/' . $globalSettings['hero_slide_1']) : '/Images/cleaning-estate-exterior-1.jpg' }}');"></div>
      <div class="hero-slide" style="background-image: url('{{ !empty($globalSettings['hero_slide_2']) ? asset('storage/' . $globalSettings['hero_slide_2']) : '/Images/branding-custom-caps.jpg' }}');"></div>
      <div class="hero-slide" style="background-image: url('{{ !empty($globalSettings['hero_slide_3']) ? asset('storage/' . $globalSettings['hero_slide_3']) : '/Images/catering-restaurant-interior.jpg' }}');"></div>
    </div>
    <div class="hero-overlay"></div>
 
    <div class="hero-content w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-20 sm:pt-20 sm:pb-24 lg:pt-24 lg:pb-32">
      <div class="max-w-3xl">
        <div class="hero-badge mb-8 reveal">
          Nationwide Service &nbsp;·&nbsp; Est. 2023 &nbsp;·&nbsp; CAC Incorporated
        </div>
 
        <h1 class="font-display text-4xl sm:text-5xl lg:text-7xl font-black text-white leading-tight mb-6 reveal reveal-delay-1">
          One Company.<br/>
          <span class="text-brand-red">Eight Services.</span><br/>
          Total Reliability.
        </h1>
 
        <p class="text-gray-300 text-lg sm:text-xl leading-relaxed mb-10 max-w-2xl reveal reveal-delay-2">
          From professional cleaning and laundry to transport, fast food, branding, and fashion.
          Asutext Group Nigeria Limited delivers quality you can count on, across Lagos,
          Cross-River State, and nationwide.
        </p>

        <div class="hero-cta-buttons flex flex-col sm:flex-row gap-4 reveal reveal-delay-3">
          <a
            href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%27m%20visiting%20your%20website%20and%20I%27d%20like%20to%20get%20a%20free%20quote."
            target="_blank"
            rel="noopener noreferrer"
            class="btn-whatsapp text-base"
            id="hero-wa-btn"
          >
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
              <path d="M12 0C5.373 0 0 5.373 0 12c0 2.117.549 4.107 1.51 5.843L.057 23.569a.75.75 0 0 0 .974.906l5.878-1.938A11.944 11.944 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.75a9.726 9.726 0 0 1-4.951-1.354l-.355-.212-3.686 1.215 1.165-3.585-.231-.368A9.715 9.715 0 0 1 2.25 12C2.25 6.615 6.615 2.25 12 2.25S21.75 6.615 21.75 12 17.385 21.75 12 21.75z"/>
            </svg>
            Get a Free Quote
          </a>
          <a href="{{ route('services') }}" class="btn-outline text-base">
            Explore Our Services
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
            </svg>
          </a>
        </div>

        <div class="hero-stats-container mt-10 sm:mt-16 reveal reveal-delay-4">
          <div class="hero-stat">
            <p class="hero-stat-number"><span class="count-up" data-target="8">0</span>+</p>
            <p class="hero-stat-label">Service Divisions</p>
          </div>
          <div class="hero-divider hidden sm:block"></div>
          <div class="hero-stat">
            <p class="hero-stat-number"><span class="count-up" data-target="5000">0</span>+</p>
            <p class="hero-stat-label">Corporate Clients</p>
          </div>
          <div class="hero-divider hidden sm:block"></div>
          <div class="hero-stat">
            <p class="hero-stat-number"><span class="count-up" data-target="36">0</span> States</p>
            <p class="hero-stat-label">Covered, &amp; Nations in West Africa</p>
          </div>
          <div class="hero-divider hidden sm:block"></div>
          <div class="hero-stat">
            <p class="hero-stat-number">2023</p>
            <p class="hero-stat-label">CAC Incorporated</p>
          </div>
        </div>
      </div>
    </div>

    <div class="scroll-indicator hidden lg:flex">
      <span class="mouse-wheel"></span>
      <span>Scroll Down</span>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  SERVICES PREVIEW                                          -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section id="services" class="py-14 sm:py-20 lg:py-24 bg-brand-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="mb-8 sm:mb-12 lg:mb-16 reveal">
        <p class="section-label section-label--blue mb-3">What We Do</p>
        <h2 class="font-display text-3xl sm:text-4xl font-black text-brand-dark">
          Our Services
        </h2>
        <p class="text-gray-500 mt-3 max-w-xl text-base leading-relaxed">
          Eight professional divisions. One trusted company. Tap any service to enquire directly on WhatsApp.
        </p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        @forelse($services as $service)
          <div class="service-card {{ $loop->index % 2 === 1 ? 'service-card--blue' : '' }} reveal reveal-delay-{{ ($loop->index % 4) + 1 }}">
            <div class="service-icon-wrap">
              @if($loop->index % 4 === 0)
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
              @elseif($loop->index % 4 === 1)
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                </svg>
              @elseif($loop->index % 4 === 2)
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                </svg>
              @else
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 22V12m0 0C12 7 8 3 3 3c0 5 3 9 9 9zm0 0c0-5 4-9 9-9-2 5-5 9-9 9z"/>
                </svg>
              @endif
            </div>
            <h3 class="font-display font-bold text-brand-dark text-base mb-2">{{ $service->name }}</h3>
            <p class="text-gray-500 text-sm leading-relaxed mb-5">{{ Str::limit($service->description, 120) }}</p>
            <a
              href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text={{ urlencode($service->whatsapp_cta_text) }}"
              target="_blank" rel="noopener noreferrer"
              class="service-enquire-link"
            >Enquire Now <span class="service-enquire-arrow">→</span></a>
          </div>
        @empty
          <div class="p-8 text-center col-span-full">No services found in database.</div>
        @endforelse
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  ABOUT OVERVIEW                                            -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section id="about" class="py-14 sm:py-20 lg:py-24 bg-white border-t border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 lg:gap-20 items-center">
        <div class="about-image-frame reveal-left" style="padding-bottom:16px; padding-right:16px;">
          <img src="/assets/images/work-cleaning.webp" alt="Asutext cleaning team delivering professional service" loading="lazy" />
          <div class="about-badge">
            <div class="about-badge-number">2023</div>
            <div class="about-badge-label">CAC Incorporated</div>
          </div>
        </div>

        <div class="reveal-right">
          <p class="section-label mb-4">Who We Are</p>
          <h2 class="font-display text-3xl sm:text-4xl font-black text-brand-dark mb-6 leading-tight">
            Built on Quality.<br/>Driven by Purpose.
          </h2>
          <p class="text-gray-600 leading-relaxed mb-6 text-base">
            Asutext Group Nigeria Limited was established by experienced Nigerian entrepreneurs to bridge the gap in standard service delivery. Formally incorporated on <strong>14th September 2023</strong> under the CAMA 2020 framework, the Company operates from Cross-River State and Lagos, delivering multi-industry excellence.
          </p>

          <div class="flex flex-wrap gap-2 mb-8">
            <span class="value-pill">Quality First</span>
            <span class="value-pill">Transparent Pricing</span>
            <span class="value-pill">Nationwide Reach</span>
            <span class="value-pill">Client Committed</span>
          </div>

          <a href="{{ route('about') }}" class="btn-primary">
            Read More About Us
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  PORTFOLIO SECTION                                         -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section id="portfolio" class="py-14 sm:py-20 lg:py-24 bg-brand-dark overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <!-- Header — RED label -->
      <div class="mb-8 sm:mb-12 lg:mb-16 reveal">
        <p class="section-label section-label--red mb-3">Our Work</p>
        <h2 class="font-display text-3xl sm:text-4xl font-black text-white">
          See What We Deliver
        </h2>
        <p class="text-gray-300 mt-3 max-w-xl text-base leading-relaxed">
          Real projects. Real results. Click on any division below to view our gallery of works and learn more about our projects.
        </p>
      </div>

      <!-- Categories grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 reveal">

        <!-- Card 1: Cleaning & Fumigation -->
        <div class="portfolio-card" data-panel="cleaning">
          <img src="/assets/images/work-cleaning.webp" alt="Asutext professional cleaning services in Lagos" loading="lazy" />
          <div class="portfolio-card-overlay"></div>
          <div class="portfolio-card-content">
            <span class="portfolio-card-tag" style="background:var(--brand-red);">Cleaning &amp; Pest</span>
            <p class="portfolio-card-title">Cleaning &amp;<br/>Fumigation</p>
            <span class="portfolio-card-action">
              Explore Gallery
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
            </span>
          </div>
        </div>

        <!-- Card 2: Branding & Fashion -->
        <div class="portfolio-card" data-panel="branding">
          <img src="/assets/images/work-caps.webp" alt="Asutext custom apparel, embroidery, and printing" loading="lazy" />
          <div class="portfolio-card-overlay"></div>
          <div class="portfolio-card-content">
            <span class="portfolio-card-tag" style="background:var(--brand-blue);">Branding &amp; Style</span>
            <p class="portfolio-card-title">Branding, Printing<br/>&amp; Fashion</p>
            <span class="portfolio-card-action">
              Explore Gallery
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
            </span>
          </div>
        </div>

        <!-- Card 3: Fast Food & Catering -->
        <div class="portfolio-card" data-panel="catering">
          <img src="/assets/images/work-restaurant.webp" alt="Asutext Fresh Food catering and restaurant" loading="lazy" />
          <div class="portfolio-card-overlay"></div>
          <div class="portfolio-card-content">
            <span class="portfolio-card-tag" style="background:var(--brand-green);">Fresh Food</span>
            <p class="portfolio-card-title">Fast Food &amp;<br/>Catering</p>
            <span class="portfolio-card-action">
              Explore Gallery
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
            </span>
          </div>
        </div>

        <!-- Card 4: Transport & Logistics -->
        <div class="portfolio-card" data-panel="transport">
          <img src="/assets/images/work-transport.webp" alt="Asutext transport fleet and logistics operations" loading="lazy" />
          <div class="portfolio-card-overlay"></div>
          <div class="portfolio-card-content">
            <span class="portfolio-card-tag" style="background:#d97706;">Logistics</span>
            <p class="portfolio-card-title">Transport &amp;<br/>Logistics</p>
            <span class="portfolio-card-action">
              Explore Gallery
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
            </span>
          </div>
        </div>

      </div>

      <!-- Expandable panels container -->
      <div class="portfolio-panels mt-10 lg:mt-12">

        <!-- Panel 1: Cleaning & Fumigation -->
        <div class="portfolio-panel" id="panel-cleaning">
          <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 border-b border-gray-800 pb-6 mb-6">
            <div>
              <h3 class="portfolio-panel-title">Cleaning &amp; Fumigation Division</h3>
              <p class="portfolio-panel-desc">
                From corporate headquarters and retail stores to residential estates on Lagos Island, our professional teams deliver cleaning excellence. We utilize advanced industrial cleaning machines, premium detergents, and safe, government-approved, non-toxic fumigation and pest control techniques.
              </p>
            </div>
            <a
              href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20enquired%20from%20your%20website%20and%20I%27d%20like%20to%20book%20a%20Cleaning%2FFumigation%20job."
              target="_blank"
              rel="noopener noreferrer"
              class="btn-whatsapp self-start lg:self-center"
            >
              Enquire on WhatsApp
            </a>
          </div>
          <div class="portfolio-gallery-grid-uniform grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-5 mt-8">
            @php
              $cleaningItems = $portfolioItems->filter(fn($item) => in_array($item->service->name ?? '', ['Cleaning Services', 'Fumigation & Pest Control', 'Laundry & Dry Cleaning', 'Gardening & Landscaping']));
            @endphp
            @forelse($cleaningItems as $item)
              <div class="portfolio-gallery-item">
                @if($item->media_type === 'image')
                  <img src="{{ asset('storage/' . $item->media_path) }}" alt="{{ $item->title }}" loading="lazy" />
                @else
                  <video src="{{ asset('storage/' . $item->media_path) }}" autoplay loop muted playsinline preload="none" class="w-full h-full object-cover"></video>
                @endif
                <div class="portfolio-gallery-overlay">
                  <span class="text-white text-xs font-bold uppercase tracking-wider text-center px-2">{{ $item->title }}</span>
                </div>
              </div>
            @empty
              <div class="portfolio-gallery-item"><img src="/Images/cleaning-floor-polishing.jpg" alt="Floor Polishing & Cleaning" loading="lazy" /><div class="portfolio-gallery-overlay"><span class="text-white text-xs font-bold uppercase tracking-wider text-center px-2">Floor Polishing &amp; Cleaning</span></div></div>
              <div class="portfolio-gallery-item"><img src="/Images/cleaning-dusting-vacuuming.jpg" alt="Corporate Dusting & Vacuuming" loading="lazy" /><div class="portfolio-gallery-overlay"><span class="text-white text-xs font-bold uppercase tracking-wider text-center px-2">Corporate Dusting &amp; Vacuuming</span></div></div>
              <div class="portfolio-gallery-item"><img src="/Images/cleaning-detail-janitorial.jpg" alt="Detail Cleaning & Janitorial" loading="lazy" /><div class="portfolio-gallery-overlay"><span class="text-white text-xs font-bold uppercase tracking-wider text-center px-2">Detail Cleaning &amp; Janitorial</span></div></div>
              <div class="portfolio-gallery-item"><video src="/Images/cleaning-outdoor-deck-video.mp4" autoplay loop muted playsinline preload="none" class="w-full h-full object-cover"></video><div class="portfolio-gallery-overlay"><span class="text-white text-xs font-bold uppercase tracking-wider text-center px-2">Outdoor Deck Cleaning (Video)</span></div></div>
              <div class="portfolio-gallery-item"><img src="/Images/cleaning-deck-refurbishing.jpg" alt="Deck Refurbishing" loading="lazy" /><div class="portfolio-gallery-overlay"><span class="text-white text-xs font-bold uppercase tracking-wider text-center px-2">Deck Refurbishing</span></div></div>
            @endforelse
          </div>
        </div>

        <!-- Panel 2: Branding & Fashion -->
        <div class="portfolio-panel" id="panel-branding">
          <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 border-b border-gray-800 pb-6 mb-6">
            <div>
              <h3 class="portfolio-panel-title">Branding, Printing &amp; Fashion Division</h3>
              <p class="portfolio-panel-desc">
                We bring brands to life. From custom apparel, premium headwear (like our signature Jackson 5 caps), and corporate merchandise to bespoke tailoring, custom-made dresses, and sports apparel. Everything is printed and stitched with premium materials to guarantee durability and color vibrancy.
              </p>
            </div>
            <a
              href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20enquired%20from%20your%20website%20and%20I%27d%20like%20to%20discuss%20a%20Branding%2FApparel%20project."
              target="_blank"
              rel="noopener noreferrer"
              class="btn-whatsapp self-start lg:self-center"
            >
              Enquire on WhatsApp
            </a>
          </div>
          <div class="portfolio-gallery-masonry">
            @php
              $brandingItems = $portfolioItems->filter(fn($item) => in_array($item->service->name ?? '', ['Branding & Printing', 'Fashion Design & Tailoring', 'Mobile Accessories & Gadgets']));
            @endphp
            @forelse($brandingItems as $item)
              <div class="portfolio-gallery-item">
                @if($item->media_type === 'image')
                  <img src="{{ asset('storage/' . $item->media_path) }}" alt="{{ $item->title }}" loading="lazy" />
                @else
                  <video src="{{ asset('storage/' . $item->media_path) }}" autoplay loop muted playsinline preload="none" class="w-full h-full object-cover"></video>
                @endif
                <div class="portfolio-gallery-overlay">
                  <span class="text-white text-xs font-bold uppercase tracking-wider text-center px-2">{{ $item->title }}</span>
                </div>
              </div>
            @empty
              <div class="portfolio-gallery-item"><img src="/Images/branding-custom-caps.jpg" alt="Custom Caps Production" loading="lazy" /><div class="portfolio-gallery-overlay"><span class="text-white text-xs font-bold uppercase tracking-wider text-center px-2">Custom Caps Production</span></div></div>
              <div class="portfolio-gallery-item"><img src="/Images/branding-merchandise-boxed.jpg" alt="Quality Merchandise Boxed" loading="lazy" /><div class="portfolio-gallery-overlay"><span class="text-white text-xs font-bold uppercase tracking-wider text-center px-2">Quality Merchandise Boxed</span></div></div>
              <div class="portfolio-gallery-item"><img src="/Images/branding-embroidery-patch.jpg" alt="Embroidery & Patch Design" loading="lazy" /><div class="portfolio-gallery-overlay"><span class="text-white text-xs font-bold uppercase tracking-wider text-center px-2">Embroidery &amp; Patch Design</span></div></div>
            @endforelse
          </div>
        </div>

        <!-- Panel 3: Fast Food & Catering -->
        <div class="portfolio-panel" id="panel-catering">
          <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 border-b border-gray-800 pb-6 mb-6">
            <div>
              <h3 class="portfolio-panel-title">Fast Food &amp; Catering Division</h3>
              <p class="portfolio-panel-desc">
                Delicious, freshly prepared food that leaves a statement. We handle corporate catering, private functions, and event hosting with strict hygiene standards and professional wait staff. Check out our diverse menu options below.
              </p>
            </div>
            <a
              href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%2%20enquired%20from%20your%20website%20and%20I%27d%20like%20to%20order%20Catering%2FFast%20Food."
              target="_blank"
              rel="noopener noreferrer"
              class="btn-whatsapp self-start lg:self-center"
            >
              Enquire on WhatsApp
            </a>
          </div>
          <div class="portfolio-gallery-grid-uniform grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-5 mt-8">
            @php
              $cateringItems = $portfolioItems->filter(fn($item) => in_array($item->service->name ?? '', ['Fast Food & Catering']));
            @endphp
            @forelse($cateringItems as $item)
              <div class="portfolio-gallery-item">
                @if($item->media_type === 'image')
                  <img src="{{ asset('storage/' . $item->media_path) }}" alt="{{ $item->title }}" loading="lazy" />
                @else
                  <video src="{{ asset('storage/' . $item->media_path) }}" autoplay loop muted playsinline preload="none" class="w-full h-full object-cover"></video>
                @endif
                <div class="portfolio-gallery-overlay">
                  <span class="text-white text-xs font-bold uppercase tracking-wider text-center px-2">{{ $item->title }}</span>
                </div>
              </div>
            @empty
              <div class="portfolio-gallery-item"><img src="/Images/catering-restaurant-interior.jpg" alt="Restaurant Interior" loading="lazy" /><div class="portfolio-gallery-overlay"><span class="text-white text-xs font-bold uppercase tracking-wider text-center px-2">Restaurant Interior</span></div></div>
              <div class="portfolio-gallery-item"><img src="/Images/catering-small-chops.jpg" alt="Small Chops Platter" loading="lazy" /><div class="portfolio-gallery-overlay"><span class="text-white text-xs font-bold uppercase tracking-wider text-center px-2">Small Chops Platter</span></div></div>
            @endforelse
          </div>
        </div>

        <!-- Panel 4: Transport & Logistics -->
        <div class="portfolio-panel" id="panel-transport">
          <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 border-b border-gray-800 pb-6 mb-6">
            <div>
              <h3 class="portfolio-panel-title">Transport &amp; Logistics Division</h3>
              <p class="portfolio-panel-desc">
                Moving goods smoothly across states. We offer reliable haulage, local delivery fulfillment, and truck leases. Safe, timely, and fully tracked.
              </p>
            </div>
            <a
              href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20enquired%20from%20your%20website%20and%20I%27d%20like%20to%20discuss%20a%20Logistics%2FTransport%20job."
              target="_blank"
              rel="noopener noreferrer"
              class="btn-whatsapp self-start lg:self-center"
            >
              Enquire on WhatsApp
            </a>
          </div>
          <div class="portfolio-gallery-grid-uniform grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-5 mt-8">
            @php
              $transportItems = $portfolioItems->filter(fn($item) => in_array($item->service->name ?? '', ['Transport & Logistics']));
            @endphp
            @forelse($transportItems as $item)
              <div class="portfolio-gallery-item">
                @if($item->media_type === 'image')
                  <img src="{{ asset('storage/' . $item->media_path) }}" alt="{{ $item->title }}" loading="lazy" />
                @else
                  <video src="{{ asset('storage/' . $item->media_path) }}" autoplay loop muted playsinline preload="none" class="w-full h-full object-cover"></video>
                @endif
                <div class="portfolio-gallery-overlay">
                  <span class="text-white text-xs font-bold uppercase tracking-wider text-center px-2">{{ $item->title }}</span>
                </div>
              </div>
            @empty
              <div class="portfolio-gallery-item"><img src="/Images/transport-freight-cargo.jpg" alt="Freight Cargo Haulage" loading="lazy" /><div class="portfolio-gallery-overlay"><span class="text-white text-xs font-bold uppercase tracking-wider text-center px-2">Freight Cargo Haulage</span></div></div>
              <div class="portfolio-gallery-item"><img src="/Images/transport-multimodal-logistics.jpg" alt="Interstate Logistics" loading="lazy" /><div class="portfolio-gallery-overlay"><span class="text-white text-xs font-bold uppercase tracking-wider text-center px-2">Interstate Logistics</span></div></div>
            @endforelse
          </div>
        </div>

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

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  SERVICE AREAS                                             -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section id="areas" class="py-14 sm:py-20 lg:py-24 bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="mb-8 sm:mb-12 lg:mb-16 reveal text-center">
        <p class="section-label mb-3 justify-center">Locations</p>
        <h2 class="font-display text-3xl sm:text-4xl font-black text-brand-dark">
          Service Coverage Areas
        </h2>
        <p class="text-gray-500 mt-3 max-w-xl mx-auto text-base leading-relaxed">
          Operating active logistical bases in Lagos and Cross-River State to serve you nationwide.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

        <div class="area-card reveal reveal-delay-1">
          <div class="area-pin">📍</div>
          <div>
            <p class="area-name">Banana Island &amp; Ikoyi</p>
            <p class="area-desc">Premium residential estates &amp; corporate offices, Lagos</p>
          </div>
        </div>

        <div class="area-card reveal reveal-delay-2">
          <div class="area-pin">📍</div>
          <div>
            <p class="area-name">Lagos Island &amp; Victoria Island</p>
            <p class="area-desc">CBD, Marina, commercial &amp; hospitality zones, Lagos</p>
          </div>
        </div>

        <div class="area-card reveal reveal-delay-3">
          <div class="area-pin">📍</div>
          <div>
            <p class="area-name">Lagos Mainland &amp; Surulere</p>
            <p class="area-desc">Residential, industrial &amp; business districts, Lagos</p>
          </div>
        </div>

        <div class="area-card reveal reveal-delay-4">
          <div class="area-pin">📍</div>
          <div>
            <p class="area-name">Lekki &amp; Ajah</p>
            <p class="area-desc">Growing residential &amp; commercial corridors, Lagos</p>
          </div>
        </div>

        <div class="area-card reveal reveal-delay-5">
          <div class="area-pin">📍</div>
          <div>
            <p class="area-name">Calabar, Cross-River State</p>
            <p class="area-desc">Home operational base, full service coverage</p>
          </div>
        </div>

        <div class="area-card reveal reveal-delay-6">
          <div class="area-pin" style="font-size:1.1rem;">🌍</div>
          <div>
            <p class="area-name">Nationwide Nigeria</p>
            <p class="area-desc">Transport, haulage, logistics &amp; specialist branding projects delivered nationally</p>
          </div>
        </div>

      </div>

      <!-- Out-of-area Banner -->
      <div class="mt-12 p-8 rounded-2xl bg-brand-light border border-gray-200 flex flex-col sm:flex-row items-center justify-between gap-6 reveal">
        <div>
          <h3 class="font-display font-bold text-brand-dark text-lg">Not in the list above?</h3>
          <p class="text-gray-500 text-sm mt-1">We serve clients nationwide. For transport and logistics we reach all 36 states.</p>
        </div>
        <a
          href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%27d%20like%20to%20know%20if%20you%20cover%20my%20area."
          target="_blank"
          rel="noopener noreferrer"
          class="btn-primary flex-shrink-0"
        >Check Your Area</a>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  TESTIMONIALS SECTION                                      -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section id="testimonials" class="py-14 sm:py-20 lg:py-24 bg-brand-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="mb-8 sm:mb-12 lg:mb-14 reveal">
        <p class="section-label section-label--blue mb-3">Trusted By</p>
        <h2 class="font-display text-3xl sm:text-4xl font-black text-brand-dark">
          What Our Clients Say
        </h2>
        <p class="text-gray-500 mt-3 max-w-xl text-base">
          We are proud to have served some of Nigeria's leading organisations and businesses.
        </p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 mb-12">
        @forelse($testimonials as $testimonial)
          <div class="testimonial-card reveal reveal-delay-{{ ($loop->index % 3) + 1 }}">
            <p class="testimonial-stars">{{ str_repeat('★', $testimonial->stars) }}</p>
            <p class="testimonial-text">"{{ $testimonial->feedback }}"</p>
            <div>
              <p class="testimonial-author-name">{{ $testimonial->client_name }}</p>
              <p class="testimonial-author-role">{{ $testimonial->client_role }}</p>
            </div>
          </div>
        @empty
          <!-- Static Testimonial 1 -->
          <div class="testimonial-card reveal reveal-delay-1">
            <p class="testimonial-stars">★★★★★</p>
            <p class="testimonial-text">"Asutext delivered an exceptionally thorough cleaning job at our facility. Professional, punctual, and the results spoke for themselves. We continue to use them regularly."</p>
            <div>
              <p class="testimonial-author-name">Wokcity</p>
              <p class="testimonial-author-role">Corporate Client, Lagos</p>
            </div>
          </div>
          <!-- Static Testimonial 2 -->
          <div class="testimonial-card reveal reveal-delay-2">
            <p class="testimonial-stars">★★★★★</p>
            <p class="testimonial-text">"We engaged Asutext for facility services and were impressed by their attention to detail and dedication to quality."</p>
            <div>
              <p class="testimonial-author-name">Lamb Court</p>
              <p class="testimonial-author-role">Property Management, Lagos</p>
            </div>
          </div>
        @endforelse
      </div>

      <!-- Client logo strip -->
      <div class="client-logo-strip reveal">
        <span class="client-logo-text">UAC</span>
        <span class="text-gray-300 hidden sm:inline">·</span>
        <span class="client-logo-text">Nital</span>
        <span class="text-gray-300 hidden sm:inline">·</span>
        <span class="client-logo-text">Ministry of Justice</span>
        <span class="text-gray-300 hidden sm:inline">·</span>
        <span class="client-logo-text">Post Office</span>
        <span class="text-gray-300 hidden sm:inline">·</span>
        <span class="client-logo-text">Febol &amp; G Nig Ltd</span>
        <span class="text-gray-300 hidden sm:inline">·</span>
        <span class="client-logo-text">Wow Detergent</span>
        <span class="text-gray-300 hidden sm:inline">·</span>
        <span class="client-logo-text">Wokcity</span>
        <span class="text-gray-300 hidden sm:inline">·</span>
        <span class="client-logo-text">Lamb Court</span>
        <span class="text-gray-300 hidden sm:inline">·</span>
        <span class="client-logo-text">CED Africa</span>
        <span class="text-gray-300 hidden sm:inline">·</span>
        <span class="client-logo-text">Nila Nigeria Ltd</span>
        <span class="text-gray-300 hidden sm:inline">·</span>
        <span class="client-logo-text">Ibu Sky Service</span>
        <span class="text-gray-300 hidden sm:inline">·</span>
        <span class="client-logo-text">Mavamo Court</span>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  FAQ SECTION                                               -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section id="faq" class="py-14 sm:py-20 lg:py-24 bg-white border-t border-gray-100">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="mb-8 sm:mb-12 reveal text-center">
        <p class="section-label mb-3 justify-center">Common Questions</p>
        <h2 class="font-display text-3xl sm:text-4xl font-black text-brand-dark">
          Frequently Asked Questions
        </h2>
        <p class="text-gray-500 mt-3">
          Still have a question? <a href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20have%20a%20question%20about%20your%20services." target="_blank" rel="noopener noreferrer" class="text-brand-red font-semibold underline">Chat with us on WhatsApp.</a>
        </p>
      </div>

      <div class="space-y-3">
        <div class="faq-item reveal">
          <button id="faq-1-btn" class="faq-btn" aria-expanded="false" aria-controls="faq-1-answer">
            What areas do you cover in Lagos?
            <span class="faq-icon" aria-hidden="true">+</span>
          </button>
          <div id="faq-1-answer" class="faq-answer" role="region">
            <div class="faq-answer-inner">
              We primarily serve Banana Island, Ikoyi, Lagos Island, Victoria Island, Lagos Mainland, Surulere, Lekki, and Ajah. We are also based in Calabar, Cross-River State and serve clients nationwide for transport and logistics. If you're unsure whether we cover your area, message us on WhatsApp and we'll confirm quickly.
            </div>
          </div>
        </div>

        <div class="faq-item reveal reveal-delay-1">
          <button id="faq-2-btn" class="faq-btn" aria-expanded="false" aria-controls="faq-2-answer">
            How do I get a quote?
            <span class="faq-icon" aria-hidden="true">+</span>
          </button>
          <div id="faq-2-answer" class="faq-answer" role="region">
            <div class="faq-answer-inner">
              Tap any "Enquire Now" or "Chat with Us" button on this page, it will open WhatsApp with a pre-filled message. Simply tell us your service need, location, and preferred date, and we'll send you a quote promptly. No forms, no waiting.
            </div>
          </div>
        </div>

        <div class="faq-item reveal reveal-delay-2">
          <button id="faq-3-btn" class="faq-btn" aria-expanded="false" aria-controls="faq-3-answer">
            Do you show prices on the website?
            <span class="faq-icon" aria-hidden="true">+</span>
          </button>
          <div id="faq-3-answer" class="faq-answer" role="region">
            <div class="faq-answer-inner">
              We don't list fixed prices because each job is different; size, scope, and location all affect the final cost. We prefer to give you a fair, accurate quote based on your specific needs. Contact us and we will respond quickly, usually within a few hours.
            </div>
          </div>
        </div>

        <div class="faq-item reveal reveal-delay-3">
          <button id="faq-4-btn" class="faq-btn" aria-expanded="false" aria-controls="faq-4-answer">
            Is Asutext Group a registered company?
            <span class="faq-icon" aria-hidden="true">+</span>
          </button>
          <div id="faq-4-answer" class="faq-answer" role="region">
            <div class="faq-answer-inner">
              Yes. Asutext Group Nigeria Limited is fully registered with the Corporate Affairs Commission (CAC) of Nigeria under the CAMA 2020 framework, incorporated on 14th September 2023. We are a legitimate, legally operating business entity.
            </div>
          </div>
        </div>

        <div class="faq-item reveal reveal-delay-4">
          <button id="faq-5-btn" class="faq-btn" aria-expanded="false" aria-controls="faq-5-answer">
            Can you handle recurring or corporate contracts?
            <span class="faq-icon" aria-hidden="true">+</span>
          </button>
          <div id="faq-5-answer" class="faq-answer" role="region">
            <div class="faq-answer-inner">
              Absolutely. We have experience working with corporate organisations, event planners, property managers, and institutional clients across Nigeria. We are well-equipped to handle recurring service contracts and large-scale jobs. Reach out and let's discuss your requirements.
            </div>
          </div>
        </div>

        <div class="faq-item reveal reveal-delay-5">
          <button id="faq-6-btn" class="faq-btn" aria-expanded="false" aria-controls="faq-6-answer">
            How quickly do you respond to enquiries?
            <span class="faq-icon" aria-hidden="true">+</span>
          </button>
          <div id="faq-6-answer" class="faq-answer" role="region">
            <div class="faq-answer-inner">
              We aim to respond to all WhatsApp enquiries within a few hours during business hours. For urgent requests, please state this clearly in your message and we will prioritise your enquiry. We're available 7 days a week.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
