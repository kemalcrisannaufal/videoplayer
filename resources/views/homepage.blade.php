@extends('layouts.main')

@section('title', 'Homepage')

@section('content')
    <div class="container-fluid mt-5 px-5">
        <div class="px-4 py-5 mb-3 text-center">
            <img class="d-block mx-auto mb-4" src="{{ asset('images/foto.png') }}" alt="main-image" width="100">
            <h1 class="display-5 fw-bold text-body-emphasis">Kemal Crisannaufal</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Website ini dibuat oleh Kemal Crisannaufal (1301213133) IF-45-04 untuk memenuhi Tugas
                    Modul
                    6. Website ini dibuat menggunakan Laravel dengan layout pada aplikasi ini dibuat menggunakan Bootstrap.
                </p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="/addVideo"><button type="button" class="btn btn-navy btn-lg px-4 gap-3">Tambah
                            Video</button></a>
                    <a href="/videos"><button type="button" class="btn btn-outline-secondary btn-lg px-4">Lihat Video</button></a>
                </div>
            </div>
        </div>

        <hr>
        <div class="">
            <div class="container d-flex justify-content-between my-3">
                <h2>Video</h2>
                <h3><a href="/videos">Lihat Semua Video <i class="fas fa-arrow-right"></i></a></h3>
            </div>
            <div class="row d-flex justify-content-center gap-3 m-3">
                @foreach ($videos as $video)
                <a href="/video/{{ $video->id }}" class="col">
                    <div class="video-box">
                        <img src="{{ asset('storage/videos/images/' . $video->image) }}" alt="image" class="img-video-home">
                        <div class="video-text">
                            <h5 class="video-title">{{ $video->title }}</h5>
                            <p class="video-date">{{ $video->created_at }}</p>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>

    <footer class="container-fluid text-body-secondary bg-navy py-5 mt-5">
        <div class="container text-white">
            <h4 class="float-end mb-1">Laravel Project</h4>
            <h5 class="mb-1">Kemal Crisannaufal</h5>
            <h5 class="mb-0">1301213133</h5>
        </div>
    </footer>
@endsection
