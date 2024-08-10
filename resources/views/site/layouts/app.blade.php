<!-- resources/views/site/layouts/app.blade.php -->
@extends('site.layouts.base')

@section('title', 'Home')

@section('content')
    @include('site.partials.carousel')
    @include('site.partials.services')
    <!-- Add other sections or content as needed -->
@endsection
