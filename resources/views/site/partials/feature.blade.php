<!-- Existing Feature Section -->
<div class="feature wow fadeInUp" data-wow-delay="0.1s">
    <div class="container-fluid">
        <div class="row align-items-center">
            <!-- Our Mission -->
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-icon" style="color: #030f27;">
                        <i class="flaticon-worker"></i>
                    </div>
                    <div class="feature-text">
                        <h3>{{ __('feature.mission_title') }}</h3>
                        <p>{{ __('feature.mission_text') }}</p>
                    </div>
                </div>
            </div>
            <!-- Our Vision -->
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-icon" style="color: #030f27;">
                        <i class="flaticon-building"></i>
                    </div>
                    <div class="feature-text">
                        <h3>{{ __('feature.vision_title') }}</h3>
                        <p>{{ __('feature.vision_text') }}</p>
                    </div>
                </div>
            </div>
            <!-- Quality Services -->
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-icon" style="color: #030f27;">
                        <i class="flaticon-call"></i>
                    </div>
                    <div class="feature-text">
                        <h3>{{ __('feature.quality_services_title') }}</h3>
                        <p>{{ __('feature.quality_services_text') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@php
    // Ensure $expanded is defined and defaults to false if not passed
    $expanded = $expanded ?? false;
@endphp

@if($expanded)
<!-- Detailed Descriptions Section -->
<div class="long-desc-section py-5 service-section">
    <div class="container">
        <div class="row">
            <!-- Expanded Mission -->
            <div class="col-lg-4 col-md-12">
                <div class="long-desc-item">
                    <div class="long-desc-icon" style="color: #030f27;">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h4>{{ __('feature.mission_expanded_title') }}</h4>
                    <p>{{ __('feature.mission_expanded_text') }}</p>
                    <h5>{{ __('feature.mission_highlight_1') }}:</h5>
                    <ul class="custom-list">
                        <li><strong><i class="fas fa-check-circle"></i> {{ __('feature.mission_highlight_1') }}:</strong> {{ __('feature.mission_highlight_1_text') }}</li>
                        <li><strong><i class="fas fa-check-circle"></i> {{ __('feature.mission_highlight_2') }}:</strong> {{ __('feature.mission_highlight_2_text') }}</li>
                        <li><strong><i class="fas fa-check-circle"></i> {{ __('feature.mission_highlight_3') }}:</strong> {{ __('feature.mission_highlight_3_text') }}</li>
                    </ul>
                </div>
            </div>
            <!-- Expanded Vision -->
            <div class="col-lg-4 col-md-12">
                <div class="long-desc-item">
                    <div class="long-desc-icon" style="color: #030f27;">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h4>{{ __('feature.vision_expanded_title') }}</h4>
                    <p>{{ __('feature.vision_expanded_text') }}</p>
                    <h5>{{ __('feature.vision_highlight_1') }}:</h5>
                    <ul class="custom-list">
                        <li><strong><i class="fas fa-check-circle"></i> {{ __('feature.vision_highlight_1') }}:</strong> {{ __('feature.vision_highlight_1_text') }}</li>
                        <li><strong><i class="fas fa-check-circle"></i> {{ __('feature.vision_highlight_2') }}:</strong> {{ __('feature.vision_highlight_2_text') }}</li>
                        <li><strong><i class="fas fa-check-circle"></i> {{ __('feature.vision_highlight_3') }}:</strong> {{ __('feature.vision_highlight_3_text') }}</li>
                    </ul>
                </div>
            </div>
            <!-- Expanded Quality Services -->
            <div class="col-lg-4 col-md-12">
                <div class="long-desc-item">
                    <div class="long-desc-icon" style="color: #030f27;">
                        <i class="fas fa-award"></i>
                    </div>
                    <h4>{{ __('feature.quality_expanded_title') }}</h4>
                    <p>{{ __('feature.quality_expanded_text') }}</p>
                    <h5>{{ __('feature.quality_highlight_1') }}:</h5>
                    <ul class="custom-list">
                        <li><strong><i class="fas fa-check-circle"></i> {{ __('feature.quality_highlight_1') }}:</strong> {{ __('feature.quality_highlight_1_text') }}</li>
                        <li><strong><i class="fas fa-check-circle"></i> {{ __('feature.quality_highlight_2') }}:</strong> {{ __('feature.quality_highlight_2_text') }}</li>
                        <li><strong><i class="fas fa-check-circle"></i> {{ __('feature.quality_highlight_3') }}:</strong> {{ __('feature.quality_highlight_3_text') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@push('styles')
<style>
    /* Custom List Style */
    .custom-list {
        padding-left: 1.5rem;
        list-style: none; /* Remove default bullets */
    }
    .custom-list li {
        position: relative;
        padding-left: 1.5rem; /* Space for the custom bullet */
        margin-bottom: 10px;
        font-size: 16px;
    }
    .custom-list li strong {
        color: #fdbe33; /* Highlighted text color */
    }
    .custom-list li i {
        margin-right: 0.5rem; /* Space between icon and text */
        color: #030f27; /* Icon color */
    }
    .feature {
        margin-bottom: 0px;
    }
</style>
@endpush
