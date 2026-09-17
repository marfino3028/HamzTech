@extends('layouts.app')

@section('mainClass', '')

@section('content')

@include('partials.page-hero', [
    'eyebrow' => __('site.promo_button'),
    'title'   => __('site.affiliate_heading'),
    'lede'    => __('site.affiliate_intro'),
    'actions' => [['url' => 'https://lynk.id/marfino3028', 'label' => __('site.affiliate_cta')]],
])

@include('partials.cta')

@endsection
