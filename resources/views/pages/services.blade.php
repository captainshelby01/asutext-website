@extends('layouts.app')

@section('title', 'Our Services - Multi-Industry Excellence | Asutext Group Nigeria Limited')

@section('content')
  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  HERO BANNER                                               -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-20 lg:py-28 bg-brand-dark text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="max-w-3xl">
        <p class="section-label section-label--red mb-3">What We Do</p>
        <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-black leading-tight mb-4">
          Eight Divisions.<br/>
          <span class="text-brand-red">One Standard of Excellence.</span>
        </h1>
        <p class="text-gray-300 text-base sm:text-lg leading-relaxed mb-8 max-w-2xl">
          From commercial cleaning and fumigation to transport, catering, custom branding, fashion, and mobile accessories. Asutext Group Nigeria Limited delivers corporate and residential solutions across Lagos, Cross-River State, and nationwide.
        </p>
        <div class="flex flex-col sm:flex-row gap-4">
          <a
            href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%27m%20visiting%20your%20services%20page%20and%20I%27d%20like%20to%20get%20a%20free%20quote."
            target="_blank"
            rel="noopener noreferrer"
            class="btn-whatsapp text-base"
          >
            <i class="bi bi-whatsapp text-lg flex-shrink-0" aria-hidden="true"></i>
            Enquire on WhatsApp
          </a>
          <a href="{{ route('contact') }}" class="btn-outline text-base">
            Contact Support
          </a>
        </div>
      </div>
    </div>
    <div class="absolute inset-0 bg-gradient-to-r from-brand-dark to-black opacity-90 z-0"></div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  SERVICES LIST GRID                                        -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-14 sm:py-20 lg:py-24 bg-brand-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="mb-12">
        <p class="section-label section-label--blue mb-3">Professional Services</p>
        <h2 class="font-display text-3xl sm:text-4xl font-black text-brand-dark">
          Our Core Operating Divisions
        </h2>
        <p class="text-gray-500 mt-2 max-w-xl text-base leading-relaxed">
          Select any division below to explore full capabilities, gallery records, or launch an instant inquiry on WhatsApp.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($services as $service)
          <div
            class="service-card {{ $loop->index % 2 === 1 ? 'service-card--blue' : '' }} reveal reveal-delay-{{ ($loop->index % 3) + 1 }} flex flex-col justify-between"
            onclick="if(!event.target.closest('a')) { window.location.href = '{{ $service->route ?? route('services') }}'; }"
            title="Click to explore {{ $service->name }}"
          >
            <div>
              <div class="service-icon-wrap flex items-center justify-center">
                @if(($service->type ?? '') === 'cleaning')
                  <!-- Sparkle / Facility Icon -->
                  <i class="bi bi-stars text-2xl text-brand-red"></i>
                @elseif(($service->type ?? '') === 'fashion')
                  <!-- Fashion / Apparel Icon -->
                  <i class="bi bi-handbag-fill text-2xl text-brand-blue"></i>
                @elseif(($service->type ?? '') === 'transport')
                  <!-- Truck / Transport Icon -->
                  <i class="bi bi-truck text-2xl text-amber-600"></i>
                @elseif(($service->type ?? '') === 'catering')
                  <!-- Food / Catering Icon -->
                  <i class="bi bi-cup-hot-fill text-2xl text-emerald-600"></i>
                @else
                  <!-- Tech Gadgets Icon -->
                  <i class="bi bi-phone-fill text-2xl text-purple-600"></i>
                @endif
              </div>
              <h2 class="font-display font-bold text-brand-dark text-xl mb-3">{{ $service->name }}</h2>
              <p class="text-gray-500 text-sm leading-relaxed mb-6">{{ $service->description }}</p>
            </div>

            <div class="service-card-actions">
              <a
                href="{{ $service->route ?? route('services') }}"
                class="service-btn-explore"
                title="Explore {{ $service->name }}"
              >
                <span>Explore</span>
                <i class="bi bi-arrow-right"></i>
              </a>
              <a
                href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text={{ urlencode($service->whatsapp_cta_text ?? 'Hi, I would like to enquire about ' . $service->name) }}"
                target="_blank"
                rel="noopener noreferrer"
                onclick="event.stopPropagation();"
                class="service-btn-enquire"
                title="Enquire on WhatsApp about {{ $service->name }}"
              >
                <i class="bi bi-whatsapp"></i>
                <span>Enquire</span>
              </a>
            </div>
          </div>
        @empty
          <div class="p-8 bg-white rounded-2xl shadow-sm text-center col-span-full">
            <p class="text-gray-500">No service divisions found in the database. Please seed the database or add them in the Filament admin panel.</p>
          </div>
        @endforelse
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  HOW WE WORK (PROCESS)                                     -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-16 sm:py-24 bg-white border-t border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-2xl mx-auto mb-16">
        <p class="section-label section-label--blue mb-3 justify-center">Our Process</p>
        <h2 class="font-display text-3xl sm:text-4xl font-black text-brand-dark mb-4">
          Simple. Transparent. Reliable.
        </h2>
        <p class="text-gray-500 text-base leading-relaxed">
          How we ensure hassle-free service delivery across all our core divisions.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Step 1 -->
        <div class="p-6 bg-brand-light rounded-2xl border border-gray-100 relative text-left">
          <div class="w-10 h-10 rounded-full bg-brand-red text-white font-display font-black text-lg flex items-center justify-center mb-4">
            1
          </div>
          <h3 class="font-display font-bold text-brand-dark text-lg mb-2">Direct Enquiry</h3>
          <p class="text-gray-500 text-sm leading-relaxed">
            Reach out via WhatsApp or phone. Tell us your requirements and schedule preference.
          </p>
        </div>

        <!-- Step 2 -->
        <div class="p-6 bg-brand-light rounded-2xl border border-gray-100 relative text-left">
          <div class="w-10 h-10 rounded-full bg-brand-blue text-white font-display font-black text-lg flex items-center justify-center mb-4">
            2
          </div>
          <h3 class="font-display font-bold text-brand-dark text-lg mb-2">Custom Quote</h3>
          <p class="text-gray-500 text-sm leading-relaxed">
            Receive a transparent, tailored quote with zero hidden charges or surprises.
          </p>
        </div>

        <!-- Step 3 -->
        <div class="p-6 bg-brand-light rounded-2xl border border-gray-100 relative text-left">
          <div class="w-10 h-10 rounded-full bg-brand-red text-white font-display font-black text-lg flex items-center justify-center mb-4">
            3
          </div>
          <h3 class="font-display font-bold text-brand-dark text-lg mb-2">Swift Execution</h3>
          <p class="text-gray-500 text-sm leading-relaxed">
            Our trained team executes the service on time with modern equipment and high standards.
          </p>
        </div>

        <!-- Step 4 -->
        <div class="p-6 bg-brand-light rounded-2xl border border-gray-100 relative text-left">
          <div class="w-10 h-10 rounded-full bg-brand-blue text-white font-display font-black text-lg flex items-center justify-center mb-4">
            4
          </div>
          <h3 class="font-display font-bold text-brand-dark text-lg mb-2">Quality Guarantee</h3>
          <p class="text-gray-500 text-sm leading-relaxed">
            We confirm your satisfaction. Every job is backed by our CAC-registered company standard.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  CTA BANNER                                                -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-16 bg-brand-dark text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-col md:flex-row items-center justify-between gap-8 bg-brand-mid p-8 sm:p-12 rounded-3xl border border-white/10">
        <div>
          <h2 class="font-display text-2xl sm:text-3xl font-black text-white mb-3">
            Need a Service Quote Today?
          </h2>
          <p class="text-gray-300 text-sm sm:text-base max-w-xl leading-relaxed">
            Our team is available 7 days a week. Click below for instant response on WhatsApp.
          </p>
        </div>
        <a
          href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%20visited%20your%20services%20page%20and%20I%27d%20like%20a%20fast%20quote."
          target="_blank"
          rel="noopener noreferrer"
          class="btn-whatsapp text-base flex-shrink-0"
        >
          <i class="bi bi-whatsapp text-lg flex-shrink-0" aria-hidden="true"></i>
          Get a Fast Quote
        </a>
      </div>
    </div>
  </section>
@endsection
