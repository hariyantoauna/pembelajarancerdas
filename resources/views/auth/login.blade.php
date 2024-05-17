@extends('layouts.auth')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="my-4">

            <div class="form-floating mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                    value="{{ old('email') }}" required autocomplete="email">
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

            <div class="row mb-3">
                <div class="">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Ingat saya') }}
                        </label>
                    </div>
                </div>
            </div>


            <div class="d-grid gap-2 my-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Masuk') }}
                </button>

                <a class="btn btn-danger" href="{{ route('google.redirect') }}"><i
                        class="bi bi-google ml-3"></i>&nbsp;&nbsp; Google</a>

                {{-- <div class="d-flex justify-content-center align-items-center w-100 mb-2">
                    <div id="my-signin2"></div> --}}
            </div>

            <div class="text-center">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Lupa kata sandi anda?') }}
                    </a>

            </div>
            @endif
            {{-- <div class="text-center
                    mt-3">
                Belum memiliki akun? <br>
                Daftar sebagai Pemohon di

            </div>
            <div class="d-grid gap-2 my-2">
                <a class="btn btn-success" href="/register">Registrasi Pemohon</a>
            </div> --}}



        </div>
        </div>
    </form>
@endsection
