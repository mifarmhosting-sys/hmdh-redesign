{{-- Membership enquiry form: posts to membership.enquire, stored in admin "Membership Enquiries" --}}
<div id="enquiry" class="bg-deep-navy text-surface-bright rounded-2xl p-space-lg shadow-[0_8px_30px_-6px_rgba(11,30,46,0.3)] flex flex-col gap-space-md scroll-mt-32">
  <header>
    <h3 class="font-headline-md text-headline-md">Membership Enquiry</h3>
    <p class="font-body-sm text-body-sm text-surface-ice/80">Share your details and our team will get in touch with you.</p>
  </header>

  @if($errors->any())
    <ul class="rounded-lg bg-error-container text-on-error-container px-space-md py-2 font-body-sm text-body-sm list-disc list-inside" role="alert">
      @foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach
    </ul>
  @endif

  <form action="{{ route('membership.enquire') }}" method="POST" class="flex flex-col gap-space-md">
    @csrf
    @foreach([['name', 'Name', 'text', 'name'], ['phone', 'Phone No', 'tel', 'tel'], ['email', 'Email ID', 'email', 'email']] as [$field, $label, $type, $auto])
      <div class="flex flex-col gap-1.5">
        <label for="enq-{{ $field }}" class="font-label-md text-label-md uppercase tracking-wider text-sunset-gold font-bold">{{ $label }}</label>
        <input id="enq-{{ $field }}" type="{{ $type }}" name="{{ $field }}" value="{{ old($field) }}" autocomplete="{{ $auto }}" required class="w-full rounded-lg bg-white/10 border border-white/15 px-3 py-2.5 font-body-md text-body-md text-surface-bright placeholder:text-surface-ice/50 focus:outline-2 focus:outline-sunset-gold">
      </div>
    @endforeach
    <div class="flex flex-col gap-1.5">
      <label for="enq-address" class="font-label-md text-label-md uppercase tracking-wider text-sunset-gold font-bold">Permanent Address</label>
      <textarea id="enq-address" name="address" rows="3" required class="w-full rounded-lg bg-white/10 border border-white/15 px-3 py-2.5 font-body-md text-body-md text-surface-bright focus:outline-2 focus:outline-sunset-gold">{{ old('address') }}</textarea>
    </div>
    <button type="submit" class="py-3 rounded-lg bg-coral-vibrant hover:bg-secondary text-on-primary font-label-lg text-label-lg flex items-center justify-center gap-2 transition-all shadow-md cursor-pointer">Submit Enquiry<span class="material-symbols-outlined text-[18px]">arrow_forward</span></button>
  </form>
</div>
