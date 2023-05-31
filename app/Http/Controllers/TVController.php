<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TV;
use App\Models\Genre;
use App\Models\Threaad;

class TVController extends Controller
{
    public function index()
    {
        $tvs = TV::all();
        $genre = TV::with('genre');
        return view('tvshow.index', compact('tvs' , 'genre'));
    }

    public function bbs()
    {
        $bbs = Threaad::all();
        return view('tvshow.bbs', compact('bbs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $genres = Genre::all();
        return view('tvshow.create', compact('genres','request'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'title' => ['required', 'min:2', 'max:50'],
            'time' => ['required'],
            'content' => ['required', 'min:2', 'max:50'],
            'genrename' => ['required']
            ]);

        $tv = new TV;
        $tv->title = $request->title;
        $tv->time = $request->time;
        $tv->content = $request->content;
        $tv->genre_id = $request->genrename;
        // genrenameのvalueであるgenreのidが入る

        $tv->save();

        return redirect('tvshow');
    }

    public function bbsstore(Request $request)
    {
        // dd($request);
        $bbs = new Threaad;
        $bbs->time = date("Y/m/d H:i:s");
        $bbs->u_name = $request->u_name;
        $bbs->message = $request->message;
        // $tv->genre_id = $request->genre_id;

        $bbs->save();

        return redirect('tvshow/bbs');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tv = TV::find($id);
        $genre = TV::with('genre')->where('id', $id);

        return view('tvshow.show', compact('tv' , 'genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tv = TV::find($id);
        $genres = Genre::all();
        $genre = TV::with('genre');

        return view('tvshow.edit', compact('tv','genres','genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validateData = $request->validate([
            'title' => ['required', 'min:2', 'max:50'],
            'time' => ['required'],
            'content' => ['required', 'min:2', 'max:100'],
            // 'genre_id' => ['required', 'min:1', 'max:5']
            ]);

        $tv = TV::find($id);
        $tv->title = $request->title;
        $tv->time = $request->time;
        $tv->content = $request->content;
        $tv->genre_id = $request->genrename;


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
