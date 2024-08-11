@extends('site.layouts.app')

@section('title', 'Our Services')

@section('content')
    @include('site.partials.page-header', ['title' => 'Our Services'])

    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Services</p>
                <h2>We Provide Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('themes/img/actual/service1.webp') }}" alt="Civil Telecommunication Works">
                            <div class="service-overlay">
                                <p>
                                    We offer civil telecommunication works, including the construction and maintenance of telecommunication infrastructure.
                                </p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>Civil Telecommunication Works</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('themes/img/actual/service2.webp') }}" alt="Telecommunication Infra Repair">
                            <div class="service-overlay">
                                <p>
                                    We specialize in the repair and maintenance of telecommunication infrastructure, ensuring seamless connectivity.
                                </p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>Telecommunication Infra Repair</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('themes/img/actual/service3.webp') }}" alt="Building and Landscape Maintenance">
                            <div class="service-overlay">
                                <p>
                                    Our services include comprehensive building and landscape maintenance to keep your properties in excellent condition.
                                </p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>Building and Landscape Maintenance</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('themes/img/actual/service4.webp') }}" alt="TNB Maintenance">
                            <div class="service-overlay">
                                <p>
                                    We offer TNB maintenance services, ensuring the reliability and efficiency of your electrical systems.
                                </p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>TNB Maintenance</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('themes/img/actual/service5.webp') }}" alt="Transformer Purification">
                            <div class="service-overlay">
                                <p>
                                    We provide transformer purification services, ensuring the longevity and efficiency of your electrical transformers.
                                </p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>Transformer Purification</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('themes/img/actual/service6.webp') }}" alt="Backhoe Rental Service">
                            <div class="service-overlay">
                                <p>
                                    We provide backhoe rental services, ensuring that you have the right equipment for your construction needs.
                                </p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>Backhoe Rental Service</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
