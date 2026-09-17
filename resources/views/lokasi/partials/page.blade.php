{{-- Halaman jasa per kota. Param: $city (solo|klaten|cikarang|jakarta), $office (index config company.offices terdekat) --}}
@php
    $o = config('company.offices')[$office];
    $benefits = [
        ['M3 12l9-9 9 9M5 10v10h14V10', __('site.lokasi_item1')],
        ['M21 12a9 9 0 01-13.3 7.9L3 21l1.1-4.6A9 9 0 1121 12z', __('site.lokasi_item2')],
        ['M13 10V3L4 14h7v7l9-11h-7z', __('site.lokasi_item3')],
    ];
@endphp

@include('partials.page-hero', [
    'eyebrow' => __('site.lokasi_eyebrow'),
    'title'   => __('site.lokasi_' . $city . '_heading'),
    'lede'    => __('site.lokasi_' . $city . '_intro'),
    'actions' => [
        ['url' => 'https://wa.me/6289626312680?text=' . rawurlencode(__('site.lokasi_wa_text', ['city' => ucfirst($city)])), 'label' => __('site.lokasi_contact_now')],
        ['url' => '/portofolio', 'label' => __('site.nav_portfolio')],
    ],
])

<section class="max-w-6xl mx-auto px-6 -mt-10 relative z-10">
    <div class="grid md:grid-cols-3 gap-5">
        @foreach ($benefits as $i => [$icon, $text])
        <div class="card p-6 flex items-center gap-4 reveal {{ $i ? 'reveal-d' . $i : '' }}">
            <span class="icon-chip {{ $i == 1 ? 'gold' : '' }} shrink-0"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $icon }}"/></svg></span>
            <p class="font-semibold text-navy-900">{{ $text }}</p>
        </div>
        @endforeach
    </div>
</section>

<section class="max-w-6xl mx-auto px-6 pt-20">
    <div class="grid lg:grid-cols-12 gap-8 items-center">
        <div class="lg:col-span-5 reveal">
            <span class="eyebrow mb-4">{{ __('site.lokasi_nearest_eyebrow') }}</span>
            <h2 class="section-title mb-4">{{ $o['name'] }}</h2>
            <p class="lede">{{ $o['address'] }}</p>
            <a href="{{ $o['maps'] }}" target="_blank" rel="noopener" class="btn btn-ghost text-sm mt-6">
                {{ __('site.contact_offices_open_maps') }}
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
        </div>
        <div class="lg:col-span-7 card overflow-hidden reveal reveal-d1">
            <iframe src="https://maps.google.com/maps?q={{ $o['lat'] }},{{ $o['lng'] }}&z=15&output=embed"
                    class="w-full h-72 border-0 block" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="{{ $o['name'] }}"></iframe>
        </div>
    </div>
</section>

@include('partials.cta')
