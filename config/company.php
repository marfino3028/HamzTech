<?php

/*
 * Data perusahaan tunggal: alamat kantor, klien (trusted by) & partner.
 * Logo di public/images/clients/. 'logo' => null = tampil sebagai wordmark teks.
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
    ],

    'clients' => [
        ['name' => 'Kementerian Perdagangan RI', 'logo' => 'kemendag.svg'],
        ['name' => 'Kementerian Keuangan RI',    'logo' => 'kemenkeu.png'],
        ['name' => 'Pemda DIY',                  'logo' => 'diy.svg'],
        ['name' => 'Universitas Negeri Surabaya', 'logo' => 'unesa.png'],
        ['name' => 'RS Brawijaya',               'logo' => null],
        ['name' => 'Invesnow',                   'logo' => null],
    ],

    'partners' => [
        ['name' => 'Technocare', 'logo' => 'technocare.png'],
        ['name' => 'Wezata',     'logo' => 'wezata.png'],
        ['name' => 'Jatrav',     'logo' => null],
    ],

];
