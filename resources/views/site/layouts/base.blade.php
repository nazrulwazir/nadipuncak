<!-- resources/views/site/layouts/base.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Nadi Puncak Sdn Bhd')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <!-- Dynamic Meta Tags for SEO -->
    <meta name="keywords" content="@yield('meta_keywords', 'Construction, Civil Engineering, Nadi Puncak, Contractor, Kedah, Malaysia')">
    <meta name="description" content="@yield('meta_description', 'Nadi Puncak Sdn Bhd is a leading Bumiputera-owned contractor and civil engineering company in Alor Setar, Kedah.')">
    
    <!-- Open Graph Meta Tags for Social Media Sharing -->
    <meta property="og:title" content="@yield('og_title', 'Nadi Puncak Sdn Bhd')" />
    <meta property="og:description" content="@yield('og_description', 'Nadi Puncak Sdn Bhd is a leading Bumiputera-owned contractor and civil engineering company in Alor Setar, Kedah.')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="@yield('og_image', asset('themes/img/logo.jpg'))" />
    <meta property="og:site_name" content="Nadi Puncak Sdn Bhd" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('twitter_title', 'Nadi Puncak Sdn Bhd')" />
    <meta name="twitter:description" content="@yield('twitter_description', 'Nadi Puncak Sdn Bhd is a leading Bumiputera-owned contractor and civil engineering company in Alor Setar, Kedah.')" />
    <meta name="twitter:image" content="@yield('twitter_image', asset('themes/img/logo.jpg'))" />

    <!-- Favicon -->
    <link href="{{ asset('themes/img/favicon.ico') }}" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('themes/lib/flaticon/font/flaticon.css') }}" rel="stylesheet"> 
    <link href="{{ asset('themes/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/lib/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/lib/slick/slick-theme.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('themes/css/style.css') }}" rel="stylesheet">
    @include('site.custom.css')
    @stack('styles')
</head>

<body>
    <div class="wrapper">
        @include('site.partials.topbar')
        @include('site.partials.navbar')

        @yield('content')

        @include('site.partials.footer')
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('themes/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('themes/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('themes/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('themes/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('themes/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('themes/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('themes/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('themes/lib/slick/slick.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('themes/js/main.js') }}"></script>

    @stack('scripts')
</body>
</html>
