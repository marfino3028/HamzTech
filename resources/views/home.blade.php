@extends('layouts.app')

@section('mainClass', '')

@section('content')

{{-- ======================= HERO ======================= --}}
<section class="hero pt-16 pb-20 lg:pt-24 lg:pb-28">
    <div class="hero-grid"></div>
    <div class="hero-glow a"></div><div class="hero-glow b"></div><div class="hero-glow c"></div>
    <div class="max-w-6xl mx-auto px-6 relative">
        <div class="grid lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-7 reveal">
                <span class="badge badge-gold mb-6"><span class="badge-dot" style="background:var(--gold-500)"></span>Software Development Company</span>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-[1.05]">
                    Jasa pembuatan <span class="text-gradient-gold">web, mobile &amp; sistem</span> kelas enterprise.
                </h1>
                <p class="lede mt-6 max-w-xl" style="color:var(--slate-300)">
                    HamzTech membangun website, aplikasi mobile, dan sistem custom yang bersih,
                    scalable, dan siap produksi — dari UMKM hingga instansi pemerintah.
                </p>
                <div class="flex flex-wrap gap-2.5 mt-8">
                    <span class="service-chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6h16M4 12h16M4 18h10"/></svg>Web Development</span>
                    <span class="service-chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="7" y="2" width="10" height="20" rx="2"/></svg>Mobile Apps</span>
                    <span class="service-chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="3"/><path d="M9 9h6v6H9z"/></svg>AI &amp; Automation</span>
                    <span class="service-chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M5 21V10l7-5 7 5v11"/></svg>Government Solution</span>
                </div>
                <div class="flex flex-wrap gap-3 mt-9">
                    <a href="https://wa.me/6289626312680" target="_blank" class="btn btn-gold">
                        Konsultasi Gratis
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                    </a>
                    <a href="#portofolio" class="btn btn-outline-light">Lihat Portofolio</a>
                </div>
            </div>

            <div class="lg:col-span-5 reveal reveal-d2">
                <div class="glass-dark rounded-[26px] p-7">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/founder.jpg') }}" alt="Marfino Hamzah" class="w-16 h-16 rounded-2xl object-cover" style="object-position:center top">
                        <div>
                            <div class="text-white font-bold text-lg leading-tight">Marfino Hamzah</div>
                            <div class="text-slate-300 text-sm">Founder &amp; Lead Fullstack Engineer</div>
                        </div>
                    </div>
                    <div class="my-6 h-px" style="background:linear-gradient(90deg,transparent,rgba(255,255,255,.2),transparent)"></div>
                    <div class="grid grid-cols-3 gap-4 text-center">
                        <div><div class="text-2xl font-extrabold text-white">7<span class="text-flame-400">+</span></div><div class="text-[11px] uppercase tracking-wider text-slate-400 mt-1">Tahun</div></div>
                        <div><div class="text-2xl font-extrabold text-white">35<span class="text-flame-400">+</span></div><div class="text-[11px] uppercase tracking-wider text-slate-400 mt-1">Proyek</div></div>
                        <div><div class="text-2xl font-extrabold text-white">10<span class="text-flame-400">+</span></div><div class="text-[11px] uppercase tracking-wider text-slate-400 mt-1">Gov App</div></div>
                    </div>
                    <div class="mt-6 flex flex-wrap gap-2">
                        <span class="badge badge-ondark">Laravel</span><span class="badge badge-ondark">Flutter</span>
                        <span class="badge badge-ondark">Vue / Nuxt</span><span class="badge badge-ondark">Go</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-14 pt-8" style="border-top:1px solid rgba(255,255,255,.10)">
            <p class="text-xs uppercase tracking-[.2em] text-slate-400 mb-4">Dipercaya untuk sistem nasional &amp; enterprise</p>
            <div class="flex flex-wrap gap-x-8 gap-y-3 text-slate-300 font-semibold text-sm">
                <span>Kementerian Perdagangan RI</span><span>Kemenkeu RI</span><span>BAPPEDA DIY</span>
                <span>UNESA</span><span>RS Brawijaya</span><span>Invesnow</span>
            </div>
        </div>
    </div>
