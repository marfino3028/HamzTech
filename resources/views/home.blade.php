@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-4">Portofolio</h1>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    @foreach ($projects as $project)
    <a href="{{ url('/portofolio/' . $project['slug']) }}" class="block bg-white rounded-2xl shadow p-4 hover:shadow-xl transition transform hover:-translate-y-1">
        <img src="{{ asset('images/portfolio/' . $project['image']) }}" alt="{{ $project['title'] }}" class="w-full h-48 object-cover rounded-md mb-3">
        <h2 class="text-xl font-semibold">{{ $project['title'] }}</h2>
        <p class="text-gray-600 text-sm">{{ $project['desc'] }}</p>
    </a>
@endforeach
</div>

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

<div class="bg-yellow-100 border-l-4 border-yellow-400 p-4 rounded mb-6">
    <p class="font-medium text-yellow-800">
        Cek semua rekomendasi produk terbaik saya di sini:
        <a href="https://lynk.id/marfino3028" target="_blank"
           class="text-blue-600 underline font-semibold">lynk.id/marfino3028</a>
    </p>
</div>
@endsection