<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{ $title }}</h2>
            </div>
            <div class="col-12">
                <a href="{{ url('/') }}">Home</a>
                <span></span>
                <a href="{{ url()->current() }}">{{ $title }}</a>
            </div>
        </div>
    </div>
</div>
