<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <title>{{ $title ?? 'HamzTech Portofolio' }}</title>            
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" crossorigin href="{{ asset('assets/assets/app-rlFf-2Yp.css') }}">
    <script type="module" crossorigin src="{{ asset('assets/assets/app-T1DpEqax.js') }}"></script>
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
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

    <!-- Why Choose Us Section -->
    <section class="bg-gray-900 text-white py-12 px-4">
        <div class="container mx-auto text-center">
            <a href="#" class="text-blue-300 hover:underline mb-4 inline-block">WHY CHOOSE US ?</a>
            <h2 class="text-4xl font-bold mb-4">KEUNTUNGAN MENGGUNAKAN LAYANAN HamzTech</h2>
            <p class="text-gray-300 max-w-2xl mx-auto mb-8">
                Karena Website bukan hanya soal bagus atau tidaknya, tapi bagaimana cara maintenancenya untuk perkembangan bisnis kamu.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white bg-opacity-10 p-6 rounded-lg shadow-lg">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Layanan All in One</h3>
                    <p class="text-sm text-gray-300">Tak hanya Website, HamzTech juga bisa membuatkan kamu Design Promosi & Skalian Iklan di Google.</p>
                </div>
                <div class="bg-white bg-opacity-10 p-6 rounded-lg shadow-lg">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Harga Bisa Request</h3>
                    <p class="text-sm text-gray-300">Suka sama HamzTech tapi Harga belum cocok? Kamu bisa tentukan harga websitemu sendiri.</p>
                </div>
                <div class="bg-white bg-opacity-10 p-6 rounded-lg shadow-lg">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Ready to Customs</h3>
                    <p class="text-sm text-gray-300">Sesuai Web Company & Toko Online, HamzTech juga siap untuk membuat Website Kompleks / Custom.</p>
                </div>
                <div class="bg-white bg-opacity-10 p-6 rounded-lg shadow-lg">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Alur Pekerjaan Jelas</h3>
                    <p class="text-sm text-gray-300">Kami memiliki cara kerja yang efisien dan profesional untuk membuat websitemu Go-Online dengan sangat baik.</p>
                </div>
                <div class="bg-white bg-opacity-10 p-6 rounded-lg shadow-lg">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Garanis Selamanya</h3>
                    <p class="text-sm text-gray-300">Tak perlu khawatir soal Support atau Maintenance, HamzTech siap beri Garansi Website Seumur Hidup.</p>
                </div>
                <div class="bg-white bg-opacity-10 p-6 rounded-lg shadow-lg">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Banyak Bonus Gratis</h3>
                    <p class="text-sm text-gray-300">Disetiap Paket Website, HamzTech akan memberikan Bonus yang sangat berguna untuk bisnismu.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Jasa Website Section -->
    <section class="bg-gray-100 py-12 px-4">
        <div class="container mx-auto text-center">
            <a href="#" class="text-blue-600 hover:underline mb-4 inline-block">JASA WEBSITE</a>
            <h2 class="text-4xl font-bold mb-4 text-gray-900">PILIHAN JENIS JASA PEMBUATAN WEBSITE</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-8">
                Dengan Proses Pembuatan Website yang terstruktur dan jelas. HamzTech menjamin kepuasan kamu atas Website yang kami buat. Hindari jasa pembuatan website yang hanya memementingkan kata Desain ketimbang Kerjasama jangka panjang. Website bukan barang sekali beli.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-gray-800 text-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-2">Web Profil</h3>
                    <ul class="text-left text-white text-sm mt-2 space-y-2">
                        <li>Website Company Profile <span class="float-right">➝</span></li>
                        <li>Website Ekspor Komoditas <span class="float-right">➝</span></li>
                        <li>Website Sekolah <span class="float-right">➝</span></li>
                        <li>Website Komunitas / Organisasi <span class="float-right">➝</span></li>
                    </ul>
                    <a href="https://wa.me/6289626312680" target="_blank" class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">Hubungi via WA</a>
                </div>
                <div class="bg-gray-800 text-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-2">Booking</h3>
                    <ul class="text-left text-white text-sm mt-2 space-y-2">
                        <li>Website Tour Travel <span class="float-right">➝</span></li>
                        <li>Website Rental Mobil <span class="float-right">➝</span></li>
                        <li>Website Hotel / Villa <span class="float-right">➝</span></li>
                        <li>Website Sewa Barang <span class="float-right">➝</span></li>
                    </ul>
                    <a href="https://wa.me/6289626312680" target="_blank" class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">Hubungi via WA</a>
                </div>
                <div class="bg-gray-800 text-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-2">Toko Online</h3>
                    <ul class="text-left text-white text-sm mt-2 space-y-2">
                        <li>Website E-Commerce <span class="float-right">➝</span></li>
                        <li>Toko Online Checkout via WA <span class="float-right">➝</span></li>
                        <li>Website Katalog Produk <span class="float-right">➝</span></li>
                        <li>Landing Page Produk <span class="float-right">➝</span></li>
                    </ul>
                    <a href="https://wa.me/6289626312680" target="_blank" class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">Hubungi via WA</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricelist Section -->
    <section class="bg-gray-50 py-12 px-4">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4 text-gray-900">HARGA JASA PEMBUATAN WEBSITE</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-8">
                Berikut ini sekilas harga untuk Jasa Pembuatan Website. Tersedia paket custom untuk menemui kebutuhan request kamu.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Paket Basic</h3>
                    <p class="text-2xl font-bold mb-2 text-gray-800">Rp 500.000</p>
                    <p class="text-gray-600 mb-4">Fokus pada Website siap pakai sederhana. Tanpa ada tambahan lain.</p>
                    <ul class="text-left text-gray-600 text-sm space-y-2 mb-4">
                        <li>✔ Website Siap Pakai</li>
                        <li>✔ Desain Standar</li>
                        <li>✔ Optimasi SEO Dasar</li>
                        <li>✖ Request Fitur</li>
                        <li>✖ Multi Bahasa</li>
                        <li>✖ Optimasi UI/UX</li>
                        <li>✖ Optimasi Speed Loading</li>
                        <li>✖ Bonus Business Kit</li>
                    </ul>
                    <a href="https://wa.me/6289626312680?text=Saya%20ingin%20mengambil%20Paket%20Basic%20(Rp%20500.000)" target="_blank" class="inline-block bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">Ambil Paket Ini</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Paket Premium</h3>
                    <p class="text-2xl font-bold mb-2 text-gray-800">Rp 1.500.000</p>
                    <p class="text-gray-600 mb-4">Paket paling dicari. Tampilan Lebih bagus, Fitur Lebih banyak.</p>
                    <ul class="text-left text-gray-600 text-sm space-y-2 mb-4">
                        <li>✔ Website Siap Pakai</li>
                        <li>✔ Desain Modern</li>
                        <li>✔ Optimasi SEO Dasar</li>
                        <li>✔ Request Fitur</li>
                        <li>✔ Multi Bahasa</li>
                        <li>✔ Optimasi UI/UX</li>
                        <li>✖ Optimasi Speed Loading</li>
                        <li>✖ Bonus Business Kit</li>
                    </ul>
                    <a href="https://wa.me/6289626312680?text=Saya%20ingin%20mengambil%20Paket%20Premium%20(Rp%201.500.000)" target="_blank" class="inline-block bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">Ambil Paket Ini</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Paket Luxury</h3>
                    <p class="text-2xl font-bold mb-2 text-gray-800">Rp 3.000.000</p>
                    <p class="text-gray-600 mb-4">Paket Rekomendasi untuk Perusahaan Profesional. Banyak Bonusnya.</p>
                    <ul class="text-left text-gray-600 text-sm space-y-2 mb-4">
                        <li>✔ Website Siap Pakai</li>
                        <li>✔ Desain Unik / Bisa Request</li>
                        <li>✔ Optimasi SEO Lanjutan</li>
                        <li>✔ Request Fitur</li>
                        <li>✔ Multi Bahasa</li>
                        <li>✔ Optimasi UI/UX</li>
                        <li>✔ Optimasi Speed Loading</li>
                        <li>✔ Bonus Business Kit (+Logo)</li>
                    </ul>
                    <a href="https://wa.me/6289626312680?text=Saya%20ingin%20mengambil%20Paket%20Luxury%20(Rp%203.000.000)" target="_blank" class="inline-block bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">Ambil Paket Ini</a>
                </div>
            </div>
            <p class="text-gray-600 mt-8">Di atas ini hanya sekilas harga Jasa Pembuatan Website dan spesifikasi yang bisa kamu pilih. Lebih jelasnya silahkan hubungi Agent HamzTech.</p>
            <a href="https://wa.me/6289626312680" target="_blank" class="mt-4 inline-block bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700">Agent HamzTech</a>
        </div>
    </section>

    <!-- Main Content -->
    <main class="p-6 max-w-6xl mx-auto">
        @yield('content')
    </main>

    <a href="https://lynk.id/marfino3028" target="_blank"
        class="fixed bottom-5 right-5 bg-pink-600 text-white px-4 py-2 rounded-full shadow-lg hover:bg-pink-700 z-50">
        🎁 Promo & Afiliasi
    </a>

    <!-- Affiliate Pop-up -->
    <div x-data="promoPopup()" x-show="show" id="promoPopup"
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
    <span>Butuh bantuan cepat? <a href="https://wa.me/6289626312680" target="_blank"
                                class="underline font-semibold">Chat via WA!</a></span>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-6 mt-12">
        <div class="container mx-auto text-center">
            <p>© 2025 HamzTech. All rights reserved.</p>
        </div>
    </footer>

    <!-- JS popup sekali tampil -->
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