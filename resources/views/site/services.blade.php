@extends('site.layouts.app')

@section('title', __('our_services.title'))

@section('content')
    @include('site.partials.page-header', ['title' => __('our_services.header')])

    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>{{ __('our_services.header') }}</p>
                <h2>{{ __('our_services.section_title') }}</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('themes/img/actual/service1.webp') }}" alt="{{ __('our_services.services.telecom_works') }}">
                            <div class="service-overlay">
                                <p>{{ __('our_services.descriptions.telecom_works') }}</p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>{{ __('our_services.services.telecom_works') }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('themes/img/actual/service2.webp') }}" alt="{{ __('our_services.services.telecom_repair') }}">
                            <div class="service-overlay">
                                <p>{{ __('our_services.descriptions.telecom_repair') }}</p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>{{ __('our_services.services.telecom_repair') }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('themes/img/actual/service3.webp') }}" alt="{{ __('our_services.services.building_maintenance') }}">
                            <div class="service-overlay">
                                <p>{{ __('our_services.descriptions.building_maintenance') }}</p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>{{ __('our_services.services.building_maintenance') }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('themes/img/actual/service4.webp') }}" alt="{{ __('our_services.services.tnb_maintenance') }}">
                            <div class="service-overlay">
                                <p>{{ __('our_services.descriptions.tnb_maintenance') }}</p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>{{ __('our_services.services.tnb_maintenance') }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('themes/img/actual/service5.webp') }}" alt="{{ __('our_services.services.transformer_purification') }}">
                            <div class="service-overlay">
                                <p>{{ __('our_services.descriptions.transformer_purification') }}</p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>{{ __('our_services.services.transformer_purification') }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('themes/img/actual/service6.webp') }}" alt="{{ __('our_services.services.backhoe_rental') }}">
                            <div class="service-overlay">
                                <p>{{ __('our_services.descriptions.backhoe_rental') }}</p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>{{ __('our_services.services.backhoe_rental') }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
