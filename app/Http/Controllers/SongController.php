<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\song;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $song = song::all();
    return view('song.all', [
        "title" => "song",
        "song" => $song,
    ]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('song.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $song = song::findOrFail($id);
        return view('song.detail', [
        "title" => "song",
        "song" => $song,
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(song $song)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $song)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $song)
    {

    }
}

