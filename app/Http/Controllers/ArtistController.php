<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\artist;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $artist = artist::all();
    return view('artist.all', [
        "title" => "artist",
        "artist" => $artist,
    ]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
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
        $artist = artist::findOrFail($id);
        return view('artist.detail', [
        "title" => "artist",
        "artist" => $artist,
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(artist $artist)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $artist)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $artist)
    {

    }
}

