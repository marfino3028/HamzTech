@extends('layouts.app')

@section('mainClass', '')

@section('content')
@include('lokasi.partials.page', ['city' => 'jakarta', 'office' => 1])
@endsection
