<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#04182C">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo-mark.png') }}">
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
                         class="absolute right-0 mt-3 w-52 rounded-2xl overflow-hidden glass-dark shadow-xl z-50" style="display:none">
                        <a href="/services" class="block px-4 py-2.5 text-sm text-slate-200 hover:bg-white/10">{{ __('site.nav_services') }}</a>
                        <a href="/jasa-it-solo" class="block px-4 py-2.5 text-sm text-slate-200 hover:bg-white/10">{{ __('site.nav_services_solo') }}</a>
                        <a href="/jasa-it-klaten" class="block px-4 py-2.5 text-sm text-slate-200 hover:bg-white/10">{{ __('site.nav_services_klaten') }}</a>
                        <a href="/jasa-it-cikarang" class="block px-4 py-2.5 text-sm text-slate-200 hover:bg-white/10">{{ __('site.nav_services_cikarang') }}</a>
                        <a href="/jasa-it-jakarta" class="block px-4 py-2.5 text-sm text-slate-200 hover:bg-white/10">{{ __('site.nav_services_jakarta') }}</a>
                    </div>
                </div>
                <a href="/portofolio" class="navlink">{{ __('site.nav_portfolio') }}</a>
                <a href="/about" class="navlink">{{ __('site.nav_about') }}</a>
                <a href="/contact" class="navlink">{{ __('site.nav_contact') }}</a>

                <div class="flex items-center gap-2 text-sm">
                    <a href="{{ '/lang/id' }}" class="{{ app()->getLocale() === 'id' ? 'text-flame-400 font-bold' : 'text-slate-400 hover:text-white' }} transition">ID</a>
                    <span class="text-slate-600">/</span>
                    <a href="{{ '/lang/en' }}" class="{{ app()->getLocale() === 'en' ? 'text-flame-400 font-bold' : 'text-slate-400 hover:text-white' }} transition">EN</a>
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
            <div class="flex items-center gap-3 pt-2 border-t border-white/10">
                <a href="{{ '/lang/id' }}" class="{{ app()->getLocale() === 'id' ? 'text-flame-400 font-bold' : 'text-slate-400' }}">ID</a>
                <span class="text-slate-600">/</span>
                <a href="{{ '/lang/en' }}" class="{{ app()->getLocale() === 'en' ? 'text-flame-400 font-bold' : 'text-slate-400' }}">EN</a>
            </div>
        </div>
    </nav>

    <!-- ============================ MAIN ============================ -->
    <main class="@yield('mainClass', 'p-6 max-w-6xl mx-auto')">
        @yield('content')
    </main>

    <!-- Floating WhatsApp CTA -->
    <a href="https://lynk.id/marfino3028" target="_blank"
        class="no-print fixed bottom-5 right-5 btn btn-gold shadow-lg z-50 text-sm">
        {{ __('site.promo_button') }}
    </a>

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
            <a href="https://lynk.id/marfino3028" target="_blank" class="btn btn-gold w-full">{{ __('site.promo_popup_cta') }}</a>
            <button @click="close()" class="block mt-3 text-sm text-slate-400 hover:underline mx-auto">{{ __('site.promo_popup_close') }}</button>
        </div>
    </div>

    <!-- WhatsApp helper toast -->
    <div x-data="{ open: true }" x-show="open" x-transition
        class="no-print fixed bottom-5 left-5 btn-wa px-4 py-3 rounded-2xl shadow-lg z-40 flex items-center gap-2 text-sm text-white"
        x-init="setTimeout(() => open = false, 8000)">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 14h.01M16 10h.01M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z"/>
        </svg>
        <span>{{ __('site.wa_helper_text') }} <a href="https://wa.me/6289626312680" target="_blank" class="underline font-semibold">{{ __('site.wa_helper_link') }}</a></span>
    </div>

    <!-- ============================ FOOTER ============================ -->
    <footer class="bg-navy-950 text-slate-400 mt-16">
        <div class="max-w-6xl mx-auto px-6 py-12">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                <div>
                    <a href="/" class="flex items-center gap-2.5 mb-3">
                        <img src="{{ asset('images/logo-mark.png') }}" alt="HamzTech" class="brand-logo">
                        <span class="text-lg font-extrabold text-white">Hamz<span class="text-gradient-gold">Tech</span></span>
                    </a>
                    <p class="text-sm max-w-sm">Software Development Company — Web · Mobile · AI · Automation · Cloud · Government Digital Solutions.</p>
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
