<?php
// app/Services/SerpApiService.php
namespace App\Services;

use GuzzleHttp\Client;

class SerpApiService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('SERPAPI_KEY'); // Tempatkan kunci API Anda di file .env
    }

    public function searchScholar($query)
    {
        if ($query) {
            $response = $this->client->get('https://serpapi.com/search.json', [
                'query' => [
                    'engine' => 'google_scholar',
                    'q' => $query, // Pastikan parameter query disertakan
                    'api_key' => $this->apiKey,
                ]
            ]);
        } else {
            $response = $this->client->get('https://serpapi.com/search.json', [
                'query' => [
                    'engine' => 'google_scholar',
                    'q' => auth()->user()->prodi, // Pastikan parameter query disertakan
                    'api_key' => $this->apiKey,
                ]
            ]);
        }


        return json_decode($response->getBody()->getContents(), true);
    }
}
