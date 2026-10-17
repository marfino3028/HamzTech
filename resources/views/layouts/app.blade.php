<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#071A3D">
    {{-- ?v= memaksa browser mengambil ulang ikon setelah logo diganti --}}
    <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('images/favicon.png') }}?v={{ @filemtime(public_path('images/favicon.png')) }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}?v={{ @filemtime(public_path('favicon.ico')) }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo-mark.png') }}?v={{ @filemtime(public_path('images/logo-mark.png')) }}">
    <title>{{ $title ?? __('site.default_title') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @php
        // Resolve hashed Vite assets from the manifest so they never go stale after a rebuild.
        $viteManifest = @json_decode(@file_get_contents(public_path('assets/.vite/manifest.json')), true) ?: [];
        $viteCss = $viteManifest['resources/css/app.css']['file'] ?? 'assets/app.css';
        $viteJs  = $viteManifest['resources/js/app.js']['file'] ?? 'assets/app.js';
    @endphp
    <link rel="stylesheet" crossorigin href="{{ asset('assets/' . $viteCss) }}">
    <script type="module" crossorigin src="{{ asset('assets/' . $viteJs) }}"></script>
</head>
<body class="bg-slate-50 text-navy-900">
    <div class="page-bg"></div>

    <!-- ============================ NAV ============================ -->
    <nav x-data="{ open: false }" class="nav">
        <div class="max-w-6xl mx-auto px-4 h-[68px] flex justify-between items-center">
            <a href="/" class="flex items-center gap-2.5">
                <img src="{{ asset('images/logo-mark.png') }}" alt="HamzTech" class="brand-logo">
                <span class="text-lg font-extrabold text-white tracking-tight">Hamz<span class="text-gradient-gold">Tech</span></span>
            </a>

            <div class="hidden md:flex items-center gap-7">
                <a href="/" class="navlink">{{ __('site.nav_home') }}</a>
                <div class="relative" x-data="{ o:false }" @mouseenter="o=true" @mouseleave="o=false">
                    <button @click="o=!o" class="navlink inline-flex items-center gap-1">
                        {{ __('site.nav_services') }}
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M5.5 7l4.5 4 4.5-4z"/></svg>
                    </button>
                    <div x-show="o" x-transition
                         class="nav-dropdown absolute right-0 mt-3 w-56 z-50" style="display:none">
                        <a href="/services" class="nav-dropdown__item">{{ __('site.nav_services') }}</a>
                        <a href="/jasa-it-solo" class="nav-dropdown__item">{{ __('site.nav_services_solo') }}</a>
                        <a href="/jasa-it-klaten" class="nav-dropdown__item">{{ __('site.nav_services_klaten') }}</a>
                        <a href="/jasa-it-cikarang" class="nav-dropdown__item">{{ __('site.nav_services_cikarang') }}</a>
                        <a href="/jasa-it-jakarta" class="nav-dropdown__item">{{ __('site.nav_services_jakarta') }}</a>
                    </div>
                </div>
                <a href="/portofolio" class="navlink">{{ __('site.nav_portfolio') }}</a>
                <a href="/about" class="navlink">{{ __('site.nav_about') }}</a>
                <a href="/contact" class="navlink">{{ __('site.nav_contact') }}</a>

                <div class="relative" x-data="{ l:false }" @click.outside="l=false">
                    <button @click="l=!l" class="lang-btn" aria-haspopup="true" :aria-expanded="l">
                        <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 010 18M12 3a14 14 0 000 18"/></svg>
                        {{ strtoupper(app()->getLocale()) }}
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20"><path d="M5.5 7l4.5 4 4.5-4z"/></svg>
                    </button>
                    <div x-show="l" x-transition class="nav-dropdown absolute right-0 mt-3 w-44 z-50" style="display:none">
                        @foreach (config('site_locales') as $code => $label)
                        <a href="/lang/{{ $code }}" class="nav-dropdown__item {{ app()->getLocale() === $code ? 'is-active' : '' }}">{{ $label }}</a>
                        @endforeach
                    </div>
                </div>
                <a href="https://wa.me/6289626312680" target="_blank" class="btn btn-gold py-2 px-4 text-sm">{{ __('site.nav_contact') }}</a>
            </div>

            <button @click="open=!open" class="md:hidden text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <div x-show="open" x-transition class="md:hidden px-4 pb-4 space-y-1 bg-navy-950/95 backdrop-blur border-t border-white/10" style="display:none">
            <a href="/" class="block py-2 navlink">{{ __('site.nav_home') }}</a>
            <a href="/services" class="block py-2 navlink">{{ __('site.nav_services') }}</a>
            <a href="/portofolio" class="block py-2 navlink">{{ __('site.nav_portfolio') }}</a>
            <a href="/about" class="block py-2 navlink">{{ __('site.nav_about') }}</a>
            <a href="/contact" class="block py-2 navlink">{{ __('site.nav_contact') }}</a>
            <div class="flex flex-wrap items-center gap-2 pt-3 border-t border-white/10">
                @foreach (config('site_locales') as $code => $label)
                <a href="/lang/{{ $code }}" class="lang-pill {{ app()->getLocale() === $code ? 'is-active' : '' }}">{{ $label }}</a>
                @endforeach
            </div>
        </div>
    </nav>

    <!-- ============================ MAIN ============================ -->
    <main class="@yield('mainClass', 'p-6 max-w-6xl mx-auto')">
        @yield('content')
    </main>

    <!-- Tombol mengambang kanan bawah: WhatsApp (bulat) di atas, Promo & Afiliasi (pill) di bawah -->
    <div class="fab-dock no-print" x-data="{ tip: true }" x-init="setTimeout(() => tip = false, 7000)">
        <div class="fab-row">
            <a x-show="tip" x-transition.opacity href="https://wa.me/6289626312680" target="_blank" rel="noopener" class="fab-tip" style="display:none">
                {{ __('site.wa_helper_text') }} <b>{{ __('site.wa_helper_link') }}</b>
            </a>
            <a href="https://wa.me/6289626312680" target="_blank" rel="noopener" class="fab-wa" aria-label="WhatsApp HamzTech">
                <svg viewBox="0 0 32 32" class="w-6 h-6" fill="currentColor" aria-hidden="true"><path d="M16.04 3C8.9 3 3.1 8.8 3.1 15.94c0 2.28.6 4.5 1.73 6.46L3 29l6.77-1.78a12.9 12.9 0 0 0 6.27 1.6h.01c7.13 0 12.93-5.8 12.93-12.93C28.98 8.8 23.18 3 16.04 3Zm0 23.63h-.01a10.7 10.7 0 0 1-5.46-1.5l-.39-.23-4.02 1.05 1.07-3.92-.25-.4a10.7 10.7 0 0 1-1.64-5.7c0-5.92 4.82-10.73 10.74-10.73 5.92 0 10.73 4.81 10.73 10.73 0 5.92-4.82 10.7-10.77 10.7Zm5.89-8.03c-.32-.16-1.91-.94-2.2-1.05-.3-.11-.51-.16-.73.16-.21.32-.84 1.05-1.03 1.27-.19.21-.38.24-.7.08-.32-.16-1.36-.5-2.59-1.6-.96-.85-1.6-1.9-1.79-2.22-.19-.32-.02-.5.14-.66.15-.14.32-.38.48-.56.16-.19.21-.32.32-.54.1-.21.05-.4-.03-.56-.08-.16-.73-1.75-.99-2.4-.26-.63-.53-.54-.73-.55h-.62c-.21 0-.56.08-.86.4-.3.32-1.13 1.1-1.13 2.69 0 1.58 1.16 3.12 1.32 3.33.16.21 2.28 3.48 5.52 4.88.77.33 1.37.53 1.84.68.77.25 1.48.21 2.03.13.62-.09 1.91-.78 2.18-1.53.27-.75.27-1.4.19-1.53-.08-.13-.29-.21-.61-.37Z"/></svg>
            </a>
        </div>
        <a href="https://affiliate.hamztech.my.id" class="fab-promo">
            <span class="fab-promo__icon" aria-hidden="true">🎁</span>
            <span>{{ __('site.nav_affiliate') }}</span>
        </a>
    </div>

    <!-- Affiliate Pop-up -->
    <div x-data="promoPopup()" x-show="show" id="promoPopup"
        x-transition:enter="transition ease-out duration-500"
        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
        class="fixed inset-0 bg-navy-950/60 backdrop-blur-sm flex items-center justify-center z-50 p-4"
        style="display: none;" x-init="init()">
        <div class="card p-7 max-w-sm w-full text-center">
            <div class="icon-chip gold mx-auto mb-4"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l2.4 7.4H22l-6 4.4 2.3 7.2L12 16.6 5.7 21l2.3-7.2-6-4.4h7.6z"/></svg></div>
            <h2 class="text-xl font-bold mb-2 text-navy-900">{{ __('site.promo_popup_heading') }}</h2>
            <p class="mb-5 text-slate-500 text-sm">{{ __('site.promo_popup_body') }}</p>
            <a href="https://affiliate.hamztech.my.id" class="btn btn-gold w-full">{{ __('site.promo_popup_cta') }}</a>
            <button @click="close()" class="block mt-3 text-sm text-slate-400 hover:underline mx-auto">{{ __('site.promo_popup_close') }}</button>
        </div>
    </div>


    <!-- ============================ FOOTER ============================ -->
    <footer class="bg-navy-950 text-slate-400 @yield('footerGap', 'mt-16')">
        <div class="max-w-6xl mx-auto px-6 py-12">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                <div>
                    <a href="/" class="flex items-center gap-2.5 mb-3">
                        <img src="{{ asset('images/logo-mark.png') }}" alt="HamzTech" class="brand-logo">
                        <span class="text-lg font-extrabold text-white">Hamz<span class="text-gradient-gold">Tech</span></span>
                    </a>
                    <p class="text-sm max-w-sm">Software Development Company — Web · Mobile · AI · Automation · Cloud · Government Digital Solutions.</p>
                    <div class="mt-4 space-y-2 text-sm max-w-sm">
                        @foreach (config('company.offices') as $office)
                        <a href="{{ $office['maps'] }}" target="_blank" rel="noopener" class="flex gap-2 hover:text-white transition">
                            <span class="text-flame-400">📍</span><span><strong class="text-slate-200">{{ $office['name'] }}</strong> — {{ $office['address'] }}</span>
                        </a>
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-wrap gap-x-8 gap-y-2 text-sm">
                    <a href="/about" class="hover:text-white transition">{{ __('site.nav_about') }}</a>
                    <a href="/services" class="hover:text-white transition">{{ __('site.nav_services') }}</a>
                    <a href="/portofolio" class="hover:text-white transition">{{ __('site.nav_portfolio') }}</a>
                    <a href="/contact" class="hover:text-white transition">{{ __('site.nav_contact') }}</a>
                </div>
            </div>
            <div class="my-8 h-px" style="background:linear-gradient(90deg,transparent,rgba(255,255,255,.12),transparent)"></div>
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4 text-sm">
                <p>{{ __('site.footer_copyright') }}</p>
                <div class="flex items-center gap-5">
                    <a href="https://github.com/marfino3028" target="_blank" class="hover:text-white transition">GitHub</a>
                    <a href="https://gitlab.com/marfinohamzah455" target="_blank" class="hover:text-white transition">GitLab</a>
                    <a href="{{ config('profile.linkedin') }}" target="_blank" rel="noopener" class="hover:text-white transition">LinkedIn</a>
                    <a href="{{ config('profile.upwork') }}" target="_blank" rel="noopener" class="hover:text-white transition">Upwork</a>
                    <a href="https://wa.me/6289626312680" target="_blank" class="hover:text-white transition">WhatsApp</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Promo popup once -->
    <script>
        function promoPopup() {
            return {
                show: false,
                init() {
                    if (!localStorage.getItem('promo_shown')) {
                        this.show = true;
                        setTimeout(() => this.close(), 6000);
                    }
                },
                close() { this.show = false; localStorage.setItem('promo_shown', 'yes'); }
            }
        }
    </script>

    <!-- Nav shadow · scroll reveal · animated counters -->
    <script>
        (function () {
            var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            var nav = document.querySelector('.nav');
            function onScroll() { if (nav) nav.classList.toggle('scrolled', window.scrollY > 20); }
            onScroll(); window.addEventListener('scroll', onScroll, { passive: true });

            var reveals = document.querySelectorAll('.reveal');
            if (reduce || !('IntersectionObserver' in window)) {
                reveals.forEach(function (el) { el.classList.add('is-visible'); });
            } else {
                var io = new IntersectionObserver(function (entries, obs) {
                    entries.forEach(function (e) {
                        if (e.isIntersecting) { e.target.classList.add('is-visible'); obs.unobserve(e.target); }
                    });
                }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });
                reveals.forEach(function (el) { io.observe(el); });
                // failsafe: reveal everything after 3s in case observer misses
                setTimeout(function () { reveals.forEach(function (el) { el.classList.add('is-visible'); }); }, 3000);
            }

            function runCounter(el) {
                var target = parseFloat(el.dataset.count), suffix = el.dataset.suffix || '';
                if (reduce) { el.textContent = target + suffix; return; }
                var start = null, dur = 1400;
                function tick(now) {
                    if (!start) start = now;
                    var p = Math.min((now - start) / dur, 1), eased = 1 - Math.pow(1 - p, 3);
                    el.textContent = Math.round(target * eased) + suffix;
                    if (p < 1) requestAnimationFrame(tick);
                }
                requestAnimationFrame(tick);
            }
            var counters = document.querySelectorAll('[data-count]');
            if (counters.length) {
                if (!('IntersectionObserver' in window)) { counters.forEach(runCounter); }
                else {
                    var co = new IntersectionObserver(function (entries, obs) {
                        entries.forEach(function (e) { if (e.isIntersecting) { runCounter(e.target); obs.unobserve(e.target); } });
                    }, { threshold: 0.5 });
                    counters.forEach(function (el) { co.observe(el); });
                }
            }
        })();
    </script>
</body>
</html>
