@extends('layouts.app')

@section('mainClass', '')

@section('content')

@include('partials.page-hero', [
    'eyebrow' => __('site.portfolio_heading'),
    'title'   => __('site.portfolio_hero_title', ['count' => count($data)]),
    'lede'    => __('site.portfolio_hero_lede'),
])

<section class="max-w-6xl mx-auto px-6 -mt-10 relative z-10" x-data="{ type: 'all' }">
    <div class="flex flex-wrap gap-2 mb-8">
        @foreach (['all' => __('site.portfolio_filter_all'), 'web' => __('site.portfolio_type_web'), 'mobile' => __('site.portfolio_type_mobile')] as $key => $label)
            <button type="button" @click="type = '{{ $key }}'"
                    :class="type === '{{ $key }}' ? 'btn-gold' : 'btn-ghost bg-white'"
                    class="btn text-sm py-2 px-5">{{ $label }}</button>
        @endforeach
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($data as $project)
            <div x-show="type === 'all' || type === '{{ $project['type'] ?? 'web' }}'" class="grid">
                @include('partials.project-card', ['project' => $project, 'i' => $loop->index])
            </div>
        @endforeach
    </div>
</section>

@include('partials.affiliate-banner')

@include('partials.cta')

@endsection
