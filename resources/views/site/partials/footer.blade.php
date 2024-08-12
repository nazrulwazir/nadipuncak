<!-- resources/views/site/partials/footer.blade.php -->
<div class="footer wow fadeIn" data-wow-delay="0.3s">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="footer-contact">
                    <h2>Contact Information</h2>
                    <p><img src="{{ asset('themes/img/actual/logo.png') }}" alt="Logo" style="height: 150px; width: auto;"></p>
                    <p><i class="fa fa-building"></i> Nadi Puncak Sdn Bhd</p>
                    <p><i class="fa fa-map-marker-alt"></i> No. 283, Tingkat 1, Jalan Shahab Perdana, 05150 Alor Setar, Kedah Darul Aman.</p>
                    <p><i class="fa fa-phone-alt"></i> 04 - 787 7661</p>
                    <p><i class="fa fa-phone-alt"></i> 014 - 802 9611</p>
                    <p><i class="fa fa-envelope"></i> nadipuncak23@gmail.com</p>
                    <p><i class="fa fa-clock"></i> Opening Hours: Sunday - Thursday, 9 AM - 6 PM</p> <!-- Added Opening Hours -->
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer-link">
                    <h2>Service Areas</h2>
                    <a href="{{ url('/services#building-construction') }}">Building Construction</a>
                    <a href="{{ url('/services#house-renovation') }}">House Renovation</a>
                    <a href="{{ url('/services#architecture-design') }}">Architecture Design</a>
                    <a href="{{ url('/services#interior-design') }}">Interior Design</a>
                    <a href="{{ url('/services#painting') }}">Painting</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer-link">
                    <h2>Useful Pages</h2>
                    <a href="{{ url('/about/background') }}">About Us</a>
                    <a href="{{ url('/contact') }}">Contact Us</a>
                    <a href="{{ url('/portfolio') }}">Projects</a>
                    <a href="{{ url('/licenses-certificates') }}">Licenses / Certificates</a>
                    <a href="{{ url('/gallery') }}">Gallery</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer-link">
                    <h2>Board of Directors</h2>
                    <p>Encik Muhammad Hakimie Bin Haslee (Managing Director)</p>
                    <p>Encik Muhammad Huzairie Bin Haslee (Director)</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container copyright">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; <a href="{{ url('/') }}">Nadi Puncak Sdn Bhd</a>, All Right Reserved.</p>
            </div>
            <div class="col-md-6">
                <!-- You can add any additional info here if necessary -->
            </div>
        </div>
    </div>
</div>
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
