@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-4">{{ __('site.home_portfolio_heading') }}</h1>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    @foreach ($projects as $project)
    <a href="{{ url('/portofolio/' . $project['slug']) }}" class="block bg-white rounded-2xl shadow p-4 hover:shadow-xl transition transform hover:-translate-y-1">
        <img src="{{ asset('images/portfolio/' . $project['image']) }}" alt="{{ $project['title'] }}" class="w-full h-48 object-cover rounded-md mb-3">
        <h2 class="text-xl font-semibold">{{ $project['title'] }}</h2>
        <p class="text-gray-600 text-sm">{{ app()->getLocale() === 'en' ? ($project['desc_en'] ?? $project['desc']) : $project['desc'] }}</p>
    </a>
@endforeach
</div>

<!-- Jasa Website Section -->
    <section class="bg-gray-100 py-12 px-4">
        <div class="container mx-auto text-center">
            <a href="#" class="text-blue-600 hover:underline mb-4 inline-block">{{ __('site.home_services_eyebrow') }}</a>
            <h2 class="text-4xl font-bold mb-4 text-gray-900">{{ __('site.home_services_heading') }}</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-8">
                {{ __('site.home_services_intro') }}
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-gray-800 text-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-2">{{ __('site.home_card_profile_title') }}</h3>
                    <ul class="text-left text-white text-sm mt-2 space-y-2">
                        <li>{{ __('site.home_card_profile_item1') }} <span class="float-right">➝</span></li>
                        <li>{{ __('site.home_card_profile_item2') }} <span class="float-right">➝</span></li>
                        <li>{{ __('site.home_card_profile_item3') }} <span class="float-right">➝</span></li>
                        <li>{{ __('site.home_card_profile_item4') }} <span class="float-right">➝</span></li>
                    </ul>
                    <a href="https://wa.me/6289626312680" target="_blank" class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">{{ __('site.home_contact_wa') }}</a>
                </div>
                <div class="bg-gray-800 text-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-2">{{ __('site.home_card_booking_title') }}</h3>
                    <ul class="text-left text-white text-sm mt-2 space-y-2">
                        <li>{{ __('site.home_card_booking_item1') }} <span class="float-right">➝</span></li>
                        <li>{{ __('site.home_card_booking_item2') }} <span class="float-right">➝</span></li>
                        <li>{{ __('site.home_card_booking_item3') }} <span class="float-right">➝</span></li>
                        <li>{{ __('site.home_card_booking_item4') }} <span class="float-right">➝</span></li>
                    </ul>
                    <a href="https://wa.me/6289626312680" target="_blank" class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">{{ __('site.home_contact_wa') }}</a>
                </div>
                <div class="bg-gray-800 text-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-2">{{ __('site.home_card_store_title') }}</h3>
                    <ul class="text-left text-white text-sm mt-2 space-y-2">
                        <li>{{ __('site.home_card_store_item1') }} <span class="float-right">➝</span></li>
                        <li>{{ __('site.home_card_store_item2') }} <span class="float-right">➝</span></li>
                        <li>{{ __('site.home_card_store_item3') }} <span class="float-right">➝</span></li>
                        <li>{{ __('site.home_card_store_item4') }} <span class="float-right">➝</span></li>
                    </ul>
                    <a href="https://wa.me/6289626312680" target="_blank" class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">{{ __('site.home_contact_wa') }}</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricelist Section -->
    <section class="bg-gray-50 py-12 px-4">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4 text-gray-900">{{ __('site.home_price_heading') }}</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-8">
                {{ __('site.home_price_intro') }}
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">{{ __('site.home_price_basic_title') }}</h3>
                    <p class="text-2xl font-bold mb-2 text-gray-800">Rp 499.999</p>
                    <p class="text-gray-600 mb-4">{{ __('site.home_price_basic_desc') }}</p>
                    <ul class="text-left text-gray-600 text-sm space-y-2 mb-4">
                        <li>✔ {{ __('site.home_price_feat_ready') }}</li>
                        <li>✔ {{ __('site.home_price_feat_design_standard') }}</li>
                        <li>✔ {{ __('site.home_price_feat_seo_basic') }}</li>
                        <li>✖ {{ __('site.home_price_feat_request') }}</li>
                        <li>✖ {{ __('site.home_price_feat_multilang') }}</li>
                        <li>✖ {{ __('site.home_price_feat_uiux') }}</li>
                        <li>✖ {{ __('site.home_price_feat_speed') }}</li>
                        <li>✖ {{ __('site.home_price_feat_kit') }}</li>
                    </ul>
                    <a href="https://wa.me/6289626312680?text=Saya%20ingin%20mengambil%20Paket%20Basic%20(Rp%20500.000)" target="_blank" class="inline-block bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">{{ __('site.home_price_take') }}</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">{{ __('site.home_price_premium_title') }}</h3>
                    <p class="text-2xl font-bold mb-2 text-gray-800">Rp 1.499.999</p>
                    <p class="text-gray-600 mb-4">{{ __('site.home_price_premium_desc') }}</p>
                    <ul class="text-left text-gray-600 text-sm space-y-2 mb-4">
                        <li>✔ {{ __('site.home_price_feat_ready') }}</li>
                        <li>✔ {{ __('site.home_price_feat_design_modern') }}</li>
                        <li>✔ {{ __('site.home_price_feat_seo_basic') }}</li>
                        <li>✔ {{ __('site.home_price_feat_request') }}</li>
                        <li>✔ {{ __('site.home_price_feat_multilang') }}</li>
                        <li>✔ {{ __('site.home_price_feat_uiux') }}</li>
                        <li>✖ {{ __('site.home_price_feat_speed') }}</li>
                        <li>✖ {{ __('site.home_price_feat_kit') }}</li>
                    </ul>
                    <a href="https://wa.me/6289626312680?text=Saya%20ingin%20mengambil%20Paket%20Premium%20(Rp%201.500.000)" target="_blank" class="inline-block bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">{{ __('site.home_price_take') }}</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">{{ __('site.home_price_luxury_title') }}</h3>
                    <p class="text-2xl font-bold mb-2 text-gray-800">Rp 3.999.999</p>
                    <p class="text-gray-600 mb-4">{{ __('site.home_price_luxury_desc') }}</p>
                    <ul class="text-left text-gray-600 text-sm space-y-2 mb-4">
                        <li>✔ {{ __('site.home_price_feat_ready') }}</li>
                        <li>✔ {{ __('site.home_price_feat_design_unique') }}</li>
                        <li>✔ {{ __('site.home_price_feat_seo_advanced') }}</li>
                        <li>✔ {{ __('site.home_price_feat_request') }}</li>
                        <li>✔ {{ __('site.home_price_feat_multilang') }}</li>
                        <li>✔ {{ __('site.home_price_feat_uiux') }}</li>
                        <li>✔ {{ __('site.home_price_feat_speed') }}</li>
                        <li>✔ {{ __('site.home_price_feat_kit_logo') }}</li>
                    </ul>
                    <a href="https://wa.me/6289626312680?text=Saya%20ingin%20mengambil%20Paket%20Luxury%20(Rp%203.000.000)" target="_blank" class="inline-block bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">{{ __('site.home_price_take') }}</a>
                </div>
            </div>
            <p class="text-gray-600 mt-8">{{ __('site.home_price_footer') }}</p>
            <a href="https://wa.me/6289626312680" target="_blank" class="mt-4 inline-block bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700">{{ __('site.home_price_agent') }}</a>
        </div>
    </section>

