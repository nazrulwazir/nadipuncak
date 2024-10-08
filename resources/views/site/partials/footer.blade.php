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
                    <a href="{{ url('/services#telecom-works') }}">{{ __('our_services.services.telecom_works') }}</a>
                    <a href="{{ url('/services#telecom-repair') }}">{{ __('our_services.services.telecom_repair') }}</a>
                    <a href="{{ url('/services#building-maintenance') }}">{{ __('our_services.services.building_maintenance') }}</a>
                    <a href="{{ url('/services#tnb-maintenance') }}">{{ __('our_services.services.tnb_maintenance') }}</a>
                    <a href="{{ url('/services#transformer-purification') }}">{{ __('our_services.services.transformer_purification') }}</a>
                    <a href="{{ url('/services#backhoe-rental') }}">{{ __('our_services.services.backhoe_rental') }}</a>
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
            <div class="col-md-6 text-right">
                <p>
                    <i class="fas fa-users"></i> 
                    {{ __('footer.visitor_count') }}: {{ $visitorCount }}
                </p>
            </div>
        </div>
    </div>
</div>
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
