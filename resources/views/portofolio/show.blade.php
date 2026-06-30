@extends('layouts.app')

@section('content')
<div x-data="{ showModal: false, modalImg: '' }">
    <h2 class="text-2xl font-bold mb-2">{{ $item['title'] }}</h2>

    <div class="flex flex-wrap items-center gap-3 mb-4">
        @if (!empty($item['tech']))
            <span class="inline-block bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full">{{ $item['tech'] }}</span>
        @endif
        @if (!empty($item['type']))
            <span class="inline-block bg-gray-100 text-gray-700 text-xs font-semibold px-3 py-1 rounded-full">{{ $item['type'] === 'mobile' ? 'Mobile App' : 'Web' }}</span>
        @endif
        @if (!empty($item['url']))
            <a href="{{ $item['url'] }}" target="_blank" rel="noopener" class="inline-block bg-green-600 text-white text-xs font-semibold px-3 py-1 rounded-full hover:bg-green-700">Kunjungi ↗</a>
        @endif
    </div>

    <p class="mb-6 text-gray-600 whitespace-pre-line">{{ $item['desc'] }}</p>

    <div class="grid md:grid-cols-3 gap-4">
        @foreach ($item['images'] as $img)
        <img 
            src="{{ asset('images/portfolio/' . $img) }}" 
            alt="Screenshot {{ $img }}" 
            class="rounded shadow cursor-pointer hover:scale-105 transition"
            @click="showModal = true; modalImg = '{{ asset('images/portfolio/' . $img) }}'"
        >
        @endforeach
    </div>

    <!-- Modal -->
    <div 
        x-show="showModal" 
        x-transition 
        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-80 z-50"
        @click.away="showModal = false"
        @keydown.escape.window="showModal = false"
        style="display: none;"
    >
        <div class="relative">
            <img :src="modalImg" class="max-h-[90vh] rounded shadow-lg">
            <button 
                @click="showModal = false" 
                class="absolute top-2 right-2 text-white text-3xl font-bold"
                aria-label="Close"
            >&times;</button>
        </div>
    </div>
</div>
@endsection