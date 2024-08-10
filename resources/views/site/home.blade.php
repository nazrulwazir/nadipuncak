@extends('site.layouts.app')

@section('title', 'Home Page')

@section('content')
    @include('site.partials.carousel')
    @include('site.partials.feature')
    <div class="mb-5"></div> <!-- Adds margin bottom of 5 units after carousel -->
    @include('site.components.company-profile', [
        'companyName' => 'Nadi Puncak Sdn Bhd',
        'tagline' => 'Your Trusted Construction Partner',
        'introduction' => 'NADI PUNCAK SDN BHD is a 100% Bumiputera-owned contractor and civil engineering company, located at No. 283, Tingkat 1, Jalan Shahab, Shahab Perdana, 05150 Alor Setar, Kedah.',
        'shortSummary' => 'NADI PUNCAK SDN BHD is a leading Bumiputera-owned contractor and civil engineering company in Alor Setar, Kedah.',
        'learnMoreLink' => route('site.about.background') // Link to the about page
    ])
    @include('site.partials.fact')
    @include('site.partials.scope-of-work')
    @include('site.partials.services')
    @include('site.partials.testimonial')
@endsection