@extends('layouts.app')

@section('content')
    <h1>Chatbot</h1>
    <div id="chatbox">
        <div id="messages"></div>
        <input type="text" id="message" placeholder="Type a message">
        <button id="send">Send</button>
    </div>
@endsection
