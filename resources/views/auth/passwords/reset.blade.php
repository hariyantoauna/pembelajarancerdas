@extends('layouts.auth')

@section('content')
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <div class="my-4">
            <input type="hidden" name="token" value="{{ $token }}">


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
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password-confirm" type="password"
                    name="password_confirmation" required autocomplete="new-password">
                <label for="floatingPassword">Konfirmasi Kata Sandi</label>
            </div>



            <div class="d-grid gap-2 my-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Perubahan Kata Sandi') }}
                </button>

                <div class="text-center
                mt-3">
                    Batalkan perubahan kata sandi? <a href="/login">disini</a>
                </div>


            </div>
        </div>
    </form>
@endsection
