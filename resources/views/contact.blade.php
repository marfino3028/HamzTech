@extends('layouts.app')

@section('mainClass', '')

@section('content')

@php
    $skills = ['Laravel', 'Flutter', 'Vue / Nuxt', 'Next.js', 'Svelte', 'Golang', 'CodeIgniter', 'Phalcon', 'Quasar', 'Tailwind', 'Docker', 'Kubernetes', 'AWS', 'GCP', 'Figma', 'WordPress', 'Jira', 'Trello'];
@endphp

{{-- ======================= HERO ======================= --}}
<section class="hero pt-16 pb-24 lg:pt-20 lg:pb-28">
    <div class="hero-grid"></div>
    <div class="hero-glow a"></div><div class="hero-glow b"></div>
    <div class="max-w-6xl mx-auto px-6 relative">
        <div class="grid lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-7 reveal">
                <span class="eyebrow on-dark mb-5">{{ __('site.contact_eyebrow') }}</span>
                <h1 class="text-4xl sm:text-5xl font-black text-white leading-[1.08]">{{ __('site.contact_hero_title') }}</h1>
                <p class="lede mt-6 max-w-xl" style="color:var(--slate-300)">{{ __('site.contact_hero_lede') }}</p>
                <div class="flex flex-wrap gap-3 mt-8">
                    <a href="https://wa.me/6289626312680?text={{ rawurlencode(__('site.home_hero_cta_wa_text')) }}" target="_blank" class="btn btn-gold">
                        {{ __('site.home_hero_cta') }}
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                    </a>
                    <a href="mailto:marfinohamzah455@gmail.com" class="btn btn-outline-light">marfinohamzah455@gmail.com</a>
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
                    <ul class="space-y-3 text-sm text-slate-300">
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-flame-400 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s-7-6.2-7-11.5a7 7 0 0114 0C19 14.8 12 21 12 21z"/><circle cx="12" cy="9.5" r="2.5"/></svg>
                            {{ __('site.contact_location') }}
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-flame-400 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="7" y="2" width="10" height="20" rx="2"/><path d="M11 18h2"/></svg>
                            0896-2631-2680
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-flame-400 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg>
                            marfinohamzah455@gmail.com
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ======================= FORM + DIRECT CONTACT ======================= --}}
<section class="max-w-6xl mx-auto px-6 -mt-12 relative z-10">
    <div class="grid lg:grid-cols-12 gap-5">
        <div class="card p-7 lg:col-span-7 reveal">
            <h2 class="text-xl font-bold text-navy-900 mb-5">{{ __('site.contact_wa_heading') }}</h2>
            <form id="whatsappForm" class="space-y-4">
                <div>
                    <label for="name" class="block text-sm font-semibold text-navy-800 mb-1.5">{{ __('site.contact_label_name') }}</label>
                    <input type="text" id="name" name="name" required
                           class="w-full rounded-xl border border-slate-200 bg-slate-50 py-2.5 px-4 text-navy-900 focus:outline-none focus:ring-2 focus:ring-flame-400 focus:border-transparent transition">
                </div>
                <div>
                    <label for="message" class="block text-sm font-semibold text-navy-800 mb-1.5">{{ __('site.contact_label_message') }}</label>
                    <textarea id="message" name="message" rows="4" required placeholder="{{ __('site.contact_placeholder_message') }}"
                              class="w-full rounded-xl border border-slate-200 bg-slate-50 py-2.5 px-4 text-navy-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-flame-400 focus:border-transparent transition"></textarea>
                </div>
                <button type="submit" class="btn btn-wa">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
                    {{ __('site.contact_submit') }}
                </button>
                <p class="text-xs text-slate-400">{{ __('site.home_hero_cta_note') }}</p>
            </form>
        </div>

        <div class="card p-7 lg:col-span-5 reveal reveal-d1">
            <h2 class="text-xl font-bold text-navy-900 mb-5">{{ __('site.contact_info_heading') }}</h2>
            <div class="space-y-3">
                <a href="https://wa.me/6289626312680" target="_blank" class="flex items-center gap-4 p-3 rounded-xl hover:bg-slate-50 transition">
                    <span class="icon-chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 01-13.3 7.9L3 21l1.1-4.6A9 9 0 1121 12z"/></svg></span>
                    <span><span class="block text-xs uppercase tracking-wider text-slate-400">WhatsApp</span><span class="font-semibold text-navy-900">0896-2631-2680</span></span>
                </a>
                <a href="mailto:marfinohamzah455@gmail.com" class="flex items-center gap-4 p-3 rounded-xl hover:bg-slate-50 transition">
                    <span class="icon-chip gold"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></span>
                    <span class="min-w-0"><span class="block text-xs uppercase tracking-wider text-slate-400">Email</span><span class="font-semibold text-navy-900 break-all">marfinohamzah455@gmail.com</span></span>
                </a>
                <a href="https://github.com/marfino3028" target="_blank" class="flex items-center gap-4 p-3 rounded-xl hover:bg-slate-50 transition">
                    <span class="icon-chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 18l6-6-6-6M8 6l-6 6 6 6"/></svg></span>
                    <span><span class="block text-xs uppercase tracking-wider text-slate-400">GitHub · GitLab</span><span class="font-semibold text-navy-900">marfino3028 · marfinohamzah455</span></span>
                </a>
            </div>
            <p class="text-sm text-slate-500 mt-5">{{ __('site.contact_about_open') }}</p>
        </div>
    </div>
