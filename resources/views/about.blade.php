@extends('layouts.app')

@section('content')
<section class="py-16 px-4 sm:px-8 lg:px-20 bg-white text-gray-800">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl font-bold mb-6 flex items-center gap-2">
            <span>🏢</span> {{ __('site.about_heading') }} <span class="text-blue-600">HamzTech</span>
        </h2>
        <p class="mb-6 text-lg leading-relaxed">
            {!! __('site.about_p1') !!}
        </p>
        <p class="mb-10 text-lg leading-relaxed">
            {{ __('site.about_p2') }}
        </p>

        <hr class="my-10 border-gray-300">

        <h3 class="text-2xl font-semibold mb-4">{{ __('site.about_services_heading') }}</h3>
        <div class="grid sm:grid-cols-2 gap-6 text-base">
            <ul class="list-disc pl-5 space-y-1">
                <li>{{ __('site.about_services_item1') }}</li>
                <li>{{ __('site.about_services_item2') }}</li>
                <li>{{ __('site.about_services_item3') }}</li>
                <li>{{ __('site.about_services_item4') }}</li>
                <li>{{ __('site.about_services_item5') }}</li>
            </ul>
            <ul class="list-disc pl-5 space-y-1">
                <li>{{ __('site.about_services_item6') }}</li>
                <li>{{ __('site.about_services_item7') }}</li>
                <li>{{ __('site.about_services_item8') }}</li>
                <li>{{ __('site.about_services_item9') }}</li>
                <li>{{ __('site.about_services_item10') }}</li>
            </ul>
            <ul class="list-disc pl-5 space-y-1">
                <li>{{ __('site.about_services_item11') }}</li>
                <li>{{ __('site.about_services_item12') }}</li>
                <li>{{ __('site.about_services_item13') }}</li>
                <li>{{ __('site.about_services_item14') }}</li>
                <li>{{ __('site.about_services_item15') }}</li>
            </ul>
            <ul class="list-disc pl-5 space-y-1">
                <li>{{ __('site.about_services_item16') }}</li>
            </ul>
        </div>

        <hr class="my-10 border-gray-300">

        <h3 class="text-2xl font-semibold mb-4">{{ __('site.about_why_heading') }}</h3>
        <ul class="list-none space-y-2 text-base">
            <li>{{ __('site.about_why_item1') }}</li>
            <li>{{ __('site.about_why_item2') }}</li>
            <li>{{ __('site.about_why_item3') }}</li>
            <li>{{ __('site.about_why_item4') }}</li>
            <li>{{ __('site.about_why_item5') }}</li>
        </ul>

        <hr class="my-10 border-gray-300">

        <h3 class="text-2xl font-semibold mb-4">{{ __('site.about_area_heading') }}</h3>
        <p class="text-lg">{{ __('site.about_area_text') }}</p>
        <p class="text-blue-700 font-semibold mt-2">{{ __('site.about_area_list') }}</p>
    </div>
</section>
@endsection