@extends('layouts.app')

@section('mainClass', '')

@section('content')

@php
    $actions = [];
    if (!empty($item['url'])) {
        $actions[] = ['url' => $item['url'], 'label' => trim(str_replace('↗', '', __('site.portfolio_visit')))];
    }
    $actions[] = ['url' => 'https://wa.me/6289626312680?text=' . rawurlencode(__('site.portfolio_wa_text', ['project' => $item['title']])), 'label' => __('site.portfolio_similar_cta')];
@endphp

@include('partials.page-hero', [
    'back'    => ['url' => '/portofolio', 'label' => __('site.portfolio_back_short')],
    'eyebrow' => ($item['type'] ?? 'web') === 'mobile' ? __('site.portfolio_type_mobile') : __('site.portfolio_type_web'),
    'title'   => $item['title'],
    'badges'  => !empty($item['tech']) ? array_map('trim', explode('+', $item['tech'])) : [],
    'actions' => $actions,
])

<section class="max-w-6xl mx-auto px-6 -mt-10 relative z-10" x-data="{ showModal: false, modalImg: '' }">
    <div class="card p-7 reveal">
        <p class="text-slate-600 leading-relaxed whitespace-pre-line">{{ app()->getLocale() === 'en' ? ($item['desc_en'] ?? $item['desc']) : $item['desc'] }}</p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5 mt-8">
        @foreach ($item['images'] as $img)
        <button type="button" class="card card-hover overflow-hidden text-left reveal {{ $loop->index % 3 == 1 ? 'reveal-d1' : ($loop->index % 3 == 2 ? 'reveal-d2' : '') }}"
                @click="showModal = true; modalImg = '{{ asset('images/portfolio/' . $img) }}'">
            <img src="{{ asset('images/portfolio/' . $img) }}" alt="{{ $item['title'] }} screenshot {{ $loop->iteration }}" class="shot w-full" loading="lazy">
        </button>
        @endforeach
    </div>

    <div x-show="showModal" x-transition style="display:none"
         class="fixed inset-0 z-50 flex items-center justify-center bg-navy-950/85 backdrop-blur-sm p-4"
         @click.self="showModal = false" @keydown.escape.window="showModal = false">
        <div class="relative">
            <img :src="modalImg" class="max-h-[88vh] max-w-full rounded-2xl shadow-2xl" alt="">
            <button @click="showModal = false" class="absolute -top-3 -right-3 w-10 h-10 rounded-full bg-white text-navy-900 text-2xl font-bold shadow-lg" aria-label="Close">&times;</button>
        </div>
    </div>
</section>

@include('partials.cta')

@endsection
