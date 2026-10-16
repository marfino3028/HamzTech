@extends('layouts.app')

@section('mainClass', '')

@section('content')
@include('lokasi.partials.page', ['city' => 'jakarta', 'office' => 3])
@endsection
