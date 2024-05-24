@extends('layouts.app')

@section('content')
    <form method="GET" action="{{ route('google_scholar.search') }}">
        <input type="text" name="query" placeholder="Search for articles">
        <button type="submit">Search</button>
    </form>

    @if (isset($articles['organic_results']))
        <h2>Search Results:</h2>
        <ul>
            @foreach ($articles['organic_results'] as $article)
                <li>
                    <h3>{{ $article['title'] }}</h3>
                    <p>{{ $article['snippet'] }}</p>
                    <a href="{{ $article['link'] }}" target="_blank">Read more</a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
