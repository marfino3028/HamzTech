<?php

/**
 * Profil founder untuk sisi personal portfolio (recruiter) di beranda.
 * linkedin / cv: isi URL atau path (mis. 'files/CV-Marfino-Hamzah.pdf' di public/) — null = tombol disembunyikan.
 */
return [

    'email'    => 'marfinohamzah455@gmail.com',
    'github'   => 'https://github.com/marfino3028',
    'gitlab'   => 'https://gitlab.com/marfinohamzah455',
    'linkedin' => 'https://www.linkedin.com/in/marfino-hamzah/',
    'upwork'   => 'https://www.upwork.com/freelancers/~013e793885f413bb1b',
    'fastwork' => 'https://fastwork.id/user/marfino3028',
    'cv'       => 'files/CV-Marfino-Hamzah-Senior-Full-Stack-Engineer.pdf',
    'cv_backend' => 'files/CV-Marfino-Hamzah-Senior-Backend-Engineer.pdf',

    // Studi kasus unggulan: slug dari config/portfolios.php + ringkasan masalah, peran, hasil.
    'featured' => [
        'e-kemendag-flutter' => [
            'area' => ['id' => 'Layanan Digital Pemerintah · Aplikasi Mobile', 'en' => 'Government Digital Services · Mobile Application'],
            'problem' => ['id' => 'Pegawai Kementerian Perdagangan membutuhkan satu pintu untuk absensi dan mengakses aplikasi internal dari ponsel.', 'en' => 'Ministry of Trade staff needed a single entry point to clock in and reach internal applications from their phones.'],
            'role' => ['id' => 'Mobile & backend developer', 'en' => 'Mobile & backend developer'],
            'result' => ['id' => 'Super app Flutter di App Store dan Play Store yang menyatukan absensi dan akses aplikasi lain.', 'en' => 'A Flutter super app on the App Store and Play Store that brings attendance and other apps together.'],
        ],
        'invesnow-laravel-vue' => [
            'area' => ['id' => 'Fintech · Investasi', 'en' => 'Fintech · Investment'],
            'problem' => ['id' => 'Investor ritel butuh tempat membeli reksa dana dan saham dari agen berlisensi OJK, lengkap dengan informasi pasar.', 'en' => 'Retail investors needed one place to buy mutual funds and stocks from an OJK-licensed agent, with market information.'],
            'role' => ['id' => 'Full-stack developer', 'en' => 'Full-stack developer'],
            'result' => ['id' => 'Platform investasi web dengan katalog produk dari manajer investasi terkemuka dan informasi pasar modal.', 'en' => 'A web investment platform with products from leading investment managers and capital market information.'],
        ],
        'sengguh-phalcon' => [
            'area' => ['id' => 'Pemerintah Daerah · Pelaporan', 'en' => 'Local Government · Reporting'],
            'problem' => ['id' => 'Pemda DIY membutuhkan sistem laporan pertanggungjawaban yang dipakai lintas instansi.', 'en' => 'The Yogyakarta regional government needed an accountability reporting system used across agencies.'],
            'role' => ['id' => 'Full-stack developer', 'en' => 'Full-stack developer'],
            'result' => ['id' => 'Sistem pelaporan berbasis web yang berjalan di lingkungan Pemda DIY.', 'en' => 'A web-based reporting system running across the Yogyakarta regional government.'],
        ],
        'wezata-flutter-go' => [
            'area' => ['id' => 'Travel · Mobile & Web', 'en' => 'Travel · Mobile & Web'],
            'problem' => ['id' => 'Bisnis tiket wisata butuh aplikasi pemesanan, kanal agen, dan aplikasi penukaran tiket di lokasi.', 'en' => 'A travel ticket business needed a booking app, an agent channel, and a ticket redemption app on site.'],
            'role' => ['id' => 'Mobile & backend developer', 'en' => 'Mobile & backend developer'],
            'result' => ['id' => 'Ekosistem aplikasi Flutter + Go dan web booking (Go + Svelte) yang terbit di App Store dan Play Store.', 'en' => 'A Flutter + Go app ecosystem and a booking website (Go + Svelte) published on the App Store and Play Store.'],
        ],
        'dashai-ekpkd-nuxt-nest' => [
            'area' => ['id' => 'AI · Pemerintahan', 'en' => 'AI · Government'],
            'problem' => ['id' => 'Pengguna di Kemendagri dan pemerintah daerah perlu bertanya dan menganalisis data kinerja daerah dengan cepat.', 'en' => 'Users at the Ministry of Home Affairs and regional governments needed to ask about and analyse regional performance data quickly.'],
            'role' => ['id' => 'Full-stack & AI integration engineer', 'en' => 'Full-stack & AI integration engineer'],
            'result' => ['id' => 'Asisten AI dengan peran pengguna, admin daerah, dan admin OPD.', 'en' => 'An AI assistant with user, regional admin, and agency admin roles.'],
        ],
        'sirait-nuxt-nest' => [
            'area' => ['id' => 'Legal Tech · PWA', 'en' => 'Legal Tech · PWA'],
            'problem' => ['id' => 'Kantor hukum ingin klien menyampaikan perkara, mengunggah berkas, konsultasi, dan menandatangani surat kuasa tanpa datang ke kantor.', 'en' => 'A law office wanted clients to submit cases, upload documents, book consultations, and sign powers of attorney without visiting.'],
            'role' => ['id' => 'Full-stack developer', 'en' => 'Full-stack developer'],
            'result' => ['id' => 'Web app dan PWA dengan tanda tangan digital, notifikasi, dan pemantauan tahapan perkara.', 'en' => 'A web app and PWA with digital signatures, notifications, and case stage tracking.'],
        ],
    ],

    // Keahlian teknis dikelompokkan per area.
    'expertise' => [
        ['key' => 'backend',  'items' => ['PHP / Laravel', 'CodeIgniter', 'Go (Gin, Fiber)', 'Node.js / NestJS', 'Python / FastAPI', 'REST API']],
        ['key' => 'frontend', 'items' => ['Vue / Nuxt', 'React / Next.js', 'Svelte', 'Quasar', 'TypeScript', 'Tailwind CSS']],
        ['key' => 'mobile',   'items' => ['Flutter', 'Dart', 'Play Store & App Store release', 'PWA']],
        ['key' => 'database', 'items' => ['PostgreSQL', 'MySQL', 'MongoDB', 'Firestore', 'Redis']],
        ['key' => 'devops',   'items' => ['Docker', 'Nginx', 'Git / GitLab CI', 'Linux VPS', 'Figma', 'Jira / Notion']],
    ],

];
