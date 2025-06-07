@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-4">{{ $project['title'] }}</h1>
<p class="mb-6 text-gray-700">{{ $project['desc'] }}</p>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
    @foreach ($project['images'] as $img)
        <img src="{{ asset('images/portfolio/' . $img) }}" alt="" class="rounded-lg shadow">
    @endforeach
</div>

<a href="{{ url('/') }}" class="inline-block mt-8 text-blue-600 hover:underline">
    ← Kembali ke portofolio
</a>
@endsection