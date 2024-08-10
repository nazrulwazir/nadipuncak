<!-- resources/views/site/partials/carousel.blade.php -->
<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('themes/img/carousel-1.jpg') }}" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight">Your Trusted Partner</p>
                <h1 class="animated fadeInLeft">Committed to Excellence</h1>
                <a class="btn animated fadeInUp" href="#">Learn More</a>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('themes/img/carousel-2.jpg') }}" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight">100% Bumiputera-owned</p>
                <h1 class="animated fadeInLeft">Innovative Construction Solutions</h1>
                <a class="btn animated fadeInUp" href="#">Learn More</a>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('themes/img/carousel-3.jpg') }}" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight">We Are Trusted</p>
                <h1 class="animated fadeInLeft">For Your Construction Needs</h1>
                <a class="btn animated fadeInUp" href="#">Learn More</a>
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
