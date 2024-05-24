<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{

    public function index()
    {

        return view('chatbot.index');
    }

    public function handle(Request $request)
    {

        $userMessage = $request->input('message');

        // Gantilah URL dan API Key dengan yang sesuai
        $apiUrl = 'https://api.gemini.com/v1/endpoint';
        $apiKey = 'AIzaSyAtBLSVA2GyJSSxjdY-6RBr0XvSgl6VuyE';

        $response = Http::withHeaders([
            'Authorization' => "Bearer $apiKey",
        ])->post($apiUrl, [
            'query' => $userMessage,
        ]);

        return response()->json($response->json());
    }
}