</section>

{{-- ======================= STATISTICS ======================= --}}
<section class="max-w-6xl mx-auto px-6 -mt-10 relative z-10">
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="card p-6 text-center reveal"><div class="stat-num"><span data-count="7" data-suffix="+">7+</span></div><div class="text-sm font-semibold text-navy-800 mt-2">Tahun Pengalaman</div></div>
        <div class="card p-6 text-center reveal reveal-d1"><div class="stat-num"><span data-count="35" data-suffix="+">35+</span></div><div class="text-sm font-semibold text-navy-800 mt-2">Proyek Selesai</div></div>
        <div class="card p-6 text-center reveal reveal-d2"><div class="stat-num gold"><span data-count="10" data-suffix="+">10+</span></div><div class="text-sm font-semibold text-navy-800 mt-2">Proyek Pemerintah</div></div>
        <div class="card p-6 text-center reveal reveal-d3"><div class="stat-num gold"><span data-count="100" data-suffix="%">100%</span></div><div class="text-sm font-semibold text-navy-800 mt-2">Custom Development</div></div>
    </div>
</section>

{{-- ======================= PORTFOLIO ======================= --}}
<section id="portofolio" class="max-w-6xl mx-auto px-6 py-20">
    <div class="max-w-2xl mb-12 reveal">
        <span class="eyebrow mb-4">Portofolio</span>
        <h2 class="section-title mb-4">{{ __('site.home_portfolio_heading') }}</h2>
        <p class="lede">Sistem produksi untuk kementerian, universitas, dan bisnis — web &amp; mobile.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($projects as $project)
        <a href="{{ '/portofolio/' . $project['slug'] }}"
           class="card card-hover overflow-hidden reveal {{ $loop->index % 3 == 1 ? 'reveal-d1' : ($loop->index % 3 == 2 ? 'reveal-d2' : '') }}">
            <div class="aspect-[16/10] overflow-hidden border-b border-slate-200">
                <img src="{{ asset('images/portfolio/' . $project['image']) }}" alt="{{ $project['title'] }}" class="shot" loading="lazy">
            </div>
            <div class="p-6">
                <div class="flex items-center justify-between mb-2 gap-3">
                    <h3 class="font-bold text-lg text-navy-900">{{ $project['title'] }}</h3>
                    <span class="badge badge-blue shrink-0">{{ ucfirst($project['type'] ?? 'web') }}</span>
                </div>
                <p class="text-sm text-slate-500 line-clamp-2 mb-4">{{ app()->getLocale() === 'en' ? ($project['desc_en'] ?? $project['desc']) : $project['desc'] }}</p>
                @if(!empty($project['tech']))
                <div class="flex flex-wrap gap-1.5">
                    @foreach(explode('+', $project['tech']) as $t)
                        <span class="badge">{{ trim($t) }}</span>
                    @endforeach
                </div>
                @endif
            </div>
        </a>
        @endforeach
    </div>
</section>

