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
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
              <path d="M12 0C5.373 0 0 5.373 0 12c0 2.117.549 4.107 1.51 5.843L.057 23.569a.75.75 0 0 0 .974.906l5.878-1.938A11.944 11.944 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.75a9.726 9.726 0 0 1-4.951-1.354l-.355-.212-3.686 1.215 1.165-3.585-.231-.368A9.715 9.715 0 0 1 2.25 12C2.25 6.615 6.615 2.25 12 2.25S21.75 6.615 21.75 12 17.385 21.75 12 21.75z"/>
            </svg>
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
          Our Eight Operating Divisions
        </h2>
        <p class="text-gray-500 mt-2 max-w-xl text-base leading-relaxed">
          Select any division below to view details and launch a direct inquiry on WhatsApp.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($services as $service)
          <div class="service-card {{ $loop->index % 2 === 1 ? 'service-card--blue' : '' }} reveal reveal-delay-{{ ($loop->index % 3) + 1 }}">
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
            <h2 class="font-display font-bold text-brand-dark text-xl mb-3">{{ $service->name }}</h2>
            <p class="text-gray-500 text-sm leading-relaxed mb-6">{{ $service->description }}</p>
            <a
              href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text={{ urlencode($service->whatsapp_cta_text ?? 'Hi, I would like to enquire about ' . $service->name) }}"
              target="_blank" rel="noopener noreferrer"
              class="service-enquire-link font-bold text-sm"
            >Enquire on WhatsApp <span class="service-enquire-arrow">→</span></a>
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
          How we ensure hassle-free service delivery across all eight divisions.
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
          Get a Fast Quote
        </a>
      </div>
    </div>
  </section>
@endsection
