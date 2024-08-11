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
                        <h3>Our Mission</h3>
                        <p>We are committed to enhancing the company’s performance by delivering top-notch services and demonstrating high dedication within the team.</p>
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
                        <h3>Our Vision</h3>
                        <p>To achieve excellence and success in the construction, contracting, and civil engineering industries through a strong mission and vision.</p>
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
                        <h3>Quality Services</h3>
                        <p>We always prioritize quality in every project we undertake.</p>
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
                    <h4>Mission Expanded</h4>
                    <p>At Nadi Puncak Sdn Bhd, our mission extends beyond mere project completion. We strive to leave a lasting impact on the communities we serve.</p>
                    <h5>Key Highlights:</h5>
                    <ul class="custom-list">
                        <li><strong><i class="fas fa-check-circle"></i> Community Impact:</strong> Boosted connectivity in rural areas through our telecommunications projects.</li>
                        <li><strong><i class="fas fa-check-circle"></i> Innovation:</strong> Implementing cutting-edge techniques in infrastructure projects.</li>
                        <li><strong><i class="fas fa-check-circle"></i> Sustainability:</strong> Focus on environmentally friendly practices in all projects.</li>
                    </ul>
                </div>
            </div>
            <!-- Expanded Vision -->
            <div class="col-lg-4 col-md-12">
                <div class="long-desc-item">
                    <div class="long-desc-icon" style="color: #030f27;">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h4>Vision Expanded</h4>
                    <p>Our vision is to be a leader in sustainable infrastructure. This vision shapes every decision we make, ensuring our projects are both innovative and environmentally responsible.</p>
                    <h5>Our Vision in Action:</h5>
                    <ul class="custom-list">
                        <li><strong><i class="fas fa-check-circle"></i> Sustainable Practices:</strong> Emphasis on eco-friendly construction methods.</li>
                        <li><strong><i class="fas fa-check-circle"></i> Efficiency:</strong> Projects designed to minimize environmental impact while maximizing operational efficiency.</li>
                        <li><strong><i class="fas fa-check-circle"></i> Leadership:</strong> Setting industry standards for responsible engineering.</li>
                    </ul>
                </div>
            </div>
            <!-- Expanded Quality Services -->
            <div class="col-lg-4 col-md-12">
                <div class="long-desc-item">
                    <div class="long-desc-icon" style="color: #030f27;">
                        <i class="fas fa-award"></i>
                    </div>
                    <h4>Quality Services Expanded</h4>
                    <p>Quality is at the core of everything we do at Nadi Puncak Sdn Bhd. Our attention to detail ensures that every project stands the test of time.</p>
                    <h5>What Sets Us Apart:</h5>
                    <ul class="custom-list">
                        <li><strong><i class="fas fa-check-circle"></i> High Standards:</strong> Rigorous quality checks at every stage of a project.</li>
                        <li><strong><i class="fas fa-check-circle"></i> Expert Team:</strong> Skilled professionals dedicated to excellence.</li>
                        <li><strong><i class="fas fa-check-circle"></i> Durable Results:</strong> Long-lasting, high-quality outcomes that satisfy our clients.</li>
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
</style>
@endpush
