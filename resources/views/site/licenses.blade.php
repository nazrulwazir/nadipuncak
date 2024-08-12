@extends('site.layouts.app')

@section('title', 'Licenses & Certificates')

@section('content')
    @include('site.partials.page-header', ['title' => ucfirst($currentFolder)])

    <!-- Licenses & Certificates Start -->
    <div class="container">
        <div class="section-header text-center">
            <p>Our Achievements</p>
            <h2>{{ ucfirst($currentFolder) }}</h2>
        </div>
        
        <!-- Tab Content -->
        <div class="row portfolio-container">
            @foreach($images as $image)
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item wow fadeInUp">
                    <div class="portfolio-warp">
                        <div class="portfolio-img">
                            <img src="{{ asset('themes/img/licenses_certs/' . $currentFolder . '/' . $image) }}" alt="{{ pathinfo($image, PATHINFO_FILENAME) }}" class="img-fluid lazyload">
                        </div>
                        <div class="portfolio-text">
                            <a class="btn" href="{{ asset('themes/img/licenses_certs/' . $currentFolder . '/' . $image) }}" data-lightbox="portfolio">
                                <i class="fas fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Licenses & Certificates End -->
@endsection

@push('styles')
<style type="text/css">
    /* Ensure the portfolio container has enough space at the bottom */
.portfolio-container {
    margin-bottom: 100px; /* Increase bottom margin to avoid footer overlap */
}

/* Add a clearfix after the last row in the portfolio container */
.clearfix::after {
    content: "";
    display: block;
    clear: both;
}

/* Ensure WOW.js animations do not cause content to be hidden */
.wow {
    visibility: visible !important;
    animation-name: fadeInUp !important;
    animation-duration: 1s !important;
    animation-fill-mode: both !important; /* Ensure content stays visible after animation */
}

/* Adjust button styling for better visibility */
.portfolio-text .btn {
    background-color: #fdbe33;
    color: #fff;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.portfolio-text .btn:hover {
    background-color: #ffcc33;
    transform: scale(1.1);
}

/* Media query adjustments for smaller screens */
@media (max-width: 768px) {
    .portfolio-item {
        margin-bottom: 20px;
    }

    .portfolio-text .btn {
        width: 35px;
        height: 35px;
    }
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

    // Initialize WOW.js for animations with adjusted settings
new WOW({
    boxClass: 'wow',      // default
    animateClass: 'animated', // default
    offset: 100,          // Trigger animations earlier to avoid content overlap
    mobile: true,         // Allow animations on mobile devices
    live: true            // Act on asynchronously loaded content
}).init();

// Initialize lazyload
var lazyLoadInstance = new LazyLoad({
    elements_selector: "img"
});


</script>
@endpush
