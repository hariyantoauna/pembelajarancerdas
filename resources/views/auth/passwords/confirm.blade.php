@extends('layouts.auth')

@section('content')
    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf
        <div class="my-4">



            <div class="form-floating mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required
                    autocomplete="current-password" id="password">
                <label for="password">Kata Sandi</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>



            <div class="d-grid gap-2 my-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Konfirmasi Kata Sandi') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Lupa kata sandi anda?') }}
                    </a>
                @endif



            </div>
        </div>
    </form>
@endsection
