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
                <p class="animated fadeInRight">Your Trusted Partner</p>
                <h1 class="animated fadeInLeft">Nadi Puncak Sdn Bhd <br> Committed to Excellence</h1>
            </div>
        </div>

        <!-- Second Carousel Item -->
        <div class="carousel-item">
            <img src="{{ asset('themes/img/slider/img2.webp') }}" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight">100% Bumiputera-owned</p>
                <h1 class="animated fadeInLeft">Innovative Construction Solutions</h1>
            </div>
        </div>

        <!-- Third Carousel Item -->
        <div class="carousel-item">
            <img src="{{ asset('themes/img/carousel-3.jpg') }}" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight">We Are Trusted</p>
                <h1 class="animated fadeInLeft">For Your Construction Needs</h1>
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
@push('styles')
<style type="text/css">
/* Ensuring the text is sharp and clear */
.carousel-caption h1,
.carousel-caption p,
.carousel-caption .btn {
    color: #fdbe33 !important;
    font-weight: 700; /* Makes the text bold */
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.75); /* Adds a subtle shadow for better contrast */
    text-transform: uppercase; /* Makes the text all uppercase for a more consistent appearance */
    letter-spacing: 1px; /* Increases spacing between letters slightly */
}

/* Button Styles */
.carousel-caption .btn {
    border-color: #fdbe33;
    background-color: #fdbe33;
    font-weight: 700; /* Ensures button text is bold as well */
}

.carousel-caption .btn:hover {
    background-color: #cfa829; /* Darker shade for hover effect */
    border-color: #cfa829;
}
</style>
@endpush

</style>
@endpush