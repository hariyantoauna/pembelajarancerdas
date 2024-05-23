@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <form method="GET" action="{{ route('youtube.search') }}">
            <div class="input-group mb-3">
                <input class="form-control" type="text" name="query" placeholder="Search for videos">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </form>

        @if (isset($videos['items']))
            <h2>Search Results:</h2>



            <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach ($videos['items'] as $video)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ $video['snippet']['thumbnails']['default']['url'] }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $video['snippet']['title'] }}</h5>
                                <a href="https://www.youtube.com/watch?v=VIDEO_ID" class="btn btn-primary"
                                    target="_blank">Tonton di YouTube</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
