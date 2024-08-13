<!-- resources/views/site/partials/testimonial.blade.php -->
<div class="testimonial wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonial-slider">
                    @foreach(__('testimonials.quotes') as $quote)
                        <div class="slider-item">
                            <h3>{{ $quote['name'] }}</h3>
                            <h4>{{ $quote['title'] }}</h4>
                            <p>"{{ $quote['quote'] }}"</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        if ($('.testimonial-slider').length) { // Ensure the element exists
            $('.testimonial-slider').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                dots: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }
                ]
            });
        }
    });
</script>
@endpush
