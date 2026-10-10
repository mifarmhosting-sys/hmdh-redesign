@php
    $phone = $settings->contact_phone;
    $phoneHref = 'tel:' . preg_replace('/[^\d+]/', '', (string) $phone);
    $waNumber = preg_replace('/\D/', '', (string) $phone);
    $logo = \App\Support\Media::url($settings->logo_path, 'images/Premium.png');
    $footerLogo = \App\Support\Media::url($settings->footer_logo_path) ?: $logo;
    $navItems = [
        ['route' => 'home', 'match' => 'home', 'label' => 'Home'],
        ['route' => 'hotels', 'match' => 'hotels', 'label' => 'Properties & Hotels'],
        ['route' => 'benefits', 'match' => 'benefits', 'label' => 'Verticals'],
        ['route' => 'destinations', 'match' => 'destinations', 'label' => 'Destinations'],
        ['route' => 'membership', 'match' => 'membership', 'label' => 'Membership'],
        ['route' => 'awards', 'match' => 'awards', 'label' => 'Awards'],
        ['route' => 'contact', 'match' => 'contact', 'label' => 'Connect Us'],
    ];
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="@yield('meta_description', strip_tags((string) $settings->footer_blurb))">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', $settings->site_name . ' Dream Hospitality')</title>
  <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @stack('head')
