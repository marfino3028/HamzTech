@extends('layouts.app')

@section('mainClass', '')

@section('content')
@include('lokasi.partials.page', ['city' => 'klaten', 'office' => 0])
@endsection
