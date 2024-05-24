<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pembelajaran Cerdas</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
    <style>
        body {


            font-family: "Roboto", sans-serif;
            font-weight: 300;
            font-style: normal;

        }

        .slide-on {
            background-image: url('dist/image/bg/um.jpg');
            height: 100vh;
            width: 100%;
            object-fit: cover;
            background-position: center button;
            background-size: cover;

        }

        .chat-container {
            max-width: 100%;
            margin: 10px auto;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .chat-header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .chat-body {
            height: 400px;
            overflow-y: auto;
            padding: 10px;
        }

        .chat-footer {
            padding: 10px;
            border-top: 1px solid #ccc;
        }

        .message {
            margin-bottom: 10px;
        }

        .message.bot {
            text-align: left;
        }

        .message.user {
            text-align: right;
        }

        .message .text {
            display: inline-block;
            padding: 10px;
            border-radius: 10px;
            max-width: 70%;
        }

        .message.bot .text {
            background-color: #e9ecef;
        }

        .message.user .text {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img style="width: 50px" src="{{ asset('dist/image/logo/Logo-UM-bw.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span style="font-size: 10pt" class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('beranda') ? 'active' : ' ' }}"
                                href="/beranda">Beranda</a>
                        </li>
                        @guest
                        @else
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('chatbot') ? 'active' : ' ' }}" href="/chatbot">Chat
                                    AI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('books.search') ? 'active' : ' ' }}"
                                    href="/scholar/search">Artikel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('books.search') ? 'active' : ' ' }}"
                                    href="/books/search">Buku</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('youtube.search') ? 'active' : ' ' }}"
                                    href="/youtube/search">Video</a>
                            </li>
                        @endguest

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Masuk</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Daftar</a>
                                </li> --}}
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

    <script>
        document.getElementById('sendBtn').addEventListener('click', function() {
            const userInput = document.getElementById('userInput').value;
            if (userInput.trim() !== '') {
                appendMessage('user', userInput);
                document.getElementById('userInput').value = '';

                // Simulate bot response after a short delay
                setTimeout(() => {
                    const botResponse = 'This is a bot response.';
                    appendMessage('bot', botResponse);
                }, 1000);
            }
        });

        function appendMessage(sender, text) {
            const chatBody = document.getElementById('chatBody');
            const messageDiv = document.createElement('div');
            messageDiv.classList.add('message', sender);
            const textDiv = document.createElement('div');
            textDiv.classList.add('text');
            textDiv.textContent = text;
            messageDiv.appendChild(textDiv);
            chatBody.appendChild(messageDiv);
            chatBody.scrollTop = chatBody.scrollHeight;
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#send').click(function() {
               
                var message = $('#message').val();
                $('#message').val('');

                $.ajax({
                    url: '/chatbot',
                    type: 'POST',
                    data: {
                        message: message,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#messages').append('<div>User: ' + message + '</div>');
                        $('#messages').append('<div>Bot: ' + response.reply + '</div>');
                    }
                });
            });
        });
    </script>
</body>

</html>
