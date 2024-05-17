@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="chat-container">

            <div class="chat-body" id="chatBody">
                <!-- Messages will be appended here -->
            </div>
            <div class="chat-footer">
                <div class="input-group">
                    <input type="text" id="userInput" class="form-control" placeholder="Type a message...">
                    <div class="input-group-append">
                        <button class="btn btn-primary" id="sendBtn">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
