<div class="nav-bar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center" style="padding: 0; display: flex; align-items: center;">
                <img src="{{ asset('themes/img/actual/logo.png') }}" alt="Logo" class="logo" style="height: 100px; width: auto; max-height: 100px;">
            </a>
            
            <!-- Toggler for Mobile View -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">{{ __('nav.home') }}</a>
                    
                    <!-- About Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::is('about/*') ? 'active' : '' }}" data-toggle="dropdown">{{ __('nav.about') }}</a>
                        <div class="dropdown-menu">
                            <a href="{{ url('/about/background') }}" class="dropdown-item {{ Request::is('about/background') ? 'active' : '' }}">{{ __('nav.background') }}</a>
                            <a href="{{ url('/about/organisation') }}" class="dropdown-item {{ Request::is('about/organisation') ? 'active' : '' }}">{{ __('nav.organisation') }}</a>
                        </div>
                    </div>

                    <a href="{{ url('/services') }}" class="nav-item nav-link {{ Request::is('services') ? 'active' : '' }}">{{ __('nav.services') }}</a>
                    <a href="{{ url('/portfolio') }}" class="nav-item nav-link {{ Request::is('portfolio') ? 'active' : '' }}">{{ __('nav.project') }}</a>
                    
                    <!-- Licenses / Certificates Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::is('licenses-certificates/*') ? 'active' : '' }}" data-toggle="dropdown">{{ __('nav.licenses_certificates') }}</a>
                        <div class="dropdown-menu">
                            @foreach($licenseFolders as $folder)
                                <a href="{{ url('/licenses-certificates/' . Str::slug($folder)) }}" class="dropdown-item {{ Request::is('licenses-certificates/' . Str::slug($folder)) ? 'active' : '' }}">{{ ucfirst($folder) }}</a>
                            @endforeach
                        </div>
                    </div>

                    <a href="{{ url('/gallery') }}" class="nav-item nav-link {{ Request::is('gallery') ? 'active' : '' }}">{{ __('nav.gallery') }}</a>
                    <a href="{{ url('/contact') }}" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">{{ __('nav.contact') }}</a>
                </div>
                
                <!-- Language Switcher -->
                <div class="ml-auto">
                    <a href="{{ url('lang/en') }}" class="btn btn-sm lang-btn {{ App::getLocale() == 'en' ? 'active' : '' }}">English</a>
                    <a href="{{ url('lang/ms') }}" class="btn btn-sm lang-btn {{ App::getLocale() == 'ms' ? 'active' : '' }}">Malay</a>
                </div>
            </div>
        </nav>
    </div>
</div>
