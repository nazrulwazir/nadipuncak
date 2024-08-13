<!-- resources/views/site/components/company-profile.blade.php -->
<div class="company-profile service-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="company-img">
                    <img src="{{ asset('themes/img/actual/img1.jpeg') }}" alt="Company Image" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="section-header text-left">
                    <h2>{{ $companyName ?? __('company-profile.company_name') }}</h2>
                    <p>{{ $tagline ?? __('company-profile.tagline') }}</p>
                </div>
                <div class="company-text">
                    <p>{{ $introduction ?? __('company-profile.introduction') }}</p>
                    
                    @if(isset($showFull) && $showFull)
                        <p>{{ $mission ?? __('company-profile.mission') }}</p>
                        <p>{{ $vision ?? __('company-profile.vision') }}</p>
                    @else
                        <p>{{ $shortSummary ?? __('company-profile.short_summary') }}</p>
                        <a class="btn" href="{{ $learnMoreLink ?? '#' }}">
                            {{ __('company-profile.learn_more') }} <i class="fas fa-arrow-right"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>