@extends('layouts.app')

@section('title', 'Professional Cleaning, Janitorial & Landscaping Services | Asutext Group Nigeria Limited')

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
        <span class="text-brand-red font-medium">Cleaning &amp; Environmental Division</span>
      </nav>

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-7">
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-brand-red/20 text-brand-red border border-brand-red/30 mb-4">
            <span class="w-2 h-2 rounded-full bg-brand-red animate-pulse"></span>
            Asutext Cleaning, Janitorial &amp; Landscaping Division
          </div>

          <h1 class="font-display text-3xl sm:text-5xl lg:text-6xl font-black leading-tight mb-4">
            Spotless Spaces.<br/>
            <span class="text-brand-red">Certified Hygiene &amp; Grounds.</span>
          </h1>

          <p class="text-gray-300 text-base sm:text-lg leading-relaxed mb-6 max-w-2xl">
            From residential homes and corporate office towers to specialized deep carpet extraction, post-construction cleanup, industrial fumigation, and complete compound gardening &amp; landscaping across Lagos and nationwide. Fully equipped with commercial machinery, trained personnel, and hospital-grade sanitizers.
          </p>

          <!-- Trust Badges Bar -->
          <div class="hero-trust-grid mb-8 max-w-xl">
            <div class="bg-white/5 border border-white/10 rounded-xl p-3 flex items-center gap-3">
              <div class="w-9 h-9 rounded-lg bg-brand-red/20 text-brand-red flex items-center justify-center font-bold text-base flex-shrink-0">
                <i class="bi bi-shield-check"></i>
              </div>
              <div>
                <p class="text-white font-bold text-xs">Vetted Personnel</p>
                <p class="text-gray-400 text-[11px]">Uniformed, insured &amp; trained</p>
              </div>
            </div>

            <div class="bg-white/5 border border-white/10 rounded-xl p-3 flex items-center gap-3">
              <div class="w-9 h-9 rounded-lg bg-brand-blue/20 text-brand-blue flex items-center justify-center font-bold text-base flex-shrink-0">
                <i class="bi bi-stars"></i>
              </div>
              <div>
                <p class="text-white font-bold text-xs">Zoflora &amp; Bleach</p>
                <p class="text-gray-400 text-[11px]">Hospital-grade sanitization</p>
              </div>
            </div>

            <div class="bg-white/5 border border-white/10 rounded-xl p-3 flex items-center gap-3">
              <div class="w-9 h-9 rounded-lg bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold text-base flex-shrink-0">
                <i class="bi bi-tree-fill"></i>
              </div>
              <div>
                <p class="text-white font-bold text-xs">Integrated Grounds</p>
                <p class="text-gray-400 text-[11px]">Gardening &amp; Landscaping</p>
              </div>
            </div>
          </div>

          <div class="flex flex-wrap gap-4">
            <a
              href="#quote-form"
              class="btn-whatsapp text-base"
            >
              <i class="bi bi-whatsapp text-lg flex-shrink-0" aria-hidden="true"></i>
              Get a Fast Quote on WhatsApp
            </a>
            <a href="#divisions" class="btn-outline text-base">
              Explore All Divisions <i class="bi bi-arrow-down ml-1"></i>
            </a>
          </div>
        </div>

        <!-- Featured Media Hero Preview (Clean Premium Frame) -->
        <div class="lg:col-span-5">
          <div class="relative">
            
            <!-- Main Hero Frame -->
            <div class="relative rounded-2xl sm:rounded-3xl overflow-hidden shadow-2xl border border-white/15 bg-slate-900 group">
              
              <!-- Hero Photo with Play Video Trigger -->
              <div
                class="relative aspect-[4/3] overflow-hidden cursor-pointer"
                onclick="openCleaningLightbox('{{ asset('images/Cleaning/VIDEO-2026-10-02-13-10-21.mp4') }}', 'video', 'Live On-Site Deep Carpet Extraction Video')"
                title="Click to watch full video"
              >
                <img
                  src="{{ asset('images/Cleaning/PHOTO-2026-10-02-13-10-22.jpg') }}"
                  alt="Asutext professional deep carpet cleaning team in action"
                  class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                />

                <!-- Top badges inside frame -->
                <div class="absolute top-4 left-4 right-4 flex items-center justify-between z-10">
                  <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider bg-black/70 text-white backdrop-blur-md border border-white/20">
                    <span class="w-2 h-2 rounded-full bg-brand-red animate-pulse"></span>
                    Live On-Site Work
                  </span>

                  <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-semibold bg-black/70 text-emerald-400 backdrop-blur-md border border-white/20">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                    Active Crew
                  </span>
                </div>

                <!-- Center Large Play Button -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/25 to-black/10 flex flex-col justify-end p-6">
                  <div class="flex items-center gap-3.5 mb-2">
                    <div class="w-13 h-13 rounded-full bg-brand-red text-white flex items-center justify-center shadow-2xl group-hover:scale-110 group-hover:bg-red-700 transition-all flex-shrink-0">
                      <i class="bi bi-play-fill text-2xl ml-0.5"></i>
                    </div>
                    <div>
                      <p class="text-white font-display font-black text-base sm:text-lg leading-snug">
                        Watch Carpet Deep Extraction
                      </p>
                      <p class="text-gray-300 text-xs mt-0.5">
                        Tap anywhere to watch technicians in action
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Sleek Bottom Bar (Replacing the 3 cramped thumbnails) -->
              <div class="p-4 sm:p-5 bg-slate-900/95 border-t border-white/10 flex items-center justify-between gap-4">
                <div class="flex items-center gap-3">
                  <div class="w-9 h-9 rounded-xl bg-brand-blue/30 text-blue-400 flex items-center justify-center font-bold text-sm flex-shrink-0">
                    <i class="bi bi-star-fill text-xs"></i>
                  </div>
                  <div>
                    <p class="text-xs font-bold text-white leading-tight">Heavy Kenwood Machinery</p>
                    <p class="text-[11px] text-gray-400">Wet/dry suction &amp; rotary polishers</p>
                  </div>
                </div>

                <a
                  href="#action-proof"
                  class="inline-flex items-center gap-1 text-xs font-bold text-brand-red hover:text-white px-3 py-1.5 rounded-lg bg-white/5 hover:bg-brand-red transition-all flex-shrink-0"
                >
                  <span>13 Videos</span>
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
  <!--  REDESIGNED SERVICE DIVISIONS SECTION                      -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section id="divisions" class="py-16 sm:py-24 bg-brand-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-3xl mx-auto mb-12">
        <p class="section-label section-label--red mb-3 justify-center">Cleaning &amp; Facility Divisions</p>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-black text-brand-dark">
          Complete Scope of Cleaning &amp; Grounds
        </h2>
        <p class="text-gray-500 mt-4 text-base sm:text-lg leading-relaxed">
          Integrated indoor and outdoor facility care: from residential homes and commercial suites to heavy industrial fumigation, compound maintenance, and professional landscaping.
        </p>
      </div>

      <!-- Interactive Division Category Switcher Tabs -->
      <div class="mobile-scroll-tabs mb-10" id="division-tabs-bar">
        @foreach($serviceCategories as $idx => $cat)
          <button
            type="button"
            class="division-tab-trigger px-5 py-3 rounded-xl text-xs sm:text-sm font-bold border transition-all duration-200 cursor-pointer flex items-center gap-2 {{ $idx === 0 ? 'bg-brand-red text-white border-brand-red shadow-md active-tab' : 'bg-white text-gray-700 border-gray-200 hover:border-brand-red/50 hover:text-brand-red' }}"
            data-target="division-panel-{{ $cat['id'] }}"
          >
            <span class="text-sm flex items-center">
              @if($cat['id'] === 'residential') <i class="bi bi-house-door-fill"></i>
              @elseif($cat['id'] === 'commercial') <i class="bi bi-building-fill"></i>
              @elseif($cat['id'] === 'specialized') <i class="bi bi-stars"></i>
              @elseif($cat['id'] === 'industrial') <i class="bi bi-cone-striped"></i>
              @elseif($cat['id'] === 'environmental') <i class="bi bi-tree-fill"></i>
              @else <i class="bi bi-calendar2-week-fill"></i>
              @endif
            </span>
            <span>{{ $cat['title'] }}</span>
          </button>
        @endforeach
      </div>

      <!-- Division Feature Panels Container -->
      <div id="division-panels-wrapper" class="mb-14">
        @foreach($serviceCategories as $idx => $cat)
          <div
            id="division-panel-{{ $cat['id'] }}"
            class="division-content-panel bg-white rounded-3xl p-6 sm:p-10 border border-gray-200 shadow-xl transition-all duration-300 {{ $idx === 0 ? 'block' : 'hidden' }}"
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
                    {{ $cat['summary'] }}
                  </p>

                  <div class="space-y-3 bg-brand-light p-4 rounded-2xl border border-gray-100 mb-8">
                    <div class="flex items-center gap-2.5 text-xs sm:text-sm text-gray-700 font-semibold">
                      <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-xs"><i class="bi bi-check2"></i></span>
                      <span>Full PPE &amp; Corporate Uniformed Technicians</span>
                    </div>
                    <div class="flex items-center gap-2.5 text-xs sm:text-sm text-gray-700 font-semibold">
                      <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-xs"><i class="bi bi-check2"></i></span>
                      <span>Hospital-Grade Disinfectants (Zoflora &amp; Bleach)</span>
                    </div>
                    <div class="flex items-center gap-2.5 text-xs sm:text-sm text-gray-700 font-semibold">
                      <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-xs"><i class="bi bi-check2"></i></span>
                      <span>Commercial Rotary Machinery &amp; HEPA Suction</span>
                    </div>
                  </div>
                </div>

                <!-- Action Button in left panel (Styled cleanly with WhatsApp) -->
                <div class="pt-4 border-t border-gray-100 flex items-center gap-3">
                  <a
                    href="#quote-form"
                    onclick="selectDivisionForQuote('{{ $cat['id'] }}')"
                    class="btn-whatsapp justify-center text-sm font-bold flex-1 py-3 px-4 shadow-sm hover:shadow whitespace-nowrap"
                  >
                    <i class="bi bi-whatsapp text-base flex-shrink-0" aria-hidden="true"></i>
                    <span>Book on WhatsApp</span>
                  </a>
                  <a
                    href="tel:{{ str_replace(' ', '', $globalSettings['phone'] ?? '+2349037666399') }}"
                    class="inline-flex items-center justify-center gap-2 px-4 sm:px-5 py-3 rounded-xl border border-slate-200 hover:border-slate-800 bg-white hover:bg-slate-900 text-slate-800 hover:text-white text-sm font-bold shadow-sm hover:shadow transition-all duration-200 whitespace-nowrap flex-shrink-0 group"
                    title="Call Asutext directly"
                  >
                    <i class="bi bi-telephone-fill text-xs text-brand-red group-hover:text-white transition-colors"></i>
                    <span>Call Us</span>
                  </a>
                </div>
              </div>

              <!-- Right Services Checklist Grid -->
              <div class="lg:col-span-7">
                <div class="border-b border-gray-100 pb-3 mb-6 flex items-center justify-between">
                  <h4 class="font-display font-black text-brand-dark text-base sm:text-lg">
                    Included Services &amp; Scope
                  </h4>
                  <span class="text-xs font-bold text-gray-400 uppercase tracking-wider">
                    {{ count($cat['services']) }} Services in Division
                  </span>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                  @foreach($cat['services'] as $srv)
                    <div class="p-4 rounded-2xl bg-brand-light border border-gray-200/80 hover:border-brand-red/40 transition-colors">
                      <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-brand-red/10 text-brand-red flex-shrink-0 flex items-center justify-center mt-0.5 font-bold text-xs">
                          <i class="bi bi-check2"></i>
                        </div>
                        <div>
                          <h5 class="text-sm font-bold text-slate-900 mb-1">{{ $srv['name'] }}</h5>
                          <p class="text-xs text-gray-500 leading-relaxed">{{ $srv['desc'] }}</p>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>

            </div>
          </div>
        @endforeach
      </div>

      <!-- Quick All-Divisions Summary Cards (Grid of 6) with Elegant WhatsApp Buttons -->
      <div class="mt-16 pt-12 border-t border-gray-200">
        <div class="text-center max-w-2xl mx-auto mb-10">
          <p class="text-xs font-bold text-brand-red uppercase tracking-wider">Quick Navigation</p>
          <h3 class="font-display text-2xl sm:text-3xl font-black text-brand-dark">
            All 6 Divisions at a Glance
          </h3>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          @foreach($serviceCategories as $cat)
            <div class="bg-white rounded-2xl p-6 border border-gray-200 shadow-sm hover:shadow-lg transition-all flex flex-col justify-between group">
              <div>
                <div class="flex items-center justify-between mb-3">
                  <span class="text-[11px] font-black uppercase tracking-wider px-2.5 py-0.5 rounded-full {{ $cat['badge_color'] }}">
                    {{ $cat['tag'] }}
                  </span>
                  <span class="text-xs text-gray-400 font-semibold">Division 0{{ $loop->iteration }}</span>
                </div>

                <h4 class="font-display text-xl font-black text-brand-dark mb-2 group-hover:text-brand-red transition-colors">
                  {{ $cat['title'] }}
                </h4>
                <p class="text-gray-500 text-xs sm:text-sm leading-relaxed mb-4">
                  {{ $cat['summary'] }}
                </p>

                <div class="space-y-1.5 mb-6 text-xs text-gray-600">
                  @foreach(array_slice($cat['services'], 0, 3) as $srv)
                    <div class="flex items-center gap-2">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-red"></span>
                      <span class="font-medium text-slate-800">{{ $srv['name'] }}</span>
                    </div>
                  @endforeach
                  @if(count($cat['services']) > 3)
                    <p class="text-[11px] text-gray-400 italic pt-1">+ {{ count($cat['services']) - 3 }} more services...</p>
                  @endif
                </div>
              </div>

              <!-- Refined WhatsApp Action Button -->
              <div class="pt-4 border-t border-gray-100 mt-auto">
                <a
                  href="#quote-form"
                  onclick="selectDivisionForQuote('{{ $cat['id'] }}')"
                  class="btn-whatsapp w-full justify-center text-xs font-bold py-2.5"
                >
                  <i class="bi bi-whatsapp text-xs flex-shrink-0" aria-hidden="true"></i>
                  <span>Request {{ $cat['title'] }} Quote</span>
                </a>
              </div>
            </div>
          @endforeach
        </div>
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  INTERACTIVE CLEANING QUOTE & BOOKING FORM (WHATSAPP FUNNEL) -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section id="quote-form" class="py-16 sm:py-24 bg-white border-t border-b border-gray-200 scroll-mt-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <!-- Section Header -->
      <div class="text-center max-w-2xl mx-auto mb-10">
        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-emerald-50 text-emerald-700 border border-emerald-200 mb-3">
          <i class="bi bi-lightning-charge-fill text-emerald-600"></i>
          Fast WhatsApp Quote in 60 Seconds
        </span>
        <h2 class="font-display text-3xl sm:text-4xl font-black text-brand-dark">
          Tell Us What You Need Cleaned
        </h2>
        <p class="text-gray-500 mt-3 text-sm sm:text-base leading-relaxed">
          Select your service details below. We will format a clear, detailed specification and send it directly to our operations team on WhatsApp for an immediate, transparent quote.
        </p>
      </div>

      <!-- Main Form Card -->
      <div class="bg-brand-light rounded-3xl p-6 sm:p-10 border border-gray-200/90 shadow-xl relative overflow-hidden">
        <form id="cleaningQuoteForm" onsubmit="handleCleaningFormSubmit(event)" novalidate>
          
          <!-- STEP 1: Select Main Division -->
          <div class="mb-8">
            <div class="flex items-center justify-between mb-3">
              <label class="block font-display font-bold text-slate-900 text-sm sm:text-base">
                1. Select Cleaning Division <span class="text-brand-red">*</span>
              </label>
              <span class="text-xs text-gray-400 font-medium">Choose primary category</span>
            </div>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-2.5" id="form-division-options">
              @foreach($serviceCategories as $cat)
                <button
                  type="button"
                  class="form-division-btn p-3 rounded-xl border text-left transition-all duration-200 flex flex-col justify-between group cursor-pointer {{ $loop->first ? 'border-brand-red bg-white ring-2 ring-brand-red/20 shadow-sm' : 'border-gray-200 bg-white/70 hover:bg-white hover:border-gray-300' }}"
                  data-cat-id="{{ $cat['id'] }}"
                  data-cat-title="{{ $cat['title'] }}"
                  onclick="setFormDivision('{{ $cat['id'] }}')"
                >
                  <div class="flex items-center justify-between w-full mb-1.5">
                    <span class="w-7 h-7 rounded-lg flex items-center justify-center text-xs font-bold {{ $cat['badge_color'] }}">
                      @if($cat['id'] === 'residential') <i class="bi bi-house-door-fill"></i>
                      @elseif($cat['id'] === 'commercial') <i class="bi bi-building-fill"></i>
                      @elseif($cat['id'] === 'specialized') <i class="bi bi-stars"></i>
                      @elseif($cat['id'] === 'industrial') <i class="bi bi-cone-striped"></i>
                      @elseif($cat['id'] === 'environmental') <i class="bi bi-tree-fill"></i>
                      @else <i class="bi bi-calendar2-week-fill"></i>
                      @endif
                    </span>
                    <span class="form-division-radio w-4 h-4 rounded-full border border-gray-300 flex items-center justify-center {{ $loop->first ? 'border-brand-red' : '' }}">
                      <span class="form-division-dot w-2 h-2 rounded-full bg-brand-red {{ $loop->first ? 'block' : 'hidden' }}"></span>
                    </span>
                  </div>
                  <span class="font-display font-bold text-xs sm:text-sm text-slate-800 leading-tight">
                    {{ $cat['title'] }}
                  </span>
                </button>
              @endforeach
            </div>
            <input type="hidden" id="selectedDivisionInput" name="division" value="{{ $serviceCategories[0]['id'] ?? 'residential' }}">
            <input type="hidden" id="selectedDivisionTitle" value="{{ $serviceCategories[0]['title'] ?? 'Residential Cleaning' }}">
          </div>

          <!-- STEP 2: Sub-services Dynamic Multi-Select Chips -->
          <div class="mb-8 p-5 bg-white rounded-2xl border border-gray-200 shadow-sm">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1 mb-3">
              <label class="block font-display font-bold text-slate-900 text-sm sm:text-base">
                2. Select Specific Services Needed <span class="text-brand-red">*</span>
              </label>
              <span class="text-xs text-brand-red font-semibold">Select all that apply (tap to choose)</span>
            </div>
            <p class="text-xs text-gray-500 mb-4">
              Tap the specific tasks you need done. You can choose multiple options:
            </p>

            @foreach($serviceCategories as $cat)
              <div
                id="subservices-for-{{ $cat['id'] }}"
                class="form-subservices-group {{ $loop->first ? 'flex' : 'hidden' }} flex-wrap gap-2"
              >
                @foreach($cat['services'] as $srv)
                  <button
                    type="button"
                    class="subservice-chip px-3.5 py-2 rounded-xl border border-gray-200 bg-brand-light text-slate-700 text-xs sm:text-sm font-semibold hover:border-brand-red/60 transition-all flex items-center gap-2 cursor-pointer"
                    data-service-name="{{ $srv['name'] }}"
                    onclick="toggleSubserviceChip(this)"
                  >
                    <span class="chip-check w-4 h-4 rounded-md border border-gray-300 flex items-center justify-center bg-white text-[10px] text-white">
                      <i class="bi bi-check-lg hidden"></i>
                    </span>
                    <span>{{ $srv['name'] }}</span>
                  </button>
                @endforeach
              </div>
            @endforeach
            <p id="subservicesError" class="text-brand-red text-xs mt-2 hidden font-medium">
              Please select at least one specific service needed.
            </p>
          </div>

          <!-- STEP 3: Property Type, Location & Preferred Schedule -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-8">
            
            <!-- Property Type / Size -->
            <div>
              <label class="block font-display font-bold text-slate-900 text-sm mb-2">
                3. Property Type / Size <span class="text-brand-red">*</span>
              </label>
              <select
                id="formPropertyType"
                class="w-full bg-white border border-gray-300 rounded-xl px-4 py-3 text-sm text-slate-800 font-medium focus:outline-none focus:ring-2 focus:ring-brand-red/30 focus:border-brand-red transition-all cursor-pointer"
                required
              >
                <option value="" disabled selected>Select property size...</option>
                <option value="1–2 Bedroom Apartment / Flat">1–2 Bedroom Apartment / Flat</option>
                <option value="3–4 Bedroom Flat / Duplex">3–4 Bedroom Flat / Duplex</option>
                <option value="5+ Bedroom Mansion / Detached House">5+ Bedroom Mansion / Detached House</option>
                <option value="Commercial Office / Corporate Suite">Commercial Office / Corporate Suite</option>
                <option value="Retail Store / Showroom">Retail Store / Showroom</option>
                <option value="Warehouse / Factory / Plant">Warehouse / Factory / Plant</option>
                <option value="Compound / Grounds Only">Compound / Grounds Only</option>
                <option value="Other / Special Facility">Other / Special Facility</option>
              </select>
            </div>

            <!-- Location in Lagos / Nigeria -->
            <div>
              <label class="block font-display font-bold text-slate-900 text-sm mb-2">
                4. Location / Area <span class="text-brand-red">*</span>
              </label>
              <select
                id="formLocation"
                class="w-full bg-white border border-gray-300 rounded-xl px-4 py-3 text-sm text-slate-800 font-medium focus:outline-none focus:ring-2 focus:ring-brand-red/30 focus:border-brand-red transition-all cursor-pointer"
                required
              >
                <option value="" disabled selected>Select area...</option>
                <option value="Ikoyi / Banana Island (Lagos)">Ikoyi / Banana Island (Lagos)</option>
                <option value="Victoria Island / Oniru (Lagos)">Victoria Island / Oniru (Lagos)</option>
                <option value="Lekki Phase 1 / Chevron (Lagos)">Lekki Phase 1 / Chevron (Lagos)</option>
                <option value="Ajah / Sangotedo / Epe (Lagos)">Ajah / Sangotedo / Epe (Lagos)</option>
                <option value="Ikeja / GRA / Maryland (Lagos)">Ikeja / GRA / Maryland (Lagos)</option>
                <option value="Surulere / Yaba / Mainland (Lagos)">Surulere / Yaba / Mainland (Lagos)</option>
                <option value="Calabar (Cross-River State)">Calabar (Cross-River State)</option>
                <option value="Abuja (FCT)">Abuja (FCT)</option>
                <option value="Other Location Nationwide">Other Location Nationwide</option>
              </select>
            </div>

            <!-- Preferred Schedule -->
            <div>
              <label class="block font-display font-bold text-slate-900 text-sm mb-2">
                5. When Do You Need This?
              </label>
              <select
                id="formSchedule"
                class="w-full bg-white border border-gray-300 rounded-xl px-4 py-3 text-sm text-slate-800 font-medium focus:outline-none focus:ring-2 focus:ring-brand-red/30 focus:border-brand-red transition-all cursor-pointer"
              >
                <option value="ASAP / Today (Urgent)">ASAP / Today (Urgent)</option>
                <option value="This Weekend" selected>This Weekend</option>
                <option value="Within the Next 7 Days">Within the Next 7 Days</option>
                <option value="Later this Month">Later this Month</option>
                <option value="Recurring Contract (Weekly/Monthly)">Recurring Contract (Weekly/Monthly)</option>
                <option value="Just Inquiring / Flexible">Just Inquiring / Flexible</option>
              </select>
            </div>

            <!-- Client Name -->
            <div>
              <label class="block font-display font-bold text-slate-900 text-sm mb-2">
                6. Your Name <span class="text-brand-red">*</span>
              </label>
              <input
                type="text"
                id="formName"
                placeholder="e.g. Babatunde Adeleke"
                class="w-full bg-white border border-gray-300 rounded-xl px-4 py-3 text-sm text-slate-800 font-medium focus:outline-none focus:ring-2 focus:ring-brand-red/30 focus:border-brand-red transition-all"
                required
              />
            </div>

          </div>

          <!-- Phone Number and Notes -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-8">
            <div>
              <label class="block font-display font-bold text-slate-900 text-sm mb-2">
                7. WhatsApp / Phone Number <span class="text-brand-red">*</span>
              </label>
              <input
                type="tel"
                id="formPhone"
                placeholder="e.g. 08012345678"
                class="w-full bg-white border border-gray-300 rounded-xl px-4 py-3 text-sm text-slate-800 font-medium focus:outline-none focus:ring-2 focus:ring-brand-red/30 focus:border-brand-red transition-all"
                required
              />
            </div>

            <div>
              <label class="block font-display font-bold text-slate-900 text-sm mb-2">
                8. Specific Notes / Special Instructions <span class="text-gray-400 font-normal">(Optional)</span>
              </label>
              <input
                type="text"
                id="formNotes"
                placeholder="e.g. Paint stains on tiles, 2 pets in the home"
                class="w-full bg-white border border-gray-300 rounded-xl px-4 py-3 text-sm text-slate-800 font-medium focus:outline-none focus:ring-2 focus:ring-brand-red/30 focus:border-brand-red transition-all"
              />
            </div>
          </div>

          <!-- Submit Button & Guarantee Note -->
          <div class="pt-4 border-t border-gray-200 flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="text-xs text-gray-500 flex items-center gap-2">
              <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-xs flex-shrink-0">
                <i class="bi bi-shield-lock-fill"></i>
              </span>
              <span>Your request is securely logged &amp; opened in WhatsApp with zero wait time.</span>
            </div>

            <button
              type="submit"
              id="quoteSubmitBtn"
              class="group relative w-full sm:w-auto inline-flex items-center justify-between sm:justify-start gap-4 px-6 sm:px-8 py-3.5 sm:py-4 rounded-2xl bg-gradient-to-r from-[#25D366] via-[#20ba5a] to-[#128C7E] text-white shadow-[0_8px_24px_rgba(37,211,102,0.35)] hover:shadow-[0_12px_32px_rgba(37,211,102,0.5)] border border-emerald-300/40 hover:border-white/40 transition-all duration-300 cursor-pointer transform hover:-translate-y-1 active:translate-y-0 overflow-hidden"
            >
              <!-- Gloss reflection overlay -->
              <span class="absolute inset-0 w-full h-full bg-gradient-to-t from-black/5 to-white/20 pointer-events-none"></span>

              <!-- WhatsApp Icon in frosted circular badge -->
              <div class="relative w-11 h-11 rounded-xl bg-white/20 backdrop-blur-md border border-white/30 flex items-center justify-center flex-shrink-0 shadow-inner group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                <i class="bi bi-whatsapp text-2xl text-white"></i>
              </div>

              <!-- Button Label with Dual-Tier Hierarchy -->
              <div class="relative text-left flex-1 min-w-[190px]">
                <p id="quoteSubmitText" class="font-display font-extrabold text-white text-base sm:text-lg leading-tight tracking-wide">
                  Send Quote Request
                </p>
                <p id="quoteSubmitSub" class="text-white/85 text-xs font-medium flex items-center gap-1.5 mt-0.5">
                  <span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span>
                  Instant Dispatch to WhatsApp
                </p>
              </div>

              <!-- Animated Action Arrow in Circle -->
              <div class="relative w-8 h-8 rounded-full bg-white/20 flex items-center justify-center flex-shrink-0 group-hover:bg-white group-hover:text-emerald-700 transition-all duration-300">
                <i class="bi bi-arrow-right text-sm group-hover:translate-x-0.5 transition-transform"></i>
              </div>
            </button>
          </div>

        </form>
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  ACTION PROOF SECTION (13 VIDEOS BY 3-PHASE WORKFLOW)      -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section id="action-proof" class="py-16 sm:py-24 bg-brand-dark text-white border-t border-gray-800 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="flex flex-col lg:flex-row lg:items-end justify-between mb-12 gap-6">
        <div>
          <p class="section-label section-label--red mb-3">Live Video Proof</p>
          <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-black text-white">
            Our 3-Phase Deep Cleaning Workflow
          </h2>
          <p class="text-gray-300 mt-3 text-base max-w-2xl leading-relaxed">
            See our uniformed crews in operation. We structure every deep cleaning assignment into 3 strict procedural phases to ensure zero missed spots, complete dust evacuation, and restorative finish.
          </p>
        </div>

        <!-- 3-Phase Filter Stepper -->
        <div class="flex flex-wrap gap-2" id="phase-filter-container">
          <button class="phase-filter-btn px-4 py-2.5 rounded-full text-xs font-bold border border-brand-red bg-brand-red text-white transition-all shadow" data-phase="all">
            All 13 Video Clips
          </button>
          <button class="phase-filter-btn px-4 py-2.5 rounded-full text-xs font-bold border border-white/20 text-gray-300 hover:border-brand-red hover:text-white transition-all" data-phase="phase-1">
            Phase 1: Setup &amp; Heavy Suction
          </button>
          <button class="phase-filter-btn px-4 py-2.5 rounded-full text-xs font-bold border border-white/20 text-gray-300 hover:border-brand-red hover:text-white transition-all" data-phase="phase-2">
            Phase 2: Precision Detailing
          </button>
          <button class="phase-filter-btn px-4 py-2.5 rounded-full text-xs font-bold border border-white/20 text-gray-300 hover:border-brand-red hover:text-white transition-all" data-phase="phase-3">
            Phase 3: Inspection &amp; Finish
          </button>
        </div>
      </div>

      <!-- 3-Phase Summary Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
        <div class="p-5 rounded-2xl bg-white/5 border border-white/10">
          <div class="flex items-center gap-3 mb-2">
            <span class="w-8 h-8 rounded-full bg-brand-red text-white font-display font-black text-sm flex items-center justify-center">1</span>
            <h3 class="font-display font-bold text-base text-white">Setup &amp; High-Airflow Suction</h3>
          </div>
          <p class="text-xs text-gray-400 leading-relaxed">
            Heavy-duty Kenwood industrial extractors deployed across the suite floor, clearing surface grit and lifting deep sediment.
          </p>
        </div>

        <div class="p-5 rounded-2xl bg-white/5 border border-white/10">
          <div class="flex items-center gap-3 mb-2">
            <span class="w-8 h-8 rounded-full bg-brand-blue text-white font-display font-black text-sm flex items-center justify-center">2</span>
            <h3 class="font-display font-bold text-base text-white">Precision &amp; Edge Detailing</h3>
          </div>
          <p class="text-xs text-gray-400 leading-relaxed">
            Two specialists operating simultaneously with narrow crevice attachments under bedframes, low furniture, and along baseboards.
          </p>
        </div>

        <div class="p-5 rounded-2xl bg-white/5 border border-white/10">
          <div class="flex items-center gap-3 mb-2">
            <span class="w-8 h-8 rounded-full bg-emerald-600 text-white font-display font-black text-sm flex items-center justify-center">3</span>
            <h3 class="font-display font-bold text-base text-white">Quality Inspection &amp; Finish</h3>
          </div>
          <p class="text-xs text-gray-400 leading-relaxed">
            Supervisor spot check, baseboard sanitization, pile fiber restoration, and ensuring fresh, allergen-free room ambiance.
          </p>
        </div>
      </div>

      <!-- Videos Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="videos-grid">
        @foreach($cleaningVideos as $video)
          <div class="video-card-item rounded-2xl overflow-hidden bg-slate-900/90 border border-white/10 hover:border-brand-red/60 shadow-lg hover:shadow-2xl transition-all duration-300 flex flex-col justify-between group" data-phase="{{ $video['phase'] }}">
            <div class="relative aspect-video bg-black overflow-hidden cursor-pointer" onclick="openCleaningLightbox('{{ $video['url'] }}', 'video', '{{ addslashes($video['title']) }}')">
              <video
                src="{{ $video['url'] }}"
                muted
                preload="metadata"
                playsinline
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-80 group-hover:opacity-100"
              ></video>
              <div class="absolute inset-0 bg-black/40 group-hover:bg-black/10 transition-colors flex items-center justify-center">
                <div class="w-12 h-12 rounded-full bg-brand-red/90 text-white flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:bg-brand-red transition-all">
                  <i class="bi bi-play-fill text-xl ml-0.5"></i>
                </div>
              </div>
              <div class="absolute top-2.5 left-2.5">
                <span class="text-[10px] font-black uppercase tracking-wider px-2 py-0.5 rounded bg-black/80 text-brand-red backdrop-blur-sm border border-white/10">
                  {{ $video['phase_title'] }}
                </span>
              </div>
            </div>

            <div class="p-4 flex-1 flex flex-col justify-between">
              <div>
                <p class="text-[11px] font-bold text-gray-400 uppercase tracking-wider mb-1">{{ $video['category_label'] }}</p>
                <h4 class="font-display font-bold text-white text-sm mb-1.5 leading-snug group-hover:text-brand-red transition-colors">{{ $video['title'] }}</h4>
                <p class="text-gray-400 text-xs leading-relaxed line-clamp-2">{{ $video['description'] }}</p>
              </div>

              <div class="pt-3 mt-3 border-t border-white/10 flex items-center justify-between">
                <button
                  type="button"
                  onclick="openCleaningLightbox('{{ $video['url'] }}', 'video', '{{ addslashes($video['title']) }}')"
                  class="text-xs font-bold text-white hover:text-brand-red transition-colors inline-flex items-center gap-1 cursor-pointer"
                >
                  Watch Full Video
                  <i class="bi bi-arrow-right text-xs"></i>
                </button>
                <a
                  href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text={{ urlencode('Hi, I watched your video on ' . $video['title'] . ' and would like to book this service.') }}"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="text-xs text-brand-red hover:underline font-semibold"
                  title="Enquire on WhatsApp"
                >
                  Book This →
                </a>
              </div>
            </div>
          </div>
        @endforeach
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  PHOTOS, EQUIPMENT & CREDENTIALS HUB (3 THEMED TABS)        -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section id="media-hub" class="py-16 sm:py-24 bg-white border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-6">
        <div>
          <p class="section-label section-label--blue mb-3">Comprehensive Media Hub</p>
          <h2 class="font-display text-3xl sm:text-4xl font-black text-brand-dark">
            Gallery, Equipment &amp; Company Credentials
          </h2>
          <p class="text-gray-500 mt-2 text-base max-w-2xl">
            Browse our photo records, heavy commercial machinery, corporate profile, and outdoor compound maintenance records.
          </p>
        </div>

        <!-- 3 Rich Themed Tabs -->
        <div class="flex flex-wrap gap-2" id="theme-tab-container">
          <button class="theme-tab-btn px-4 py-2 rounded-full text-xs font-bold border border-brand-red bg-brand-red text-white transition-all shadow cursor-pointer" data-theme="all">
            All Photos ({{ count($cleaningPhotos) }})
          </button>
          <button class="theme-tab-btn px-4 py-2 rounded-full text-xs font-bold border border-gray-200 text-gray-600 hover:border-brand-red hover:text-brand-red transition-all cursor-pointer" data-theme="residential">
            Residential &amp; Carpet Detailing
          </button>
          <button class="theme-tab-btn px-4 py-2 rounded-full text-xs font-bold border border-gray-200 text-gray-600 hover:border-brand-red hover:text-brand-red transition-all cursor-pointer" data-theme="commercial">
            Commercial, Buffing &amp; Exterior
          </button>
          <button class="theme-tab-btn px-4 py-2 rounded-full text-xs font-bold border border-gray-200 text-gray-600 hover:border-brand-red hover:text-brand-red transition-all cursor-pointer" data-theme="credentials">
            Company Credentials &amp; Scope
          </button>
        </div>
      </div>

      <!-- Photos Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="photos-grid">
        @foreach($cleaningPhotos as $photo)
          <div class="photo-card-item rounded-2xl overflow-hidden bg-white border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 group cursor-pointer" data-theme="{{ $photo['theme'] }}" onclick="openCleaningLightbox('{{ $photo['url'] }}', 'image', '{{ addslashes($photo['title']) }}')">
            <div class="relative aspect-[4/3] overflow-hidden bg-slate-900">
              <img
                src="{{ $photo['url'] }}"
                alt="{{ $photo['title'] }}"
                loading="lazy"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
              />
              <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/10 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
              
              <div class="absolute top-3 left-3">
                <span class="text-[11px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-full bg-brand-red text-white shadow">
                  {{ $photo['badge'] }}
                </span>
              </div>

              <div class="absolute bottom-3 right-3 opacity-0 group-hover:opacity-100 transition-opacity">
                <div class="w-8 h-8 rounded-full bg-white text-brand-dark flex items-center justify-center shadow-lg">
                  <i class="bi bi-zoom-in text-sm"></i>
                </div>
              </div>
            </div>

            <div class="p-5">
              <p class="text-xs font-bold text-brand-blue uppercase tracking-wider mb-1">{{ $photo['category_label'] }}</p>
              <h4 class="font-display font-bold text-brand-dark text-base mb-2 group-hover:text-brand-red transition-colors">{{ $photo['title'] }}</h4>
              <p class="text-gray-500 text-xs leading-relaxed">{{ $photo['description'] }}</p>
            </div>
          </div>
        @endforeach
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  HYGIENE & SANITIZATION STANDARDS                          -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section id="hygiene-standards" class="py-16 sm:py-24 bg-brand-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
        <div>
          <p class="section-label section-label--blue mb-3">Hygiene &amp; Safety Protocols</p>
          <h2 class="font-display text-3xl sm:text-4xl font-black text-brand-dark mb-5 leading-tight">
            Hospital-Grade Sanitization with Zoflora &amp; Certified Disinfectants
          </h2>
          <p class="text-gray-600 leading-relaxed mb-6 text-base">
            Cleanliness isn't just aesthetic; it is health and peace of mind. Asutext utilizes trusted antimicrobial disinfectants including authentic <strong>Zoflora</strong> concentrated disinfectant and certified bleach formulas for 99.9% elimination of bacteria, viruses, and stubborn odors.
          </p>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
            <div class="p-4 rounded-xl bg-white border border-gray-200 shadow-sm">
              <div class="w-8 h-8 rounded-lg bg-brand-red text-white flex items-center justify-center font-bold mb-2"><i class="bi bi-check2 text-base"></i></div>
              <h4 class="font-bold text-slate-800 text-sm mb-1">Authentic Zoflora Disinfection</h4>
              <p class="text-xs text-gray-500">Long-lasting fragrance and medical-grade pathogen destruction across all touched surfaces.</p>
            </div>
            <div class="p-4 rounded-xl bg-white border border-gray-200 shadow-sm">
              <div class="w-8 h-8 rounded-lg bg-brand-blue text-white flex items-center justify-center font-bold mb-2"><i class="bi bi-check2 text-base"></i></div>
              <h4 class="font-bold text-slate-800 text-sm mb-1">Non-Toxic Fumigation</h4>
              <p class="text-xs text-gray-500">Safe, government-approved pest control eliminating rodents, cockroaches, and termites.</p>
            </div>
            <div class="p-4 rounded-xl bg-white border border-gray-200 shadow-sm">
              <div class="w-8 h-8 rounded-lg bg-emerald-600 text-white flex items-center justify-center font-bold mb-2"><i class="bi bi-check2 text-base"></i></div>
              <h4 class="font-bold text-slate-800 text-sm mb-1">High-Airflow HEPA Suction</h4>
              <p class="text-xs text-gray-500">Industrial wet/dry extractors that pull out microscopic dust mites, dander, and allergens.</p>
            </div>
            <div class="p-4 rounded-xl bg-white border border-gray-200 shadow-sm">
              <div class="w-8 h-8 rounded-lg bg-indigo-600 text-white flex items-center justify-center font-bold mb-2"><i class="bi bi-check2 text-base"></i></div>
              <h4 class="font-bold text-slate-800 text-sm mb-1">Vetted &amp; Uniformed Crew</h4>
              <p class="text-xs text-gray-500">Trustworthy staff with full background checks, corporate uniforms, and protective gear.</p>
            </div>
          </div>

          <div class="flex items-center gap-4">
            <a
              href="tel:{{ str_replace(' ', '', $globalSettings['phone'] ?? '+2349037666399') }}"
              class="btn-primary text-sm whitespace-nowrap inline-flex items-center gap-1.5 cursor-pointer"
            >
              <i class="bi bi-telephone-fill text-xs"></i>
              <span>Call Cleaning Desk</span>
            </a>
            <a
              href="{{ route('contact') }}"
              class="inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl border border-slate-200 hover:border-slate-800 bg-white hover:bg-slate-900 text-slate-800 hover:text-white text-sm font-bold shadow-sm hover:shadow transition-all duration-200 whitespace-nowrap"
            >
              Contact Support
            </a>
          </div>
        </div>

        <!-- Corporate Profile Card -->
        <div class="bg-white rounded-2xl p-6 sm:p-8 border border-gray-200 shadow-md">
          <div class="flex items-center justify-between mb-4 pb-4 border-b border-gray-200">
            <div>
              <p class="text-xs font-bold text-brand-red uppercase tracking-wider">Official Proposal &amp; Credentials</p>
              <h3 class="font-display font-black text-brand-dark text-xl">Asutext &amp; G Nigeria Limited</h3>
            </div>
            <span class="text-xs font-bold px-2.5 py-1 rounded bg-slate-900 text-white">RC 7139195</span>
          </div>

          <p class="text-gray-600 text-sm leading-relaxed mb-4">
            <strong>Our Mission:</strong> To provide high-quality, affordable, and eco-friendly cleaning solutions for homes and businesses in our community.
          </p>
          <p class="text-gray-600 text-sm leading-relaxed mb-6">
            <strong>Our Vision:</strong> To be the leading cleaning service provider in our field, with a reputation for excellence, customer satisfaction, and environmental sustainability.
          </p>

          <div class="bg-brand-light p-4 rounded-xl border border-gray-200/80 mb-6">
            <h4 class="font-bold text-slate-800 text-sm mb-2">Our Core Values</h4>
            <div class="space-y-2 text-xs text-gray-600">
              <div class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-red"></span>
                <span><strong>Integrity &amp; Consistency Always:</strong> Delivering on commitments and building long-lasting client bonds.</span>
              </div>
              <div class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-blue"></span>
                <span><strong>Excellence in Deeds:</strong> Dedicated execution and high quality standards in every clean.</span>
              </div>
              <div class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>
                <span><strong>Humility in Attitude:</strong> Listening actively, respecting client spaces, and continuous improvement.</span>
              </div>
              <div class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-amber-600"></span>
                <span><strong>Endeavour &amp; Resilience:</strong> Relishing challenges and delivering results when the job is tough.</span>
              </div>
            </div>
          </div>

          <div class="flex items-center justify-between text-xs text-gray-500 pt-2 border-t border-gray-200">
            <span>Incorporated: 14th Sept 2023 (CAMA 2020)</span>
            <span class="font-semibold text-brand-dark">Banana Island, Lagos &amp; Calabar</span>
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
            <span>Do you supply your own cleaning machinery and chemicals?</span>
            <span class="text-brand-red font-black text-xl transition-transform group-open:rotate-45">+</span>
          </summary>
          <p class="text-gray-600 text-sm mt-3 leading-relaxed">
            Yes, absolutely. Our crews arrive fully equipped with commercial wet/dry vacuums (Kenwood and industrial models), floor scrubbing and polishing rotary machines, microfiber mops, reach-poles for windows, and hospital-grade cleaning solutions including Zoflora, degreasers, and disinfectant bleaches.
          </p>
        </details>

        <details class="bg-brand-light rounded-xl p-5 border border-gray-200 shadow-sm cursor-pointer group">
          <summary class="font-display font-bold text-slate-800 text-base list-none flex items-center justify-between">
            <span>Can I combine interior cleaning with compound gardening and drainage maintenance?</span>
            <span class="text-brand-red font-black text-xl transition-transform group-open:rotate-45">+</span>
          </summary>
          <p class="text-gray-600 text-sm mt-3 leading-relaxed">
            Yes! Asutext provides integrated indoor and outdoor facility management. You can schedule home or office cleaning alongside lawn mowing, hedge trimming, paver pressure-washing, and gutter de-silting in a single unified service package.
          </p>
        </details>

        <details class="bg-brand-light rounded-xl p-5 border border-gray-200 shadow-sm cursor-pointer group">
          <summary class="font-display font-bold text-slate-800 text-base list-none flex items-center justify-between">
            <span>Which areas do your cleaning teams cover?</span>
            <span class="text-brand-red font-black text-xl transition-transform group-open:rotate-45">+</span>
          </summary>
          <p class="text-gray-600 text-sm mt-3 leading-relaxed">
            We provide full coverage across Lagos (Banana Island, Ikoyi, Victoria Island, Lekki Phase 1, Ajah, Ikeja, Surulere, and Mainland), Cross-River State (Calabar), and can deploy teams for large-scale corporate and post-construction contracts nationwide.
          </p>
        </details>

        <details class="bg-brand-light rounded-xl p-5 border border-gray-200 shadow-sm cursor-pointer group">
          <summary class="font-display font-bold text-slate-800 text-base list-none flex items-center justify-between">
            <span>Can we schedule recurring daily, weekly, or monthly cleaning?</span>
            <span class="text-brand-red font-black text-xl transition-transform group-open:rotate-45">+</span>
          </summary>
          <p class="text-gray-600 text-sm mt-3 leading-relaxed">
            Yes! We offer flexible scheduled janitorial contracts for commercial offices, schools, event centers, as well as recurring housekeeper schedules for busy households.
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
      <span class="text-xs font-bold text-brand-red uppercase tracking-widest bg-brand-red/10 border border-brand-red/30 px-3 py-1 rounded-full mb-4 inline-block">
        Fast, Transparent Quotes
      </span>
      <h2 class="font-display text-3xl sm:text-5xl font-black mb-5">
        Ready for a Clean, Fresh &amp; Healthy Space?
      </h2>
      <p class="text-gray-300 text-base sm:text-lg max-w-2xl mx-auto mb-8 leading-relaxed">
        Get an instant, transparent quote on WhatsApp with zero hidden fees. Tell us your property type, preferred schedule, and requirements.
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a
          href="#quote-form"
          class="btn-primary text-base px-8 py-4 inline-flex items-center justify-center gap-2"
        >
          <span>Customize Cleaning Plan</span>
          <i class="bi bi-arrow-up-right text-sm"></i>
        </a>
        <a
          href="tel:{{ str_replace(' ', '', $globalSettings['phone'] ?? '+2349037666399') }}"
          class="btn-outline text-base px-8 py-4 inline-flex items-center justify-center gap-2"
        >
          <i class="bi bi-telephone text-sm"></i>
          <span>Call Us: {{ $globalSettings['phone'] ?? '+234 903 766 6399' }}</span>
        </a>
      </div>
    </div>
    <div class="absolute inset-0 bg-gradient-to-t from-black via-slate-950 to-brand-dark opacity-90 z-0"></div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  FULLSCREEN LIGHTBOX MODAL (Z-INDEX 999999 OVER NAVBAR)     -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <div
    id="cleaning-lightbox"
    class="fixed inset-0 hidden flex-col items-center justify-between p-3 sm:p-6 bg-black/95 backdrop-blur-xl transition-all duration-300 select-none"
    style="z-index: 999999;"
    role="dialog"
    aria-modal="true"
    aria-label="Media Preview"
  >
    <!-- Top Header Bar with Prominent Close Button -->
    <div class="w-full max-w-6xl flex items-center justify-between pb-3 border-b border-white/10 flex-shrink-0 z-50">
      <div class="flex items-center gap-3">
        <span class="px-2.5 py-1 rounded bg-brand-red text-white text-[11px] font-bold uppercase tracking-wider">
          Asutext Preview
        </span>
        <p id="cleaning-lightbox-title" class="text-white font-display font-bold text-sm sm:text-base truncate max-w-xs sm:max-w-md lg:max-w-xl"></p>
      </div>

      <!-- High-Contrast Close Button -->
      <button
        type="button"
        id="cleaning-lightbox-close"
        onclick="closeCleaningLightbox()"
        class="flex items-center gap-2 bg-brand-red hover:bg-red-700 text-white px-4 py-2 rounded-full font-bold text-xs sm:text-sm shadow-xl transition-all cursor-pointer focus:outline-none focus:ring-2 focus:ring-white"
        aria-label="Close Preview"
      >
        <i class="bi bi-x-lg text-sm"></i>
        <span>Close Preview</span>
      </button>
    </div>

    <!-- Centered Media Stage -->
    <div
      class="w-full flex-1 flex items-center justify-center p-2 sm:p-4 my-auto overflow-hidden relative cursor-pointer"
      onclick="handleBackdropClick(event)"
    >
      <!-- Photo Container -->
      <img
        id="cleaning-lightbox-img"
        src=""
        alt="Cleaning Work Preview"
        class="hidden max-h-[72vh] max-w-[92vw] object-contain rounded-2xl shadow-2xl border border-white/15 bg-black"
        onclick="event.stopPropagation()"
      />
      <!-- Video Container -->
      <video
        id="cleaning-lightbox-video"
        src=""
        controls
        autoplay
        playsinline
        class="hidden max-h-[72vh] max-w-[92vw] object-contain rounded-2xl shadow-2xl border border-white/15 bg-black"
        onclick="event.stopPropagation()"
      ></video>
    </div>

    <!-- Bottom Info & ESC helper bar -->
    <div class="w-full max-w-6xl pt-2 border-t border-white/10 flex items-center justify-between text-xs text-gray-400 flex-shrink-0">
      <span>Asutext Group Nigeria Limited · Facility &amp; Cleaning Division</span>
      <button
        type="button"
        onclick="closeCleaningLightbox()"
        class="text-gray-300 hover:text-white underline cursor-pointer"
      >
        Tap here or press ESC to exit
      </button>
    </div>
  </div>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  PAGE JAVASCRIPT: TABS, STEPPERS & LIGHTBOX                -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <script>
    // Lightbox Controls
    function openCleaningLightbox(url, type, title) {
      const modal = document.getElementById('cleaning-lightbox');
      const img = document.getElementById('cleaning-lightbox-img');
      const video = document.getElementById('cleaning-lightbox-video');
      const titleElem = document.getElementById('cleaning-lightbox-title');

      if (!modal || !img || !video) return;

      titleElem.textContent = title || '';

      if (type === 'image') {
        video.pause();
        video.classList.add('hidden');
        video.src = '';
        img.src = url;
        img.classList.remove('hidden');
      } else {
        img.classList.add('hidden');
        img.src = '';
        video.src = url;
        video.classList.remove('hidden');
        video.play().catch(() => {});
      }

      modal.classList.remove('hidden');
      modal.classList.add('flex');
      document.body.style.overflow = 'hidden';
    }

    function closeCleaningLightbox() {
      const modal = document.getElementById('cleaning-lightbox');
      const img = document.getElementById('cleaning-lightbox-img');
      const video = document.getElementById('cleaning-lightbox-video');

      if (!modal) return;

      if (video) {
        video.pause();
        video.src = '';
      }
      if (img) img.src = '';

      modal.classList.add('hidden');
      modal.classList.remove('flex');
      document.body.style.overflow = '';
    }

    function handleBackdropClick(e) {
      if (e.target.id === 'cleaning-lightbox-img' || e.target.id === 'cleaning-lightbox-video') return;
      closeCleaningLightbox();
    }

    // Close on ESC key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeCleaningLightbox();
    });

    document.addEventListener('DOMContentLoaded', () => {
      // 1. Division Tabs Switcher (Top Interactive Switcher)
      const divisionTabs = document.querySelectorAll('.division-tab-trigger');
      const divisionPanels = document.querySelectorAll('.division-content-panel');

      divisionTabs.forEach(tab => {
        tab.addEventListener('click', () => {
          divisionTabs.forEach(t => {
            t.classList.remove('bg-brand-red', 'text-white', 'border-brand-red', 'shadow-md', 'active-tab');
            t.classList.add('bg-white', 'text-gray-700', 'border-gray-200');
          });

          tab.classList.add('bg-brand-red', 'text-white', 'border-brand-red', 'shadow-md', 'active-tab');
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

      // Auto-activate tab from URL hash (e.g. #industrial, #specialized, #environmental)
      function selectTabFromHash() {
        const hash = window.location.hash.toLowerCase();
        if (!hash) return;
        const cleanHash = hash.replace('#', '').replace('division-panel-', '');
        const targetTab = document.querySelector(`.division-tab-trigger[data-target="division-panel-${cleanHash}"]`);
        if (targetTab) {
          targetTab.click();
          const divisionsSec = document.getElementById('divisions');
          if (divisionsSec) {
            divisionsSec.scrollIntoView({ behavior: 'smooth' });
          }
        }
      }
      selectTabFromHash();
      window.addEventListener('hashchange', selectTabFromHash);

      // 2. Video 3-Phase Stepper Filtering
      const phaseBtns = document.querySelectorAll('.phase-filter-btn');
      const videoCards = document.querySelectorAll('.video-card-item');

      phaseBtns.forEach(btn => {
        btn.addEventListener('click', () => {
          phaseBtns.forEach(b => {
            b.classList.remove('bg-brand-red', 'text-white', 'border-brand-red');
            b.classList.add('border-white/20', 'text-gray-300');
          });
          btn.classList.add('bg-brand-red', 'text-white', 'border-brand-red');
          btn.classList.remove('border-white/20', 'text-gray-300');

          const phase = btn.getAttribute('data-phase');
          videoCards.forEach(card => {
            if (phase === 'all' || card.getAttribute('data-phase') === phase) {
              card.style.display = 'flex';
            } else {
              card.style.display = 'none';
            }
          });
        });
      });

      // 3. Photos Themed Tabs Filtering
      const themeBtns = document.querySelectorAll('.theme-tab-btn');
      const photoCards = document.querySelectorAll('.photo-card-item');

      themeBtns.forEach(btn => {
        btn.addEventListener('click', () => {
          themeBtns.forEach(b => {
            b.classList.remove('bg-brand-red', 'text-white', 'border-brand-red');
            b.classList.add('border-gray-200', 'text-gray-600');
          });
          btn.classList.add('bg-brand-red', 'text-white', 'border-brand-red');
          btn.classList.remove('border-gray-200', 'text-gray-600');

          const theme = btn.getAttribute('data-theme');
          photoCards.forEach(card => {
            if (theme === 'all' || card.getAttribute('data-theme') === theme) {
              card.style.display = 'block';
            } else {
              card.style.display = 'none';
            }
          });
        });
      });

      // 4. Interactive Cleaning Quote Form Logic
      window.setFormDivision = function(catId) {
        const input = document.getElementById('selectedDivisionInput');
        const titleInput = document.getElementById('selectedDivisionTitle');
        if (input) input.value = catId;

        // Update Division Buttons Styling
        const allBtns = document.querySelectorAll('.form-division-btn');
        allBtns.forEach(btn => {
          const isTarget = btn.getAttribute('data-cat-id') === catId;
          const radio = btn.querySelector('.form-division-radio');
          const dot = btn.querySelector('.form-division-dot');

          if (isTarget) {
            btn.classList.add('border-brand-red', 'bg-white', 'ring-2', 'ring-brand-red/20', 'shadow-sm');
            btn.classList.remove('border-gray-200', 'bg-white/70');
            if (radio) radio.classList.add('border-brand-red');
            if (dot) {
              dot.classList.remove('hidden');
              dot.classList.add('block');
            }
            if (titleInput) titleInput.value = btn.getAttribute('data-cat-title') || catId;
          } else {
            btn.classList.remove('border-brand-red', 'bg-white', 'ring-2', 'ring-brand-red/20', 'shadow-sm');
            btn.classList.add('border-gray-200', 'bg-white/70');
            if (radio) radio.classList.remove('border-brand-red');
            if (dot) {
              dot.classList.add('hidden');
              dot.classList.remove('block');
            }
          }
        });

        // Toggle Visible Sub-Services Group
        const allGroups = document.querySelectorAll('.form-subservices-group');
        allGroups.forEach(grp => {
          if (grp.id === `subservices-for-${catId}`) {
            grp.classList.remove('hidden');
            grp.classList.add('flex');
          } else {
            grp.classList.add('hidden');
            grp.classList.remove('flex');
          }
        });
      };

      window.toggleSubserviceChip = function(chip) {
        const isSelected = chip.classList.contains('selected');
        const checkBadge = chip.querySelector('.chip-check');
        const checkIcon = chip.querySelector('.chip-check i');
        const errEl = document.getElementById('subservicesError');

        if (!isSelected) {
          chip.classList.add('selected', 'border-brand-red', 'bg-red-50', 'text-brand-red', 'ring-1', 'ring-brand-red');
          chip.classList.remove('border-gray-200', 'bg-brand-light', 'text-slate-700');
          if (checkBadge) {
            checkBadge.classList.add('bg-brand-red', 'border-brand-red');
            checkBadge.classList.remove('border-gray-300', 'bg-white');
          }
          if (checkIcon) checkIcon.classList.remove('hidden');
          if (errEl) errEl.classList.add('hidden');
        } else {
          chip.classList.remove('selected', 'border-brand-red', 'bg-red-50', 'text-brand-red', 'ring-1', 'ring-brand-red');
          chip.classList.add('border-gray-200', 'bg-brand-light', 'text-slate-700');
          if (checkBadge) {
            checkBadge.classList.remove('bg-brand-red', 'border-brand-red');
            checkBadge.classList.add('border-gray-300', 'bg-white');
          }
          if (checkIcon) checkIcon.classList.add('hidden');
        }
      };

      window.selectDivisionForQuote = function(divisionId) {
        const quoteSection = document.getElementById('quote-form');
        if (quoteSection) {
          quoteSection.scrollIntoView({ behavior: 'smooth' });
        }
        window.setFormDivision(divisionId);

        // Auto-select the first subservice in that category if none is selected
        const activeGroup = document.getElementById(`subservices-for-${divisionId}`);
        if (activeGroup) {
          const selected = activeGroup.querySelectorAll('.subservice-chip.selected');
          if (selected.length === 0) {
            const firstChip = activeGroup.querySelector('.subservice-chip');
            if (firstChip) window.toggleSubserviceChip(firstChip);
          }
        }
      };

      window.handleCleaningFormSubmit = async function(e) {
        e.preventDefault();

        const nameEl = document.getElementById('formName');
        const phoneEl = document.getElementById('formPhone');
        const propEl = document.getElementById('formPropertyType');
        const locEl = document.getElementById('formLocation');
        const scheduleEl = document.getElementById('formSchedule');
        const notesEl = document.getElementById('formNotes');
        const divisionTitle = document.getElementById('selectedDivisionTitle')?.value || 'General Cleaning';
        const divisionId = document.getElementById('selectedDivisionInput')?.value || 'residential';

        const name = nameEl?.value.trim() || '';
        const phone = phoneEl?.value.trim() || '';
        const propertyType = propEl?.value || '';
        const location = locEl?.value || '';
        const schedule = scheduleEl?.value || 'This Weekend';
        const notes = notesEl?.value.trim() || '';

        if (!name) {
          alert('Please enter your full name.');
          nameEl?.focus();
          return;
        }
        if (!phone) {
          alert('Please enter your WhatsApp or phone number.');
          phoneEl?.focus();
          return;
        }
        if (!propertyType) {
          alert('Please select your property type/size.');
          propEl?.focus();
          return;
        }
        if (!location) {
          alert('Please select your location/area.');
          locEl?.focus();
          return;
        }

        // Get selected sub-services
        const activeGroup = document.getElementById(`subservices-for-${divisionId}`);
        const selectedChips = activeGroup ? activeGroup.querySelectorAll('.subservice-chip.selected') : [];
        const selectedServices = Array.from(selectedChips).map(c => c.getAttribute('data-service-name'));

        if (selectedServices.length === 0) {
          const errEl = document.getElementById('subservicesError');
          if (errEl) errEl.classList.remove('hidden');
          if (activeGroup) activeGroup.scrollIntoView({ behavior: 'smooth', block: 'center' });
          return;
        }

        const submitBtn = document.getElementById('quoteSubmitBtn');
        const submitText = document.getElementById('quoteSubmitText');
        const submitSub = document.getElementById('quoteSubmitSub');
        const originalText = submitText?.textContent || 'Send Quote Request';
        const originalSub = submitSub?.innerHTML || '<span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span> Instant Dispatch to WhatsApp';

        if (submitBtn) submitBtn.disabled = true;
        if (submitText) submitText.textContent = 'Preparing WhatsApp Booking...';
        if (submitSub) submitSub.innerHTML = '<span class="w-1.5 h-1.5 rounded-full bg-white animate-ping"></span> Connecting to WhatsApp...';

        const serviceListText = selectedServices.map(s => `• ${s}`).join('\n');
        const fullMessage = 
`*New Cleaning Inquiry — Asutext Group*
━━━━━━━━━━━━━━━━━━━━
👤 *Name:* ${name}
📞 *Phone:* ${phone}
📍 *Location:* ${location}
🏠 *Property Type:* ${propertyType}
🏢 *Division:* ${divisionTitle}
✨ *Services Needed:*
${serviceListText}
📅 *Preferred Schedule:* ${schedule}
📝 *Notes:* ${notes ? notes : 'None'}
━━━━━━━━━━━━━━━━━━━━
_Sent via asutext.com quote calculator_`;

        // Dual-Action: Save lead to backend database
        try {
          await fetch('{{ route("inquiry.store") }}', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': '{{ csrf_token() }}',
              'Accept': 'application/json'
            },
            body: JSON.stringify({
              name: name,
              phone: phone,
              service: `Cleaning: ${divisionTitle}`,
              message: fullMessage
            })
          });
        } catch (err) {
          console.warn('Backend inquiry auto-save bypassed, launching WhatsApp directly', err);
        }

        // Forward directly to WhatsApp
        const waBase = '{{ $globalSettings["whatsapp_url"] ?? "https://wa.me/2349037666399" }}'.split('?')[0];
        const targetUrl = `${waBase}?text=${encodeURIComponent(fullMessage)}`;

        // Open WhatsApp in new tab / app
        const win = window.open(targetUrl, '_blank');
        if (!win || win.closed || typeof win.closed === 'undefined') {
          window.location.href = targetUrl;
        }

        setTimeout(() => {
          if (submitBtn) submitBtn.disabled = false;
          if (submitText) submitText.textContent = originalText;
          if (submitSub) submitSub.innerHTML = originalSub;
        }, 2000);
      };
    });
  </script>
@endsection
