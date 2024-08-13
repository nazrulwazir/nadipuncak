<!-- resources/views/site/partials/footer.blade.php -->
<div class="footer wow fadeIn" data-wow-delay="0.3s">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="footer-contact">
                    <h2>{{ __('footer.contact_information') }}</h2>
                    <p><img src="{{ asset('themes/img/actual/logo.png') }}" alt="Logo" style="height: 150px; width: auto;"></p>
                    <p><i class="fa fa-building"></i> {{ __('footer.company_name') }}</p>
                    <p><i class="fa fa-map-marker-alt"></i> {{ __('footer.address') }}</p>
                    <p><i class="fa fa-phone-alt"></i> 04 - 787 7661</p>
                    <p><i class="fa fa-phone-alt"></i> 014 - 802 9611</p>
                    <p><i class="fa fa-envelope"></i> nadipuncak23@gmail.com</p>
                    <p><i class="fa fa-clock"></i> {{ __('footer.opening_hours') }}: {{ __('footer.opening_hours_full') }}</p>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer-link">
                    <h2>{{ __('footer.service_areas') }}</h2>
                    <a href="{{ url('/services#building-construction') }}">{{ __('footer.building_construction') }}</a>
                    <a href="{{ url('/services#house-renovation') }}">{{ __('footer.house_renovation') }}</a>
                    <a href="{{ url('/services#architecture-design') }}">{{ __('footer.architecture_design') }}</a>
                    <a href="{{ url('/services#interior-design') }}">{{ __('footer.interior_design') }}</a>
                    <a href="{{ url('/services#painting') }}">{{ __('footer.painting') }}</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer-link">
                    <h2>{{ __('footer.useful_pages') }}</h2>
                    <a href="{{ url('/about/background') }}">{{ __('footer.about_us') }}</a>
                    <a href="{{ url('/contact') }}">{{ __('footer.contact_us') }}</a>
                    <a href="{{ url('/portfolio') }}">{{ __('footer.projects') }}</a>
                    <a href="{{ url('/licenses-certificates') }}">{{ __('footer.licenses_certificates') }}</a>
                    <a href="{{ url('/gallery') }}">{{ __('footer.gallery') }}</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer-link">
                    <h2>{{ __('footer.board_of_directors') }}</h2>
                    <p>{{ __('footer.managing_director') }}</p>
                    <p>{{ __('footer.director') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container copyright">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; <a href="{{ url('/') }}">{{ __('footer.company_name') }}</a>, {{ __('footer.all_rights_reserved') }}</p>
            </div>
            <div class="col-md-6">
                <!-- You can add any additional info here if necessary -->
            </div>
        </div>
    </div>
</div>
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
