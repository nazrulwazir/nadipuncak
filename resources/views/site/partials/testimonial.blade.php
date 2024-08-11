<!-- resources/views/site/partials/testimonial.blade.php -->
<div class="testimonial wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonial-slider">
                    <div class="slider-item">
                        <h3>Albert Einstein</h3>
                        <h4>Physicist</h4>
                        <p>"Strive not to be a success, but rather to be of value."</p>
                    </div>
                    <div class="slider-item">
                        <h3>Henry Ford</h3>
                        <h4>Industrialist</h4>
                        <p>"Whether you think you can or you think you can’t, you’re right."</p>
                    </div>
                    <div class="slider-item">
                        <h3>Walt Disney</h3>
                        <h4>Film Producer</h4>
                        <p>"The way to get started is to quit talking and begin doing."</p>
                    </div>
                    <div class="slider-item">
                        <h3>Steve Jobs</h3>
                        <h4>Entrepreneur</h4>
                        <p>"The only way to do great work is to love what you do."</p>
                    </div>
                    <div class="slider-item">
                        <h3>Nelson Mandela</h3>
                        <h4>Revolutionary</h4>
                        <p>"It always seems impossible until it’s done."</p>
                    </div>
                    <div class="slider-item">
                        <h3>Michael Jordan</h3>
                        <h4>Athlete</h4>
                        <p>"I’ve missed more than 9000 shots in my career. I’ve lost almost 300 games. 26 times, I’ve been trusted to take the game-winning shot and missed. I’ve failed over and over and over again in my life. And that is why I succeed."</p>
                    </div>
                    <div class="slider-item">
                        <h3>Amelia Earhart</h3>
                        <h4>Aviator</h4>
                        <p>"The most effective way to do it, is to do it."</p>
                    </div>
                    <div class="slider-item">
                        <h3>Oprah Winfrey</h3>
                        <h4>Talk Show Host</h4>
                        <p>"The biggest adventure you can take is to live the life of your dreams."</p>
                    </div>
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