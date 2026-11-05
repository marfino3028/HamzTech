<?php

/*
 * Data perusahaan tunggal: alamat kantor, klien (trusted by) & partner.
 * Logo di public/images/clients/. 'logo' => null = tampil sebagai wordmark teks.
 * 'url' = situs resmi; logo menjadi tautan ke situs itu (tab baru).
 */

return [

    'offices' => [
        [
            'name'    => 'HamzTech Solo',
            'city'    => 'Surakarta, Jawa Tengah',
            'address' => 'Jl. Arjuna II, Serengan, Kec. Serengan, Kota Surakarta, Jawa Tengah 57155',
            'maps'    => 'https://maps.app.goo.gl/ZLYv57ceU15r8v7o7',
            'lat'     => -7.5820517,
            'lng'     => 110.8169061,
        ],
        [
            'name'    => 'HamzTech Bekasi',
            'city'    => 'Kabupaten Bekasi, Jawa Barat',
            'address' => 'Primerose Emerald, Karangbahagia, Jl. Kp. Kandang No.12 Blok L, Sukaraya, Kab. Bekasi, Jawa Barat 17530',
            'maps'    => 'https://maps.app.goo.gl/A8eMDS51V39qjaGw7',
            'lat'     => -6.2208766,
            'lng'     => 107.1667887,
        ],
        [
            'name'    => 'HamzTech Klaten',
            'city'    => 'Kabupaten Klaten, Jawa Tengah',
            'address' => 'Palemsari Wetan, Jeblog, Kabupaten Klaten, Jawa Tengah 57482 (dekat Umbul Ponggok)',
            'maps'    => 'https://www.google.com/maps?q=-7.613075,110.635519',
            'lat'     => -7.613075,
            'lng'     => 110.635519,
        ],
        [
            'name'    => 'HamzTech Jakarta',
            'city'    => 'Jakarta Pusat, DKI Jakarta',
            'address' => 'Gg. Tembok, Kebon Sirih, Kec. Menteng, Jakarta Pusat, DKI Jakarta 10340',
            'maps'    => 'https://www.google.com/maps?q=-6.1859855,106.8391916',
            'lat'     => -6.1859855,
            'lng'     => 106.8391916,
        ],
    ],

    'clients' => [
        ['name' => 'Kementerian Perdagangan RI', 'logo' => 'kemendag.svg', 'url' => 'https://www.kemendag.go.id'],
        ['name' => 'Kementerian Keuangan RI',    'logo' => 'kemenkeu.png', 'url' => 'https://www.kemenkeu.go.id'],
        ['name' => 'Kementerian Dalam Negeri RI', 'logo' => 'kemendagri.svg', 'url' => 'https://www.kemendagri.go.id'],
        ['name' => 'Ditjen Otonomi Daerah Kemendagri', 'logo' => 'otda.png', 'url' => 'https://otda.kemendagri.go.id'],
        ['name' => 'Kementerian Kesehatan RI',   'logo' => 'kemenkes.svg', 'url' => 'https://kemkes.go.id'],
        ['name' => 'Pemda DIY',                  'logo' => 'diy.svg', 'url' => 'https://jogjaprov.go.id'],
        ['name' => 'Universitas Negeri Surabaya', 'logo' => 'unesa.png', 'url' => 'https://www.unesa.ac.id'],
        ['name' => 'RS Brawijaya',               'logo' => 'rsbrawijaya.png', 'url' => 'https://brawijayahospital.com'],
        ['name' => 'Invesnow',                   'logo' => 'invesnow.svg', 'url' => 'https://invesnow.id'],
        ['name' => 'Pratama Tech',               'logo' => 'pratamatech.png', 'url' => 'https://pratamainnovation.com'],
        ['name' => 'Sirait & Co',                'logo' => 'sirait.png', 'url' => 'https://sirait.co'],
        ['name' => 'Fudao Scrunchie',            'logo' => 'fudao.png', 'url' => 'https://rossieannacraft.com'],
        ['name' => 'Pos Buku',                   'logo' => 'posbuku.png', 'url' => 'https://posbuku.com'],
        ['name' => 'Zhafirah',                   'logo' => 'zhafirah.png', 'url' => 'https://www.zhafirah.co.id'],
    ],

    'partners' => [
        ['name' => 'Technocare', 'logo' => 'technocare.png', 'url' => 'https://technocare.id'],
        ['name' => 'Konvertin',  'logo' => 'konvertin.png', 'url' => 'https://konvertin.id'],
        ['name' => 'Liburania',  'logo' => 'liburania.png', 'url' => 'https://liburania.com'],
        ['name' => 'Freedoms of Travellers', 'logo' => 'foftravellers.png', 'url' => 'https://foftravellers.com'],
        ['name' => 'PT Abata Citra Solusi', 'logo' => 'abata.png', 'url' => 'https://abata.id'],
    ],

];