<section class="bg-gray-900 text-white py-12 px-4">
        <div class="container mx-auto text-center">
            <a href="#" class="text-blue-300 hover:underline mb-4 inline-block">{{ __('site.home_why_eyebrow') }}</a>
            <h2 class="text-4xl font-bold mb-4">{{ __('site.home_why_heading') }}</h2>
            <p class="text-gray-300 max-w-2xl mx-auto mb-8">
                {{ __('site.home_why_intro') }}
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white bg-opacity-10 p-6 rounded-lg shadow-lg">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">{{ __('site.home_why_allinone_title') }}</h3>
                    <p class="text-sm text-gray-300">{{ __('site.home_why_allinone_desc') }}</p>
                </div>
                <div class="bg-white bg-opacity-10 p-6 rounded-lg shadow-lg">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">{{ __('site.home_why_price_title') }}</h3>
                    <p class="text-sm text-gray-300">{{ __('site.home_why_price_desc') }}</p>
                </div>
                <div class="bg-white bg-opacity-10 p-6 rounded-lg shadow-lg">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">{{ __('site.home_why_custom_title') }}</h3>
                    <p class="text-sm text-gray-300">{{ __('site.home_why_custom_desc') }}</p>
                </div>
                <div class="bg-white bg-opacity-10 p-6 rounded-lg shadow-lg">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">{{ __('site.home_why_workflow_title') }}</h3>
                    <p class="text-sm text-gray-300">{{ __('site.home_why_workflow_desc') }}</p>
                </div>
                <div class="bg-white bg-opacity-10 p-6 rounded-lg shadow-lg">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">{{ __('site.home_why_warranty_title') }}</h3>
                    <p class="text-sm text-gray-300">{{ __('site.home_why_warranty_desc') }}</p>
                </div>
                <div class="bg-white bg-opacity-10 p-6 rounded-lg shadow-lg">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">{{ __('site.home_why_bonus_title') }}</h3>
                    <p class="text-sm text-gray-300">{{ __('site.home_why_bonus_desc') }}</p>
                </div>
            </div>
        </div>
    </section>    

<div class="bg-yellow-100 border-l-4 border-yellow-400 p-4 rounded mb-6">
    <p class="font-medium text-yellow-800">
        {{ __('site.affiliate_banner_text') }}
        <a href="https://lynk.id/marfino3028" target="_blank"
           class="text-blue-600 underline font-semibold">lynk.id/marfino3028</a>
    </p>
</div>
@endsection