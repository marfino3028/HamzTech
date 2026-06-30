<?php

/**
 * Sumber data tunggal portofolio HamzTech.
 *
 * Dipakai oleh routes/web.php (home & about) dan PortofolioController
 * (index & show). Sebelumnya data ini terduplikasi di 4 tempat — sekarang
 * cukup edit di sini saja.
 *
 * Field per proyek:
 *   title  => nama tampil
 *   slug   => dipakai di URL /portofolio/{slug}
 *   image  => gambar cover (kartu di grid)
 *   images => daftar screenshot untuk halaman detail
 *   desc   => deskripsi
 *   tech   => tumpukan teknologi (badge)
 *   url    => tautan live (web/Play Store/App Store), boleh null
 *   type   => 'web' | 'mobile'
 *
 * Catatan gambar: semua screenshot kini PNG asli. Proyek yang belum punya
 * screenshot diparkir di blok komentar paling bawah (restore saat sudah ada).
 */

return [

    // ===== Web publik (screenshot asli) =====

    'invesnow-laravel-vue' => [
        'title' => 'Invesnow',
        'slug' => 'invesnow-laravel-vue',
        'image' => 'invesnow1.png',
        'images' => ['invesnow1.png', 'invesnow2.png', 'invesnow3.png'],
        'desc' => 'Platform investasi saham & reksa dana di Indonesia. Invesnow adalah agen reksa dana yang berlisensi dan diawasi Otoritas Jasa Keuangan (OJK). Dilengkapi pasar modal dan informasi keuangan, menyediakan banyak pilihan produk reksa dana dari manajer investasi terkemuka di Indonesia.',
        'tech' => 'Laravel + Vue',
        'url' => 'https://invesnow.id',
        'type' => 'web',
    ],

    'sengguh-phalcon' => [
        'title' => 'Sengguh',
        'slug' => 'sengguh-phalcon',
        'image' => 'sengguh1.png',
        'images' => ['sengguh1.png', 'sengguh2.png', 'sengguh3.png'],
        'desc' => 'Sistem Evaluasi Pertanggungjawaban Pembangunan Daerah (Sengguh) milik BAPPEDA DIY, pembaruan dari aplikasi monev Jogja Kendali. Telah diakses lebih dari 4 juta hits dan dimanfaatkan 81+ pengguna anggaran, 5 kabupaten/kota, 9896+ ASN, serta 55 anggota legislatif DPRD DIY.',
        'tech' => 'Phalcon + Vue',
        'url' => 'https://sengguh.jogjaprov.go.id',
        'type' => 'web',
    ],

    'simbajanesa-laravel' => [
        'title' => 'Simbajanesa',
        'slug' => 'simbajanesa-laravel',
        'image' => 'simbajanesa1.png',
        'images' => ['simbajanesa1.png', 'simbajanesa2.png', 'simbajanesa3.png'],
        'desc' => 'Sistem e-procurement Universitas Negeri Surabaya. Pelaksanaan proses pengadaan barang dan jasa dengan metode quotation dan tender dilaksanakan secara elektronik menggunakan aplikasi SIMBAJANESA.',
        'tech' => 'Laravel',
        'url' => 'https://simbajanesa.unesa.ac.id',
        'type' => 'web',
    ],

    'exim-ci3' => [
        'title' => 'Exim',
        'slug' => 'exim-ci3',
        'image' => 'exim1.png',
        'images' => ['exim1.png', 'exim2.png', 'exim3.png'],
        'desc' => 'Sistem informasi ekspor impor di Kementerian Perdagangan. Membantu menentukan negara tujuan ekspor berdasarkan skema Free Trade Agreement (FTA) / Preferential Trade Agreement (PTA) / Comprehensive Economic Partnership.',
        'tech' => 'CodeIgniter 3',
        'url' => 'https://exim.kemendag.go.id',
        'type' => 'web',
    ],

    'hambatan-perdangangan-ci4' => [
        'title' => 'Hambatan Perdagangan',
        'slug' => 'hambatan-perdangangan-ci4',
        'image' => 'dpp1.png',
        'images' => ['dpp1.png', 'dpp2.png', 'dpp3.png'],
        'desc' => 'Database hambatan perdagangan dari Ditjen Perdagangan Luar Negeri (Daglu), Kementerian Perdagangan. CMS untuk mencatat dan mengelola informasi hambatan perdagangan.',
        'tech' => 'CodeIgniter 4',
        'url' => 'https://www.kemendag.go.id/dpp/public',
        'type' => 'web',
    ],

    'gdi-laravel' => [
        'title' => 'Good Design Indonesia',
        'slug' => 'gdi-laravel',
        'image' => 'gdi1.png',
        'images' => ['gdi1.png', 'gdi2.png', 'gdi3.png'],
        'desc' => 'Sistem penjurian Good Design Indonesia di Kementerian Perdagangan — penghargaan nasional untuk karya desain terbaik di Indonesia sejak 2017. Pemenang berkesempatan ikut Good Design Award di Tokyo, Jepang.',
        'tech' => 'Laravel',
        'url' => 'https://iddc.kemendag.go.id/gdi',
        'type' => 'web',
    ],

    'e-sppd-laravel' => [
        'title' => 'E-SPPD',
        'slug' => 'e-sppd-laravel',
        'image' => 'esppd1.png',
        'images' => ['esppd1.png', 'esppd2.png'],
        'desc' => 'Aplikasi pelaporan perjalanan dinas berbasis web di Kementerian Perdagangan. Digunakan untuk membuat laporan perjalanan dinas pegawai.',
        'tech' => 'Laravel',
        'url' => 'https://esppd.kemendag.go.id',
        'type' => 'web',
    ],

    'catatan-akuntabilitas-ci4' => [
        'title' => 'Catatan Akuntabilitas (Catalis)',
        'slug' => 'catatan-akuntabilitas-ci4',
        'image' => 'catatan akuntabilitas1.png',
        'images' => ['catatan akuntabilitas1.png', 'catatan akuntabilitas2.png', 'catatan akuntabilitas3.png'],
        'desc' => 'CMS catatan akuntabilitas (Catalis) di Kementerian Perdagangan pada Biro Advokasi Perdagangan.',
        'tech' => 'CodeIgniter 4',
        'url' => 'https://intra.kemendag.go.id/app/catalis/public',
        'type' => 'web',
    ],

    'mapbyyou-laravel' => [
        'title' => 'MapByYou',
        'slug' => 'mapbyyou-laravel',
        'image' => 'mapbyyou1.png',
        'images' => ['mapbyyou1.png', 'mapbyyou2.png'],
        'desc' => 'Platform geolocation untuk membuat dan menampilkan lokasi. Menampilkan lokasi tiap role dan tiap project dengan pemetaan berbasis peta.',
        'tech' => 'Laravel',
        'url' => 'https://mapbyyou.com',
        'type' => 'web',
    ],

    'booking-wezata-go-svelte' => [
        'title' => 'Booking Wezata',
        'slug' => 'booking-wezata-go-svelte',
        'image' => 'bookingwezata1.png',
        'images' => ['bookingwezata1.png', 'bookingwezata2.png', 'bookingwezata3.png'],
        'desc' => 'Web pemesanan tiket liburan & wisata. Pengguna dapat memesan tiket wisata secara online.',
        'tech' => 'Go + Svelte',
        'url' => 'http://booking.wezata.com',
        'type' => 'web',
    ],

    'zhafirah-cms-php' => [
        'title' => 'Zhafirah CMS',
        'slug' => 'zhafirah-cms-php',
        'image' => 'zhafirahcms1.png',
        'images' => ['zhafirahcms1.png', 'zhafirahcms2.png', 'zhafirahcms3.png'],
        'desc' => 'Web CMS untuk mengatur transaksi travel haji & umroh: paket, keberangkatan, pendaftaran, laporan, serta pengaturan marketing rate dollar.',
        'tech' => 'PHP 5.4',
        'url' => 'https://zhafirah.technocare.id',
        'type' => 'web',
    ],

    'zhafirah-portal-php' => [
        'title' => 'Zhafirah Portal',
        'slug' => 'zhafirah-portal-php',
        'image' => 'zhafirahportal1.png',
        'images' => ['zhafirahportal1.png', 'zhafirahportal2.png', 'zhafirahportal3.png'],
        'desc' => 'Web portal bagi peserta haji untuk membeli paket umroh maupun haji, serta menabung untuk keberangkatan.',
        'tech' => 'PHP 5.4',
        'url' => 'https://zhafirah.technocare.id/zhafirah',
        'type' => 'web',
    ],

    // ===== Aplikasi mobile (Play Store / App Store) =====

    'e-kemendag-flutter' => [
        'title' => 'E-Kemendag',
        'slug' => 'e-kemendag-flutter',
        'image' => 'ekemendag1.png',
        'images' => ['ekemendag1.png', 'ekemendag2.png', 'ekemendag3.png'],
        'desc' => 'Super app Kementerian Perdagangan — Integrated Internal Services dalam satu pintu untuk pegawai Kemendag: presensi face recognition, tata naskah dinas elektronik, jadwal terintegrasi (TNDE, E-SPPD, HRIS), informasi kepegawaian, dan banyak lagi. Diakses via Single Sign On (SSO) Intra Kemendag.',
        'tech' => 'Flutter',
        'url' => 'https://apps.apple.com/id/app/e-kemendag-mobile/',
        'type' => 'mobile',
    ],

    'hero-flutter' => [
        'title' => 'Hero Kemendag',
        'slug' => 'hero-flutter',
        'image' => 'hero1.png',
        'images' => ['hero1.png', 'hero2.png', 'hero3.png'],
        'desc' => 'Aplikasi layanan publik & layanan internal milik Kementerian Perdagangan. Pengguna dapat mengajukan pertanyaan, permohonan, dan aduan melalui sistem tiket. Tersedia untuk iOS dan Android.',
        'tech' => 'Flutter',
        'url' => 'https://apps.apple.com/id/app/hero-kemendag/',
        'type' => 'mobile',
    ],

    'sisp-flutter' => [
        'title' => 'SISP Kemendag',
        'slug' => 'sisp-flutter',
        'image' => 'sisp1.png',
        'images' => ['sisp1.png', 'sisp2.png', 'sisp3.png'],
        'desc' => 'Sistem Informasi Perdagangan (SISP) untuk digitalisasi pasar — hasil kolaborasi Kementerian Perdagangan RI dalam memfasilitasi transisi pasar konvensional ke ranah digital di seluruh Indonesia.',
        'tech' => 'Flutter',
        'url' => 'https://apps.apple.com/id/app/sisp-kemendag/',
        'type' => 'mobile',
    ],

    'momsjourney-flutter' => [
        'title' => "Mom's Journey",
        'slug' => 'momsjourney-flutter',
        'image' => 'momsjourney1.png',
        'images' => ['momsjourney1.png', 'momsjourney2.png', 'momsjourney3.png'],
        'desc' => 'Aplikasi resmi RS Brawijaya Saharjo untuk menemani perjalanan seorang ibu — dari kehamilan dan persalinan hingga pertumbuhan dan perkembangan si kecil. Semua layanan kesehatan ibu dan anak dalam satu aplikasi.',
        'tech' => 'Flutter',
        'url' => 'https://play.google.com/store/apps/details?id=com.technocare.momsjourney',
        'type' => 'mobile',
    ],

    'dialisacare-flutter' => [
        'title' => 'DialisaCare Health',
        'slug' => 'dialisacare-flutter',
        'image' => 'dialisacare1.png',
        'images' => ['dialisacare1.png', 'dialisacare2.png', 'dialisacare3.png'],
        'desc' => 'Aplikasi terintegrasi untuk dokter dan pasien hemodialisis: pemantauan terapi, pengelolaan rekam medis digital, pemesanan layanan HD, serta akses informasi dan bantuan kesehatan — meningkatkan kualitas layanan hemodialisis.',
        'tech' => 'TypeScript + Flutter',
        'url' => 'https://play.google.com/store/apps/details?id=com.technocare.dialisacarehealth',
        'type' => 'mobile',
    ],

    'zhafirah-marketing-flutter' => [
        'title' => 'Zhafirah Marketing',
        'slug' => 'zhafirah-marketing-flutter',
        'image' => 'zhafirahmkt1.png',
        'images' => ['zhafirahmkt1.png', 'zhafirahmkt2.png', 'zhafirahmkt3.png'],
        'desc' => 'Aplikasi yang memudahkan tim Pemasaran/Manajemen mengelola jemaah haji & umrah, sekaligus memudahkan jemaah mendaftar dan mendapatkan informasi tentang haji dan umrah.',
        'tech' => 'Flutter + PHP 5.4',
        'url' => 'https://play.google.com/store/apps/details?id=com.zhafirah.mobile.zhafirah_marketing',
        'type' => 'mobile',
    ],

    'sqp-membership-flutter' => [
        'title' => 'SQP Membership',
        'slug' => 'sqp-membership-flutter',
        'image' => 'sqpmembership1.png',
        'images' => ['sqpmembership1.png', 'sqpmembership2.png'],
        'desc' => 'Aplikasi membership untuk mengelola keanggotaan, poin, dan benefit pelanggan.',
        'tech' => 'Flutter + CodeIgniter 3',
        'url' => 'https://play.google.com/store/apps/details?id=com.sqp.membership.membership',
        'type' => 'mobile',
    ],

    'wezata-flutter-go' => [
        'title' => 'Wezata',
        'slug' => 'wezata-flutter-go',
        'image' => 'wezata1.png',
        'images' => ['wezata1.png', 'wezata2.png', 'wezata3.png'],
        'desc' => 'Aplikasi liburan & wisata — temukan dan pesan tiket destinasi wisata dengan mudah.',
        'tech' => 'Flutter + Go',
        'url' => 'https://apps.apple.com/id/app/wezata/id6751820233',
        'type' => 'mobile',
    ],

    'jatrav-flutter' => [
        'title' => 'Jatrav',
        'slug' => 'jatrav-flutter',
        'image' => 'jatrav1.png',
        'images' => ['jatrav1.png', 'jatrav2.png', 'jatrav3.png'],
        'desc' => 'Aplikasi jasa agen pembelian tiket wisata. Memudahkan agen melayani pembelian tiket destinasi wisata.',
        'tech' => 'Flutter + CodeIgniter 3',
        'url' => 'https://apps.apple.com/id/app/jatrav/id6755045123',
        'type' => 'mobile',
    ],

    'liburania-redeem-flutter' => [
        'title' => 'Liburania Redeem',
        'slug' => 'liburania-redeem-flutter',
        'image' => 'liburaniaredeem1.png',
        'images' => ['liburaniaredeem1.png', 'liburaniaredeem2.png', 'liburaniaredeem3.png'],
        'desc' => 'Aplikasi untuk redeem tiket web yang bekerja sama dengan Liburania.',
        'tech' => 'Flutter + CodeIgniter 3',
        'url' => 'https://apps.apple.com/id/app/liburania-redeem/id6754875936',
        'type' => 'mobile',
    ],

    'redeem-wezata-flutter' => [
        'title' => 'Redeem Wezata',
        'slug' => 'redeem-wezata-flutter',
        'image' => 'redeemwezata1.png',
        'images' => ['redeemwezata1.png', 'redeemwezata2.png', 'redeemwezata3.png'],
        'desc' => 'Aplikasi untuk redeem tiket pada aplikasi Wezata.',
        'tech' => 'Flutter + Go',
        'url' => 'https://apps.apple.com/id/app/redeem-wezata/id6754868320',
        'type' => 'mobile',
    ],

    'redeem-jatrav-flutter' => [
        'title' => 'Redeem Jatrav',
        'slug' => 'redeem-jatrav-flutter',
        'image' => 'redeemjatrav1.png',
        'images' => ['redeemjatrav1.png', 'redeemjatrav2.png'],
        'desc' => 'Aplikasi untuk redeem tiket agen pada aplikasi Jatrav.',
        'tech' => 'Flutter + CodeIgniter 3',
        'url' => 'https://apps.apple.com/id/app/redeem-jatrav/id6754868322',
        'type' => 'mobile',
    ],

    /*
     * ===== DIPARKIR — belum ada screenshot (.png). Restore saat sudah difoto. =====
     * Tinggal pindahkan kembali ke array di atas + pastikan file gambarnya ada.
     *
     * 'ratapay-quasar-laravel' => [
     *     'title' => 'Ratapay', 'slug' => 'ratapay-quasar-laravel',
     *     'image' => 'ratapay1.png', 'images' => ['ratapay1.png', 'ratapay2.png', 'ratapay3.png'],
     *     'desc' => 'Aplikasi pembayaran (payment) berbasis web app. Menangani transaksi pembayaran dengan antarmuka yang ringan dan cepat.',
     *     'tech' => 'Quasar + Laravel', 'url' => 'https://app.ratapay.co.id', 'type' => 'web',
     * ],
     * 'mirotaklik-erp' => [
     *     'title' => 'Mirotaklik', 'slug' => 'mirotaklik-erp',
     *     'image' => 'mirotaklik1.png', 'images' => ['mirotaklik1.png', 'mirotaklik2.png', 'mirotaklik3.png'],
     *     'desc' => 'Web apps dan aplikasi mobile untuk kebutuhan ERP rumah sakit. Sistem terintegrasi mulai dari layanan web hingga aplikasi pendamping.',
     *     'tech' => 'Next.js + Laravel + Flutter', 'url' => 'https://mirotaklik.id', 'type' => 'web',
     * ],
     * 'pip-kemenkeu-flutter' => [
     *     'title' => 'PIP Kemenkeu', 'slug' => 'pip-kemenkeu-flutter',
     *     'image' => 'pipkemenkeu1.png', 'images' => ['pipkemenkeu1.png', 'pipkemenkeu2.png', 'pipkemenkeu3.png'],
     *     'desc' => 'Aplikasi laporan perjalanan dinas di Kementerian Keuangan untuk mendukung digitalisasi proses pelaporan.',
     *     'tech' => 'Flutter + CodeIgniter', 'url' => 'https://play.google.com/store/apps/details?id=id.go.kemenkeu.pip.keu', 'type' => 'mobile',
     * ],
     * 'liburania-reseller-flutter' => [
     *     'title' => 'Liburania Reseller', 'slug' => 'liburania-reseller-flutter',
     *     'image' => 'liburaniareseller1.png', 'images' => ['liburaniareseller1.png', 'liburaniareseller2.png', 'liburaniareseller3.png'],
     *     'desc' => 'Aplikasi untuk jasa agen pembelian tiket wisata (mobile reseller Liburania).',
     *     'tech' => 'Flutter + CodeIgniter 3', 'url' => 'https://play.google.com/store/apps/details?id=com.mobilereseller.liburania', 'type' => 'mobile',
     * ],
     * 'wezata-liburan-flutter' => [
     *     'title' => 'Wezata (Liburania)', 'slug' => 'wezata-liburan-flutter',
     *     'image' => 'wezataliburan1.png', 'images' => ['wezataliburan1.png', 'wezataliburan2.png', 'wezataliburan3.png'],
     *     'desc' => 'Aplikasi liburan wisata untuk pengguna akhir — jelajahi dan pesan paket wisata.',
     *     'tech' => 'Flutter + CodeIgniter 3', 'url' => 'https://play.google.com/store/apps/details?id=com.liburania.wezata', 'type' => 'mobile',
     * ],
     */

];
