@extends('layouts.app')

@section('content')
<section class="py-16 px-4 sm:px-8 lg:px-20 bg-white text-gray-800">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl font-bold mb-6 flex items-center gap-2">
            <span>🏢</span> Tentang <span class="text-blue-600">HamzTech</span>
        </h2>
        <p class="mb-6 text-lg leading-relaxed">
            <strong>HamzTech</strong> adalah penyedia solusi teknologi digital yang berfokus pada pengembangan aplikasi web dan mobile, sistem informasi, serta transformasi digital untuk UMKM, sekolah, instansi, dan bisnis di berbagai sektor. Dengan pengalaman dan portofolio yang terus berkembang, HamzTech berkomitmen memberikan layanan IT yang cepat, tepat, dan efisien.
        </p>
        <p class="mb-10 text-lg leading-relaxed">
            Kami percaya bahwa teknologi harus menjadi alat bantu, bukan beban. Oleh karena itu, setiap produk yang kami kembangkan didesain untuk mudah digunakan, fleksibel, dan sesuai dengan kebutuhan pengguna.
        </p>

        <hr class="my-10 border-gray-300">

        <h3 class="text-2xl font-semibold mb-4">💼 Layanan Kami</h3>
        <div class="grid sm:grid-cols-2 gap-6 text-base">
            <ul class="list-disc pl-5 space-y-1">
                <li>Pembuatan Website & Web App</li>
                <li>Company Profile</li>
                <li>Sistem Informasi Sekolah / Inventaris</li>
                <li>E-commerce & Katalog Produk</li>
                <li>Landing Page Promosi</li>
            </ul>
            <ul class="list-disc pl-5 space-y-1">
                <li>Pengembangan Aplikasi Mobile (Flutter)</li>
                <li>Android & iOS App</li>
                <li>Terintegrasi dengan backend</li>
                <li>Desain UI/UX & Frontend Modern</li>
                <li>Tailwind, Vue, React, Svelte</li>
            </ul>
            <ul class="list-disc pl-5 space-y-1">
                <li>Tampilan profesional & responsif</li>
                <li>Custom System Development</li>
                <li>Sistem Absensi, POS, ERP, dan lainnya</li>
                <li>Sesuai kebutuhan instansi atau bisnis Anda</li>
                <li>Integrasi Hardware</li>
            </ul>
            <ul class="list-disc pl-5 space-y-1">
                <li>Printer thermal, cash drawer, QR scanner, dll</li>
            </ul>
        </div>

        <hr class="my-10 border-gray-300">

        <h3 class="text-2xl font-semibold mb-4">💡 Mengapa Memilih HamzTech?</h3>
        <ul class="list-none space-y-2 text-base">
            <li>✅ Berpengalaman di berbagai proyek digital seperti pembuatan web, aplikasi, design, fotografi, videografi, logo, perbaikan / perakitan pc & laptop</li>
            <li>✅ Fullstack Developer: Backend, Frontend, dan Mobile</li>
            <li>✅ Fokus pada solusi UMKM dan instansi lokal</li>
            <li>✅ Desain modern & ramah pengguna</li>
            <li>✅ Dukungan & pemeliharaan jangka panjang</li>
        </ul>

        <hr class="my-10 border-gray-300">

        <h3 class="text-2xl font-semibold mb-4">📍 Area Layanan</h3>
        <p class="text-lg">Kami melayani secara online maupun door-to-door untuk wilayah:</p>
        <p class="text-blue-700 font-semibold mt-2">Solo, Klaten, Cikarang, dan Jakarta Pusat</p>
    </div>
</section>
@endsection