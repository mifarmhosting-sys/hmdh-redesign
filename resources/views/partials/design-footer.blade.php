{{-- Shared site footer (Home design). Contact details come from Site Settings. --}}
@php
    $footerSettings = $settings ?? \App\Models\SiteSetting::first() ?? new \App\Models\SiteSetting();
    $footerLogo = \App\Support\Media::url($footerSettings->footer_logo_path ?: $footerSettings->logo_path, 'images/design/4eeb473f03e9.png');
@endphp
<footer class="w-full bg-deep-navy text-surface-ice">
  <div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin pt-space-xl pb-space-lg">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-space-lg pb-space-xl shadow-[0_1px_0_rgba(255,255,255,0.08)]">
      <div class="lg:col-span-2 flex flex-col gap-space-md">
        <div class="flex items-center gap-space-xs">
          <span class="inline-flex bg-white rounded-lg px-3 py-2">
            <img src="{{ $footerLogo }}" alt="{{ $footerSettings->site_name }}" class="h-10 w-auto object-contain">
          </span>
        </div>
        @if($footerSettings->footer_blurb)
          <p class="font-body-md text-body-md text-surface-ice/90 pr-space-md">{!! nl2br(e($footerSettings->footer_blurb)) !!}</p>
        @endif
        <div class="flex flex-col gap-space-xs pt-space-xs text-body-sm text-surface-ice/80">
          @if($footerSettings->contact_address)
            <div class="flex items-start gap-space-xs">
              <span class="material-symbols-outlined text-[18px] text-sunset-gold shrink-0 mt-0.5">location_on</span>
              <span>{{ $footerSettings->contact_address }}</span>
            </div>
          @endif
          @if($footerSettings->contact_phone)
            <div class="flex items-center gap-space-xs">
              <span class="material-symbols-outlined text-[18px] text-sunset-gold shrink-0">call</span>
              <a href="tel:{{ preg_replace('/[^\d+]/', '', $footerSettings->contact_phone) }}" class="hover:text-sunset-gold transition-colors">{{ $footerSettings->contact_phone }}</a>
            </div>
          @endif
          @if($footerSettings->contact_email)
            <div class="flex items-center gap-space-xs">
              <span class="material-symbols-outlined text-[18px] text-sunset-gold shrink-0">mail</span>
              <a href="mailto:{{ $footerSettings->contact_email }}" class="hover:text-sunset-gold transition-colors">{{ $footerSettings->contact_email }}</a>
            </div>
          @endif
          @if($footerSettings->working_hours)
            <div class="flex items-center gap-space-xs">
              <span class="material-symbols-outlined text-[18px] text-sunset-gold shrink-0">schedule</span>
              <span>{{ $footerSettings->working_hours }}</span>
            </div>
          @endif
        </div>
      </div>

      <div class="flex flex-col gap-space-sm">
        <h4 class="font-label-lg text-label-lg text-sunset-gold uppercase tracking-wider">Resorts &amp; Stays</h4>
        <ul class="flex flex-col gap-space-xs font-body-sm text-body-sm">
          <li class="hover:text-sunset-gold transition-colors"><a href="/our-hotels.html">Properties &amp; Hotels</a></li>
          <li class="hover:text-sunset-gold transition-colors"><a href="/destinations.html">Popular Destinations</a></li>
          <li class="hover:text-sunset-gold transition-colors"><a href="/benefits.html">Hospitality Verticals</a></li>
        </ul>
      </div>

      <div class="flex flex-col gap-space-sm">
        <h4 class="font-label-lg text-label-lg text-sunset-gold uppercase tracking-wider">Privileges</h4>
        <ul class="flex flex-col gap-space-xs font-body-sm text-body-sm">
          <li class="hover:text-sunset-gold transition-colors"><a href="/membership">Club Memberships</a></li>
          <li class="hover:text-sunset-gold transition-colors"><a href="/member/login">Member Portal Login</a></li>
          <li class="hover:text-sunset-gold transition-colors"><a href="/awards.html">Recognition &amp; Awards</a></li>
        </ul>
      </div>

      <div class="flex flex-col gap-space-sm">
        <h4 class="font-label-lg text-label-lg text-sunset-gold uppercase tracking-wider">Connect</h4>
        <ul class="flex flex-col gap-space-xs font-body-sm text-body-sm">
          <li class="hover:text-sunset-gold transition-colors"><a href="/contact-us.html">Connect Us</a></li>
        </ul>
        <div class="flex items-center gap-space-sm pt-space-xs">
          @foreach(['facebook_url' => ['share', 'Facebook'], 'instagram_url' => ['photo_camera', 'Instagram'], 'youtube_url' => ['smart_display', 'YouTube']] as $field => [$icon, $label])
            @if($footerSettings->$field && $footerSettings->$field !== '#')
              <a href="{{ $footerSettings->$field }}" target="_blank" rel="noopener" aria-label="{{ $label }}" class="material-symbols-outlined p-space-xs rounded-full bg-primary-container text-surface-ice hover:text-sunset-gold transition-colors">{{ $icon }}</a>
            @endif
          @endforeach
        </div>
      </div>
    </div>

    <div class="pt-space-lg flex flex-col md:flex-row items-center justify-between gap-space-md font-body-sm text-body-sm text-surface-ice/70">
      <p>&copy; {{ date('Y') }} {{ $footerSettings->site_name }} Dream Hospitality. All rights reserved.</p>
      <div class="flex items-center gap-space-md">
        <a class="hover:text-sunset-gold transition-colors" href="#">Privacy Notice</a>
        <a class="hover:text-sunset-gold transition-colors" href="#">Cookie Policy</a>
        <a class="hover:text-sunset-gold transition-colors" href="#">Terms &amp; Conditions</a>
      </div>
    </div>
  </div>
</footer>
