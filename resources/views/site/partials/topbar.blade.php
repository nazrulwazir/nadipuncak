<!-- resources/views/site/partials/topbar.blade.php -->
<div class="top-bar d-none d-lg-block">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="logo">
                    <!-- Add logo or branding here if needed -->
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="row">
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="flaticon-calendar"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>{{ __('topbar.opening_hour') }}</h3>
                                <p>{{ __('topbar.opening_time') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>{{ __('topbar.call_us') }}</h3>
                                <p>{{ __('topbar.phone_number_1') }}</p>
                                <p>{{ __('topbar.phone_number_2') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="flaticon-send-mail"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>{{ __('topbar.email_us') }}</h3>
                                <p>{{ __('topbar.email_address') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
