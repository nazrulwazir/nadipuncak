@extends('site.layouts.app')

@section('title', 'Our Organisation')

@section('content')
    @include('site.partials.page-header', ['title' => 'Organisation'])

    <!-- Leadership Profiles Start -->
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Leadership</p>
                <h2>Meet Our Leaders</h2>
            </div>
            <div class="row justify-content-center">
                <!-- Chairman -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('themes/img/actual/haslee.jpeg') }}" alt="Managing Director Image">
                        </div>
                        <div class="team-text">
                            <h2>Haslee Bin Abdullah .AMN .BKM.</h2>
                            <p>Chairman</p>
                        </div>
                    </div>
                </div>
                <!-- Managing Director -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('themes/img/actual/hakimie.jpeg') }}" alt="Managing Director Image">
                        </div>
                        <div class="team-text">
                            <h2>Muhammad Hakimie Bin Haslee</h2>
                            <p>Managing Director</p>
                        </div>
                    </div>
                </div>
                <!-- Director -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('themes/img/actual/huzairie.jpeg') }}" alt="Director Image">
                        </div>
                        <div class="team-text">
                            <h2>Muhammad Huzairie Bin Haslee</h2>
                            <p>Director</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Leadership Profiles End -->

    <!-- Organisation Start -->
    <div class="container organisation-chart">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <h2>Organisation Chart</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 text-center">
                <div class="position-title">Chairman</div>
                <div class="position-name">Haslee Bin Abdullah .AMN .BKM.</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 text-center">
                <div class="position-title">Managing Director</div>
                <div class="position-name">Muhammad Hakimie Bin Haslee</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 text-center">
                <div class="position-title">Director</div>
                <div class="position-name">Muhammad Huzairie Bin Haslee</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3 text-center">
                <div class="position-title">Secretary</div>
                <div class="position-name">Huwaina Binti Daud</div>
            </div>
            <div class="col-md-3 text-center">
                <div class="position-title">Supervisor</div>
                <div class="position-name">Syamil Irzat Bin Mohd Daud</div>
            </div>
            <div class="col-md-3 text-center">
                <div class="position-title">Accountant</div>
                <div class="position-name">Farahanim Liyana Binti Zamzuri</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3 text-center">
                <div class="position-title">Team A</div>
                <div class="position-name">Staff 1</div>
                <div class="position-name">Staff 2</div>
                <div class="position-name">Staff 3</div>
                <div class="position-name">Staff 4</div>
            </div>
            <div class="col-md-3 text-center">
                <div class="position-title">Team B</div>
                <div class="position-name">Staff 1</div>
                <div class="position-name">Staff 2</div>
                <div class="position-name">Staff 3</div>
                <div class="position-name">Staff 4</div>
            </div>
        </div>
    </div>
    <!-- Organisation End -->
@endsection
