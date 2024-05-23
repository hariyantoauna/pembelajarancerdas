<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleBooksService;

class BooksController extends Controller
{
    protected $googleBooks;

    public function __construct(GoogleBooksService $googleBooks)
    {
        $this->googleBooks = $googleBooks;
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $books = $this->googleBooks->searchBooks($query);

        return view('perpustakaan.index', ['books' => $books]);
    }
}
