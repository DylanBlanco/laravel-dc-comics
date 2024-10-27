<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::get();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $comic = new Comic();
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $priceNumber = floatval(substr($data['price'], 1));
        $comic-> price = $priceNumber;
        $comic-> series = $data['series'];
        $comic-> sale_date = $data['sale_date'];
        $comic-> type = $data['type'];
        $explodeArtists = explode(',', $data['artists']);
        $jsonArtists = json_encode($explodeArtists);
        $comic->artists = $jsonArtists;
        $explodeWriters = explode(',', $data['writers']);
        $jsonWriters = json_encode($explodeWriters);
        $comic->Writers = $jsonWriters;
        // $comic->save();
        dd($data);

        //return redirect()->route('comics.show', ['comic' => $comic->id]);
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
