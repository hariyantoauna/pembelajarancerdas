<!-- resources/views/scholar/results.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <form action="{{ route('scholar.search') }}" method="GET">
            <div class="input-group mb-3">
                <input class="form-control" type="text" name="query" placeholder="Search for videos">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </form>

        <h5>Hasil Pencarian Google Scholar</h5>
        @if (isset($results['organic_results']))
            <ul>
                @foreach ($results['organic_results'] as $result)
                    <li>
                        <a target="_blank" href="{{ $result['link'] }}">{{ $result['title'] }}</a>
                        <p>{{ $result['snippet'] }}</p>
                    </li>
                @endforeach
            </ul>
        @else
            <p>Tidak ada hasil yang ditemukan.</p>
        @endif
    </div>
@endsection
