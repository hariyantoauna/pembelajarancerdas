@extends('layouts.auth')

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="my-4">
            <div class="form-floating mb-3">
                <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name"
                    style="text-transform: uppercase;" value="{{ old('name') }}" required autocomplete="name" autofocus>
                <label for="name">Nama Lengkap</label>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="email" value="{{ old('email') }}" required autocomplete="email">
                <label for="email">Email</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required
                    autocomplete="new-password" id="password">
                <label for="password">Kata Sandi</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password-confirm" type="password"
                    name="password_confirmation" required autocomplete="new-password">
                <label for="floatingPassword">Konfirmasi Kata Sandi</label>
            </div>

            <div class="d-grid gap-2 my-4">
                <button class="btn btn-primary" type="submit">Registrasi</button>
                <a class="btn btn-danger" href="{{ route('google.redirect') }}"><i class="bi bi-google ml-3"></i>&nbsp;&nbsp; Google</a>
                <div class="text-center
                    mt-3">

                    Sudah memiliki akun? Masuk
                </div>
                <div class="d-grid gap-2 my-2">
                    <a class="btn btn-success" href="/login">Masuk</a>
                </div>


            </div>
        </div>
    </form>
@endsection
