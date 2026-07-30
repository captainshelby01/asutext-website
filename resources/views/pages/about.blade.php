@extends('layouts.app')

@section('title', 'About Us & Executive Leadership | Asutext Group Nigeria Limited')

@section('content')
  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  HERO BANNER                                               -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-20 bg-brand-dark text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <p class="section-label section-label--red mb-3">Our History & Team</p>
      <h1 class="font-display text-4xl sm:text-5xl font-black leading-tight">
        About Asutext Group
      </h1>
      <p class="text-gray-300 mt-4 max-w-xl text-base leading-relaxed">
        Discover our story, values, and the executive leadership driving our multi-service enterprise.
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

          <!-- Team Scroll Link -->
          <p class="text-sm text-gray-500 mb-6 text-left">
            Interested in our corporate governance? 
            <a href="#team" class="text-brand-red hover:text-red-700 font-bold inline-flex items-center gap-1 transition-colors group">
              Meet our Executive Board
              <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 transform group-hover:translate-y-0.5 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
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

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  EXECUTIVE BOARD & LEADERSHIP                              -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section id="team" class="py-20 sm:py-28 bg-slate-50 border-t border-slate-200/60 scroll-mt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-14 sm:mb-18">
        <p class="section-label section-label--red mb-3">Leadership & Governance</p>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-black text-brand-dark leading-tight">
          Executive Board & Directors
        </h2>
        <p class="text-gray-600 mt-4 text-base sm:text-lg leading-relaxed">
          Meet the visionary founders, directors, and operational leaders driving Asutext Group Nigeria Limited.
        </p>
      </div>

      <!-- Clean Executive Profile Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto items-stretch">
        @forelse($teamMembers as $member)
          @php
            $objectPos = str_contains(strtolower($member->name), 'wilcox') ? 'object-center' : 'object-top';
          @endphp
          <div class="group bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-200/80 flex flex-col transition-all duration-300 hover:shadow-xl hover:-translate-y-1.5 h-full">
            
            <!-- Uniform Height Portrait Container -->
            <div class="relative h-72 sm:h-80 w-full overflow-hidden bg-black flex-shrink-0 flex items-center justify-center">
              <img 
                src="{{ asset('storage/' . $member->image_path) }}" 
                alt="{{ $member->name }}" 
                class="w-full h-full object-cover {{ $objectPos }} transition-transform duration-500 group-hover:scale-105" 
              />
              <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-50"></div>
            </div>
            
            <!-- Card Body: Name, Role, Bio -->
            <div class="p-6 sm:p-7 flex-grow flex flex-col justify-between bg-white">
              <div>
                <span class="inline-block px-3 py-1 bg-red-50 text-brand-red font-bold text-xs uppercase tracking-wider rounded-full mb-3">
                  {{ $member->role }}
                </span>
                <h3 class="font-display font-black text-brand-dark text-xl sm:text-2xl leading-snug mb-3">
                  {{ $member->name }}
                </h3>
                @if($member->bio)
                  <p class="text-gray-600 text-sm leading-relaxed italic mb-4">
                    "{{ $member->bio }}"
                  </p>
                @endif
              </div>

              <!-- Footer Verification Tag -->
              <div class="pt-4 border-t border-gray-100 flex items-center justify-between text-xs text-gray-500 font-medium">
                <span>Asutext Board Member</span>
                <span class="text-brand-blue flex items-center gap-1 font-semibold">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                  </svg>
                  Verified
                </span>
              </div>
            </div>

          </div>
        @empty
          <!-- Static Leadership Fallbacks if DB is empty -->
          <div class="group bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-200/80 flex flex-col transition-all duration-300 hover:shadow-xl hover:-translate-y-1.5 h-full">
            <div class="relative h-72 sm:h-80 w-full overflow-hidden bg-black flex-shrink-0 flex items-center justify-center">
              <img 
                src="/Images/team-jackson-iwara.jpeg" 
                alt="Jackson Jackson Iwara" 
                class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" 
              />
              <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-50"></div>
            </div>
            <div class="p-6 sm:p-7 flex-grow flex flex-col justify-between bg-white">
              <div>
                <span class="inline-block px-3 py-1 bg-red-50 text-brand-red font-bold text-xs uppercase tracking-wider rounded-full mb-3">
                  Founder / Managing Director
                </span>
                <h3 class="font-display font-black text-brand-dark text-xl sm:text-2xl leading-snug mb-3">
                  Jackson Jackson Iwara
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed italic mb-4">
                  "Visionary entrepreneur directing the overall operations and scaling of Asutext Group's multi-service divisions."
                </p>
              </div>
              <div class="pt-4 border-t border-gray-100 flex items-center justify-between text-xs text-gray-500 font-medium">
                <span>Asutext Board Member</span>
                <span class="text-brand-blue flex items-center gap-1 font-semibold">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                  </svg>
                  Verified
                </span>
              </div>
            </div>
          </div>

          <div class="group bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-200/80 flex flex-col transition-all duration-300 hover:shadow-xl hover:-translate-y-1.5 h-full">
            <div class="relative h-72 sm:h-80 w-full overflow-hidden bg-black flex-shrink-0 flex items-center justify-center">
              <img 
                src="/Images/team-maryann-iwara.jpeg" 
                alt="Maryann Iwara" 
                class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" 
              />
              <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-50"></div>
            </div>
            <div class="p-6 sm:p-7 flex-grow flex flex-col justify-between bg-white">
              <div>
                <span class="inline-block px-3 py-1 bg-red-50 text-brand-red font-bold text-xs uppercase tracking-wider rounded-full mb-3">
                  Executive Director / Co-Founder
                </span>
                <h3 class="font-display font-black text-brand-dark text-xl sm:text-2xl leading-snug mb-3">
                  Maryann Iwara
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed italic mb-4">
                  "Co-directing corporate strategies, human resources, and high-level client relations across all service sectors."
                </p>
              </div>
              <div class="pt-4 border-t border-gray-100 flex items-center justify-between text-xs text-gray-500 font-medium">
                <span>Asutext Board Member</span>
                <span class="text-brand-blue flex items-center gap-1 font-semibold">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                  </svg>
                  Verified
                </span>
              </div>
            </div>
          </div>

          <div class="group bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-200/80 flex flex-col transition-all duration-300 hover:shadow-xl hover:-translate-y-1.5 h-full">
            <div class="relative h-72 sm:h-80 w-full overflow-hidden bg-black flex-shrink-0 flex items-center justify-center">
              <img 
                src="/Images/team-wilcox-wilson.jpeg" 
                alt="Wilcox Wilson" 
                class="w-full h-full object-cover object-center transition-transform duration-500 group-hover:scale-105" 
              />
              <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-50"></div>
            </div>
            <div class="p-6 sm:p-7 flex-grow flex flex-col justify-between bg-white">
              <div>
                <span class="inline-block px-3 py-1 bg-red-50 text-brand-red font-bold text-xs uppercase tracking-wider rounded-full mb-3">
                  Compliance Director
                </span>
                <h3 class="font-display font-black text-brand-dark text-xl sm:text-2xl leading-snug mb-3">
                  Wilcox Wilson
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed italic mb-4">
                  "Managing legal compliance, regulatory standards, and operational risk management for nationwide logistics."
                </p>
              </div>
              <div class="pt-4 border-t border-gray-100 flex items-center justify-between text-xs text-gray-500 font-medium">
                <span>Asutext Board Member</span>
                <span class="text-brand-blue flex items-center gap-1 font-semibold">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                  </svg>
                  Verified
                </span>
              </div>
            </div>
          </div>
        @endforelse
      </div>

    </div>
  </section>
@endsection
