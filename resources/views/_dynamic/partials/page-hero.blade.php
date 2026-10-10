{{-- Compact inner-page hero. Expects $heroTitle; optional $heroEyebrow, $heroText, $crumb. --}}
<section class="relative w-full overflow-hidden bg-deep-navy -mt-[116px] pt-[116px]">
  <div class="absolute inset-0 bg-gradient-to-br from-deep-navy via-primary to-lagoon-blue"></div>
  <div class="absolute -top-24 right-0 w-[28rem] h-[28rem] bg-sunset-gold/15 rounded-full blur-3xl pointer-events-none"></div>
  <div class="relative z-10 max-w-[1280px] mx-auto px-margin-mobile lg:px-margin py-space-xl lg:py-16 flex flex-col gap-space-md">
    <nav aria-label="Breadcrumb" class="flex items-center gap-2 font-body-sm text-body-sm text-surface-ice/80">
      <a href="{{ route('home') }}" class="hover:text-sunset-gold transition-colors">Home</a><span>/</span><span>{{ $crumb ?? $heroTitle }}</span>
    </nav>
    @if(!empty($heroEyebrow))
      <span class="self-start px-3 py-1 rounded-full bg-sunset-gold/20 text-sunset-gold font-label-md text-label-md tracking-wider uppercase">{{ $heroEyebrow }}</span>
    @endif
    <h1 class="font-headline-xl text-headline-xl-mobile sm:text-headline-xl text-surface-bright tracking-tight max-w-3xl">{{ $heroTitle }}</h1>
    @if(!empty($heroText))
      <p class="font-body-lg text-body-lg text-surface-ice/90 max-w-2xl">{{ $heroText }}</p>
    @endif
  </div>
</section>
