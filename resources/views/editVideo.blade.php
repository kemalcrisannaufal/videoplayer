@extends('layouts.main')

@section('title', 'addVideo')

@section('bodyClass', 'bg')

@section('content')
<div class="container mt-5">
    <div class="border p-3 rounded bg-light">
        <h1 class="mb-3">Edit Video</h1>
        <form action="/video/{{ $video->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $video->title }}" placeholder="Masukkan Judul Video">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" placeholder="Masukkan Deskripsi Video" >{{ $video->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">Url</label>
                <input type="text" class="form-control" id="url" name="url" placeholder="Masukkan Url" value="{{ $video->url }}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" placeholder="Masukkan Gambar">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
@endsection