</head>
<body class="bg-surface font-body-md text-body-md text-on-surface antialiased min-h-screen">

  <header class="fixed top-0 left-0 right-0 z-50" id="siteHeader">
    {{-- Top bar --}}
    <div class="bg-deep-navy text-surface-ice py-space-xs px-margin-mobile lg:px-margin">
      <div class="max-w-[1280px] mx-auto flex items-center justify-between text-body-sm">
        <div class="flex items-center gap-space-lg">
          @if($settings->contact_address)
          <div class="hidden md:flex items-center gap-space-xs">
            <span class="material-symbols-outlined text-[16px] text-sunset-gold">location_on</span>
            <span>{{ $settings->contact_address }}</span>
          </div>
          @endif
          @if($phone)
          <a href="{{ $phoneHref }}" class="flex items-center gap-space-xs hover:text-sunset-gold transition-colors">
            <span class="material-symbols-outlined text-[16px] text-sunset-gold">call</span>
            <span>{{ $phone }}</span>
          </a>
          @endif
        </div>
        <div class="flex items-center gap-space-md">
          @if(auth('member')->check())
            <a href="{{ route('member.profile') }}" class="flex items-center gap-space-xs font-label-md text-label-md tracking-wider uppercase text-sunset-gold hover:text-surface-ice transition-colors">
              <span class="material-symbols-outlined text-[16px]">account_circle</span><span>My Profile</span>
            </a>
            <form action="{{ route('member.logout') }}" method="POST" class="inline">
              @csrf
              <button type="submit" class="flex items-center gap-space-xs font-label-md text-label-md tracking-wider uppercase hover:text-sunset-gold transition-colors cursor-pointer">
                <span class="material-symbols-outlined text-[16px]">logout</span><span>Logout</span>
              </button>
            </form>
          @else
            <a href="{{ route('member.login') }}" class="flex items-center gap-space-xs font-label-md text-label-md tracking-wider uppercase text-sunset-gold hover:text-surface-ice transition-colors">
              <span class="material-symbols-outlined text-[16px]">lock</span><span>Member Login</span>
            </a>
          @endif
        </div>
      </div>
    </div>

    {{-- Main navigation --}}
    <div class="h-20 bg-surface/90 backdrop-blur-xl shadow-[0_4px_20px_-2px_rgba(11,30,46,0.08)] px-margin-mobile lg:px-margin">
      <div class="max-w-[1280px] h-full mx-auto flex items-center justify-between gap-space-md">
        <a href="{{ route('home') }}" class="flex items-center shrink-0" aria-label="{{ $settings->site_name }} home">
          <img src="{{ $logo }}" alt="{{ $settings->site_name }}" class="h-12 w-auto object-contain">
        </a>

        <nav class="hidden xl:flex items-center gap-space-lg" aria-label="Primary">
          @foreach($navItems as $item)
            <a href="{{ route($item['route']) }}"
               @if(Request::routeIs($item['match'])) aria-current="page" @endif
               class="font-label-lg text-label-lg transition-colors {{ Request::routeIs($item['match']) ? 'text-primary font-bold' : 'text-on-surface-variant hover:text-on-surface' }}">{{ $item['label'] }}</a>
          @endforeach
        </nav>

        <div class="flex items-center gap-space-md shrink-0">
          <a href="{{ route('membership') }}" class="hidden sm:inline-flex items-center justify-center px-space-md py-space-sm rounded-lg bg-coral-vibrant text-on-primary font-label-lg text-label-lg tracking-wide hover:bg-secondary transition-all shadow-[0_4px_14px_rgba(211,73,28,0.3)]">Book Experience</a>
          <button type="button" id="navToggle" class="xl:hidden w-10 h-10 flex items-center justify-center rounded-lg text-primary hover:bg-surface-container transition-colors" aria-label="Open menu" aria-controls="mobileNav" aria-expanded="false">
            <span class="material-symbols-outlined text-[28px]" data-icon>menu</span>
          </button>
        </div>
      </div>
    </div>

    {{-- Mobile navigation --}}
    <nav id="mobileNav" class="hidden xl:hidden bg-surface shadow-lg px-margin-mobile pb-space-md" aria-label="Mobile">
      <ul class="flex flex-col">
        @foreach($navItems as $item)
          <li>
            <a href="{{ route($item['route']) }}" class="block py-3 border-b border-outline-variant/40 font-label-lg text-label-lg {{ Request::routeIs($item['match']) ? 'text-primary font-bold' : 'text-on-surface-variant' }}">{{ $item['label'] }}</a>
          </li>
        @endforeach
      </ul>
      <a href="{{ route('membership') }}" class="mt-space-md flex items-center justify-center py-3 rounded-lg bg-coral-vibrant text-on-primary font-label-lg text-label-lg">Book Experience</a>
    </nav>
  </header>

  <main class="w-full pt-[116px]">
    @yield('content')
  </main>

  <footer class="w-full bg-deep-navy text-surface-ice">
    <div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin pt-space-xl pb-space-lg">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-space-lg pb-space-xl border-b border-white/10">
        <div class="lg:col-span-2 flex flex-col gap-space-md">
          <span class="inline-flex self-start bg-white rounded-lg px-3 py-2">
            <img src="{{ $footerLogo }}" alt="{{ $settings->site_name }}" class="h-10 w-auto object-contain">
          </span>
          @if($settings->footer_blurb)
            <p class="font-body-sm text-body-sm text-surface-ice/80 max-w-md">{!! nl2br(e($settings->footer_blurb)) !!}</p>
          @endif
          <ul class="flex flex-col gap-space-sm font-body-sm text-body-sm text-surface-ice/90">
            @if($settings->contact_address)
              <li class="flex items-start gap-space-sm"><span class="material-symbols-outlined text-[18px] text-sunset-gold">location_on</span><span>{{ $settings->contact_address }}</span></li>
            @endif
            @if($phone)
              <li class="flex items-center gap-space-sm"><span class="material-symbols-outlined text-[18px] text-sunset-gold">call</span><a href="{{ $phoneHref }}" class="hover:text-sunset-gold transition-colors">{{ $phone }}</a></li>
            @endif
            @if($settings->contact_email)
              <li class="flex items-center gap-space-sm"><span class="material-symbols-outlined text-[18px] text-sunset-gold">mail</span><a href="mailto:{{ $settings->contact_email }}" class="hover:text-sunset-gold transition-colors">{{ $settings->contact_email }}</a></li>
            @endif
            @if($settings->working_hours)
              <li class="flex items-center gap-space-sm"><span class="material-symbols-outlined text-[18px] text-sunset-gold">schedule</span><span>{{ $settings->working_hours }}</span></li>
            @endif
          </ul>
        </div>

        <nav aria-label="Explore">
          <h3 class="font-label-md text-label-md uppercase tracking-widest text-sunset-gold font-bold mb-space-md">Resorts &amp; Stays</h3>
          <ul class="flex flex-col gap-space-sm font-body-sm text-body-sm">
            <li><a href="{{ route('hotels') }}" class="hover:text-sunset-gold transition-colors">Properties &amp; Hotels</a></li>
            <li><a href="{{ route('destinations') }}" class="hover:text-sunset-gold transition-colors">Destinations</a></li>
            <li><a href="{{ route('benefits') }}" class="hover:text-sunset-gold transition-colors">Verticals</a></li>
          </ul>
        </nav>

        <nav aria-label="Privileges">
          <h3 class="font-label-md text-label-md uppercase tracking-widest text-sunset-gold font-bold mb-space-md">Privileges</h3>
          <ul class="flex flex-col gap-space-sm font-body-sm text-body-sm">
            <li><a href="{{ route('membership') }}" class="hover:text-sunset-gold transition-colors">Membership</a></li>
            <li><a href="{{ route('member.login') }}" class="hover:text-sunset-gold transition-colors">Member Login</a></li>
            <li><a href="{{ route('awards') }}" class="hover:text-sunset-gold transition-colors">Awards</a></li>
          </ul>
        </nav>

        <div>
          <h3 class="font-label-md text-label-md uppercase tracking-widest text-sunset-gold font-bold mb-space-md">Connect</h3>
          <ul class="flex flex-col gap-space-sm font-body-sm text-body-sm">
            <li><a href="{{ route('contact') }}" class="hover:text-sunset-gold transition-colors">Connect Us</a></li>
          </ul>
          <div class="flex items-center gap-space-sm mt-space-md">
            @foreach(['facebook_url' => 'Facebook', 'instagram_url' => 'Instagram', 'youtube_url' => 'YouTube'] as $field => $label)
              @if($settings->$field)
                <a href="{{ $settings->$field }}" target="_blank" rel="noopener" aria-label="{{ $label }}" class="w-9 h-9 rounded-full bg-white/10 hover:bg-sunset-gold hover:text-deep-navy flex items-center justify-center font-label-md text-label-md transition-colors">{{ substr($label, 0, 2) }}</a>
              @endif
            @endforeach
          </div>
        </div>
      </div>

      <div class="pt-space-lg flex flex-col md:flex-row items-center justify-between gap-space-sm font-body-sm text-body-sm text-surface-ice/70">
        <p>&copy; {{ date('Y') }} {{ $settings->site_name }} Dream Hospitality. All rights reserved.</p>
        <div class="flex items-center gap-space-lg">
          <a href="#" class="hover:text-sunset-gold transition-colors">Privacy Notice</a>
          <a href="#" class="hover:text-sunset-gold transition-colors">Cookie Policy</a>
          <a href="#" class="hover:text-sunset-gold transition-colors">Terms &amp; Conditions</a>
        </div>
      </div>
    </div>
  </footer>

  @if($waNumber)
    <a href="https://wa.me/{{ $waNumber }}" target="_blank" rel="noopener" aria-label="Chat on WhatsApp"
       class="fixed bottom-5 right-5 z-40 w-14 h-14 rounded-full bg-whatsapp text-white flex items-center justify-center shadow-xl hover:scale-105 transition-transform">
      <span class="material-symbols-outlined text-[28px]">chat</span>
    </a>
  @endif

  @stack('scripts')
</body>
</html>
