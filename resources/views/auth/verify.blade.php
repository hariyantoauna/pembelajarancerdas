@extends('layouts.auth')

@section('content')
    <div class="my-4 text-center">
        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                {{ __('Tautan verifikasi baru telah dikirim ke alamat email Anda.') }}
            </div>
        @endif

        {{ __('Sebelum melanjutkan, silakan periksa email di kota masuk atau di spam email Anda untuk tautan verifikasi.') }}
        {{ __('Jika Anda tidak menerima email') }},<br>
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit"
                class="btn btn-link p-0 m-0 align-baseline">{{ __('Klik di sini untuk meminta yang lain') }}</button>.
        </form>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="mt-3">
            @csrf
            <button class="btn btn-dark" type="submit">Batal</button>
        </form>
    </div>
@endsection