</section>

{{-- ======================= OFFICES (data: config/company.php) ======================= --}}
<section class="max-w-6xl mx-auto px-6 pt-20">
    <div class="max-w-2xl mb-10 reveal">
        <span class="eyebrow mb-4">{{ __('site.footer_offices_label') }}</span>
        <h2 class="section-title mb-4">{{ __('site.contact_offices_heading') }}</h2>
        <p class="lede">{{ __('site.contact_offices_intro') }}</p>
    </div>
    <div class="grid md:grid-cols-2 gap-5">
        @foreach (config('company.offices') as $office)
        <div class="card card-hover overflow-hidden flex flex-col reveal {{ $loop->index ? 'reveal-d1' : '' }}">
            <iframe src="https://maps.google.com/maps?q={{ $office['lat'] }},{{ $office['lng'] }}&z=16&output=embed"
                    class="w-full h-60 border-0 border-b border-slate-200" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="{{ $office['name'] }}"></iframe>
            <div class="p-6 flex flex-col flex-1">
                <div class="flex items-center justify-between gap-3 mb-2">
                    <h3 class="font-bold text-lg text-navy-900">{{ $office['name'] }}</h3>
                    <span class="badge badge-blue shrink-0">{{ $office['city'] }}</span>
                </div>
                <p class="text-sm text-slate-500 leading-relaxed mb-5 flex-1">{{ $office['address'] }}</p>
                <a href="{{ $office['maps'] }}" target="_blank" rel="noopener" class="btn btn-ghost text-sm self-start">
                    {{ __('site.contact_offices_open_maps') }}
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- ======================= ABOUT ======================= --}}
<section class="max-w-6xl mx-auto px-6 pt-20">
    <div class="grid lg:grid-cols-12 gap-5">
        <div class="card p-7 lg:col-span-7 reveal">
            <span class="eyebrow mb-4">{{ __('site.contact_about_heading') }}</span>
            <p class="text-slate-600 leading-relaxed">{{ __('site.contact_about_intro') }}</p>
            <p class="text-slate-500 text-sm mt-4">{{ __('site.contact_about_portfolio') }}</p>

            <h3 class="font-bold text-navy-900 mt-7 mb-3">{{ __('site.contact_skills_heading') }}</h3>
            <div class="flex flex-wrap gap-2">
                @foreach ($skills as $skill)
                    <span class="badge">{{ $skill }}</span>
                @endforeach
            </div>
        </div>

        <div class="lg:col-span-5 space-y-5">
            <div class="card p-7 reveal reveal-d1">
                <span class="eyebrow mb-4">{{ __('site.contact_exp_heading') }}</span>
                <ul class="space-y-3 text-sm text-slate-600">
                    @foreach (range(1, 4) as $i)
                    <li class="flex gap-2"><span class="text-flame-500">➝</span><span>{!! __('site.contact_exp_item' . $i) !!}</span></li>
                    @endforeach
                </ul>
            </div>
            <div class="card p-7 reveal reveal-d2">
                <span class="eyebrow mb-4">{{ __('site.contact_edu_heading') }}</span>
                <ul class="space-y-4 text-sm">
                    @foreach ([1, 2] as $i)
                    <li>
                        <div class="font-bold text-navy-900">{{ __('site.contact_edu_school' . $i . '_name') }}</div>
                        <div class="text-xs text-slate-400 mt-0.5">{{ __('site.contact_edu_school' . $i . '_meta') }}</div>
                        <div class="text-slate-600 mt-1">{{ __('site.contact_edu_school' . $i . '_desc') }}</div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

<script>
document.getElementById('whatsappForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const name = document.getElementById('name').value;
    const message = document.getElementById('message').value;
    const encodedMessage = encodeURIComponent(`Halo HamzTech, saya ${name}.\n${message}`);
    window.open(`https://wa.me/6289626312680?text=${encodedMessage}`, '_blank');
});
</script>
@endsection
