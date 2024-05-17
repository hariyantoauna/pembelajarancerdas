@extends('layouts.auth')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
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



            <div class="d-grid gap-2 my-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Kirim Email Reset Kata Sandi') }}
                </button>

                <div class="text-center
            mt-3">
                    Batalkan pengiriman email perubahan? <a href="/login">disini</a>
                </div>


            </div>
        </div>
    </form>
@endsection
