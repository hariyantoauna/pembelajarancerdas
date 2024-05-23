@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <form method="GET" action="{{ route('youtube.search') }}">
            <input type="text" name="query" placeholder="Search for videos">
            <button type="submit">Search</button>
        </form>

        @if (isset($videos['items']))
            <h2>Search Results:</h2>
            <ul>
                @foreach ($videos['items'] as $video)
                    <li>
                        <h3>{{ $video['snippet']['title'] }}</h3>
                        <p>{{ $video['snippet']['description'] }}</p>
                        <img src="{{ $video['snippet']['thumbnails']['default']['url'] }}"
                            alt="{{ $video['snippet']['title'] }}">
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
