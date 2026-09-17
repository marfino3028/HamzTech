@extends('layouts.app')

@section('mainClass', '')

@section('content')
@include('lokasi.partials.page', ['city' => 'solo', 'office' => 0])
@endsection
