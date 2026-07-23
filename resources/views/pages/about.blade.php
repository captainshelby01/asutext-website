@extends('layouts.app')

@section('title', 'About Us - Our Story & Values | Asutext Group Nigeria Limited')

@section('content')
  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  HERO BANNER                                               -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-20 bg-brand-dark text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <p class="section-label section-label--red mb-3">Our History</p>
      <h1 class="font-display text-4xl sm:text-5xl font-black leading-tight">
        About Asutext Group
      </h1>
      <p class="text-gray-300 mt-4 max-w-xl text-base leading-relaxed">
        Discover the values, mission, and the leadership driving our multi-service divisions.
      </p>
    </div>
    <div class="absolute inset-0 bg-gradient-to-r from-brand-dark to-black opacity-90 z-0"></div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  ABOUT DETAIL                                              -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-14 sm:py-20 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 lg:gap-20 items-center">

        <!-- Image side -->
        <div class="about-image-frame reveal-left" style="padding-bottom:16px; padding-right:16px;">
          <img src="/assets/images/work-cleaning.webp" alt="Asutext cleaning team delivering professional service" loading="lazy" />
          <div class="about-badge">
            <div class="about-badge-number">2023</div>
            <div class="about-badge-label">CAC Registered</div>
          </div>
        </div>

        <!-- Text side -->
        <div class="reveal-right">
          <p class="section-label mb-4">Who We Are</p>
          <h2 class="font-display text-3xl sm:text-4xl font-black text-brand-dark mb-6 leading-tight">
            Built on Quality.<br/>Driven by Purpose.
          </h2>

          <p class="text-gray-600 leading-relaxed mb-4 text-base">
            Asutext Group Nigeria Limited was established by a group of experienced, forward-thinking Nigerian
            entrepreneurs who identified a persistent gap between the service standards Nigerian consumers deserve
            and what the market was delivering. Their conviction was simple but powerful: that a Nigerian business
            could be built from the ground up on the foundations of quality, transparency, and genuine commitment
            to the client.
          </p>
          <p class="text-gray-600 leading-relaxed mb-4 text-base">
            Formally incorporated on <strong>14th September 2023</strong> under the CAMA 2020 framework, the
            Company began with professional cleaning and facility management, a sector chosen deliberately for
            its consistent demand and its potential for immediate community impact.
          </p>
          <p class="text-gray-600 leading-relaxed mb-8 text-base">
            Today, operating from Cross-River State and Lagos, Asutext serves clients across multiple states with
            a growing network of corporate organisations, event planners, private individuals, and institutional
            clients. We carry the ambition and operational maturity of a company determined to leave a lasting
            legacy on Nigerian enterprise.
          </p>

          <!-- Value pills -->
          <div class="flex flex-wrap gap-2 mb-8">
            <span class="value-pill">Quality First</span>
            <span class="value-pill">Transparent Pricing</span>
            <span class="value-pill">Nationwide Reach</span>
            <span class="value-pill">Client Committed</span>
            <span class="value-pill">CAC Registered</span>
          </div>

          <!-- Compact Team Link -->
          <p class="text-sm text-gray-500 mb-6 text-left">
            Interested in our corporate governance? 
            <a href="{{ route('team') }}" class="text-brand-red hover:text-red-700 font-bold inline-flex items-center gap-1 transition-colors group">
              Meet our Board of Directors
              <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 transform group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
              </svg>
            </a>
          </p>

          <!-- WhatsApp CTA -->
          <a
            href="{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20Asutext."
            target="_blank"
            rel="noopener noreferrer"
            class="btn-primary"
            id="about-wa-btn"
          >
            Talk to Us Today
          </a>
        </div>

      </div>
    </div>
  </section>
@endsection
