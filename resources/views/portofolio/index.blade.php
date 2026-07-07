@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-4">{{ __('site.portfolio_heading') }}</h1>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    @foreach ($data as $project)
    <a href="{{ '/portofolio/' . $project['slug'] }}" class="block bg-white rounded-2xl shadow p-4 hover:shadow-xl transition transform hover:-translate-y-1">
        <img src="{{ asset('images/portfolio/' . $project['image']) }}" alt="{{ $project['title'] }}" class="w-full h-48 object-cover rounded-md mb-3">
        <h2 class="text-xl font-semibold">{{ $project['title'] }}</h2>
        <p class="text-gray-600 text-sm">{{ app()->getLocale() === 'en' ? ($project['desc_en'] ?? $project['desc']) : $project['desc'] }}</p>
    </a>
@endforeach
</div>
<div class="bg-yellow-100 border-l-4 border-yellow-400 p-4 rounded mb-6">
    <p class="font-medium text-yellow-800">
        {{ __('site.affiliate_banner_text') }}
        <a href="https://lynk.id/marfino3028" target="_blank"
           class="text-blue-600 underline font-semibold">lynk.id/marfino3028</a>
    </p>
</div>
@endsection