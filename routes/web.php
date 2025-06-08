<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Http\Controllers\PortofolioController;

Route::get('/', function () {
    $projects = [
        ['slug' => 'exim-ci3', 'title' => 'Exim', 'image' => 'exim1.png', 'desc' => 'Aplikasi yang disingkat Ekspor Impor adalah sistem yang membantu dalam menentukan negara tujuan ekspor berdasarkan skema Free Trade Agreement (FTA) / Preferential Trade Agreement (PTA) / Comprehensive Economic.Apa itu aplikasi EXIM? Aplikasi yang disingkat Ekspor Impor adalah sistem yang membantu dalam menentukan negara tujuan ekspor berdasarkan skema Free Trade Agreement (FTA) / Preferential Trade Agreement (PTA) / Comprehensive Economic.'],
        ['slug' => 'ritgrow-flutter', 'title' => 'Ritgrow', 'image' => 'ritgrow1.png', 'desc' => 'Ritgrow adalah perusahaan Solusi dan Pengembang Aplikasi yang dibangun atas dedikasi, berisi tim yang berpengalaman di masing - masing bidangnya. Perjalanan panjang telah melahirkan Ritgrow yang akan Fokus pada solusi retail, bukan hanya aplikasi POS tapi keseluruhan solusi yang dapat mendukung perkembangan bisnis ritel di Indonesia. Inovasi adalah sasaran utama kami, menghubungkan semua kebutuhan menjadikan solusi untuk Partner dan Klien.'],
        ['slug' => 'e-kemendag-flutter', 'title' => 'E Kemendag', 'image' => 'ekemendag1.png', 'desc' => 'E-Kemendag merupakan Integrated Internal Services yang memberikan akses layanan internal dengan memperhatikan kemudahan penggunaan, mobilitas tinggi, akses kapan saja, aman, dan terintegrasi melalui 1 (satu) pintu yang hanya dapat digunakan oleh pegawai di lingkungan Kementerian Perdagangan..'],
        ['slug' => 'catatan-akuntabilitas-ci4', 'title' => 'Catatan Akuntabilitas', 'image' => 'catatan akuntabilitas1.png', 'desc' => 'CMS untuk pencatatan akuntabilitas di kementrian perdagangan pada biro advokasi perdagangan'],
        ['slug' => 'hambatan-perdangangan-ci4', 'title' => 'Hambatan Perdagangan', 'image' => 'dpp1.png', 'desc' => 'CMS Hambatan Perdagangan dari ditjen daglu.'],
['slug' => 'e-sppd-laravel', 'title' => 'E Sppd', 'image' => 'esppd1.png', 'desc' => 'Aplikasi eSPPD adalah program aplikasi berbasis web yang diinstal pada server web. Untuk membuat laporan perjalanan dinas.'],
['slug' => 'gdi-laravel', 'title' => 'Good Design Indonesia', 'image' => 'gdi1.png', 'desc' => 'Web untuk program penghargaan nasional untuk karya desain terbaik di Indonesia sejak 2017. Pemenang menerima sertifikat pengakuan. GDI memberikan penghargaan kepada desainer Indonesia dengan trofi dan sertifikat, serta kesempatan untuk berpartisipasi dalam Good Design Award di Tokyo, Jepang.'],
['slug' => 'hero-flutter', 'title' => 'Hero Mobile', 'image' => 'hero1.png', 'desc' => 'Aplikasi HERO Mobile. Nikmati kemudahan mengakses layanan langsung dari smartphone Anda dengan Aplikasi HERO Mobile. Tersedia untuk perangkat iOS dan Android, dan dapat digunakan oleh semua pengguna.'],
['slug' => 'invesnow-laravel-vue', 'title' => 'Invesnow', 'image' => 'invesnow1.png', 'desc' => 'Invesnow adalah agen reksa dana, berlisensi dan berwenang oleh Otoritas Jasa Keuangan (OJK) dari Indonesia. Dilengkapi dengan pasar modal dan informasi keuangan, Invesnow menyediakan banyak pilihan produk reksa dana dari manajer investasi terkemuka di Indonesia.'],
['slug' => 'sengguh-phalcon', 'title' => 'Sengguh', 'image' => 'sengguh1.png', 'desc' => 'Sistem Evaluasi Pertanggungjawaban Pembangunan Daerah (Sengguh) dibangun oleh Badan Perencanaan Pembangunan Daerah Daerah Istimewa Yogyakarta (BAPPEDA DIY) sebagai pembaruan dari aplikasi monev Jogja Kendali. Sengguh telah diakses lebih dari 4 juta hits (2022) dan dimanfaatkan lebih dari 81 pengguna anggaran/kuasa pengguna anggaran, 5 kabupaten/kota, dapat diakses lebih dari 9896 ASN, 55 anggota legislatif DRPD DIY, serta masyarakat luas. Sengguh dapat diakses melalui http://sengguh.jogjaprov.go.id dan terbuka bagi masyarakat.'],
['slug' => 'simbajanesa-laravel', 'title' => 'Simbajanesa', 'image' => 'simbajanesa1.png', 'desc' => 'Pelaksanaan proses pengadaan barang dan jasa dengan metode quotation dan tender dilaksanakan secara elektronik mengunakan aplikasi SIMBAJANESA.'],
['slug' => 'sisp-flutter', 'title' => 'SISP', 'image' => 'sisp1.png', 'desc' => 'Tercipta dari upaya kolaboratif Kementerian Perdagangan Republik Indonesia, Platform Sistem Informasi Perdagangan (SISP) menonjol sebagai tonggak penting dalam memfasilitasi transisi pasar konvensional ke ranah digital di seluruh Indonesia.'],

    ];
    return view('home', compact('projects'));
});

