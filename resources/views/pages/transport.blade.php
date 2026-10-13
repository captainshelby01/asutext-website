@extends('layouts.app')

@section('title', 'Transport, Logistics & Door-to-Door Travel Services | Asutext Group Nigeria Limited')
@section('meta_description', 'Reliable door-to-door transportation, airport transfers, corporate staff shuttles, bus charters, and freight haulage across Lagos, Calabar, Abuja, and nationwide.')

@section('content')
  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  HERO BANNER                                               -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-16 lg:py-24 bg-brand-dark text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      
      <!-- Breadcrumb -->
      <nav class="flex items-center gap-2 text-xs sm:text-sm text-gray-400 mb-6" aria-label="Breadcrumb">
        <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a>
        <span>/</span>
        <a href="{{ route('services') }}" class="hover:text-white transition-colors">Services</a>
        <span>/</span>
        <span class="text-amber-500 font-medium">Transport &amp; Logistics Division</span>
      </nav>

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-7">
          <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-amber-500/20 text-amber-400 border border-amber-500/30 mb-4">
            <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
            Asutext Transportation &amp; Logistics Division
          </div>

          <h1 class="font-display text-3xl sm:text-5xl lg:text-6xl font-black leading-tight mb-4">
            Seamless Travel.<br/>
            <span class="text-amber-400">Convenient Door-to-Door Service.</span>
          </h1>

          <p class="text-gray-300 text-base sm:text-lg leading-relaxed mb-6 max-w-2xl">
            Say goodbye to motor park stress, luggage hustles, and unpredictable fares. At Asutext Transportation, we pick you up directly from your doorstep and transport you safely, punctually, and comfortably across Lagos, Calabar, Abuja, Port Harcourt, and nationwide.
          </p>

          <!-- Trust Badges Bar -->
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-8 max-w-xl">
            <div class="bg-white/5 border border-white/10 rounded-xl p-3 flex items-center gap-3">
              <div class="w-9 h-9 rounded-lg bg-amber-500/20 text-amber-400 flex items-center justify-center font-bold text-base flex-shrink-0">
                <i class="bi bi-house-door-fill"></i>
              </div>
              <div>
                <p class="text-white font-bold text-xs">Doorstep Pickups</p>
                <p class="text-gray-400 text-[11px]">Zero motor park hassle</p>
              </div>
            </div>

            <div class="bg-white/5 border border-white/10 rounded-xl p-3 flex items-center gap-3">
              <div class="w-9 h-9 rounded-lg bg-brand-blue/20 text-brand-blue flex items-center justify-center font-bold text-base flex-shrink-0">
                <i class="bi bi-shield-check"></i>
              </div>
              <div>
                <p class="text-white font-bold text-xs">Vetted Drivers</p>
                <p class="text-gray-400 text-[11px]">Defensive certified &amp; polite</p>
              </div>
            </div>

            <div class="bg-white/5 border border-white/10 rounded-xl p-3 flex items-center gap-3">
              <div class="w-9 h-9 rounded-lg bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold text-base flex-shrink-0">
                <i class="bi bi-geo-alt-fill"></i>
              </div>
              <div>
                <p class="text-white font-bold text-xs">Nationwide Hubs</p>
                <p class="text-gray-400 text-[11px]">Lagos, Calabar, Abuja &amp; more</p>
              </div>
            </div>
          </div>

          <div class="flex flex-wrap gap-4">
            <a
              href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20am%20interested%20in%20booking%20your%20Door-to-Door%20Transportation%20and%20Logistics%20Services."
              target="_blank"
              rel="noopener noreferrer"
              class="btn-whatsapp text-base"
            >
              <i class="bi bi-whatsapp text-lg flex-shrink-0" aria-hidden="true"></i>
              Book Ride on WhatsApp
            </a>
            <a href="#divisions" class="btn-outline text-base">
              Explore Fleet &amp; Scope <i class="bi bi-arrow-down ml-1"></i>
            </a>
          </div>
        </div>

        <!-- Featured Media Hero Preview Frame -->
        <div class="lg:col-span-5">
          <div class="relative">
            
            <div class="relative rounded-2xl sm:rounded-3xl overflow-hidden shadow-2xl border border-white/15 bg-slate-900 group">
              
              <!-- Hero Photo with Trigger -->
              <div
                class="relative aspect-[4/3] overflow-hidden cursor-pointer"
                onclick="openTransportLightbox('{{ asset('Images/Transport/PHOTO-2026-07-15-23-32-10.jpg') }}', 'Asutext Modern Intercity Transport Hub & Fleet Station')"
                title="Click to view high-resolution station preview"
              >
                <img
                  src="{{ asset('Images/Transport/PHOTO-2026-07-15-23-32-10.jpg') }}"
                  alt="Asutext Modern Intercity Transport Hub and Fleet Station"
                  class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                />

                <!-- Top badges inside frame -->
                <div class="absolute top-4 left-4 right-4 flex items-center justify-between z-10">
                  <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider bg-black/75 text-white backdrop-blur-md border border-white/20">
                    <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                    Active Transport Hub
                  </span>

                  <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-semibold bg-black/75 text-emerald-400 backdrop-blur-md border border-white/20">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                    Scheduled Departures
                  </span>
                </div>

                <!-- Center Play / Zoom Badge -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-black/10 flex flex-col justify-end p-6">
                  <div class="flex items-center gap-3.5 mb-2">
                    <div class="w-12 h-12 rounded-full bg-amber-500 text-brand-dark flex items-center justify-center shadow-2xl group-hover:scale-110 group-hover:bg-amber-400 transition-all flex-shrink-0 font-bold">
                      <i class="bi bi-zoom-in text-xl"></i>
                    </div>
                    <div>
                      <p class="text-white font-display font-black text-base sm:text-lg leading-snug">
                        Asutext Regional Transit Hub
                      </p>
                      <p class="text-gray-300 text-xs mt-0.5">
                        Interstate coaches, HiAce vans &amp; executive fleet
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Sleek Bottom Bar -->
              <div class="p-4 sm:p-5 bg-slate-900/95 border-t border-white/10 flex items-center justify-between gap-4">
                <div class="flex items-center gap-3">
                  <div class="w-9 h-9 rounded-xl bg-amber-500/20 text-amber-400 flex items-center justify-center font-bold text-sm flex-shrink-0">
                    <i class="bi bi-star-fill text-xs"></i>
                  </div>
                  <div>
                    <p class="text-xs font-bold text-white leading-tight">Air-Conditioned Comfort</p>
                    <p class="text-[11px] text-gray-400">Tinted glass, reclining seats &amp; GPS tracking</p>
                  </div>
                </div>

                <a
                  href="#transport-media"
                  class="inline-flex items-center gap-1 text-xs font-bold text-amber-400 hover:text-white px-3 py-1.5 rounded-lg bg-white/5 hover:bg-amber-500 transition-all flex-shrink-0"
                >
                  <span>11 Records</span>
                  <span>↓</span>
                </a>
              </div>

            </div>

          </div>
        </div>
      </div>

    </div>
    <div class="absolute inset-0 bg-gradient-to-r from-brand-dark via-slate-950 to-black opacity-90 z-0"></div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  SERVICE DIVISIONS SECTION (INTERACTIVE TABS)              -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section id="divisions" class="py-16 sm:py-24 bg-brand-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-3xl mx-auto mb-12">
        <p class="section-label section-label--red mb-3 justify-center">Transportation &amp; Fleet Divisions</p>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-black text-brand-dark">
          Complete Scope of Transit &amp; Logistics
        </h2>
        <p class="text-gray-500 mt-4 text-base sm:text-lg leading-relaxed">
          From doorstep morning passenger pickups and flight-synchronized airport transfers to corporate staff busing contracts, event fleet charters, and multi-modal freight haulage.
        </p>
      </div>

      <!-- Interactive Category Switcher Tabs -->
      <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 mb-10" id="transport-tabs-bar">
        @foreach($categories as $idx => $cat)
          <button
            type="button"
            class="transport-tab-trigger px-5 py-3 rounded-xl text-xs sm:text-sm font-bold border transition-all duration-200 cursor-pointer flex items-center gap-2 {{ $idx === 0 ? 'bg-amber-500 text-brand-dark border-amber-500 shadow-md active-tab' : 'bg-white text-gray-700 border-gray-200 hover:border-amber-500/50 hover:text-amber-600' }}"
            data-target="transport-panel-{{ $cat['id'] }}"
          >
            <span class="text-sm flex items-center">
              @if($cat['id'] === 'door-to-door') <i class="bi bi-door-open-fill"></i>
              @elseif($cat['id'] === 'airport-transfers') <i class="bi bi-airplane-engines-fill"></i>
              @elseif($cat['id'] === 'corporate-logistics') <i class="bi bi-building-fill"></i>
              @elseif($cat['id'] === 'group-charters') <i class="bi bi-bus-front-fill"></i>
              @elseif($cat['id'] === 'multimodal-haulage') <i class="bi bi-truck-front-fill"></i>
              @else <i class="bi bi-sliders2-vertical"></i>
              @endif
            </span>
            <span>{{ $cat['title'] }}</span>
          </button>
        @endforeach
      </div>

      <!-- Category Feature Panels Container -->
      <div id="transport-panels-wrapper" class="mb-14">
        @foreach($categories as $idx => $cat)
          <div
            id="transport-panel-{{ $cat['id'] }}"
            class="transport-content-panel bg-white rounded-3xl p-6 sm:p-10 border border-gray-200 shadow-xl transition-all duration-300 {{ $idx === 0 ? 'block' : 'hidden' }}"
          >
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
              
              <!-- Left Overview Column -->
              <div class="lg:col-span-5 flex flex-col justify-between">
                <div>
                  <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-black uppercase tracking-wider {{ $cat['badge_color'] }} mb-4">
                    {{ $cat['tag'] }}
                  </div>
                  <h3 class="font-display text-2xl sm:text-3xl font-black text-brand-dark mb-4 leading-tight">
                    {{ $cat['title'] }}
                  </h3>
                  <p class="text-gray-600 text-sm sm:text-base leading-relaxed mb-6">
                    {{ $cat['desc'] }}
                  </p>

                  <div class="space-y-3 bg-brand-light p-4 rounded-2xl border border-gray-100 mb-8">
                    <div class="flex items-center gap-2.5 text-xs sm:text-sm text-gray-700 font-semibold">
                      <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-xs"><i class="bi bi-check2"></i></span>
                      <span>Air-Conditioned &amp; Well-Maintained Vehicles</span>
                    </div>
                    <div class="flex items-center gap-2.5 text-xs sm:text-sm text-gray-700 font-semibold">
                      <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-xs"><i class="bi bi-check2"></i></span>
                      <span>Vetted, Background-Checked &amp; Defensive Chauffeurs</span>
                    </div>
                    <div class="flex items-center gap-2.5 text-xs sm:text-sm text-gray-700 font-semibold">
                      <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-xs"><i class="bi bi-check2"></i></span>
                      <span>Real-Time Travel Communication &amp; Live Updates</span>
                    </div>
                  </div>
                </div>

                <!-- Action Button in left panel -->
                <div class="pt-4 border-t border-gray-100 flex flex-col sm:flex-row gap-3">
                  <a
                    href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text={{ urlencode('Hi Asutext, I would like to book or enquire about ' . $cat['title'] . '.') }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-whatsapp justify-center text-sm font-bold flex-1"
                  >
                    <i class="bi bi-whatsapp text-sm flex-shrink-0" aria-hidden="true"></i>
                    <span>Book on WhatsApp</span>
                  </a>
                  <a
                    href="tel:{{ str_replace(' ', '', $globalSettings['phone'] ?? '+2349037666399') }}"
                    class="btn-outline text-brand-dark border-gray-300 hover:border-brand-red justify-center text-sm font-bold"
                  >
                    Call Us
                  </a>
                </div>
              </div>

              <!-- Right Services Checklist Grid -->
              <div class="lg:col-span-7">
                <div class="border-b border-gray-100 pb-3 mb-6 flex items-center justify-between">
                  <h4 class="font-display font-black text-brand-dark text-base sm:text-lg">
                    Included Features &amp; Service Highlights
                  </h4>
                  <span class="text-xs font-bold text-gray-400 uppercase tracking-wider">
                    {{ count($cat['items']) }} Capabilities
                  </span>
                </div>

                <div class="space-y-3.5">
                  @foreach($cat['items'] as $item)
                    <div class="p-4 rounded-2xl bg-brand-light border border-gray-200/80 hover:border-amber-500/50 transition-colors">
                      <div class="flex items-start gap-3.5">
                        <div class="w-7 h-7 rounded-full bg-amber-500/20 text-amber-700 flex-shrink-0 flex items-center justify-center mt-0.5 font-bold text-sm">
                          <i class="bi bi-check-lg"></i>
                        </div>
                        <div>
                          <h5 class="text-sm font-bold text-slate-900 leading-snug">{{ $item }}</h5>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>

                <!-- Featured Image inside Tab -->
                <div class="mt-6 rounded-2xl overflow-hidden border border-gray-200 shadow-sm cursor-pointer group" onclick="openTransportLightbox('{{ $cat['image'] }}', '{{ addslashes($cat['title']) }}')">
                  <div class="relative aspect-[21/9] bg-slate-900 overflow-hidden">
                    <img src="{{ $cat['image'] }}" alt="{{ $cat['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
                    <div class="absolute bottom-3 left-4 right-4 flex items-center justify-between text-white text-xs">
                      <span class="font-bold flex items-center gap-1.5"><i class="bi bi-zoom-in"></i> Click to inspect vehicle &amp; proposal record</span>
                      <span class="text-amber-400 font-semibold">Asutext Fleet</span>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        @endforeach
      </div>

      <!-- Quick All-Divisions Summary Cards (Grid of 6) with Elegant WhatsApp Buttons -->
      <div class="mt-16 pt-12 border-t border-gray-200">
        <div class="text-center max-w-2xl mx-auto mb-10">
          <p class="text-xs font-bold text-amber-600 uppercase tracking-wider">Quick Navigation</p>
          <h3 class="font-display text-2xl sm:text-3xl font-black text-brand-dark">
            All 6 Divisions at a Glance
          </h3>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          @foreach($categories as $cat)
            <div class="bg-white rounded-2xl p-6 border border-gray-200 shadow-sm hover:shadow-lg transition-all flex flex-col justify-between group">
              <div>
                <div class="flex items-center justify-between mb-3">
                  <span class="text-[11px] font-black uppercase tracking-wider px-2.5 py-0.5 rounded-full {{ $cat['badge_color'] }}">
                    {{ $cat['tag'] }}
                  </span>
                  <span class="text-xs text-gray-400 font-semibold">Division 0{{ $loop->iteration }}</span>
                </div>

                <h4 class="font-display text-xl font-black text-brand-dark mb-2 group-hover:text-amber-600 transition-colors">
                  {{ $cat['title'] }}
                </h4>
                <p class="text-gray-500 text-xs sm:text-sm leading-relaxed mb-4">
                  {{ $cat['desc'] }}
                </p>

                <div class="space-y-1.5 mb-6 text-xs text-gray-600">
                  @foreach(array_slice($cat['items'], 0, 3) as $item)
                    <div class="flex items-center gap-2">
                      <span class="w-1.5 h-1.5 rounded-full bg-amber-500 flex-shrink-0"></span>
                      <span class="font-medium text-slate-800 line-clamp-1">{{ $item }}</span>
                    </div>
                  @endforeach
                  @if(count($cat['items']) > 3)
                    <p class="text-[11px] text-gray-400 italic pt-1">+ {{ count($cat['items']) - 3 }} more features...</p>
                  @endif
                </div>
              </div>

              <!-- Refined WhatsApp Action Button -->
              <div class="pt-4 border-t border-gray-100 mt-auto">
                <a
                  href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text={{ urlencode('Hi Asutext, I would like to book or enquire about ' . $cat['title'] . '.') }}"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="btn-whatsapp w-full justify-center text-xs font-bold py-2.5"
                >
                  <i class="bi bi-whatsapp text-xs flex-shrink-0" aria-hidden="true"></i>
                  <span>Enquire on WhatsApp</span>
                </a>
              </div>
            </div>
          @endforeach
        </div>
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  WHY CHOOSE ASUTEXT TRANSPORT (STANDARDS & BENEFITS)       -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-16 sm:py-24 bg-white border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-3xl mx-auto mb-14">
        <p class="section-label section-label--blue mb-3 justify-center">The Asutext Standard</p>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-black text-brand-dark">
          Why Travel &amp; Ship With Us
        </h2>
        <p class="text-gray-500 mt-3 text-base sm:text-lg">
          We combine doorstep accessibility, rigorous safety, transparent pricing, and punctual execution across every kilometer.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
        @foreach($whyAsutextTransport as $idx => $item)
          <div class="bg-brand-light p-6 rounded-2xl border border-gray-200/80 hover:border-amber-500/60 shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
            <div>
              <div class="w-12 h-12 rounded-xl bg-amber-500/15 text-amber-600 flex items-center justify-center text-2xl mb-4">
                <i class="{{ $item['icon'] }}"></i>
              </div>
              <h4 class="font-display font-bold text-brand-dark text-base mb-2">
                {{ $item['title'] }}
              </h4>
              <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                {{ $item['desc'] }}
              </p>
            </div>
            <div class="pt-4 mt-4 border-t border-gray-200/60 text-[11px] font-bold text-amber-600 uppercase tracking-wider">
              Priority 0{{ $idx + 1 }}
            </div>
          </div>
        @endforeach
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  TRANSPORT MEDIA & DOCUMENT HUB (FILTER TABS)              -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section id="transport-media" class="py-16 sm:py-24 bg-brand-dark text-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="flex flex-col lg:flex-row lg:items-end justify-between mb-12 gap-6">
        <div>
          <p class="section-label section-label--red mb-3">Official Records &amp; Fleet Gallery</p>
          <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-black text-white">
            Official Proposals, Hubs &amp; Fleet Records
          </h2>
          <p class="text-gray-300 mt-3 text-base max-w-2xl leading-relaxed">
            Browse our authentic company proposals, intercity coach fleet, luxury passenger vans, executive SUVs, and multi-modal logistics hub records.
          </p>
        </div>

        <!-- Filter Themed Tabs -->
        <div class="flex flex-wrap gap-2" id="transport-filter-container">
          <button class="transport-filter-btn px-4 py-2.5 rounded-full text-xs font-bold border border-amber-500 bg-amber-500 text-brand-dark transition-all shadow cursor-pointer" data-theme="all">
            All Records ({{ count($transportPhotos) }})
          </button>
          <button class="transport-filter-btn px-4 py-2.5 rounded-full text-xs font-bold border border-white/20 text-gray-300 hover:border-amber-400 hover:text-white transition-all cursor-pointer" data-theme="door-to-door">
            Door-to-Door &amp; Proposals
          </button>
          <button class="transport-filter-btn px-4 py-2.5 rounded-full text-xs font-bold border border-white/20 text-gray-300 hover:border-amber-400 hover:text-white transition-all cursor-pointer" data-theme="fleet">
            Intercity Buses &amp; Fleet
          </button>
          <button class="transport-filter-btn px-4 py-2.5 rounded-full text-xs font-bold border border-white/20 text-gray-300 hover:border-amber-400 hover:text-white transition-all cursor-pointer" data-theme="executive">
            Executive SUVs &amp; Scope
          </button>
          <button class="transport-filter-btn px-4 py-2.5 rounded-full text-xs font-bold border border-white/20 text-gray-300 hover:border-amber-400 hover:text-white transition-all cursor-pointer" data-theme="cargo">
            Haulage &amp; Cargo
          </button>
          <button class="transport-filter-btn px-4 py-2.5 rounded-full text-xs font-bold border border-white/20 text-gray-300 hover:border-amber-400 hover:text-white transition-all cursor-pointer" data-theme="credentials">
            Credentials &amp; Banking
          </button>
        </div>
      </div>

      <!-- Photos Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="transport-photos-grid">
        @foreach($transportPhotos as $photo)
          <div
            class="transport-card-item rounded-2xl overflow-hidden bg-slate-900 border border-white/10 shadow-sm hover:shadow-2xl hover:border-amber-500/60 transition-all duration-300 group cursor-pointer flex flex-col justify-between"
            data-theme="{{ $photo['theme'] }}"
            onclick="openTransportLightbox('{{ $photo['url'] }}', '{{ addslashes($photo['title']) }}')"
          >
            <div class="relative aspect-[4/3] overflow-hidden bg-slate-950">
              <img
                src="{{ $photo['url'] }}"
                alt="{{ $photo['title'] }}"
                loading="lazy"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
              />
              <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/15 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
              
              <div class="absolute top-3 left-3">
                <span class="text-[11px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-full bg-amber-500 text-brand-dark shadow font-mono">
                  {{ $photo['badge'] }}
                </span>
              </div>

              <div class="absolute bottom-3 right-3 opacity-0 group-hover:opacity-100 transition-opacity">
                <div class="w-8 h-8 rounded-full bg-white text-brand-dark flex items-center justify-center shadow-lg">
                  <i class="bi bi-zoom-in text-sm"></i>
                </div>
              </div>
            </div>

            <div class="p-5 flex-1 flex flex-col justify-between">
              <div>
                <p class="text-xs font-bold text-amber-400 uppercase tracking-wider mb-1">{{ $photo['category'] }}</p>
                <h4 class="font-display font-bold text-white text-base mb-2 group-hover:text-amber-400 transition-colors leading-snug">{{ $photo['title'] }}</h4>
                <p class="text-gray-400 text-xs leading-relaxed">{{ $photo['description'] }}</p>
              </div>

              <div class="pt-3 mt-3 border-t border-white/10 flex items-center justify-between text-xs">
                <span class="text-gray-400 font-semibold">Tap to enlarge</span>
                <a
                  href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text={{ urlencode('Hi Asutext, I saw your transport record for ' . $photo['title'] . ' and would like to make an enquiry.') }}"
                  target="_blank"
                  rel="noopener noreferrer"
                  onclick="event.stopPropagation()"
                  class="text-amber-400 hover:text-white font-bold flex items-center gap-1"
                >
                  <span>Book This</span>
                  <span>→</span>
                </a>
              </div>
            </div>
          </div>
        @endforeach
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  CORPORATE PROFILE & CREDENTIALS CARD                      -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-16 sm:py-24 bg-brand-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
        <div>
          <p class="section-label section-label--blue mb-3">Certified &amp; Dependable Transit</p>
          <h2 class="font-display text-3xl sm:text-4xl font-black text-brand-dark mb-5 leading-tight">
            Connecting People, Cargo &amp; Communities Seamlessly
          </h2>
          <p class="text-gray-600 leading-relaxed mb-6 text-base">
            Asutext Transportation &amp; Logistics operates with high corporate discipline, verified vehicles, and clear corporate accountability. From daily executive transfers in Lagos to interstate routes into Cross River and the Federal Capital Territory, our mission is to deliver exceptional, stress-free journeys.
          </p>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
            <div class="p-4 rounded-xl bg-white border border-gray-200 shadow-sm">
              <div class="w-8 h-8 rounded-lg bg-amber-500 text-brand-dark flex items-center justify-center font-bold mb-2"><i class="bi bi-clock-fill text-base"></i></div>
              <h4 class="font-bold text-slate-800 text-sm mb-1">Strict Punctuality</h4>
              <p class="text-xs text-gray-500">Scheduled early morning door-to-door pickups so you never miss flights or business engagements.</p>
            </div>
            <div class="p-4 rounded-xl bg-white border border-gray-200 shadow-sm">
              <div class="w-8 h-8 rounded-lg bg-brand-blue text-white flex items-center justify-center font-bold mb-2"><i class="bi bi-shield-check text-base"></i></div>
              <h4 class="font-bold text-slate-800 text-sm mb-1">Zero Hidden Fees</h4>
              <p class="text-xs text-gray-500">Transparent upfront fares with no roadside toll disputes or last-minute surcharges.</p>
            </div>
            <div class="p-4 rounded-xl bg-white border border-gray-200 shadow-sm">
              <div class="w-8 h-8 rounded-lg bg-emerald-600 text-white flex items-center justify-center font-bold mb-2"><i class="bi bi-geo-alt-fill text-base"></i></div>
              <h4 class="font-bold text-slate-800 text-sm mb-1">Intermodal Corridors</h4>
              <p class="text-xs text-gray-500">Land haulage, coastal waterway links, and airline ticket booking assistance.</p>
            </div>
            <div class="p-4 rounded-xl bg-white border border-gray-200 shadow-sm">
              <div class="w-8 h-8 rounded-lg bg-indigo-600 text-white flex items-center justify-center font-bold mb-2"><i class="bi bi-person-badge-fill text-base"></i></div>
              <h4 class="font-bold text-slate-800 text-sm mb-1">Trained Chauffeurs</h4>
              <p class="text-xs text-gray-500">Courteous, defensive-driving certified drivers who respect your privacy and schedule.</p>
            </div>
          </div>

          <div class="flex items-center gap-4">
            <a
              href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20would%20like%20to%20learn%20more%20about%20your%20Transportation%20and%20Logistics%20services."
              target="_blank"
              rel="noopener noreferrer"
              class="btn-primary text-sm"
            >
              Enquire on WhatsApp
            </a>
            <a href="{{ route('contact') }}" class="btn-outline text-brand-dark border-gray-300 hover:border-brand-red text-sm">
              Contact Logistics Desk
            </a>
          </div>
        </div>

        <!-- Corporate Profile Card -->
        <div class="bg-white rounded-2xl p-6 sm:p-8 border border-gray-200 shadow-md">
          <div class="flex items-center justify-between mb-4 pb-4 border-b border-gray-200">
            <div>
              <p class="text-xs font-bold text-amber-600 uppercase tracking-wider">Official Proposal &amp; Credentials</p>
              <h3 class="font-display font-black text-brand-dark text-xl">Asutext &amp; G Nigeria Limited</h3>
            </div>
            <span class="text-xs font-bold px-2.5 py-1 rounded bg-slate-900 text-white">RC 7139195</span>
          </div>

          <p class="text-gray-600 text-sm leading-relaxed mb-4">
            <strong>Vision Statement:</strong> To revolutionize transportation through innovative solutions, exceptional service, and unwavering commitment to excellence.
          </p>
          <p class="text-gray-600 text-sm leading-relaxed mb-6">
            <strong>Mission Statement:</strong> To deliver seamless transportation experiences, fostering long-term relationships, and contributing to the economic growth and well-being of the communities we serve.
          </p>

          <div class="bg-brand-light p-4 rounded-xl border border-gray-200/80 mb-6">
            <h4 class="font-bold text-slate-800 text-sm mb-2">Our Core Commitments</h4>
            <div class="space-y-2 text-xs text-gray-600">
              <div class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-red"></span>
                <span><strong>1. Safety:</strong> Defensive driving, vetted chauffeurs, and routine vehicle maintenance.</span>
              </div>
              <div class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                <span><strong>2. Punctuality:</strong> Precise doorstep morning collection and flight schedule tracking.</span>
              </div>
              <div class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-blue"></span>
                <span><strong>3. Comfort:</strong> Air-conditioned interiors, reclining seats, and clean luggage compartments.</span>
              </div>
              <div class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>
                <span><strong>4. Customer Satisfaction:</strong> Attentive, kind drivers and streamlined online booking.</span>
              </div>
            </div>
          </div>

          <div class="space-y-2 text-xs text-gray-600 pt-2 border-t border-gray-200">
            <p><strong>Head Office:</strong> No. 20, Marina Road, Lagos Island, Lagos</p>
            <p><strong>Branch Office:</strong> Zone 10, Federal Housing Road, Calabar, Cross-River State</p>
            <p><strong>Banker:</strong> Stanbic IBTC Bank, Lagos Main Branch (Acct: 0051795785)</p>
            <p><strong>Executive Signatory:</strong> Mr. Jackson J. Iwara for ASUTEXT &amp; G NIGERIA LIMITED</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  FAQ SECTION                                               -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section id="faq" class="py-16 sm:py-20 bg-white border-t border-gray-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center mb-12">
        <p class="section-label section-label--red mb-3 justify-center">Got Questions?</p>
        <h2 class="font-display text-3xl font-black text-brand-dark">
          Frequently Asked Questions
        </h2>
      </div>

      <div class="space-y-4">
        <details class="bg-brand-light rounded-xl p-5 border border-gray-200 shadow-sm cursor-pointer group">
          <summary class="font-display font-bold text-slate-800 text-base list-none flex items-center justify-between">
            <span>How does your Door-to-Door pickup service work?</span>
            <span class="text-amber-500 font-black text-xl transition-transform group-open:rotate-45">+</span>
          </summary>
          <p class="text-gray-600 text-sm mt-3 leading-relaxed">
            Unlike traditional parks where you have to take local taxis and haul your luggage to a noisy garage, our driver comes straight to your home or office address in the morning. Your bags are loaded safely, and you travel directly to your destination with zero park connection fees.
          </p>
        </details>

        <details class="bg-brand-light rounded-xl p-5 border border-gray-200 shadow-sm cursor-pointer group">
          <summary class="font-display font-bold text-slate-800 text-base list-none flex items-center justify-between">
            <span>Which interstate travel routes do you cover regularly?</span>
            <span class="text-amber-500 font-black text-xl transition-transform group-open:rotate-45">+</span>
          </summary>
          <p class="text-gray-600 text-sm mt-3 leading-relaxed">
            Our active intercity corridors include Lagos ↔ Abuja, Lagos ↔ Calabar / Cross-River State, Lagos ↔ Port Harcourt, and customized direct charter routes to any state across Nigeria.
          </p>
        </details>

        <details class="bg-brand-light rounded-xl p-5 border border-gray-200 shadow-sm cursor-pointer group">
          <summary class="font-display font-bold text-slate-800 text-base list-none flex items-center justify-between">
            <span>Can companies and corporate organizations hire staff bus shuttles on a monthly contract?</span>
            <span class="text-amber-500 font-black text-xl transition-transform group-open:rotate-45">+</span>
          </summary>
          <p class="text-gray-600 text-sm mt-3 leading-relaxed">
            Yes! We provide dedicated corporate staff shuttle services with custom morning and evening pickup routes, verified defensive drivers, standby backup vehicles, and consolidated monthly corporate invoicing.
          </p>
        </details>

        <details class="bg-brand-light rounded-xl p-5 border border-gray-200 shadow-sm cursor-pointer group">
          <summary class="font-display font-bold text-slate-800 text-base list-none flex items-center justify-between">
            <span>What happens if my flight is delayed for an airport pickup?</span>
            <span class="text-amber-500 font-black text-xl transition-transform group-open:rotate-45">+</span>
          </summary>
          <p class="text-gray-600 text-sm mt-3 leading-relaxed">
            We track all arriving flights in real time using your flight number. If your flight is delayed or rescheduled, your chauffeur adjusts arrival timing accordingly so you are met at the terminal with zero stress.
          </p>
        </details>

        <details class="bg-brand-light rounded-xl p-5 border border-gray-200 shadow-sm cursor-pointer group">
          <summary class="font-display font-bold text-slate-800 text-base list-none flex items-center justify-between">
            <span>How early do I need to book a group charter bus for weddings or events?</span>
            <span class="text-amber-500 font-black text-xl transition-transform group-open:rotate-45">+</span>
          </summary>
          <p class="text-gray-600 text-sm mt-3 leading-relaxed">
            We recommend booking 3 to 7 days ahead for Toyota HiAce vans and 1 to 2 weeks ahead for large 30-seater luxury coaster buses to guarantee vehicle availability and itinerary coordination. Emergency and short-notice bookings can also be accommodated on WhatsApp.
          </p>
        </details>
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  BOTTOM CTA SECTION                                        -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-16 sm:py-24 bg-brand-dark text-white text-center relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <span class="text-xs font-bold text-amber-400 uppercase tracking-widest bg-amber-500/10 border border-amber-500/30 px-3 py-1 rounded-full mb-4 inline-block">
        Fast, Transparent Bookings
      </span>
      <h2 class="font-display text-3xl sm:text-5xl font-black mb-5">
        Ready for a Smooth, Punctual Journey?
      </h2>
      <p class="text-gray-300 text-base sm:text-lg max-w-2xl mx-auto mb-8 leading-relaxed">
        Get an instant quote on WhatsApp with zero hidden fees. Tell us your departure address, destination, date, and preferred vehicle type.
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a
          href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20visited%20your%20Transport%20page%20and%20I%27d%20like%20to%20get%20a%20quote%20for%20travel%20or%20logistics."
          target="_blank"
          rel="noopener noreferrer"
          class="btn-whatsapp text-base"
        >
          Chat Directly on WhatsApp
        </a>
        <a
          href="tel:{{ str_replace(' ', '', $globalSettings['phone'] ?? '+2349037666399') }}"
          class="btn-outline text-base"
        >
          Call {{ $globalSettings['phone'] ?? '+234 903 766 6399' }}
        </a>
      </div>
    </div>
    <div class="absolute inset-0 bg-gradient-to-t from-black via-slate-950 to-brand-dark opacity-90 z-0"></div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  LIGHTBOX MODAL                                            -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <div
    id="transport-lightbox"
    class="fixed inset-0 z-50 bg-black/95 backdrop-blur-md hidden items-center justify-center p-4 sm:p-6"
    onclick="handleTransportBackdropClick(event)"
  >
    <!-- Modal Close Button -->
    <button
      type="button"
      onclick="closeTransportLightbox()"
      class="absolute top-4 right-4 sm:top-6 sm:right-6 w-11 h-11 rounded-full bg-white/10 hover:bg-brand-red text-white flex items-center justify-center transition-all z-20 cursor-pointer"
      aria-label="Close image modal"
    >
      <i class="bi bi-x-lg text-lg"></i>
    </button>

    <!-- Top Caption Title -->
    <div class="absolute top-4 left-4 sm:top-6 sm:left-6 z-20 max-w-md">
      <p id="transport-lightbox-title" class="text-white font-display font-bold text-sm sm:text-base leading-snug drop-shadow"></p>
      <p class="text-amber-400 text-xs mt-0.5 font-semibold">Asutext Transportation &amp; Logistics Document Archive</p>
    </div>

    <!-- Media Display Area -->
    <div class="relative max-w-5xl max-h-[85vh] flex items-center justify-center z-10 py-12">
      <img
        id="transport-lightbox-img"
        src=""
        alt="Enlarged Document"
        class="max-h-[75vh] max-w-[92vw] object-contain rounded-2xl shadow-2xl border border-white/15"
        onclick="event.stopPropagation()"
      />
    </div>

    <!-- Bottom Info & ESC helper bar -->
    <div class="absolute bottom-4 inset-x-4 max-w-6xl mx-auto pt-2 border-t border-white/10 flex items-center justify-between text-xs text-gray-400">
      <span>Asutext &amp; G Nigeria Limited · RC 7139195</span>
      <button
        type="button"
        onclick="closeTransportLightbox()"
        class="text-gray-300 hover:text-white underline cursor-pointer"
      >
        Tap here or press ESC to exit
      </button>
    </div>
  </div>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  PAGE JAVASCRIPT: TABS & LIGHTBOX                          -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <script>
    function openTransportLightbox(url, title) {
      const modal = document.getElementById('transport-lightbox');
      const img = document.getElementById('transport-lightbox-img');
      const titleElem = document.getElementById('transport-lightbox-title');

      if (!modal || !img) return;

      titleElem.textContent = title || '';
      img.src = url;

      modal.classList.remove('hidden');
      modal.classList.add('flex');
      document.body.style.overflow = 'hidden';
    }

    function closeTransportLightbox() {
      const modal = document.getElementById('transport-lightbox');
      const img = document.getElementById('transport-lightbox-img');

      if (!modal) return;

      if (img) img.src = '';

      modal.classList.add('hidden');
      modal.classList.remove('flex');
      document.body.style.overflow = '';
    }

    function handleTransportBackdropClick(e) {
      if (e.target.id === 'transport-lightbox-img') return;
      closeTransportLightbox();
    }

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeTransportLightbox();
    });

    document.addEventListener('DOMContentLoaded', () => {
      // 1. Division Tabs Switcher
      const divisionTabs = document.querySelectorAll('.transport-tab-trigger');
      const divisionPanels = document.querySelectorAll('.transport-content-panel');

      divisionTabs.forEach(tab => {
        tab.addEventListener('click', () => {
          divisionTabs.forEach(t => {
            t.classList.remove('bg-amber-500', 'text-brand-dark', 'border-amber-500', 'shadow-md', 'active-tab');
            t.classList.add('bg-white', 'text-gray-700', 'border-gray-200');
          });

          tab.classList.add('bg-amber-500', 'text-brand-dark', 'border-amber-500', 'shadow-md', 'active-tab');
          tab.classList.remove('bg-white', 'text-gray-700', 'border-gray-200');

          const targetId = tab.getAttribute('data-target');
          divisionPanels.forEach(panel => {
            if (panel.id === targetId) {
              panel.classList.remove('hidden');
              panel.classList.add('block');
            } else {
              panel.classList.add('hidden');
              panel.classList.remove('block');
            }
          });
        });
      });

      // 2. Photos Themed Tabs Filtering
      const filterBtns = document.querySelectorAll('.transport-filter-btn');
      const photoCards = document.querySelectorAll('.transport-card-item');

      filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
          filterBtns.forEach(b => {
            b.classList.remove('bg-amber-500', 'text-brand-dark', 'border-amber-500');
            b.classList.add('border-white/20', 'text-gray-300');
          });
          btn.classList.add('bg-amber-500', 'text-brand-dark', 'border-amber-500');
          btn.classList.remove('border-white/20', 'text-gray-300');

          const theme = btn.getAttribute('data-theme');
          photoCards.forEach(card => {
            if (theme === 'all' || card.getAttribute('data-theme') === theme) {
              card.style.display = 'flex';
            } else {
              card.style.display = 'none';
            }
          });
        });
      });
    });
  </script>
@endsection