{{-- ======================= SERVICES ======================= --}}
<section class="max-w-6xl mx-auto px-6 py-16">
    <div class="max-w-2xl mb-12 reveal">
        <span class="eyebrow mb-4">Layanan</span>
        <h2 class="section-title mb-4">{{ __('site.home_services_heading') }}</h2>
        <p class="lede">{{ __('site.home_services_intro') }}</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
        {{-- Card 1 --}}
        <div class="card card-hover p-7 reveal">
            <span class="icon-chip mb-5"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="15" rx="2"/><path d="M2 9h20"/></svg></span>
            <h3 class="font-bold text-lg mb-3 text-navy-900">{{ __('site.home_card_profile_title') }}</h3>
            <ul class="text-sm text-slate-500 space-y-2 mb-5">
                <li class="flex gap-2"><span class="text-flame-500">➝</span>{{ __('site.home_card_profile_item1') }}</li>
                <li class="flex gap-2"><span class="text-flame-500">➝</span>{{ __('site.home_card_profile_item2') }}</li>
                <li class="flex gap-2"><span class="text-flame-500">➝</span>{{ __('site.home_card_profile_item3') }}</li>
                <li class="flex gap-2"><span class="text-flame-500">➝</span>{{ __('site.home_card_profile_item4') }}</li>
            </ul>
            <a href="https://wa.me/6289626312680" target="_blank" class="btn btn-wa w-full text-sm">{{ __('site.home_contact_wa') }}</a>
        </div>
        {{-- Card 2 --}}
        <div class="card card-hover p-7 reveal reveal-d1">
            <span class="icon-chip gold mb-5"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 7h18M3 12h18M3 17h18"/><rect x="3" y="3" width="18" height="18" rx="2"/></svg></span>
            <h3 class="font-bold text-lg mb-3 text-navy-900">{{ __('site.home_card_booking_title') }}</h3>
            <ul class="text-sm text-slate-500 space-y-2 mb-5">
                <li class="flex gap-2"><span class="text-flame-500">➝</span>{{ __('site.home_card_booking_item1') }}</li>
                <li class="flex gap-2"><span class="text-flame-500">➝</span>{{ __('site.home_card_booking_item2') }}</li>
                <li class="flex gap-2"><span class="text-flame-500">➝</span>{{ __('site.home_card_booking_item3') }}</li>
                <li class="flex gap-2"><span class="text-flame-500">➝</span>{{ __('site.home_card_booking_item4') }}</li>
            </ul>
            <a href="https://wa.me/6289626312680" target="_blank" class="btn btn-wa w-full text-sm">{{ __('site.home_contact_wa') }}</a>
        </div>
        {{-- Card 3 --}}
        <div class="card card-hover p-7 reveal reveal-d2">
            <span class="icon-chip mb-5"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><rect x="7" y="12" width="3" height="6"/><rect x="12" y="8" width="3" height="10"/><rect x="17" y="4" width="3" height="14"/></svg></span>
            <h3 class="font-bold text-lg mb-3 text-navy-900">{{ __('site.home_card_store_title') }}</h3>
            <ul class="text-sm text-slate-500 space-y-2 mb-5">
                <li class="flex gap-2"><span class="text-flame-500">➝</span>{{ __('site.home_card_store_item1') }}</li>
                <li class="flex gap-2"><span class="text-flame-500">➝</span>{{ __('site.home_card_store_item2') }}</li>
                <li class="flex gap-2"><span class="text-flame-500">➝</span>{{ __('site.home_card_store_item3') }}</li>
                <li class="flex gap-2"><span class="text-flame-500">➝</span>{{ __('site.home_card_store_item4') }}</li>
            </ul>
            <a href="https://wa.me/6289626312680" target="_blank" class="btn btn-wa w-full text-sm">{{ __('site.home_contact_wa') }}</a>
        </div>
    </div>
</section>

