@extends('layouts.app')

@section('head')
    @vite('resources/sass/pages/home.scss')
@endsection

@section('content')
    <section class="hero-section text-center px-3 px-md-0">
        <div class="container">
            <div class="row justify-content-center gap-3 gap-md-3 gap-lg-2">
                <h1 class="col-12 col-lg-9 text-light display-5 fw-bold">
                    Selamat datang di Aplikasi Peminjaman Buku
                </h1>
                <p class="col-12 col-lg-7 text-body-secondary mx-auto blockquote">
                    Mari menyelam ke dalam ilmu pengetahuan. Temukan buku favorit kamu dan mulai berpetualang!!!
                </p>
            </div>
        </div>
    </section>

    <section>

    </section>
@endsection
