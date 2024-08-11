@extends('site.layouts.app')

@section('title', 'Our Background')

@section('content')
    @include('site.partials.page-header', ['title' => 'Background'])
    @include('site.components.company-profile', [
        'companyName' => 'Nadi Puncak Sdn Bhd',
        'tagline' => 'Your Trusted Construction Partner',
        'introduction' => 'NADI PUNCAK SDN BHD is a 100% Bumiputera-owned contractor and civil engineering company, located at No. 283, Tingkat 1, Jalan Shahab, Shahab Perdana, 05150 Alor Setar, Kedah.',
        'mission' => 'The company, led by Tuan Muhammad Hakimie Bin Haslee, is committed to elevating its business to the highest standards by providing the best services and demonstrating dedication within the team.',
        'vision' => 'With a solid vision and mission, Nadi Puncak Sdn Bhd aims to achieve excellence and success in the construction, contractor, and civil engineering industries.',
        'showFull' => true // Show full details without "Learn More" link
    ])
    <div class="mb-5"></div>
    @include('site.partials.scope-of-work')
    <div class="mb-5"></div>
    @include('site.partials.feature', ['expanded' => true])
@endsection
