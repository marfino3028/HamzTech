@extends('layouts.app')

@section('mainClass', '')

@section('content')
@include('lokasi.partials.page', ['city' => 'cikarang', 'office' => 1])
@endsection
