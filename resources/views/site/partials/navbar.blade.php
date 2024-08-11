<!-- resources/views/site/partials/navbar.blade.php -->
<div class="nav-bar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center" style="padding: 0; display: flex; align-items: center;">
                <img src="{{ asset('themes/img/actual/logo.png') }}" alt="Logo" class="logo" style="height: 80px; width: auto; max-height: 80px;">
            </a>
            
            <!-- Toggler for Mobile View -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                    
                    <!-- About Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::is('about/*') ? 'active' : '' }}" data-toggle="dropdown">About</a>
                        <div class="dropdown-menu">
                            <a href="{{ url('/about/background') }}" class="dropdown-item {{ Request::is('about/background') ? 'active' : '' }}">Background</a>
                            <a href="{{ url('/about/organisation') }}" class="dropdown-item {{ Request::is('about/organisation') ? 'active' : '' }}">Organisation</a>
                        </div>
                    </div>

                    <a href="{{ url('/services') }}" class="nav-item nav-link {{ Request::is('services') ? 'active' : '' }}">Services</a>
                    <a href="{{ url('/portfolio') }}" class="nav-item nav-link {{ Request::is('portfolio') ? 'active' : '' }}">Project</a>
                    <a href="{{ url('/licenses-certificates') }}" class="nav-item nav-link {{ Request::is('licenses-certificates') ? 'active' : '' }}">Licenses / Certificates</a>
                    <a href="{{ url('/gallery') }}" class="nav-item nav-link {{ Request::is('gallery') ? 'active' : '' }}">Gallery</a>
                    <a href="{{ url('/contact') }}" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</div>
