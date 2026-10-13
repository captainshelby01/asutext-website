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
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-8 max-w-xl">
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
              href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20am%20interested%20in%20booking%20your%20Cleaning%20and%20Landscaping%20Services."
              target="_blank"
              rel="noopener noreferrer"
              class="btn-whatsapp text-base"
            >
              <i class="bi bi-whatsapp text-lg flex-shrink-0" aria-hidden="true"></i>
              Book on WhatsApp
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
      <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 mb-10" id="division-tabs-bar">
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
              href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20would%20like%20to%20learn%20more%20about%20your%20Disinfection%20and%20Zoflora%20Sanitizing%20services."
              target="_blank"
              rel="noopener noreferrer"
              class="btn-primary text-sm"
            >
              Enquire About Sanitization
            </a>
            <a href="{{ route('contact') }}" class="btn-outline text-brand-dark border-gray-300 hover:border-brand-red text-sm">
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
          href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20visited%20your%20Cleaning%20page%20and%20I%27d%20like%20to%20get%20a%20quote%20for%20cleaning%20and%20facility%20services."
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
    });
  </script>
@endsection
