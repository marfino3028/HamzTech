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
        'desc_en' => 'A stock and mutual fund investment platform in Indonesia. Invesnow is a mutual fund agent licensed and supervised by the Financial Services Authority (OJK). It includes capital market and financial information, offering a wide selection of mutual fund products from leading investment managers in Indonesia.',
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
        'desc_en' => 'A Regional Development Accountability Evaluation System (Sengguh) owned by BAPPEDA DIY, an upgrade of the Jogja Kendali monitoring & evaluation application. It has been accessed over 4 million times and used by 81+ budget users, 5 regencies/cities, 9,896+ civil servants, and 55 DIY regional legislative council members.',
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
        'desc_en' => 'The e-procurement system of Surabaya State University (UNESA). The procurement of goods and services via quotation and tender methods is carried out electronically using the SIMBAJANESA application.',
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
        'desc_en' => 'An export-import information system at the Ministry of Trade. It helps determine export destination countries based on Free Trade Agreement (FTA) / Preferential Trade Agreement (PTA) / Comprehensive Economic Partnership schemes.',
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
        'desc_en' => 'A trade barriers database from the Directorate General of Foreign Trade (Daglu), Ministry of Trade. A CMS to record and manage trade barrier information.',
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
        'desc_en' => 'The Good Design Indonesia judging system at the Ministry of Trade — a national award for the best design works in Indonesia since 2017. Winners get the chance to take part in the Good Design Award in Tokyo, Japan.',
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
        'desc_en' => 'A web-based official travel reporting application at the Ministry of Trade. Used to create official business trip reports for staff.',
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
        'desc_en' => 'An accountability records CMS (Catalis) at the Ministry of Trade, under the Trade Advocacy Bureau.',
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
        'desc_en' => 'A geolocation platform to create and display locations. It shows the location of each role and each project with map-based mapping.',
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
        'desc_en' => 'A holiday and tourism ticket booking website. Users can book tour tickets online.',
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
        'desc_en' => 'A web CMS to manage Hajj & Umrah travel transactions: packages, departures, registrations, reports, and dollar marketing rate settings.',
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
        'desc_en' => 'A web portal for pilgrims to purchase Umrah or Hajj packages and save up for their departure.',
        'tech' => 'PHP 5.4',
        'url' => 'https://zhafirah.technocare.id/zhafirah',
        'type' => 'web',
    ],

    'ratapay-quasar-laravel' => [
        'title' => 'Ratapay',
        'slug' => 'ratapay-quasar-laravel',
        'image' => 'ratapay1.png',
        'images' => ['ratapay1.png', 'ratapay2.png'],
        'desc' => 'Aplikasi pembayaran berbasis web app untuk mengelola transaksi pembayaran, dengan antarmuka mobile-first yang ringan dan cepat.',
        'desc_en' => 'A web-app-based payment application to manage payment transactions, with a lightweight and fast mobile-first interface.',
        'tech' => 'Quasar + Laravel',
        'url' => 'https://app.ratapay.co.id',
        'type' => 'web',
    ],

    'ekohort-ci3' => [
        'title' => 'e-Kohort Kemenkes',
        'slug' => 'ekohort-ci3',
        'image' => 'ekohort1.png',
        'images' => ['ekohort1.png'],
        'desc' => 'Aplikasi e-Kohort Direktorat Kesehatan Keluarga, Kementerian Kesehatan RI, untuk mencatat dan memantau kesehatan ibu hamil mulai dari masa kehamilan hingga persalinan. Dikembangkan dengan dukungan USAID (Kesehatan Ibu dan Anak) dan UNFPA (Kesehatan Reproduksi).',
        'desc_en' => 'The e-Kohort application of the Directorate of Family Health, Indonesian Ministry of Health, to record and monitor the health of pregnant women from pregnancy through childbirth. Developed with support from USAID (Maternal and Child Health) and UNFPA (Reproductive Health).',
        'tech' => 'CodeIgniter 3',
        'url' => 'https://ekohort.kemkes.go.id',
        'type' => 'web',
    ],

    'konvertin-nuxt-nest' => [
        'title' => 'Konvertin',
        'slug' => 'konvertin-nuxt-nest',
        'image' => 'konvertin1.png',
        'images' => ['konvertin1.png', 'konvertin2.png', 'konvertin3.png'],
        'desc' => 'Website SaaS all-in-one untuk jualan produk digital maupun fisik: landing page, checkout, online store, affiliate, LMS, email marketing, WhatsApp gateway, hingga tracking pixel dalam satu dashboard.',
        'desc_en' => 'An all-in-one SaaS website for selling digital and physical products: landing pages, checkout, online store, affiliate, LMS, email marketing, WhatsApp gateway, and tracking pixels in one dashboard.',
        'tech' => 'Nuxt.js + NestJS',
        'url' => 'https://konvertin.id',
        'type' => 'web',
    ],

    'technocare-nuxt-nest' => [
        'title' => 'Technocare',
        'slug' => 'technocare-nuxt-nest',
        'image' => 'technocare1.png',
        'images' => ['technocare1.png', 'technocare2.png', 'technocare3.png'],
        'desc' => 'Company profile Technocare untuk produk-produk aplikasi kesehatan: sistem manajemen klinik dan rumah sakit untuk pendaftaran pasien, rekam medis, farmasi, dan laporan faskes, lengkap dengan halaman modul, layanan, harga, dan berita.',
        'desc_en' => 'The Technocare company profile for its health application products: a clinic and hospital management system for patient registration, medical records, pharmacy, and facility reports, complete with module, service, pricing, and news pages.',
        'tech' => 'Nuxt.js + NestJS',
        'url' => 'https://technocare.id',
        'type' => 'web',
    ],

    'knowledge-technocare-nuxt-nest' => [
        'title' => 'Knowledge Base Technocare',
        'slug' => 'knowledge-technocare-nuxt-nest',
        'image' => 'knowledgetechnocare1.png',
        'images' => ['knowledgetechnocare1.png', 'knowledgetechnocare2.png', 'knowledgetechnocare3.png'],
        'desc' => 'Learning management system untuk pengguna produk aplikasi kesehatan Technocare. Berisi panduan per modul (worklist dokter & perawat, farmasi, laboratorium, radiologi, hemodialisa, dan lainnya) yang dapat diakses oleh pengguna yang memiliki akun.',
        'desc_en' => 'A learning management system for users of Technocare health application products. It contains guides per module (doctor & nurse worklist, pharmacy, laboratory, radiology, hemodialysis, and more) accessible to users with an account.',
        'tech' => 'Nuxt.js + NestJS',
        'url' => 'https://knowledge.technocare.id',
        'type' => 'web',
    ],

    'pratamainnovation-nuxt-laravel' => [
        'title' => 'Pratama Tech Innovations',
        'slug' => 'pratamainnovation-nuxt-laravel',
        'image' => 'pratamainnovation1.png',
        'images' => ['pratamainnovation1.png', 'pratamainnovation2.png', 'pratamainnovation3.png'],
        'desc' => 'Company profile software house Pratama Tech Innovations: layanan pengembangan web & mobile app, UI/UX design, dan IT outsourcing, dilengkapi galeri portofolio, koleksi, dan artikel.',
        'desc_en' => 'The company profile of the Pratama Tech Innovations software house: web & mobile app development, UI/UX design, and IT outsourcing services, with a portfolio gallery, collection, and articles.',
        'tech' => 'Nuxt.js + Laravel',
        'url' => 'https://pratamainnovation.com',
        'type' => 'web',
    ],

    'rossieannacraft-nuxt-laravel' => [
        'title' => 'Rossie Anna Craft',
        'slug' => 'rossieannacraft-nuxt-laravel',
        'image' => 'rossieannacraft1.png',
        'images' => ['rossieannacraft1.png', 'rossieannacraft2.png', 'rossieannacraft3.png'],
        'desc' => 'Website katalog dan penjualan Fudao Scrunchie, aksesori ikat rambut handcrafted berbahan satin silk. Tersedia untuk pembelian satuan, hampers, hingga souvenir pernikahan, dengan pemesanan lewat WhatsApp dan Shopee.',
        'desc_en' => 'A catalog and sales website for Fudao Scrunchie, handcrafted satin silk hair ties. Available for single purchase, hampers, and wedding souvenirs, with ordering via WhatsApp and Shopee.',
        'tech' => 'Nuxt.js + Laravel',
        'url' => 'https://rossieannacraft.com',
        'type' => 'web',
    ],

    // ===== Aplikasi mobile (Play Store / App Store) =====

    'e-kemendag-flutter' => [
        'title' => 'E-Kemendag',
        'slug' => 'e-kemendag-flutter',
        'image' => 'ekemendag1.png',
        'images' => ['ekemendag1.png', 'ekemendag2.png', 'ekemendag3.png'],
        'desc' => 'Super app Kementerian Perdagangan — Integrated Internal Services dalam satu pintu untuk pegawai Kemendag: presensi face recognition, tata naskah dinas elektronik, jadwal terintegrasi (TNDE, E-SPPD, HRIS), informasi kepegawaian, dan banyak lagi. Diakses via Single Sign On (SSO) Intra Kemendag.',
        'desc_en' => 'The Ministry of Trade super app — Integrated Internal Services in one place for Kemendag staff: face recognition attendance, electronic official correspondence, integrated scheduling (TNDE, E-SPPD, HRIS), staffing information, and much more. Accessed via Intra Kemendag Single Sign On (SSO).',
        'tech' => 'Flutter',
        'url' => 'https://apps.apple.com/id/app/e-kemendag-mobile/',
        'type' => 'mobile',
    ],

    'momsjourney-flutter' => [
        'title' => "Mom's Journey",
        'slug' => 'momsjourney-flutter',
        'image' => 'momsjourney1.png',
        'images' => ['momsjourney1.png', 'momsjourney2.png', 'momsjourney3.png'],
        'desc' => 'Aplikasi resmi RS Brawijaya Saharjo untuk menemani perjalanan seorang ibu — dari kehamilan dan persalinan hingga pertumbuhan dan perkembangan si kecil. Semua layanan kesehatan ibu dan anak dalam satu aplikasi.',
        'desc_en' => 'The official Brawijaya Saharjo Hospital app to accompany a mother\'s journey — from pregnancy and childbirth to the growth and development of the little one. All maternal and child health services in one app.',
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
        'desc_en' => 'An integrated application for hemodialysis doctors and patients: therapy monitoring, digital medical record management, HD service ordering, and access to health information and assistance — improving the quality of hemodialysis services.',
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
        'desc_en' => 'An application that makes it easy for the Marketing/Management team to manage Hajj & Umrah pilgrims, while also making it easy for pilgrims to register and obtain information about Hajj and Umrah.',
        'tech' => 'Flutter + PHP 5.4',
        'url' => 'https://play.google.com/store/apps/details?id=com.zhafirah.mobile.zhafirah_marketing',
        'type' => 'mobile',
    ],

    'wezata-flutter-go' => [
        'title' => 'Wezata',
        'slug' => 'wezata-flutter-go',
        'image' => 'wezata1.png',
        'images' => ['wezata1.png', 'wezata2.png', 'wezata3.png'],
        'desc' => 'Aplikasi liburan & wisata — temukan dan pesan tiket destinasi wisata dengan mudah.',
        'desc_en' => 'A holiday and tourism app — discover and book tickets to tourist destinations with ease.',
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
        'desc_en' => 'A tour ticket purchasing agent service application. It makes it easy for agents to handle the purchase of tickets to tourist destinations.',
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
        'desc_en' => 'An application to redeem web tickets in partnership with Liburania.',
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
        'desc_en' => 'An application to redeem tickets within the Wezata app.',
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
        'desc_en' => 'An application to redeem agent tickets within the Jatrav app.',
        'tech' => 'Flutter + CodeIgniter 3',
        'url' => 'https://apps.apple.com/id/app/redeem-jatrav/id6754868322',
        'type' => 'mobile',
    ],

    /*
     * ===== DIPARKIR — belum ada screenshot (.png). Restore saat sudah difoto. =====
     * Tinggal pindahkan kembali ke array di atas + pastikan file gambarnya ada.
     * Cek 2026-09-28: mirotaklik.id tidak resolve (DNS), listing Play Store PIP
     * Kemenkeu 404, zigra.co.id "Domain Expired". Listing Play com.liburania.wezata
     * dan com.mobilereseller.liburania adalah Wezata dan Jatrav versi Android,
     * sudah tercakup entri 'wezata-flutter-go' dan 'jatrav-flutter'.
     *
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
     * 'zigra-wordpress' => [
     *     'title' => 'Zigra', 'slug' => 'zigra-wordpress',
     *     'image' => 'zigra1.png', 'images' => ['zigra1.png', 'zigra2.png', 'zigra3.png'],
     *     'desc' => 'Website penjualan tiket wisata berbasis custom WordPress.',
     *     'tech' => 'WordPress', 'url' => 'https://zigra.co.id', 'type' => 'web',
     * ],
     */

];
