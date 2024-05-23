<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GoogleBooksService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = config('AIzaSyDVakgerFqgCPjwQP_twOOs93mx_Gk1C_U');
    }

    public function searchBooks($query, $maxResults = 10)
    {
        $url = 'https://www.googleapis.com/books/v1/volumes';

        if ($query) {
            $response = Http::get($url, [
                'q' => $query,
                'maxResults' => $maxResults,
                'key' => $this->apiKey
            ]);
        } else {
            $response = Http::get($url, [
                'q' => 'Pendidikan',
                'maxResults' => $maxResults,
                'key' => $this->apiKey
            ]);
        }

        return $response->json();
    }
}