@extends('site.layouts.app')

@section('content')
    @include('site.partials.page-header', ['title' => 'Project Gallery'])

    <!-- Gallery Start -->
    <div class="container gallery-container">
        <div class="section-header text-center">
            <p>Our Projects</p>
            <h2>Gallery</h2>
        </div>
        <div class="row gallery-row">
            @foreach($galleryImages as $image)
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-item">
                    <a href="{{ asset('themes/img/gallery/' . $image['image']) }}" data-lightbox="gallery" data-title="{{ $image['title'] }}">
                        <img src="{{ asset('themes/img/gallery/' . $image['image']) }}" alt="{{ $image['title'] }}" class="img-fluid lazyload">
                    </a>
                    <div class="gallery-title text-center mt-2">
                        <h5>{{ $image['title'] }}</h5>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Show More Button (only if there are 9 or more images) -->
        @if(count($galleryImages) > 9)
            <div class="row">
                <div class="col-12 text-center">
                    <button class="btn btn-show-more" id="showMore">Show More</button>
                </div>
            </div>
        @endif
    </div>
    <!-- Gallery End -->
@endsection

@push('styles')
    <style>
        .gallery-container {
            margin-top: 30px;
        }
        .gallery-row .gallery-item {
            display: none; /* Hide all items initially */
            margin-bottom: 15px;
        }
        .gallery-title {
            font-size: 16px;
        }
        .btn-show-more {
            position: relative;
            margin-top: 15px;
            margin-bottom: 30px;
            padding: 15px 35px;
            font-size: 16px;
            font-weight: 500;
            letter-spacing: 1px;
            color: #030f27;
            border-radius: 0;
            background: #fdbe33;
            transition: .3s;
            border: none;
        }
        .btn-show-more:hover {
            background-color: #e0a21e;
            color: #fff;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" async></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const showMoreBtn = document.getElementById('showMore');
            const galleryItems = document.querySelectorAll('.gallery-item');
            let currentItems = 9;

            function showMoreItems() {
                for (let i = currentItems; i < currentItems + 3 && i < galleryItems.length; i++) {
                    galleryItems[i].style.display = 'block';
                }
                currentItems += 3;

                if (currentItems >= galleryItems.length) {
                    showMoreBtn.style.display = 'none';
                }
            }

            // Initially display the first 9 items
            galleryItems.forEach((item, index) => {
                if (index < currentItems) {
                    item.style.display = 'block';
                }
            });

            if (showMoreBtn) {
                showMoreBtn.addEventListener('click', showMoreItems);
            }
        });
    </script>
@endpush
