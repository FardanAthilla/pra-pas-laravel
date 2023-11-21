<?php

namespace App\Http\Controllers;
use App\Models\city;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $city = city::all();
    return view('city.all', [
        "title" => "city",
        "city" => $city,
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
        $city = city::findOrFail($id);
        return view('city.detail', [
        "title" => "city",
        "city" => $city,
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(city $city)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $city)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $city)
    {

    }
}
