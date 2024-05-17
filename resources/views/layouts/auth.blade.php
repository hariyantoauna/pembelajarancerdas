<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pembelajaran Cerdas</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('template/example-bootstrap/dist/css/auth.css') }}">


    <style>
        body {

            background-image: url("{{ asset('template/example-bootstrap/src/image/bg/bg-body-auth.jpg') }}");


        }
    </style>
</head>

<body class="p-3">

    <div class="row justify-content-md-center " style="margin-top: 20px;">



        <div class="col-lg-5 ">
            <div class="card">
                <div class="card-body p-4">
                    <div class="text-center my-4" style="font-size: 11pt;">
                        <a href="/">
                            <img class="logo-auth" src="{{ asset('dist/image/logo/Logo-UM-bw.png') }}" alt="">
                        </a>

                        <div class="mt-3">UNIVERSITAS NEGERI MALANG</div>
                        <div>PEMBELAJARAN CERDAS</div>
                    </div>
                    <main>
                        @yield('content')
                    </main>


                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
