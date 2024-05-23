<?php

namespace App\Services;

use GuzzleHttp\Client;






class YouTubeService
{
    protected $apiKey;
    protected $client;

    public function __construct()
    {
        $this->apiKey = env('GOOGLE_YOUTUBE_API_KEY');
        $this->client = new Client([
            'base_uri' => 'https://www.googleapis.com/youtube/v3/'
        ]);
    }

    public function searchVideos($query, $maxResults = 10)
    {

        if ($query) {
            $response = $this->client->get('search', [
                'query' => [
                    'key' => $this->apiKey,
                    'q' => $query,
                    'part' => 'snippet',
                    'maxResults' => $maxResults,
                    'type' => 'video'
                ]
            ]);
        } else {
            $response = $this->client->get('search', [
                'query' => [
                    'key' => $this->apiKey,
                    'q' => auth()->user()->prodi,
                    'part' => 'snippet',
                    'maxResults' => $maxResults,
                    'type' => 'video'
                ]
            ]);
        }


        return json_decode($response->getBody(), true);
    }
}
