<?php

namespace App\Http\Controllers;

use App\Models\Openai;
use Illuminate\Http\Request;

class ChatBotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('chatbot.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Openai $openai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Openai $openai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Openai $openai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Openai $openai)
    {
        //
    }
}
