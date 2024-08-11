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
                    <p class="service-subtitle">{{ $serviceTagline ?? 'Our Services' }}</p>
                    <h2 class="service-title">{{ $serviceTitle ?? 'Area of Expertise' }}</h2>
                </div>
                <div class="service-content">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-network-wired mr-3" style="color: #030f27;"></i>
                            Civil Telecommunication Works
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-tools mr-3" style="color: #030f27;"></i>
                            Telecommunication Infra Repair
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-seedling mr-3" style="color: #030f27;"></i>
                            Building and Landscape Maintenance
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-bolt mr-3" style="color: #030f27;"></i>
                            TNB Maintenance
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-plug mr-3" style="color: #030f27;"></i>
                            Transformer Purification
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-truck mr-3" style="color: #030f27;"></i>
                            Backhoe Rental Service
                        </li>
                    </ul>
                    <a href="{{ route('site.services') }}" class="btn btn-read-more mt-3">Read More <i class="fas fa-arrow-right ml-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
