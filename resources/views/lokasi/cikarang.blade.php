@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-4">{{ __('site.lokasi_cikarang_heading') }}</h1>
<p class="mb-4">{{ __('site.lokasi_cikarang_intro') }}</p>

<ul class="list-disc pl-5">
    <li>{{ __('site.lokasi_item1') }}</li>
    <li>{{ __('site.lokasi_item2') }}</li>
    <li>{{ __('site.lokasi_item3') }}</li>
</ul>

<a href="/contact" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded">{{ __('site.lokasi_contact_now') }}</a>
@endsection