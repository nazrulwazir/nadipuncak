@extends('site.layouts.app')

@section('title', 'Home')

@section('content')
    @include('site.partials.carousel')
    @include('site.partials.feature', ['expanded' => true])
    @include('site.components.company-profile', [
        'companyName' => __('company-profile.company_name'),
        'tagline' => __('company-profile.tagline'),
        'introduction' => __('company-profile.introduction'),
        'shortSummary' => '',
        'mission' => __('company-profile.mission'),
        'vision' => __('company-profile.vision'),
        'learnMoreLink' => route('site.about.background') // Link to the about page
    ])
    @include('site.partials.scope-of-work')
    @include('site.partials.fact')
    @include('site.partials.services')
    @include('site.partials.testimonial')
@endsection