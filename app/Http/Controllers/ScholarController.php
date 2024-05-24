<?php

// app/Http/Controllers/ScholarController.php
namespace App\Http\Controllers;

use App\Services\SerpApiService;
use Illuminate\Http\Request;

class ScholarController extends Controller
{
    protected $serpApiService;

    public function __construct(SerpApiService $serpApiService)
    {
        $this->serpApiService = $serpApiService;
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = $this->serpApiService->searchScholar($query);

        return view('artikel.index', compact('results'));
    }
}