@extends('site.layouts.app')

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
                <!-- Managing Director -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('themes/img/team-2.jpg') }}" alt="Managing Director Image">
                        </div>
                        <div class="team-text">
                            <h2>Muhammad Hakimie Bin Haslee</h2>
                            <p>Managing Director</p>
                        </div>
                        <div class="team-social">
                            <a class="social-tw" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Director -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('themes/img/team-1.jpg') }}" alt="Director Image">
                        </div>
                        <div class="team-text">
                            <h2>Muhammad Huzairie Bin Haslee</h2>
                            <p>Director</p>
                        </div>
                        <div class="team-social">
                            <a class="social-tw" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href="#"><i class="fab fa-instagram"></i></a>
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
                <div class="position-name">Haslee Bin Abdullah</div>
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
