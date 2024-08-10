@extends('site.layouts.app')

@section('content')
    @include('site.partials.page-header', ['title' => 'Our Projects'])

    <!-- Portfolio Start -->
    <div class="portfolio">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Projects</p>
                <h2>Visit Our Projects</h2>
            </div>
            <div class="row portfolio-container">
                <!-- Portfolio Items -->
                @foreach($projects as $project)
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item wow fadeInUp" data-wow-delay="0.{{ $loop->iteration }}s" style="display: block;">
                        <div class="portfolio-warp">
                            <div class="portfolio-img">
                                <img src="{{ asset('themes/img/' . $project['image']) }}" alt="{{ $project['title'] }}">
                                <div class="portfolio-overlay">
                                    <p>{{ $project['description'] }}</p>
                                </div>
                            </div>
                            <div class="portfolio-text">
                                <h3>{{ $project['title'] }}</h3>
                                <a class="btn" href="{{ asset('themes/img/' . $project['image']) }}" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12 load-more text-center">
                    <a class="btn btn-primary" id="loadMore">Load More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loadMoreBtn = document.getElementById('loadMore');
            const portfolioItems = document.querySelectorAll('.portfolio-item');
            let currentItems = 9;

            function loadMoreItems() {
                for (let i = currentItems; i < currentItems + 3 && i < portfolioItems.length; i++) {
                    portfolioItems[i].style.display = 'block';
                }
                currentItems += 3;

                if (currentItems >= portfolioItems.length) {
                    loadMoreBtn.style.display = 'none';
                }
            }

            // Initially hide all items except the first `currentItems` and check if "Load More" button is needed
            portfolioItems.forEach((item, index) => {
                if (index >= currentItems) {
                    item.style.display = 'none';
                }
            });

            // Hide the "Load More" button if there are no more items to load
            if (portfolioItems.length <= currentItems) {
                loadMoreBtn.style.display = 'none';
            }

            loadMoreBtn.addEventListener('click', loadMoreItems);
        });
    </script>
@endsection
