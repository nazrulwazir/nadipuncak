<!-- resources/views/site/partials/services.blade.php -->
<div class="service-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="service-image">
                    <img src="{{ asset('themes/img/service-1.jpg') }}" alt="Service Image" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="section-header text-left">
                    <p class="service-subtitle">{{ $serviceTagline ?? 'Our Services' }}</p>
                    <h2 class="service-title">{{ $serviceTitle ?? 'Area of Expertise' }}</h2>
                </div>
                <div class="service-content">
                    <ul class="service-list">
                        <li>Civil Telecommunication Works</li>
                        <li>Telecommunication Infra Repair</li>
                        <li>Backhoe Rental Service</li>
                        <li>Building and Landscape Maintenance</li>
                        <li>TNB Maintenance</li>
                        <li>Grass Cutter Service and Painting</li>
                        <li>Transformer Purification</li>
                    </ul>
                    <a href="{{ route('site.services') }}" class="btn btn-read-more">Read More <i class="fa fa-arrow-down"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
