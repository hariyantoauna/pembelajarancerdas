@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <h4>Chatbot</h4>
        <div id="chatbox">

            <div class="input-group mb-3">

                <input class="form-control" type="text" id="message" placeholder="Type a message">
                <button class="btn btn-outline-secondary" type="button" id="send">Send</button>
            </div>

            <div id="messages"></div>
        </div>
    </div>
@endsection
