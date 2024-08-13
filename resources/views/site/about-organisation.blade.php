@extends('site.layouts.app')

@section('title', __('organisation.title'))

@section('content')
    @include('site.partials.page-header', ['title' => __('organisation.background_header')])

    <!-- Leadership Profiles Start -->
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>{{ __('organisation.leadership_section') }}</p>
                <h2>{{ __('organisation.meet_our_leaders') }}</h2>
            </div>
            <div class="row justify-content-center">
                <!-- Chairman -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('themes/img/actual/haslee.jpeg') }}" alt="{{ __('organisation.chairman') }} Image">
                        </div>
                        <div class="team-text">
                            <h2>Haslee Bin Abdullah .AMN .BKM.</h2>
                            <p>{{ __('organisation.chairman') }}</p>
                        </div>
                    </div>
                </div>
                <!-- Managing Director -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('themes/img/actual/hakimie.jpeg') }}" alt="{{ __('organisation.managing_director') }} Image">
                        </div>
                        <div class="team-text">
                            <h2>Muhammad Hakimie Bin Haslee</h2>
                            <p>{{ __('organisation.managing_director') }}</p>
                        </div>
                    </div>
                </div>
                <!-- Director -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('themes/img/actual/huzairie.jpeg') }}" alt="{{ __('organisation.director') }} Image">
                        </div>
                        <div class="team-text">
                            <h2>Muhammad Huzairie Bin Haslee</h2>
                            <p>{{ __('organisation.director') }}</p>
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
                <h2>{{ __('organisation.organisation_chart') }}</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 text-center">
                <div class="position-title">{{ __('organisation.chairman') }}</div>
                <div class="position-name">Haslee Bin Abdullah .AMN .BKM.</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 text-center">
                <div class="position-title">{{ __('organisation.managing_director') }}</div>
                <div class="position-name">Muhammad Hakimie Bin Haslee</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 text-center">
                <div class="position-title">{{ __('organisation.director') }}</div>
                <div class="position-name">Muhammad Huzairie Bin Haslee</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3 text-center">
                <div class="position-title">{{ __('organisation.secretary') }}</div>
                <div class="position-name">Huwaina Binti Daud</div>
            </div>
            <div class="col-md-3 text-center">
                <div class="position-title">{{ __('organisation.supervisor') }}</div>
                <div class="position-name">Syamil Irzat Bin Mohd Daud</div>
            </div>
            <div class="col-md-3 text-center">
                <div class="position-title">{{ __('organisation.accountant') }}</div>
                <div class="position-name">Farahanim Liyana Binti Zamzuri</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3 text-center">
                <div class="position-title">{{ __('organisation.team_a') }}</div>
                <div class="position-name">{{ __('organisation.staff') }} 1</div>
                <div class="position-name">{{ __('organisation.staff') }} 2</div>
                <div class="position-name">{{ __('organisation.staff') }} 3</div>
                <div class="position-name">{{ __('organisation.staff') }} 4</div>
            </div>
            <div class="col-md-3 text-center">
                <div class="position-title">{{ __('organisation.team_b') }}</div>
                <div class="position-name">{{ __('organisation.staff') }} 1</div>
                <div class="position-name">{{ __('organisation.staff') }} 2</div>
                <div class="position-name">{{ __('organisation.staff') }} 3</div>
                <div class="position-name">{{ __('organisation.staff') }} 4</div>
            </div>
        </div>
    </div>
    <!-- Organisation End -->
@endsection
