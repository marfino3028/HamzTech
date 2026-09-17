@extends('layouts.app')

@section('mainClass', '')

@section('content')

@include('partials.page-hero', [
    'eyebrow' => __('site.nav_services'),
    'title'   => __('site.services_hero_title'),
    'lede'    => __('site.services_hero_lede'),
])

@php
    // Ikon per urutan layanan di routes/web.php
    $icons = [
        'M2 5h20v12H2zM8 21h8M12 17v4',
        'M14.7 6.3a4 4 0 00-5.4 5.4L3 18v3h3l6.3-6.3a4 4 0 005.4-5.4l-2.3 2.3-2-2z',
        'M3 3v18h18M7 14l4-4 3 3 5-6',
        'M13 10V3L4 14h7v7l9-11h-7z',
        'M16 18l6-6-6-6M8 6l-6 6 6 6',
        'M12 19l7-7 3 3-7 7-3-3zM18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z',
        'M21 12a9 9 0 01-13.3 7.9L3 21l1.1-4.6A9 9 0 1121 12z',
    ];
@endphp

<section class="max-w-6xl mx-auto px-6 -mt-10 relative z-10">
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
        @foreach ($services as $i => $service)
        <div class="card card-hover p-7 flex flex-col reveal {{ $i % 3 == 1 ? 'reveal-d1' : ($i % 3 == 2 ? 'reveal-d2' : '') }}">
            <span class="icon-chip {{ $i % 2 ? 'gold' : '' }} mb-5"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $icons[$i % count($icons)] }}"/></svg></span>
            <h2 class="font-bold text-lg text-navy-900 mb-2">{{ $service['title'] }}</h2>
            <p class="text-sm text-slate-500 flex-1">{{ $service['desc'] }}</p>
            <a href="https://wa.me/6289626312680?text={{ rawurlencode(__('site.services_wa_text', ['service' => $service['title']])) }}" target="_blank"
               class="btn btn-ghost text-sm mt-6 self-start">{{ __('site.home_contact_wa') }}</a>
        </div>
        @endforeach
    </div>
</section>

@include('partials.cta')

@endsection
