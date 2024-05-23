@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div>
            <div class="mb-3">
                <form action="{{ route('books.search') }}" method="GET">
                    <div class="input-group mb-3">

                        <input type="text" class="form-control" name="query" placeholder="Search for books">
                        <button class="btn btn-outline-secondary" ype="submit" id="button-addon1">Search</button>
                    </div>



                </form>
            </div>

        </div>
        @if (isset($books))
            <h4>Search Results:</h4>

            <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach ($books['items'] as $book)
                    @php
                        $volumeInfo = $book['volumeInfo'];
                        $title = $volumeInfo['title'] ?? 'No title available';
                        $authors = implode(', ', $volumeInfo['authors'] ?? ['No author available']);
                        $description = $volumeInfo['description'] ?? 'No description available';
                        $thumbnail = $volumeInfo['imageLinks']['thumbnail'] ?? null;
                        $pdf = $book['pdf'] ?? null;
                        $publishedDate = $volumeInfo['publishedDate'] ?? 'No publication date available';

                    @endphp

                    <div class="col">
                        <div class="card h-100">
                            @if ($thumbnail)
                                <img style="height: 100% background-position: center top; background-size: cover; object-fit: cover;"
                                    src="{{ $thumbnail }}" class="card-img-top" alt="{{ $title }} cover"
                                    style="width: 100px;">
                            @endif

                            <div class="card-body">
                                <h5 class="card-title">{{ $title }}</h5>
                                <p class="card-text">{{ $authors }}</p>
                                <a class="btn btn-sm btn-success" href="">Selengkapnya</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">{{ $publishedDate }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
