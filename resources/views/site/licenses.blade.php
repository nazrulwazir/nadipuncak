@extends('site.layouts.app')

@section('title', 'Licenses & Certificates')

@section('content')
    @include('site.partials.page-header', ['title' => 'Licenses & Certificates'])

    <!-- Licenses & Certificates Start -->
    <div class="container">
        <div class="section-header text-center">
            <p>Our Achievements</p>
            <h2>Licenses & Certificates</h2>
        </div>

        <!-- Tab Navigation -->
        <ul id="portfolio-flters" class="d-flex justify-content-center">
            <li data-filter="*" class="filter-active">All</li>
            @foreach($folders as $folder)
                <li data-filter=".{{ Str::slug($folder) }}">{{ ucfirst($folder) }}</li>
            @endforeach
        </ul>

        <!-- Tab Content -->
        <div class="row portfolio-container">
            @foreach($imagesByFolder as $folder => $images)
                @foreach($images as $image)
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item {{ Str::slug($folder) }} wow fadeInUp">
                        <div class="portfolio-warp">
                            <div class="portfolio-img">
                                <img src="{{ asset('themes/img/licenses_certs/' . $folder . '/' . $image) }}" alt="{{ pathinfo($image, PATHINFO_FILENAME) }}" class="img-fluid lazyload">
                                <div class="portfolio-overlay">
                                    <p>{{ pathinfo($image, PATHINFO_FILENAME) }}</p>
                                </div>
                            </div>
                            <div class="portfolio-text">
                                <a class="btn" href="{{ asset('themes/img/licenses_certs/' . $folder . '/' . $image) }}" data-lightbox="{{ $folder }}">+</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
    <!-- Licenses & Certificates End -->
@endsection

@push('styles')
<style>
    /* Portfolio Filters */
    #portfolio-flters {
        padding: 0;
        margin-bottom: 30px;
        list-style: none;
        display: flex;
        justify-content: center;
    }
    #portfolio-flters li {
        cursor: pointer;
        margin: 0 10px;
        padding: 8px 15px;
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
        color: #444;
        border-radius: 5px;
        transition: all 0.3s ease-in-out;
        background-color: #f1f1f1;
    }
    #portfolio-flters li.filter-active {
        background-color: #fdbe33;
        color: #fff;
    }

    /* Portfolio Item */
    .portfolio-item {
        margin-bottom: 30px;
    }

    .portfolio-warp {
        position: relative;
    }

    .portfolio-img {
        position: relative;
        overflow: hidden;
    }

    .portfolio-img img {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }

    .portfolio-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: all 0.3s ease;
    }

    .portfolio-overlay p {
        color: #fff;
        text-align: center;
        padding: 0 15px;
    }

    .portfolio-warp:hover .portfolio-overlay {
        opacity: 1;
    }

    .portfolio-text {
        text-align: center;
        margin-top: 10px;
    }

    .portfolio-text h3 {
        font-size: 18px;
        color: #030f27;
    }

    .portfolio-text .btn {
        background-color: #fdbe33;
        color: #fff;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        display: inline-flex;
        justify-content: center;
        align-items: center;
    }
</style>
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/17.3.1/lazyload.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/isotope/3.0.6/isotope.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
    // Initialize lazyload
    var lazyLoadInstance = new LazyLoad({
        elements_selector: "img"
    });

    // Initialize Isotope for filtering
    var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });

    $('#portfolio-flters li').on('click', function () {
        $("#portfolio-flters li").removeClass('filter-active');
        $(this).addClass('filter-active');

        portfolioIsotope.isotope({ filter: $(this).data('filter') });
    });

    // Initialize WOW.js for animations
    new WOW().init();
</script>
@endpush