{{-- ======================= PRICING ======================= --}}
<section class="max-w-6xl mx-auto px-6 py-16">
    <div class="max-w-2xl mb-12 reveal">
        <span class="eyebrow mb-4">Harga</span>
        <h2 class="section-title mb-4">{{ __('site.home_price_heading') }}</h2>
        <p class="lede">{{ __('site.home_price_intro') }}</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
        {{-- Basic --}}
        <div class="card card-hover p-7 flex flex-col reveal">
            <h3 class="text-lg font-bold mb-1 text-navy-900">{{ __('site.home_price_basic_title') }}</h3>
            <p class="price-amount text-2xl font-extrabold mb-1 text-navy-900">Rp 499.999</p>
            <p class="text-slate-500 text-sm mb-5">{{ __('site.home_price_basic_desc') }}</p>
            <ul class="text-left text-sm space-y-2 mb-6 flex-1 text-slate-500">
                <li>✔ {{ __('site.home_price_feat_ready') }}</li>
                <li>✔ {{ __('site.home_price_feat_design_standard') }}</li>
                <li>✔ {{ __('site.home_price_feat_seo_basic') }}</li>
                <li class="text-slate-300">✖ {{ __('site.home_price_feat_request') }}</li>
                <li class="text-slate-300">✖ {{ __('site.home_price_feat_multilang') }}</li>
                <li class="text-slate-300">✖ {{ __('site.home_price_feat_uiux') }}</li>
            </ul>
            <a href="https://wa.me/6289626312680?text=Saya%20ingin%20mengambil%20Paket%20Basic%20(Rp%20500.000)" target="_blank" class="btn btn-ghost w-full">{{ __('site.home_price_take') }}</a>
        </div>
        {{-- Premium (featured) --}}
        <div class="card price-featured p-7 flex flex-col reveal reveal-d1 relative overflow-hidden">
            <span class="badge badge-gold absolute top-5 right-5">Popular</span>
            <h3 class="text-lg font-bold mb-1">{{ __('site.home_price_premium_title') }}</h3>
            <p class="price-amount text-2xl font-extrabold mb-1">Rp 1.499.999</p>
            <p class="text-slate-300 text-sm mb-5">{{ __('site.home_price_premium_desc') }}</p>
            <ul class="text-left text-sm space-y-2 mb-6 flex-1 text-slate-200">
                <li>✔ {{ __('site.home_price_feat_ready') }}</li>
                <li>✔ {{ __('site.home_price_feat_design_modern') }}</li>
                <li>✔ {{ __('site.home_price_feat_seo_basic') }}</li>
                <li>✔ {{ __('site.home_price_feat_request') }}</li>
                <li>✔ {{ __('site.home_price_feat_multilang') }}</li>
                <li>✔ {{ __('site.home_price_feat_uiux') }}</li>
            </ul>
            <a href="https://wa.me/6289626312680?text=Saya%20ingin%20mengambil%20Paket%20Premium%20(Rp%201.500.000)" target="_blank" class="btn btn-gold w-full">{{ __('site.home_price_take') }}</a>
        </div>
        {{-- Luxury --}}
        <div class="card card-hover p-7 flex flex-col reveal reveal-d2">
            <h3 class="text-lg font-bold mb-1 text-navy-900">{{ __('site.home_price_luxury_title') }}</h3>
            <p class="price-amount text-2xl font-extrabold mb-1 text-navy-900">Rp 3.999.999</p>
            <p class="text-slate-500 text-sm mb-5">{{ __('site.home_price_luxury_desc') }}</p>
            <ul class="text-left text-sm space-y-2 mb-6 flex-1 text-slate-500">
                <li>✔ {{ __('site.home_price_feat_ready') }}</li>
                <li>✔ {{ __('site.home_price_feat_design_unique') }}</li>
                <li>✔ {{ __('site.home_price_feat_seo_advanced') }}</li>
                <li>✔ {{ __('site.home_price_feat_request') }}</li>
                <li>✔ {{ __('site.home_price_feat_uiux') }}</li>
                <li>✔ {{ __('site.home_price_feat_kit_logo') }}</li>
            </ul>
            <a href="https://wa.me/6289626312680?text=Saya%20ingin%20mengambil%20Paket%20Luxury%20(Rp%203.000.000)" target="_blank" class="btn btn-ghost w-full">{{ __('site.home_price_take') }}</a>
        </div>
    </div>
    <div class="text-center mt-8 reveal">
        <p class="text-slate-500 mb-4">{{ __('site.home_price_footer') }}</p>
        <a href="https://wa.me/6289626312680" target="_blank" class="btn btn-wa">{{ __('site.home_price_agent') }}</a>
    </div>
</section>

