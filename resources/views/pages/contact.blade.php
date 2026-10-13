@extends('layouts.app')

@section('title', 'Contact Us & Coverage Areas | Asutext Group Nigeria Limited')

@section('content')
  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  HERO BANNER                                               -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-20 bg-brand-dark text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <p class="section-label section-label--red mb-3">Support & Reach</p>
      <h1 class="font-display text-4xl sm:text-5xl font-black leading-tight">
        Contact & Service Coverage
      </h1>
      <p class="text-gray-300 mt-4 max-w-xl text-base leading-relaxed">
        Get in touch with us today, send an instant WhatsApp enquiry, or explore our operational locations across Nigeria.
      </p>
    </div>
    <div class="absolute inset-0 bg-gradient-to-r from-brand-dark to-black opacity-90 z-0"></div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  CONTACT CONTENT                                           -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section class="py-14 sm:py-20 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 lg:gap-20">

        <!-- Left: Contact Details -->
        <div class="reveal-left">
          <p class="section-label mb-4">Find Us</p>
          <h2 class="font-display text-3xl sm:text-4xl font-black text-brand-dark mb-6 leading-tight">
            Ready to Start<br/>Your Project?
          </h2>
          <p class="text-gray-500 mb-8 max-w-md leading-relaxed">
            Have a unique project in mind, or need a recurring corporate facility cleaning contract? Reach out via any of our channels below.
          </p>

          <div class="space-y-6">
            <div class="contact-info-item">
              <div class="contact-info-icon" style="background: #f0f4ff; color: var(--brand-blue);">
                <i class="bi bi-telephone-fill text-lg"></i>
              </div>
              <div>
                <p class="text-gray-400 text-xs font-bold uppercase tracking-wider">WhatsApp / Phone</p>
                <p class="text-brand-dark font-semibold">{{ $globalSettings['phone'] ?? '+234 903 766 6399' }}</p>
              </div>
            </div>

            <div class="contact-info-item">
              <div class="contact-info-icon" style="background: #f0f4ff; color: var(--brand-blue);">
                <i class="bi bi-envelope-fill text-lg"></i>
              </div>
              <div>
                <p class="text-gray-400 text-xs font-bold uppercase tracking-wider">Email Address</p>
                <a href="mailto:{{ $globalSettings['email'] ?? 'asutextgnigltd@gmail.com' }}" class="text-brand-dark font-semibold hover:text-brand-red transition-colors">{{ $globalSettings['email'] ?? 'asutextgnigltd@gmail.com' }}</a>
              </div>
            </div>

            <div class="contact-info-item">
              <div class="contact-info-icon" style="background: #f0f4ff; color: var(--brand-blue);">
                <i class="bi bi-geo-alt-fill text-lg"></i>
              </div>
              <div>
                <p class="text-gray-400 text-xs font-bold uppercase tracking-wider">Lagos HQ Office</p>
                <p class="text-brand-dark font-semibold">{{ $globalSettings['address_lagos'] ?? '2nd Ave, 216 Close, Movamo Court, Banana Island · 20 Marina, Lagos Island' }}</p>
              </div>
            </div>

            <div class="contact-info-item">
              <div class="contact-info-icon" style="background: #f0f4ff; color: var(--brand-blue);">
                <i class="bi bi-geo-alt-fill text-lg"></i>
              </div>
              <div>
                <p class="text-gray-400 text-xs font-bold uppercase tracking-wider">Cross-River Branch Office</p>
                <p class="text-brand-dark font-semibold">{{ $globalSettings['address_calabar'] ?? '10 Federal Housing Road, Calabar, Cross-River State' }}</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right: Interactive WhatsApp Form -->
        <div class="reveal-right">
          <div class="bg-brand-light border border-gray-200 rounded-3xl p-8 shadow-sm">
            <h3 class="font-display font-bold text-brand-dark text-xl mb-2">WhatsApp Instant Enquiry</h3>
            <p class="text-gray-500 text-sm mb-6">Fill in the fields below to format your message, and submit to launch an instant chat with our operations desk.</p>

            <form id="whatsapp-inquiry-form" class="space-y-4">
              @csrf
              <div>
                <label for="name" class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Your Name</label>
                <input type="text" id="name" name="name" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-brand-blue bg-white text-brand-dark text-sm" placeholder="e.g. John Doe" />
              </div>

              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                  <label for="email" class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Email Address</label>
                  <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-brand-blue bg-white text-brand-dark text-sm" placeholder="john@example.com" />
                </div>
                <div>
                  <label for="phone" class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Phone Number</label>
                  <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-brand-blue bg-white text-brand-dark text-sm" placeholder="+234..." />
                </div>
              </div>

              <div>
                <label for="service" class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Select Service</label>
                <select id="service" name="service" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-brand-blue bg-white text-brand-dark text-sm">
                  <option value="Cleaning Services">Cleaning Services</option>
                  <option value="Fumigation & Pest Control">Fumigation & Pest Control</option>
                  <option value="Laundry & Dry Cleaning">Laundry & Dry Cleaning</option>
                  <option value="Gardening & Landscaping">Gardening & Landscaping</option>
                  <option value="Transport & Logistics">Transport & Logistics</option>
                  <option value="Fast Food & Catering">Fast Food & Catering</option>
                  <option value="Branding & Printing">Branding & Printing</option>
                  <option value="Mobile Accessories & Gadgets">Mobile Accessories & Gadgets</option>
                  <option value="Fashion Design & Alterations">Fashion Design & Alterations</option>
                  <option value="Other Project">Other Enquiry</option>
                </select>
              </div>

              <div>
                <label for="message" class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Message details</label>
                <textarea id="message" name="message" rows="4" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-brand-blue bg-white text-brand-dark text-sm" placeholder="Describe your requirement, location, and timeline..."></textarea>
              </div>

              <button type="submit" id="submit-inquiry-btn" class="w-full btn-whatsapp justify-center text-sm mt-6">
                <i class="bi bi-whatsapp text-lg flex-shrink-0" aria-hidden="true"></i>
                Send Inquiry via WhatsApp
              </button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════ -->
  <!--  SERVICE COVERAGE AREAS                                    -->
  <!-- ═══════════════════════════════════════════════════════════ -->
  <section id="coverage" class="py-16 sm:py-24 bg-slate-50 border-t border-slate-200/60 scroll-mt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
        <p class="section-label section-label--red mb-3">Reach & Operations</p>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-black text-brand-dark leading-tight">
          Service Coverage Areas
        </h2>
        <p class="text-gray-600 mt-4 text-base sm:text-lg leading-relaxed">
          Based in Lagos and Calabar, we operate across major municipal areas and provide logistics services nationwide.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 max-w-6xl mx-auto">

        <div class="area-card bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex items-start gap-4 transition-all duration-300 hover:shadow-md">
          <div class="w-10 h-10 rounded-xl bg-red-50 text-brand-red flex items-center justify-center text-lg flex-shrink-0">
            <i class="bi bi-geo-alt-fill"></i>
          </div>
          <div>
            <p class="area-name font-display font-bold text-brand-dark text-lg mb-1">Banana Island &amp; Ikoyi</p>
            <p class="area-desc text-gray-500 text-sm leading-relaxed">Premium residential estates &amp; corporate offices, Lagos</p>
          </div>
        </div>

        <div class="area-card bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex items-start gap-4 transition-all duration-300 hover:shadow-md">
          <div class="w-10 h-10 rounded-xl bg-red-50 text-brand-red flex items-center justify-center text-lg flex-shrink-0">
            <i class="bi bi-geo-alt-fill"></i>
          </div>
          <div>
            <p class="area-name font-display font-bold text-brand-dark text-lg mb-1">Lagos Island &amp; Victoria Island</p>
            <p class="area-desc text-gray-500 text-sm leading-relaxed">CBD, Marina, commercial &amp; hospitality zones, Lagos</p>
          </div>
        </div>

        <div class="area-card bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex items-start gap-4 transition-all duration-300 hover:shadow-md">
          <div class="w-10 h-10 rounded-xl bg-red-50 text-brand-red flex items-center justify-center text-lg flex-shrink-0">
            <i class="bi bi-geo-alt-fill"></i>
          </div>
          <div>
            <p class="area-name font-display font-bold text-brand-dark text-lg mb-1">Lagos Mainland &amp; Surulere</p>
            <p class="area-desc text-gray-500 text-sm leading-relaxed">Residential, industrial &amp; business districts, Lagos</p>
          </div>
        </div>

        <div class="area-card bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex items-start gap-4 transition-all duration-300 hover:shadow-md">
          <div class="w-10 h-10 rounded-xl bg-red-50 text-brand-red flex items-center justify-center text-lg flex-shrink-0">
            <i class="bi bi-geo-alt-fill"></i>
          </div>
          <div>
            <p class="area-name font-display font-bold text-brand-dark text-lg mb-1">Lekki &amp; Ajah</p>
            <p class="area-desc text-gray-500 text-sm leading-relaxed">Growing residential &amp; commercial corridors, Lagos</p>
          </div>
        </div>

        <div class="area-card bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex items-start gap-4 transition-all duration-300 hover:shadow-md">
          <div class="w-10 h-10 rounded-xl bg-red-50 text-brand-red flex items-center justify-center text-lg flex-shrink-0">
            <i class="bi bi-geo-alt-fill"></i>
          </div>
          <div>
            <p class="area-name font-display font-bold text-brand-dark text-lg mb-1">Calabar, Cross-River State</p>
            <p class="area-desc text-gray-500 text-sm leading-relaxed">Home operational base, full service coverage</p>
          </div>
        </div>

        <div class="area-card bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex items-start gap-4 transition-all duration-300 hover:shadow-md">
          <div class="w-10 h-10 rounded-xl bg-blue-50 text-brand-blue flex items-center justify-center text-lg flex-shrink-0">
            <i class="bi bi-globe2"></i>
          </div>
          <div>
            <p class="area-name font-display font-bold text-brand-dark text-lg mb-1">Nationwide Nigeria</p>
            <p class="area-desc text-gray-500 text-sm leading-relaxed">Transport, haulage, logistics &amp; specialist branding projects delivered nationally</p>
          </div>
        </div>

      </div>

      <!-- Out-of-area Banner -->
      <div class="mt-12 p-8 rounded-2xl bg-white border border-gray-200 shadow-sm flex flex-col sm:flex-row items-center justify-between gap-6 max-w-6xl mx-auto">
        <div>
          <h3 class="font-display font-bold text-brand-dark text-lg sm:text-xl">Not in the list above?</h3>
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

  <!-- JS to submit lead via AJAX & launch WhatsApp -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const form = document.getElementById('whatsapp-inquiry-form');
      if (!form) return;

      // Toast function definition
      function showToast(message) {
        let toast = document.getElementById('premium-toast');
        if (toast) toast.remove();

        toast = document.createElement('div');
        toast.id = 'premium-toast';
        toast.className = 'premium-toast-container';
        toast.innerHTML = `
          <div class="premium-toast-content">
            <div class="premium-toast-icon">
              <i class="bi bi-check-circle-fill text-base text-emerald-400"></i>
            </div>
            <div class="premium-toast-text">${message}</div>
          </div>
        `;
        document.body.appendChild(toast);

        // Trigger reflow for slide-in animation
        toast.offsetHeight;
        toast.classList.add('show');

        // Auto remove
        setTimeout(() => {
          toast.classList.remove('show');
          setTimeout(() => toast.remove(), 400);
        }, 3500);
      }

      form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const btn = document.getElementById('submit-inquiry-btn');
        const originalHtml = btn.innerHTML;
        
        // Activate loading state
        btn.disabled = true;
        btn.innerHTML = `<span class="loading-spinner"></span> Saving Enquiry...`;

        const name = document.getElementById('name').value;
        const email = document.getElementById('email')?.value || '';
        const phone = document.getElementById('phone')?.value || '';
        const service = document.getElementById('service').value;
        const message = document.getElementById('message').value;
        const csrfToken = document.querySelector('input[name="_token"]')?.value || '';

        // Save lead in database
        try {
          const response = await fetch('/contact/inquiry', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'Accept': 'application/json',
              'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({ name, email, phone, service, message })
          });
          const result = await response.json();
          if (result.success) {
            showToast("Inquiry saved successfully! Redirecting to WhatsApp...");
          } else {
            showToast("Redirecting to WhatsApp...");
          }
        } catch (err) {
          console.error('Inquiry save log:', err);
          showToast("Redirecting to WhatsApp...");
        }

        // Open WhatsApp and reset form after 1.8 seconds
        setTimeout(() => {
          const baseWhatsAppUrl = "{{ $globalSettings['whatsapp_url'] ?? 'https://wa.me/2349037666399' }}";
          const text = `Hi Asutext! My name is ${name}. I am enquiring about ${service}.${phone ? ' My phone: ' + phone + '.' : ''} Details: ${message}`;
          const targetUrl = `${baseWhatsAppUrl}?text=${encodeURIComponent(text)}`;
          window.open(targetUrl, '_blank');

          form.reset();
          btn.disabled = false;
          btn.innerHTML = originalHtml;
        }, 1800);
      });
    });
  </script>
@endsection
