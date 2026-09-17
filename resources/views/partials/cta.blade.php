{{-- CTA penutup halaman (dipakai home & halaman lain) --}}
<section class="hero py-20 mt-20">
    <div class="hero-glow c" style="opacity:.5"></div>
    <div class="max-w-4xl mx-auto px-6 text-center relative reveal">
        <span class="eyebrow on-dark mb-4" style="display:inline-flex">{{ __('site.cta_eyebrow') }}</span>
        <h2 class="section-title text-white mb-4">{{ __('site.cta_title') }}</h2>
        <p class="lede mb-8 mx-auto max-w-xl" style="color:var(--slate-300)">{{ __('site.cta_lede') }}</p>
        <div class="flex flex-wrap justify-center gap-3">
            <a href="https://wa.me/6289626312680?text={{ rawurlencode(__('site.home_hero_cta_wa_text')) }}" target="_blank" class="btn btn-gold">
                {{ __('site.home_hero_cta') }}
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
            <a href="mailto:marfinohamzah455@gmail.com" class="btn btn-outline-light">marfinohamzah455@gmail.com</a>
        </div>
        <p class="text-xs mt-4" style="color:var(--slate-400)">{{ __('site.home_hero_cta_note') }}</p>
    </div>
</section>
