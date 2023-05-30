<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TV;

class TVController extends Controller
{
    public function index()
    {
        $tvs = TV::all();
        $genre = TV::with('genre');
        return view('tvshow.index', compact('tvs','genre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('tvshow.create', compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tv = new TV;
        $tv->title = $request->title;
        $tv->time = $request->time;
        $tv->content = $request->content;
        $tv->genre_id = $request->genre_id;

        $tv->save();

        return redirect('tvshow');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tv = TV::find($id);
        $genre = TV::with('genre')->where('id', $id);

        return view('tvshow.show', compact('tv','genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tv = TV::find($id);

        return view('tvshow.edit', compact('tv'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $tv = TV::find($id);
        $tv->title = $request->title;
        $tv->time = $request->time;
        $tv->content = $request->content;
        $tv->genre_id = $request->genre_id;


        $tv->save();

        return redirect('tvshow');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tv = TV::findOrFail($id);
        $tv->delete();

        return redirect('tvshow');
    }
}
