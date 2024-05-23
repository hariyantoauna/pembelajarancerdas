<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Services\YouTubeService;

class YouTubeController extends Controller
{

    protected $youtubeService;


    public function __construct(YouTubeService $youtubeService)
    {
        $this->youtubeService = $youtubeService;
        $this->middleware('auth');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $videos = $this->youtubeService->searchVideos($query);
        if ($query) {
            Video::create([
                'search' => $query,
            ]);
        }
        return view('video.index', compact('videos'));
    }
}
