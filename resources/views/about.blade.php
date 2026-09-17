@extends('layouts.app')

@section('mainClass', '')

@section('content')

@include('partials.page-hero', [
    'eyebrow' => __('site.about_eyebrow'),
    'title'   => __('site.about_hero_title'),
    'lede'    => __('site.about_p2'),
])

{{-- ======================= INTRO + FOUNDER ======================= --}}
<section class="max-w-6xl mx-auto px-6 -mt-10 relative z-10">
    <div class="grid lg:grid-cols-12 gap-5">
        <div class="card p-7 lg:col-span-8 reveal">
            <span class="eyebrow mb-4">{{ __('site.about_heading') }} HamzTech</span>
            <p class="text-slate-600 text-lg leading-relaxed">{!! __('site.about_p1') !!}</p>
            <div class="grid grid-cols-3 gap-4 mt-7 pt-6 border-t border-slate-200 text-center">
                <div><div class="stat-num">7+</div><div class="text-xs font-semibold text-slate-500 mt-1">{{ __('site.about_stat_years') }}</div></div>
                <div><div class="stat-num">{{ count(config('portfolios')) }}+</div><div class="text-xs font-semibold text-slate-500 mt-1">{{ __('site.about_stat_projects') }}</div></div>
                <div><div class="stat-num gold">10+</div><div class="text-xs font-semibold text-slate-500 mt-1">{{ __('site.about_stat_gov') }}</div></div>
            </div>
        </div>
        <div class="card p-7 lg:col-span-4 reveal reveal-d1 flex flex-col items-center text-center">
            <img src="{{ asset('images/founder.jpg') }}" alt="Marfino Hamzah" class="w-24 h-24 rounded-3xl object-cover" style="object-position:center top">
            <div class="font-bold text-lg text-navy-900 mt-4">Marfino Hamzah</div>
            <div class="text-sm text-slate-500">Founder &amp; Lead Fullstack Engineer</div>
            <div class="flex flex-wrap justify-center gap-1.5 mt-4">
                <span class="badge">Laravel</span><span class="badge">Flutter</span><span class="badge">Vue / Nuxt</span><span class="badge">Go</span>
            </div>
            <a href="/contact" class="btn btn-ghost text-sm mt-6">{{ __('site.nav_contact') }}</a>
        </div>
    </div>
</section>

{{-- ======================= SERVICES ======================= --}}
<section class="max-w-6xl mx-auto px-6 pt-20">
    <div class="max-w-2xl mb-10 reveal">
        <span class="eyebrow mb-4">{{ __('site.nav_services') }}</span>
        <h2 class="section-title">{{ __('site.about_services_heading') }}</h2>
    </div>
    @php
        // Kelompok layanan: [judul item, [item detail], path ikon]
        $groups = [
            [1, [2, 3, 4, 5], 'M2 5h20v14H2zM2 9h20'],
            [6, [7, 8], 'M7 2h10v20H7zM11 18h2'],
            [9, [10, 11], 'M12 19l7-7 3 3-7 7-3-3zM18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z'],
            [12, [13, 14], 'M16 18l6-6-6-6M8 6l-6 6 6 6'],
            [15, [16], 'M6 9V2h12v7M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2M6 14h12v8H6z'],
        ];
    @endphp
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
        @foreach ($groups as $i => [$head, $items, $icon])
        <div class="card card-hover p-7 reveal {{ $i % 3 == 1 ? 'reveal-d1' : ($i % 3 == 2 ? 'reveal-d2' : '') }}">
            <span class="icon-chip {{ $i % 2 ? 'gold' : '' }} mb-5"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $icon }}"/></svg></span>
            <h3 class="font-bold text-lg text-navy-900 mb-3">{{ __('site.about_services_item' . $head) }}</h3>
            <ul class="text-sm text-slate-500 space-y-2">
                @foreach ($items as $n)
                <li class="flex gap-2"><span class="text-flame-500">➝</span>{{ __('site.about_services_item' . $n) }}</li>
                @endforeach
            </ul>
        </div>
        @endforeach
    </div>
</section>

{{-- ======================= WHY (dark) ======================= --}}
<section class="hero py-20 mt-20">
    <div class="hero-glow a" style="opacity:.4"></div>
    <div class="max-w-6xl mx-auto px-6 relative">
        <div class="max-w-2xl mb-10 reveal">
            <span class="eyebrow on-dark mb-4">{{ __('site.about_why_eyebrow') }}</span>
            <h2 class="section-title text-white">{{ __('site.about_why_heading') }}</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach (range(1, 5) as $n)
            <div class="glass-dark rounded-2xl p-6 flex gap-4 reveal {{ $n % 3 == 2 ? 'reveal-d1' : ($n % 3 == 0 ? 'reveal-d2' : '') }}">
                <span class="icon-chip on-dark shrink-0"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></span>
                <p class="text-sm text-slate-200 leading-relaxed">{{ __('site.about_why_item' . $n) }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ======================= AREA ======================= --}}
<section class="max-w-6xl mx-auto px-6 pt-20">
    <div class="grid lg:grid-cols-12 gap-8 items-start">
        <div class="lg:col-span-5 reveal">
            <span class="eyebrow mb-4">{{ __('site.footer_offices_label') }}</span>
            <h2 class="section-title mb-4">{{ __('site.about_area_heading') }}</h2>
            <p class="lede">{{ __('site.about_area_text') }}</p>
            <div class="flex flex-wrap gap-2 mt-5">
                @foreach (['solo' => 'Solo', 'klaten' => 'Klaten', 'cikarang' => 'Cikarang', 'jakarta' => 'Jakarta'] as $slug => $city)
                    <a href="/jasa-it-{{ $slug }}" class="tech-pill">{{ $city }}</a>
                @endforeach
            </div>
        </div>
        <div class="lg:col-span-7 grid sm:grid-cols-2 gap-5">
            @foreach (config('company.offices') as $office)
            <a href="{{ $office['maps'] }}" target="_blank" rel="noopener" class="card card-hover p-6 reveal {{ $loop->index ? 'reveal-d1' : '' }}">
                <span class="icon-chip gold mb-4"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s-7-6.2-7-11.5a7 7 0 0114 0C19 14.8 12 21 12 21z"/><circle cx="12" cy="9.5" r="2.5"/></svg></span>
                <h3 class="font-bold text-navy-900">{{ $office['name'] }}</h3>
                <p class="text-sm text-slate-500 mt-2 leading-relaxed">{{ $office['address'] }}</p>
                <span class="inline-block text-sm font-semibold text-flame-600 mt-4">{{ __('site.contact_offices_open_maps') }} &rarr;</span>
            </a>
            @endforeach
        </div>
    </div>
</section>

@include('partials.cta')

@endsection
