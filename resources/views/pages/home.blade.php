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
            <i class="bi bi-whatsapp text-lg flex-shrink-0" aria-hidden="true"></i>
            Get a Free Quote
          </a>
          <a href="{{ route('services') }}" class="btn-outline text-base">
            Explore Our Services
            <i class="bi bi-chevron-down text-sm" aria-hidden="true"></i>
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
          @php
            $sLower = strtolower($service->name);
            if (Str::contains($sLower, ['fumigat', 'pest'])) {
              $iconClass = 'bi bi-shield-check text-brand-blue';
              $iconBgClass = 'service-icon--blue';
              $targetUrl = route('services.cleaning') . '#industrial';
            } elseif (Str::contains($sLower, ['laundry', 'dry clean'])) {
              $iconClass = 'bi bi-droplet-fill text-brand-red';
              $iconBgClass = '';
              $targetUrl = route('services.cleaning') . '#specialized';
            } elseif (Str::contains($sLower, ['garden', 'landscap'])) {
              $iconClass = 'bi bi-tree-fill text-emerald-600';
              $iconBgClass = 'service-icon--green';
              $targetUrl = route('services.cleaning') . '#environmental';
            } elseif (Str::contains($sLower, 'clean')) {
              $iconClass = 'bi bi-stars text-brand-red';
              $iconBgClass = '';
              $targetUrl = route('services.cleaning');
            } elseif (Str::contains($sLower, ['transport', 'logistic'])) {
              $iconClass = 'bi bi-truck text-amber-600';
              $iconBgClass = 'service-icon--amber';
              $targetUrl = route('services.transport');
            } elseif (Str::contains($sLower, ['food', 'cater'])) {
              $iconClass = 'bi bi-cup-hot-fill text-brand-red';
              $iconBgClass = '';
              $targetUrl = route('services.fastfood');
            } elseif (Str::contains($sLower, ['brand', 'print', 'fashion'])) {
              $iconClass = 'bi bi-palette-fill text-brand-blue';
              $iconBgClass = 'service-icon--blue';
              $targetUrl = route('services.fashion');
            } elseif (Str::contains($sLower, ['gadget', 'electronic', 'phone', 'mobile'])) {
              $iconClass = 'bi bi-phone-fill text-purple-600';
              $iconBgClass = 'service-icon--purple';
              $targetUrl = route('services.electronics');
            } else {
              $iconClass = 'bi bi-briefcase text-brand-dark';
              $iconBgClass = '';
              $targetUrl = route('services');
            }

            $whatsappUrl = ($globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399') . '?text=' . urlencode($service->whatsapp_cta_text ?? 'Hi, I would like to enquire about ' . $service->name);
          @endphp

          <div
            class="service-card {{ $loop->index % 2 === 1 ? 'service-card--blue' : '' }} reveal reveal-delay-{{ ($loop->index % 4) + 1 }} flex flex-col justify-between"
            onclick="if(!event.target.closest('a')) { window.location.href = '{{ $targetUrl }}'; }"
            title="Click to explore {{ $service->name }}"
          >
            <div>
              <div class="service-icon-wrap {{ $iconBgClass }}">
                <i class="{{ $iconClass }} text-xl"></i>
              </div>
              <h3 class="font-display font-bold text-brand-dark text-base mb-2">{{ $service->name }}</h3>
              <p class="text-gray-500 text-sm leading-relaxed mb-5">{{ Str::limit($service->description, 120) }}</p>
            </div>

            <div class="service-card-actions" style="grid-template-columns: 1fr;">
              <a
                href="{{ $targetUrl }}"
                class="service-btn-explore"
                title="Explore {{ $service->name }}"
              >
                <span>Explore</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
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
              <i class="bi bi-chevron-down text-xs"></i>
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
              <i class="bi bi-chevron-down text-xs"></i>
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
              <i class="bi bi-chevron-down text-xs"></i>
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
              <i class="bi bi-chevron-down text-xs"></i>
            </span>
          </div>
        </div>

      </div>

      <!-- Expandable panels container -->
      <div class="portfolio-panels mt-10 lg:mt-12">

        <!-- Panel 1: Cleaning & Facilities -->
        <div class="portfolio-panel" id="panel-cleaning">
          <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 border-b border-gray-800 pb-6 mb-6">
            <div>
              <h3 class="portfolio-panel-title">Cleaning, Facility &amp; Environmental Division</h3>
              <p class="portfolio-panel-desc">
                From corporate headquarters, retail stores, and residential estates to industrial fumigation, deep carpet extraction, laundry &amp; dry cleaning, and complete compound gardening &amp; landscaping across Lagos and nationwide.
              </p>
            </div>
            <div class="flex flex-wrap gap-3 self-start lg:self-center">
              <a
                href="{{ route('services.cleaning') }}"
                class="btn-primary text-sm inline-flex items-center gap-1.5"
              >
                <span>Full Cleaning Page</span>
                <span>→</span>
              </a>
              <a
                href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20enquired%20from%20your%20website%20and%20I%27d%20like%20to%20book%20a%20Cleaning%2FFumigation%20job."
                target="_blank"
                rel="noopener noreferrer"
                class="btn-whatsapp text-sm"
              >
                Enquire on WhatsApp
              </a>
            </div>
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
            <div class="flex flex-wrap gap-3 self-start lg:self-center">
              <a
                href="{{ route('services.fashion') }}"
                class="btn-primary text-sm inline-flex items-center gap-1.5"
              >
                <span>Full Fashion Page</span>
                <span>→</span>
              </a>
              <a
                href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20enquired%20from%20your%20website%20and%20I%27d%20like%20to%20discuss%20a%20Branding%2FApparel%20project."
                target="_blank"
                rel="noopener noreferrer"
                class="btn-whatsapp text-sm"
              >
                Enquire on WhatsApp
              </a>
            </div>
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
            <div class="flex flex-wrap gap-3 self-start lg:self-center">
              <a
                href="{{ route('services.fastfood') }}"
                class="btn-primary text-sm inline-flex items-center gap-1.5"
              >
                <span>Full Catering Page</span>
                <span>→</span>
              </a>
              <a
                href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20enquired%20from%20your%20website%20and%20I%27d%20like%20to%20order%20Catering%2FFast%20Food."
                target="_blank"
                rel="noopener noreferrer"
                class="btn-whatsapp text-sm"
              >
                Enquire on WhatsApp
              </a>
            </div>
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
            <div class="flex flex-wrap gap-3 self-start lg:self-center">
              <a
                href="{{ route('services.transport') }}"
                class="btn-primary text-sm inline-flex items-center gap-1.5"
              >
                <span>Full Transport Page</span>
                <span>→</span>
              </a>
              <a
                href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20enquired%20from%20your%20website%20and%20I%27d%20like%20to%20discuss%20a%20Logistics%2FTransport%20job."
                target="_blank"
                rel="noopener noreferrer"
                class="btn-whatsapp text-sm"
              >
                Enquire on WhatsApp
              </a>
            </div>
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
              <div class="portfolio-gallery-item"><img src="/Images/Transport/PHOTO-2026-07-15-23-32-10.jpg" alt="Intercity Transport Hub" loading="lazy" /><div class="portfolio-gallery-overlay"><span class="text-white text-xs font-bold uppercase tracking-wider text-center px-2">Transport Hub &amp; Stations</span></div></div>
              <div class="portfolio-gallery-item"><img src="/Images/Transport/PHOTO-2026-07-15-23-31-59.jpg" alt="Door-to-Door Transportation" loading="lazy" /><div class="portfolio-gallery-overlay"><span class="text-white text-xs font-bold uppercase tracking-wider text-center px-2">Door-to-Door Solution</span></div></div>
              <div class="portfolio-gallery-item"><img src="/Images/Transport/PHOTO-2026-07-15-23-32-08.jpg" alt="Intercity Bus Fleet" loading="lazy" /><div class="portfolio-gallery-overlay"><span class="text-white text-xs font-bold uppercase tracking-wider text-center px-2">Intercity Bus Fleet</span></div></div>
              <div class="portfolio-gallery-item"><img src="/Images/Transport/PHOTO-2026-07-15-23-53-09.jpg" alt="Executive Fleet &amp; SUVs" loading="lazy" /><div class="portfolio-gallery-overlay"><span class="text-white text-xs font-bold uppercase tracking-wider text-center px-2">Executive SUV Fleet</span></div></div>
              <div class="portfolio-gallery-item"><img src="/Images/Transport/PHOTO-2026-07-15-23-32-06.jpg" alt="Luxury Fleet Interior" loading="lazy" /><div class="portfolio-gallery-overlay"><span class="text-white text-xs font-bold uppercase tracking-wider text-center px-2">Luxury Fleet &amp; Benefits</span></div></div>
            @endforelse
          </div>
        </div>

      </div>

      <!-- Lightbox Modal -->
      <div class="portfolio-lightbox" id="portfolio-lightbox">
        <button class="portfolio-lightbox-close" id="lightbox-close" aria-label="Close image preview">
          <i class="bi bi-x-lg text-lg"></i>
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
          <div class="area-pin"><i class="bi bi-geo-alt-fill text-brand-red"></i></div>
          <div>
            <p class="area-name">Banana Island &amp; Ikoyi</p>
            <p class="area-desc">Premium residential estates &amp; corporate offices, Lagos</p>
          </div>
        </div>

        <div class="area-card reveal reveal-delay-2">
          <div class="area-pin"><i class="bi bi-geo-alt-fill text-brand-red"></i></div>
          <div>
            <p class="area-name">Lagos Island &amp; Victoria Island</p>
            <p class="area-desc">CBD, Marina, commercial &amp; hospitality zones, Lagos</p>
          </div>
        </div>

        <div class="area-card reveal reveal-delay-3">
          <div class="area-pin"><i class="bi bi-geo-alt-fill text-brand-red"></i></div>
          <div>
            <p class="area-name">Lagos Mainland &amp; Surulere</p>
            <p class="area-desc">Residential, industrial &amp; business districts, Lagos</p>
          </div>
        </div>

        <div class="area-card reveal reveal-delay-4">
          <div class="area-pin"><i class="bi bi-geo-alt-fill text-brand-red"></i></div>
          <div>
            <p class="area-name">Lekki &amp; Ajah</p>
            <p class="area-desc">Growing residential &amp; commercial corridors, Lagos</p>
          </div>
        </div>

        <div class="area-card reveal reveal-delay-5">
          <div class="area-pin"><i class="bi bi-geo-alt-fill text-brand-red"></i></div>
          <div>
            <p class="area-name">Calabar, Cross-River State</p>
            <p class="area-desc">Home operational base, full service coverage</p>
          </div>
        </div>

        <div class="area-card reveal reveal-delay-6">
          <div class="area-pin"><i class="bi bi-globe2 text-brand-blue"></i></div>
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
            <span class="faq-icon" aria-hidden="true"><i class="bi bi-plus-lg"></i></span>
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
            <span class="faq-icon" aria-hidden="true"><i class="bi bi-plus-lg"></i></span>
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
            <span class="faq-icon" aria-hidden="true"><i class="bi bi-plus-lg"></i></span>
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
            <span class="faq-icon" aria-hidden="true"><i class="bi bi-plus-lg"></i></span>
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
            <span class="faq-icon" aria-hidden="true"><i class="bi bi-plus-lg"></i></span>
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
            <span class="faq-icon" aria-hidden="true"><i class="bi bi-plus-lg"></i></span>
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
