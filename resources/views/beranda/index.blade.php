@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card" style="height: 100%">
                    <div class="card-header">Beranda</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Selamat datang di Web Pembelajaran Cerdas
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
