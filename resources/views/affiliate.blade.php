@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-4">{{ __('site.affiliate_heading') }}</h1>
<p>{{ __('site.affiliate_intro') }}</p>

<a href="https://lynk.id/marfino3028" target="_blank" class="inline-block mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
    {{ __('site.affiliate_cta') }}
</a>
@endsection