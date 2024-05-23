<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Services\GoogleBooksService;

class BooksController extends Controller
{

    protected $googleBooks;

    public function __construct(GoogleBooksService $googleBooks)
    {
        $this->middleware('auth');
        $this->googleBooks = $googleBooks;
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $books = $this->googleBooks->searchBooks($query);
        if ($query) {
            Book::create([
                'search' => $query,
            ]);
        }


        return view('perpustakaan.index', ['books' => $books]);
    }
}
