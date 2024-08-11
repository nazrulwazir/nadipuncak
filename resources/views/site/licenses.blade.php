@extends('site.layouts.app')

@section('title', 'Licenses / Certificates')

@section('content')
    @include('site.partials.page-header', ['title' => 'Licenses / Certificates'])

    <!-- Licenses / Certificates Start -->
    <div class="container">
        <div class="section-header text-center">
            <p>Our Achievements</p>
            <h2>Licenses / Certificates</h2>
        </div>
        <div class="row">
            <!-- Loop through your images -->
            @foreach($certImages as $image)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="license-item">
                        <a href="{{ asset('themes/img/certs/' . $image) }}" data-lightbox="licenses" data-title="{{ pathinfo($image, PATHINFO_FILENAME) }}">
                            <div class="license-img-container">
                                <img src="{{ asset('themes/img/certs/' . $image) }}" alt="{{ pathinfo($image, PATHINFO_FILENAME) }}" class="img-fluid lazyload">
                            </div>
                        </a>
                        <div class="license-title text-center mt-2">
                            <h5>{{ pathinfo($image, PATHINFO_FILENAME) }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Licenses / Certificates End -->
@endsection

@push('styles')
<style>
    .license-img-container {
        width: 100%;
        height: 450px; /* Fixed height for all images */
        overflow: hidden; /* Hide overflow to ensure images fit within the container */
        border-radius: 8px; /* Optional: Add some border-radius for rounded corners */
    }

    .license-img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Ensure the image covers the container while maintaining aspect ratio */
        display: block;
    }
</style>
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/17.3.1/lazyload.min.js"></script>
<script>
    var lazyLoadInstance = new LazyLoad({
        elements_selector: "img"
    });
</script>
@endpush