{{-- ======================= WHY US (dark full-bleed) ======================= --}}
<section class="hero py-20 mt-8">
    <div class="hero-glow a" style="opacity:.4"></div>
    <div class="max-w-6xl mx-auto px-6 relative">
        <div class="max-w-2xl mb-12 reveal">
            <span class="eyebrow on-dark mb-4">Keunggulan</span>
            <h2 class="section-title mb-4 text-white">{{ __('site.home_why_heading') }}</h2>
            <p class="lede" style="color:var(--slate-300)">{{ __('site.home_why_intro') }}</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            @php
                $why = [
                    ['t' => __('site.home_why_allinone_title'), 'd' => __('site.home_why_allinone_desc'), 'p' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                    ['t' => __('site.home_why_price_title'), 'd' => __('site.home_why_price_desc'), 'p' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8V7m0 9v1M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ['t' => __('site.home_why_custom_title'), 'd' => __('site.home_why_custom_desc'), 'p' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4'],
                    ['t' => __('site.home_why_workflow_title'), 'd' => __('site.home_why_workflow_desc'), 'p' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                    ['t' => __('site.home_why_warranty_title'), 'd' => __('site.home_why_warranty_desc'), 'p' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
                    ['t' => __('site.home_why_bonus_title'), 'd' => __('site.home_why_bonus_desc'), 'p' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8V7m0 9v1M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                ];
            @endphp
            @foreach($why as $i => $w)
            <div class="glass-dark rounded-2xl p-6 reveal {{ $i % 3 == 1 ? 'reveal-d1' : ($i % 3 == 2 ? 'reveal-d2' : '') }}">
                <span class="icon-chip on-dark mb-4"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $w['p'] }}"/></svg></span>
                <h3 class="text-white font-bold mb-1.5">{{ $w['t'] }}</h3>
                <p class="text-sm" style="color:var(--slate-400)">{{ $w['d'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ======================= WORKFLOW ======================= --}}
<section class="max-w-6xl mx-auto px-6 py-20">
    <div class="max-w-2xl mb-12 reveal">
        <span class="eyebrow mb-4">Alur Kerja</span>
        <h2 class="section-title mb-4">Proses yang transparan &amp; terukur.</h2>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-y-8 gap-x-4">
        @php
            $steps = [
                ['Requirement','M9 11l3 3L22 4M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11'],
                ['Analysis','M11 4a7 7 0 100 14 7 7 0 000-14zM21 21l-4.3-4.3'],
                ['UI / UX','M12 19l7-7 3 3-7 7-3-3zM18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z'],
                ['Development','M16 18l6-6-6-6M8 6l-6 6 6 6'],
                ['Deployment','M12 2v13M8 11l4 4 4-4M4 17v3h16v-3'],
                ['Maintenance','M14.7 6.3a4 4 0 00-5.4 5.4L3 18v3h3l6.3-6.3a4 4 0 005.4-5.4l-2.3 2.3-2-2z'],
            ];
        @endphp
        @foreach($steps as $i => $s)
        <div class="flex flex-col items-center text-center reveal {{ 'reveal-d'.($i % 4) }}">
            <div class="tl-node {{ $i == 5 ? 'text-flame-600' : '' }}"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $s[1] }}"/></svg></div>
            <div class="text-[11px] font-bold tracking-widest text-slate-400 mt-3">STEP 0{{ $i+1 }}</div>
            <div class="font-semibold text-sm mt-1 text-navy-900">{{ $s[0] }}</div>
        </div>
        @endforeach
    </div>
</section>

{{-- ======================= AFFILIATE BANNER ======================= --}}
<section class="max-w-6xl mx-auto px-6 pb-8">
    <div class="border-grad p-1 reveal">
        <div class="rounded-[24px] bg-white px-6 py-5 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-navy-800 font-medium text-sm">
                {{ __('site.affiliate_banner_text') }}
            </p>
            <a href="https://lynk.id/marfino3028" target="_blank" class="btn btn-gold text-sm whitespace-nowrap">lynk.id/marfino3028</a>
        </div>
    </div>
</section>

{{-- ======================= CONTACT CTA ======================= --}}
<section class="hero py-20 mt-10">
    <div class="hero-glow c" style="opacity:.5"></div>
    <div class="max-w-4xl mx-auto px-6 text-center relative reveal">
        <span class="eyebrow on-dark mb-4" style="display:inline-flex">Hubungi Kami</span>
        <h2 class="section-title text-white mb-4">Punya proyek? Mari kita bangun.</h2>
        <p class="lede mb-8 mx-auto max-w-xl" style="color:var(--slate-300)">
            Ceritakan kebutuhan Anda — kami balas langsung dengan estimasi dan langkah berikutnya.
        </p>
        <div class="flex flex-wrap justify-center gap-3">
            <a href="https://wa.me/6289626312680" target="_blank" class="btn btn-gold">WhatsApp 0896-2631-2680</a>
            <a href="mailto:marfinohamzah455@gmail.com" class="btn btn-outline-light">marfinohamzah455@gmail.com</a>
        </div>
    </div>
</section>

@endsection
