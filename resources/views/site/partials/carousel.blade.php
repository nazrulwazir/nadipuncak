<!-- resources/views/site/partials/carousel.blade.php -->
<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <!-- First Carousel Item -->
        <div class="carousel-item active">
            <img src="{{ asset('themes/img/slider/img1.webp') }}" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight">{{ __('carousel.trusted_partner') }}</p>
                <h1 class="animated fadeInLeft">{!! __('carousel.committed_excellence') !!}</h1>
            </div>
        </div>

        <!-- Second Carousel Item -->
        <div class="carousel-item">
            <img src="{{ asset('themes/img/slider/img2.webp') }}" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight">{{ __('carousel.bumiputera_owned') }}</p>
                <h1 class="animated fadeInLeft">{{ __('carousel.innovative_solutions') }}</h1>
            </div>
        </div>

        <!-- Third Carousel Item -->
        <div class="carousel-item">
            <img src="{{ asset('themes/img/carousel-3.jpg') }}" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight">{{ __('carousel.trusted_partner') }}</p>
                <h1 class="animated fadeInLeft">{!! __('carousel.trusted_for_needs') !!}</h1>
            </div>
        </div>
    </div>

    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

@push('styles')
<style type="text/css">
.carousel-caption h1,
.carousel-caption p,
.carousel-caption .btn {
    color: #fdbe33 !important;
    text-transform: uppercase;
    letter-spacing: 1px;
}
.carousel-caption .btn {
    border-color: #fdbe33;
    background-color: #fdbe33;
    font-weight: 700;
}
.carousel-caption .btn:hover {
    background-color: #cfa829;
    border-color: #cfa829;
}
</style>
@endpush