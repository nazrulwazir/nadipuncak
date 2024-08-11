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
                    <h2>{{ $companyName ?? 'Nadi Puncak Sdn Bhd' }}</h2>
                    <p>{{ $tagline ?? 'Your Trusted Construction Partner' }}</p>
                </div>
                <div class="company-text">
                    <p>{{ $introduction ?? 'NADI PUNCAK SDN BHD is a 100% Bumiputera-owned contractor and civil engineering company, located at No. 283, Tingkat 1, Jalan Shahab, Shahab Perdana, 05150 Alor Setar, Kedah.' }}</p>
                    
                    @if(isset($showFull) && $showFull)
                        <p>{{ $mission ?? 'The company, led by Tuan Muhammad Hakimie Bin Haslee, is committed to elevating its business to the highest standards by providing the best services and demonstrating dedication within the team.' }}</p>
                        <p>{{ $vision ?? 'With a solid vision and mission, Nadi Puncak Sdn Bhd aims to achieve excellence and success in the construction, contractor, and civil engineering industries.' }}</p>
                    @else
                        <p>{{ $shortSummary ?? 'NADI PUNCAK SDN BHD is a leading Bumiputera-owned contractor and civil engineering company in Alor Setar, Kedah.' }}</p>
                        <a class="btn" href="{{ $learnMoreLink ?? '#' }}">
                            Learn More <i class="fas fa-arrow-right"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>