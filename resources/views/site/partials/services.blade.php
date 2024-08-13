<!-- resources/views/site/partials/services.blade.php -->
<div class="service-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="service-image">
                    <img src="{{ asset('themes/img/actual/img2.jpeg') }}" alt="Service Image" class="img-fluid rounded">
                </div>
            </div>
            <div class="col-md-6">
                <div class="section-header text-left">
                    <p class="service-subtitle">{{ $serviceTagline ?? __('services.service_tagline') }}</p>
                    <h2 class="service-title">{{ $serviceTitle ?? __('services.service_title') }}</h2>
                </div>
                <div class="service-content">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-network-wired mr-3" style="color: #030f27;"></i>
                            {{ __('services.civil_telecom_works') }}
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-tools mr-3" style="color: #030f27;"></i>
                            {{ __('services.telecom_infra_repair') }}
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-seedling mr-3" style="color: #030f27;"></i>
                            {{ __('services.building_landscape_maintenance') }}
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-bolt mr-3" style="color: #030f27;"></i>
                            {{ __('services.tnb_maintenance') }}
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-plug mr-3" style="color: #030f27;"></i>
                            {{ __('services.transformer_purification') }}
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-truck mr-3" style="color: #030f27;"></i>
                            {{ __('services.backhoe_rental_service') }}
                        </li>
                    </ul>
                    <a href="{{ route('site.services') }}" class="btn btn-read-more mt-3">{{ __('services.read_more') }} <i class="fas fa-arrow-right ml-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