Route::get('/portofolio/{slug}', function ($slug) {
    $projects = [
        'catatan-akuntabilitas-ci4' => [
            'title' => 'Catatan Akuntabilitas',
            'desc' => 'CMS untuk pencatatan akuntabilitas di kementrian perdagangan pada biro advokasi perdagangan.',
            'images' => ['catatan akuntabilitas1.png', 'catatan akuntabilitas2.png', 'catatan akuntabilitas3.png'],
        ],
        'hambatan-perdangangan-ci4' => [
            'title' => 'Hambatan Perdagangan',
            'desc' => 'CMS Hambatan Perdagangan dari ditjen daglu.',
            'images' => ['dpp1.png'],
        ],
        'e-kemendag-flutter' => [
            'title' => 'E Kemendag',
            'desc' => 'E-Kemendag merupakan Integrated Internal Services yang memberikan akses layanan internal dengan memperhatikan kemudahan penggunaan, mobilitas tinggi, akses kapan saja, aman, dan terintegrasi melalui 1 (satu) pintu yang hanya dapat digunakan oleh pegawai di lingkungan Kementerian Perdagangan.

                        E-Kemendag dapat diakses dengan menggunakan Single Sign On (SSO) Intra Kemendag. Aplikasi ini memberikan kemudahan penggunaan untuk fitur-fitur antara lain:
                        - presensi melalui face recognition dan akurasi jarak
                        - tata naskah dinas elektronik dan disposisi yang terintegrasi dengan mytask
                        - pusat bantuan terintegrasi / Help and Resolve (Hero)
                        - jadwal yang terintegrasi dengan TNDE, Sistem E-SPPD, HRIS, dan lainnya
                        - absen digital untuk rapat dan kegiatan lainnya
                        - informasi kepegawaian, termasuk berita ASN terkini, cuti, dan lainnya
                        - berita perdagangan
                        - daftar pejabat
                        - verify dokumen yang menggunakan TTE
                        - kamera dengan geotagging
                        - pengingat presensi
                        - lokasi WFO/WFH
                        - profil ASN, termasuk bagikan kontak, lihat kartu nama virtual, dan ubah kata sandi
                        - dan lainnya.',
            'images' => ['ekemendag1.png', 'ekemendag2.png', 'ekemendag3.png'],
        ],
        'e-sppd-laravel' => [
            'title' => 'Esppd',
            'desc' => 'Aplikasi eSPPD adalah program aplikasi berbasis web yang diinstal pada server web. Untuk membuat laporan perjalanan dinas.',
            'images' => ['esppd1.png', 'esppd2.png'],
        ],
        'exim-ci3' => [
            'title' => 'Exim',
            'desc' => 'Aplikasi yang disingkat Ekspor Impor adalah sistem yang membantu dalam menentukan negara tujuan ekspor berdasarkan skema Free Trade Agreement (FTA) / Preferential Trade Agreement (PTA) / Comprehensive Economic.',
            'images' => ['exim1.png', 'exim2.png', 'exim3.png'],
        ],
        'hero-flutter' => [
            'title' => 'Hero Mobile',
            'desc' => 'Aplikasi HERO Mobile. Nikmati kemudahan mengakses layanan langsung dari smartphone Anda dengan Aplikasi HERO Mobile. Tersedia untuk perangkat iOS dan Android, dan dapat digunakan oleh semua pengguna.',
            'images' => ['hero1.png', 'hero2.png', 'hero3.png'],
        ],
        'invesnow-laravel-vue' => [
            'title' => 'Invesnow',
            'desc' => 'Invesnow adalah agen reksa dana, berlisensi dan berwenang oleh Otoritas Jasa Keuangan (OJK) dari Indonesia. Dilengkapi dengan pasar modal dan informasi keuangan, Invesnow menyediakan banyak pilihan produk reksa dana dari manajer investasi terkemuka di Indonesia.',
            'images' => ['invesnow1.png', 'invesnow2.png', 'invesnow3.png'],
        ],
        'ritgrow-flutter' => [
            'title' => 'Ritgrow',
            'desc' => 'Ritgrow adalah perusahaan Solusi dan Pengembang Aplikasi yang dibangun atas dedikasi, berisi tim yang berpengalaman di masing - masing bidangnya. Perjalanan panjang telah melahirkan Ritgrow yang akan Fokus pada solusi retail, bukan hanya aplikasi POS tapi keseluruhan solusi yang dapat mendukung perkembangan bisnis ritel di Indonesia. Inovasi adalah sasaran utama kami, menghubungkan semua kebutuhan menjadikan solusi untuk Partner dan Klien.',
            'images' => ['ritgrow1.png', 'ritgrow2.png', 'ritgrow3.png'],
        ],
        'sengguh-phalcon' => [
            'title' => 'Sengguh',
            'desc' => 'Sistem Evaluasi Pertanggungjawaban Pembangunan Daerah (Sengguh) dibangun oleh Badan Perencanaan Pembangunan Daerah Daerah Istimewa Yogyakarta (BAPPEDA DIY) sebagai pembaruan dari aplikasi monev Jogja Kendali. Sengguh telah diakses lebih dari 4 juta hits (2022) dan dimanfaatkan lebih dari 81 pengguna anggaran/kuasa pengguna anggaran, 5 kabupaten/kota, dapat diakses lebih dari 9896 ASN, 55 anggota legislatif DRPD DIY, serta masyarakat luas. Sengguh dapat diakses melalui http://sengguh.jogjaprov.go.id dan terbuka bagi masyarakat.',
            'images' => ['sengguh1.png', 'sengguh2.png', 'sengguh3.png'],
        ],
        'simbajanesa-laravel' => [
            'title' => 'Simbajanesa',
            'desc' => 'Pelaksanaan proses pengadaan barang dan jasa dengan metode quotation dan tender dilaksanakan secara elektronik mengunakan aplikasi SIMBAJANESA.',
            'images' => ['simbajanesa1.png', 'simbajanesa2.png', 'simbajanesa3.png'],
        ],
        'sisp-flutter' => [
            'title' => 'SISP',
            'desc' => 'Tercipta dari upaya kolaboratif Kementerian Perdagangan Republik Indonesia, Platform Sistem Informasi Perdagangan (SISP) menonjol sebagai tonggak penting dalam memfasilitasi transisi pasar konvensional ke ranah digital di seluruh Indonesia.',
            'images' => ['sisp1.png', 'sisp2.png', 'sisp3.png'],
        ],

    ];

    if (!array_key_exists($slug, $projects)) {
        abort(404);
    }

    $project = $projects[$slug];

    return view('portofolio.detail', compact('project'));
});

