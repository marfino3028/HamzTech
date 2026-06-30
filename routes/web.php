<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortofolioController;

// Data portofolio tunggal: config/portfolios.php

Route::get('/', function () {
    $projects = array_values(config('portfolios'));
    return view('home', compact('projects'));
});

Route::get('/about', function () {
    $projects = array_values(config('portfolios'));
    return view('about', compact('projects'));
});

Route::get('/services', function () {
    $services = [
        ['title' => 'Rakit PC/Laptop', 'desc' => 'Konsultasi, rakit, dan install lengkap.'],
        ['title' => 'Servis PC/Laptop', 'desc' => 'Install ulang, upgrade SSD, optimasi.'],
        ['title' => 'Digital Marketing', 'desc' => 'Iklan Google/FB, SEO lokal, IG ads.'],
        ['title' => 'Landing Page Cepat', 'desc' => '1 Hari jadi landing page profesional.'],
        ['title' => 'Pembuatan Aplikasi/Web/CMS', 'desc' => 'Custom sesuai kebutuhan UMKM/perusahaan.'],
        ['title' => 'Copywriting', 'desc' => 'Tingkatkan penjualan dengan tulisan meyakinkan.'],
        ['title' => 'Konsultasi & Bantuan IT', 'desc' => 'Tanya apa pun, bisa dibantu.'],
    ];
    return view('services', compact('services'));
});

Route::view('/contact', 'contact');

Route::get('/portofolio', [PortofolioController::class, 'index'])->name('portofolio.index');
Route::get('/portofolio/{slug}', [PortofolioController::class, 'show'])->name('portofolio.show');

Route::view('/jasa-it-solo', 'lokasi.solo');
Route::view('/jasa-it-klaten', 'lokasi.klaten');
Route::view('/jasa-it-cikarang', 'lokasi.cikarang');
Route::view('/jasa-it-jakarta', 'lokasi.jakarta');
Route::view('/affiliate', 'affiliate');
