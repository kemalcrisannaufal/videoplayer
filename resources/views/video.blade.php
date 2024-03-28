@extends('layouts.main')

@section('title', 'Video')

@section('content')

    <div class="container mt-5">
        <h1 class="mb-3">Videos</h1>
        @foreach ($videos as $video)
            <div class="main-video">
                <img src="{{ asset('storage/videos/images/' . $video->image) }}" class="img-video-main" alt="">
                <div class="main-video-body">
                    <h5 class="main-video-title">{{ $video->title }}</h5>
                    <p class="main-video-description">{{ $video->description }}</p>
                    <a href="/video/{{ $video->id }}" class="btn-videos">Tonton Sekarang</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