Route::get('/portofolio', [PortofolioController::class, 'index']);
Route::get('/portofolio/{slug}', [PortofolioController::class, 'show']);
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
Route::get('/about', function () {
    $projects = [
        ['slug' => 'exim-ci3', 'title' => 'Exim', 'image' => 'exim1.png', 'desc' => 'Aplikasi yang disingkat Ekspor Impor adalah sistem yang membantu dalam menentukan negara tujuan ekspor berdasarkan skema Free Trade Agreement (FTA) / Preferential Trade Agreement (PTA) / Comprehensive Economic.Apa itu aplikasi EXIM? Aplikasi yang disingkat Ekspor Impor adalah sistem yang membantu dalam menentukan negara tujuan ekspor berdasarkan skema Free Trade Agreement (FTA) / Preferential Trade Agreement (PTA) / Comprehensive Economic.'],
        ['slug' => 'ritgrow-flutter', 'title' => 'Ritgrow', 'image' => 'ritgrow1.png', 'desc' => 'Ritgrow adalah perusahaan Solusi dan Pengembang Aplikasi yang dibangun atas dedikasi, berisi tim yang berpengalaman di masing - masing bidangnya. Perjalanan panjang telah melahirkan Ritgrow yang akan Fokus pada solusi retail, bukan hanya aplikasi POS tapi keseluruhan solusi yang dapat mendukung perkembangan bisnis ritel di Indonesia. Inovasi adalah sasaran utama kami, menghubungkan semua kebutuhan menjadikan solusi untuk Partner dan Klien.'],
        ['slug' => 'e-kemendag-flutter', 'title' => 'E Kemendag', 'image' => 'ekemendag1.png', 'desc' => 'E-Kemendag merupakan Integrated Internal Services yang memberikan akses layanan internal dengan memperhatikan kemudahan penggunaan, mobilitas tinggi, akses kapan saja, aman, dan terintegrasi melalui 1 (satu) pintu yang hanya dapat digunakan oleh pegawai di lingkungan Kementerian Perdagangan..'],
        ['slug' => 'catatan-akuntabilitas-ci4', 'title' => 'Catatan Akuntabilitas', 'image' => 'catatan akuntabilitas1.png', 'desc' => 'CMS untuk pencatatan akuntabilitas di kementrian perdagangan pada biro advokasi perdagangan'],
        ['slug' => 'hambatan-perdangangan-ci4', 'title' => 'Hambatan Perdagangan', 'image' => 'dpp1.png', 'desc' => 'CMS Hambatan Perdagangan dari ditjen daglu.'],
['slug' => 'e-sppd-laravel', 'title' => 'E Sppd', 'image' => 'esppd1.png', 'desc' => 'Aplikasi eSPPD adalah program aplikasi berbasis web yang diinstal pada server web. Untuk membuat laporan perjalanan dinas.'],
['slug' => 'gdi-laravel', 'title' => 'Good Design Indonesia', 'image' => 'gdi1.png', 'desc' => 'Web untuk program penghargaan nasional untuk karya desain terbaik di Indonesia sejak 2017. Pemenang menerima sertifikat pengakuan. GDI memberikan penghargaan kepada desainer Indonesia dengan trofi dan sertifikat, serta kesempatan untuk berpartisipasi dalam Good Design Award di Tokyo, Jepang.'],
['slug' => 'hero-flutter', 'title' => 'Hero Mobile', 'image' => 'hero1.png', 'desc' => 'Aplikasi HERO Mobile. Nikmati kemudahan mengakses layanan langsung dari smartphone Anda dengan Aplikasi HERO Mobile. Tersedia untuk perangkat iOS dan Android, dan dapat digunakan oleh semua pengguna.'],
['slug' => 'invesnow-laravel-vue', 'title' => 'Invesnow', 'image' => 'invesnow1.png', 'desc' => 'Invesnow adalah agen reksa dana, berlisensi dan berwenang oleh Otoritas Jasa Keuangan (OJK) dari Indonesia. Dilengkapi dengan pasar modal dan informasi keuangan, Invesnow menyediakan banyak pilihan produk reksa dana dari manajer investasi terkemuka di Indonesia.'],
['slug' => 'sengguh-phalcon', 'title' => 'Sengguh', 'image' => 'sengguh1.png', 'desc' => 'Sistem Evaluasi Pertanggungjawaban Pembangunan Daerah (Sengguh) dibangun oleh Badan Perencanaan Pembangunan Daerah Daerah Istimewa Yogyakarta (BAPPEDA DIY) sebagai pembaruan dari aplikasi monev Jogja Kendali. Sengguh telah diakses lebih dari 4 juta hits (2022) dan dimanfaatkan lebih dari 81 pengguna anggaran/kuasa pengguna anggaran, 5 kabupaten/kota, dapat diakses lebih dari 9896 ASN, 55 anggota legislatif DRPD DIY, serta masyarakat luas. Sengguh dapat diakses melalui http://sengguh.jogjaprov.go.id dan terbuka bagi masyarakat.'],
['slug' => 'simbajanesa-laravel', 'title' => 'Simbajanesa', 'image' => 'simbajanesa1.png', 'desc' => 'Pelaksanaan proses pengadaan barang dan jasa dengan metode quotation dan tender dilaksanakan secara elektronik mengunakan aplikasi SIMBAJANESA.'],
['slug' => 'sisp-flutter', 'title' => 'SISP', 'image' => 'sisp1.png', 'desc' => 'Tercipta dari upaya kolaboratif Kementerian Perdagangan Republik Indonesia, Platform Sistem Informasi Perdagangan (SISP) menonjol sebagai tonggak penting dalam memfasilitasi transisi pasar konvensional ke ranah digital di seluruh Indonesia.'],

    ];
    return view('about', compact('projects'));
});

Route::view('/jasa-it-solo', 'lokasi.solo');
Route::view('/jasa-it-klaten', 'lokasi.klaten');
Route::view('/jasa-it-cikarang', 'lokasi.cikarang');
Route::view('/jasa-it-jakarta', 'lokasi.jakarta');
Route::view('/affiliate', 'affiliate');