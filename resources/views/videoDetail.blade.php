@extends('layouts.main')

@section('title', 'Video Detail')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <iframe width="100%" height="550" src="{{ $video->url }}" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <div class="mt-3">
                    <h1 class="fw-bold fs-3">{{ $video->title }}</h1>
                    <div class="description-box">
                        <p class="fw-bold">Description</p>
                        <p>{{ $video->description }}</p>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex gap-3">
                        <img src="{{ asset('images/foto.png') }}" alt="" class="profile-picture-video">
                        <div>
                            <h3 class="fs-5">Kemal Crisannaufal</h3>
                            <p class="fs-6 text-muted">10 jt subscriber</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn-main-video"><i class="fas fa-bell px-2 grey-icon"></i>Subscribe</button>
                        <div class="d-flex like-dislike align-items-center">
                            <button class="btn-like-dislike">
                                <i class="far fa-thumbs-up grey-icon"></i>
                                25000
                            </button>
                            <p>|</p>
                            <button class="btn-like-dislike">
                                <i class="far fa-thumbs-down grey-icon"></i>
                            </button>
                        </div>
                        <form action="/video-edit/{{ $video->id }}" method="GET">
                            <button class="btn-main-edit"><i class="fas fa-edit px-2"></i>Edit</button>
                        </form>
                        <form action="/video-delete/{{ $video->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn-main-delete"><i class="fas fa-trash px-2"></i>Delete</button>
                        </form>
                        <button class="btn-main-video"><i>...</i></button>
                    </div>
                </div>
                <div class="mt-5">
                    <h5>Komentar</h5>
                    <div class="d-flex">
                        <input type="text" class="input-comment" placeholder="Tulis komentar anda">
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                @foreach ($videos as $video)
                    <div class="side-video">
                        <a href="/video/{{ $video->id }}"><img
                                src="{{ asset('storage/videos/images/' . $video->image) }}" alt="image" width="190px"
                                height="105px">
                        </a>
                        <a href="/video/{{ $video->id }}" class="">
                            <div class="side-video-text-box">
                                <h5 class="side-video-title">{{ $video->title }}</h5>
                                <p class="side-video-date">{{ $video->created_at }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="mb-5"></div>
    </div>
@endsection
