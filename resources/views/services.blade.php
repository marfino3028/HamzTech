@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-4">Layanan Jasa IT</h1>

<div class="grid md:grid-cols-2 gap-6">
    @foreach ($services as $service)
        <div class="bg-white rounded-xl shadow p-5 hover:shadow-md transition">
            <h2 class="text-xl font-semibold mb-1">{{ $service['title'] }}</h2>
            <p class="text-gray-600">{{ $service['desc'] }}</p>
        </div>
    @endforeach
</div>
@endsection