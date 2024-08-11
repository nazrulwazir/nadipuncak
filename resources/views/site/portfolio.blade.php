@extends('site.layouts.app')

@section('title', 'Our Projects')

@section('content')
    @include('site.partials.page-header', ['title' => 'Our Projects'])

    <!-- Projects List Start -->
    <div class="projects-list">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Projects</p>
                <h2>Explore Our Projects</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <ul class="list-group">
                        @foreach($projects as $project)
                            <li class="list-group-item">
                                <h3>{{ $project['title'] }}</h3>
                                <p>{{ $project['description'] }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @if(count($projects) > 9)
                <div class="row">
                    <div class="col-12 load-more text-center">
                        <a class="btn btn-primary" id="loadMore">Load More</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- Projects List End -->
    <div class="mb-5"></div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const loadMoreBtn = document.getElementById('loadMore');
        const listItems = document.querySelectorAll('.list-group-item');
        let currentItems = 9;

        function loadMoreItems() {
            for (let i = currentItems; i < currentItems + 3 && i < listItems.length; i++) {
                listItems[i].style.display = 'block';
            }
            currentItems += 3;

            if (currentItems >= listItems.length) {
                loadMoreBtn.style.display = 'none';
            }
        }

        // Initially hide all items except the first `currentItems`
        listItems.forEach((item, index) => {
            if (index >= currentItems) {
                item.style.display = 'none';
            }
        });

        // Hide the "Load More" button if there are no more items to load
        if (listItems.length <= currentItems) {
            loadMoreBtn.style.display = 'none';
        }

        loadMoreBtn.addEventListener('click', loadMoreItems);
    });
</script>
@endpush
