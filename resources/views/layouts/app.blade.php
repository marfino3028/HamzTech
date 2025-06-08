<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <title>{{ $title ?? 'HamzTech Portofolio' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="font-sans bg-gray-50 text-gray-800">
    <nav x-data="{ open: false }" class="bg-gray-900 text-white shadow-lg">
  <div class="container mx-auto px-4 py-3 flex justify-between items-center">
    <a href="/" class="flex items-center gap-2">
      <img src="{{ asset('images/logo.png') }}" alt="HamzTech Logo" class="h-10 w-auto">
      <span class="text-lg font-bold">HamzTech</span>
    </a>

    <div class="hidden md:flex space-x-6">
      <a href="/" class="hover:text-indigo-400 transition">Beranda</a>
      <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" @click.away="open = false">
            <a href="#" @click.prevent="open = !open" class="hover:text-indigo-400 transition inline-flex items-center">
                Jasa
                <svg class="ml-1 w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M5.5 7l4.5 4 4.5-4z"/></svg>
            </a>
            <div class="absolute bg-indigo-900 shadow rounded mt-2 w-48 z-50 transition-all duration-200" 
                x-show="open" 
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95">
                <a href="/jasa-it-solo" class="block px-4 py-2 hover:bg-indigo-50 hover:text-indigo-500">Jasa IT Solo</a>
                <a href="/jasa-it-klaten" class="block px-4 py-2 hover:bg-indigo-50 hover:text-indigo-500">Jasa IT Klaten</a>
                <a href="/jasa-it-cikarang" class="block px-4 py-2 hover:bg-indigo-50 hover:text-indigo-500">Jasa IT Cikarang</a>
                <a href="/jasa-it-jakarta" class="block px-4 py-2 hover:bg-indigo-50 hover:text-indigo-500">Jasa IT Jakarta</a>
            </div>
        </div>
      <a href="/about" class="hover:text-indigo-400 transition">Tentang</a>
      <a href="/contact" class="hover:text-indigo-400 transition">Kontak</a>
    </div>

    <button @click="open = !open" class="md:hidden focus:outline-none">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>

  <div x-show="open" class="md:hidden px-4 pb-4 space-y-2">
    <a href="/" class="block hover:text-indigo-400">Beranda</a>
    <a href="/jasa" class="block hover:text-indigo-400">Jasa</a>
    <a href="/portofolio" class="block hover:text-indigo-400">Portofolio</a>
    <a href="/kontak" class="block hover:text-indigo-400">Kontak</a>
  </div>
</nav>

    {{-- Main Content --}}

    <main class="p-6 max-w-6xl mx-auto">
        @yield('content')
    </main>
    <a href="https://lynk.id/marfino3028" target="_blank"
        class="fixed bottom-5 right-5 bg-pink-600 text-white px-4 py-2 rounded-full shadow-lg hover:bg-pink-700 z-50">
        🎁 Promo & Afiliasi
        </a>

        {{-- 🔵 Affiliate Pop-up --}}
        <div x-data="promoPopup()" x-show="show"
            x-transition:enter="transition ease-out duration-500"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
            style="display: none;"
            x-init="init()">

            <div class="bg-white rounded-xl p-6 max-w-sm w-full shadow-xl text-center">
                <h2 class="text-xl font-semibold mb-2">🎉 Promo & Afiliasi Spesial!</h2>
                <p class="mb-4">Lihat produk dan jasa terbaik dari saya, bisa bantu kamu upgrade bisnis!</p>
                <a href="https://lynk.id/marfino3028" target="_blank"
                class="bg-pink-600 text-white px-4 py-2 rounded hover:bg-pink-700 transition">Lihat Sekarang</a>
                <button @click="close()" class="block mt-3 text-sm text-gray-500 hover:underline mx-auto">Tutup</button>
            </div>
        </div>

        <div x-data="{ open: true }" x-show="open"
        x-transition
        class="fixed bottom-5 left-5 bg-green-600 text-white px-4 py-3 rounded-lg shadow-lg z-40 flex items-center space-x-2"
        x-init="setTimeout(() => open = false, 8000)">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M8 10h.01M12 14h.01M16 10h.01M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z"/>
        </svg>
        <span>Butuh bantuan cepat? <a href="https://wa.me/6281234567890" target="_blank"
                                    class="underline font-semibold">Chat via WA!</a></span>
    </div>

        {{-- Footer --}}

        {{-- JS popup sekali tampil --}}
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                if (!localStorage.getItem('promo_shown')) {
                    document.getElementById('promoPopup').style.display = 'flex';
                }
            });
            function promoPopup() {
                return {
                    show: false,
                    init() {
                        if (!localStorage.getItem('promo_shown')) {
                            this.show = true;

                            // Tutup otomatis setelah 5 detik
                            setTimeout(() => {
                                this.close();
                            }, 5000);
                        }
                    },
                    close() {
                        this.show = false;
                        localStorage.setItem('promo_shown', 'yes');
                    }
                }
            }
        </script>
</body>
</html>