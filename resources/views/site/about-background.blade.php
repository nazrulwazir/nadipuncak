@extends('site.layouts.app')

@section('title', __('about.title'))

@section('content')
    @include('site.partials.page-header', ['title' => __('about.background_header')])
    @include('site.components.company-profile', [
        'companyName' => __('about.company_name'),
        'tagline' => __('about.tagline'),
        'introduction' => __('about.introduction'),
        'mission' => __('about.mission'),
        'vision' => __('about.vision'),
        'showFull' => true // Show full details without "Learn More" link
    ])
    @include('site.partials.scope-of-work')
    @include('site.partials.feature', ['expanded' => true])
@endsection
