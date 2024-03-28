<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::latest()->take(4)->get();
        return view('homepage', [
            'videos' => $videos
        ]);
    }

    public function create()
    {
        return view('addVideo');
    }

    public function store(Request $request)
    {
        $fileName = '';
        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = $request->title.'-'. now()->timestamp . '.' . $extension;
            $request->file('image')->storeAs('videos/images', $fileName);
        }

        $newData = $request->all();
        $newData['image'] = $fileName;

        $video = Video::create($newData);
        return redirect('/videos');
    }

    public function show($id)
    {
        $video = Video::findOrFail($id);
        $videos = Video::whereNotIn('id', [$id])->get();
        return view('videoDetail', [
            'video' => $video,
            'videos' => $videos
        ]);
    }

    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();
        return redirect('/');
    }

    public function edit($id)
    {
        $video = Video::findOrFail($id);
        return view('editVideo', [
            'video' => $video
        ]);
    }

    public function update(Request $request, $id)
    {
        $fileName = $request->image;
        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = $request->title.'-'. now()->timestamp . '.' . $extension;
            $request->file('image')->storeAs('videos/images', $fileName);
        }

        $newData = $request->all();
        $newData['image'] = $fileName;
        $video = Video::findOrFail($id);
        $video->update($newData);
        return redirect('/');
    }

    public function showVideos()
    {
        $videos = Video::get();
        return view('video' , [
            'videos' => $videos
        ]);
    }
}
