@extends('site.layouts.app')

@section('title', __('gallery.title'))

@section('content')
    @include('site.partials.page-header', ['title' => __('gallery.header')])

    <!-- Gallery Start -->
    <div class="container gallery-container">
        <div class="section-header text-center">
            <p>{{ __('gallery.subtitle') }}</p>
            <h2>{{ __('gallery.section_title') }}</h2>
        </div>
        <div class="row gallery-row">
            @foreach($galleryImages as $image)
                <div class="col-lg-3 col-md-4 col-sm-6 gallery-item">
                    <a href="{{ asset('themes/img/actual/gallery/' . $image['image']) }}" data-lightbox="gallery">
                        <img src="{{ asset('themes/img/actual/gallery/' . $image['image']) }}" alt="{{ $image['title'] }}" class="img-fluid gallery-img lazyload">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Gallery End -->
@endsection

@push('styles')
    <style>
        .gallery-container {
            margin-top: 30px;
        }
        .gallery-row .gallery-item {
            margin-bottom: 15px;
        }
        .gallery-img {
            width: 100%;
            height: 250px; /* Set a fixed height */
            object-fit: cover; /* Ensure the image covers the area without stretching */
            border-radius: 5px; /* Add some border-radius if needed */
        }
    </style>
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" async></script>
@endpush
