@extends('site.layouts.app')

@section('content')
    @include('site.partials.page-header', ['title' => 'Licenses / Certificates'])

    <!-- Licenses / Certificates Start -->
    <div class="container">
        <div class="section-header text-center">
            <p>Our Achievements</p>
            <h2>Licenses / Certificates</h2>
        </div>
        <div class="row">
            <!-- Loop through your images -->
            @foreach($licenses as $license)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="license-item">
                        <a href="{{ asset('themes/img/licenses/' . $license['image']) }}" data-lightbox="licenses" data-title="{{ $license['title'] }}">
                            <img src="{{ asset('themes/img/licenses/' . $license['image']) }}" alt="{{ $license['title'] }}" class="img-fluid" loading="lazy">
                        </a>
                        <div class="license-title text-center mt-2">
                            <h5>{{ $license['title'] }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Licenses / Certificates End -->
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/17.3.1/lazyload.min.js"></script>
<script>
    var lazyLoadInstance = new LazyLoad({
        elements_selector: "img"
    });
</script>

@endpush