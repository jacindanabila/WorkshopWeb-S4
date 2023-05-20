@extends('layouts.app') <!-- @extends disini digunakan untuk menghubungkan home.blade.php dengan layouts.app (app.blade.php) -->

@section('content') <!-- @section disini berfungsi untuk mendefinisikan section (content) dari isi halaman web -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
