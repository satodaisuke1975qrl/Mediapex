<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TV;

class TVController extends Controller
{
    public function index()
    {
        $t_v_s = TV::all();
        return view('tv_form.index' , compact('t_v_s'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('tv_form.create' , compact('request'));
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

        $tv->save();

        return redirect('t_v_s');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tv = TV::find($id);

        return view('tv_form.show' , compact('tv'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tv = TV::find($id);

        return view('tv_form.edit' , compact('tv'));

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

        $tv->save();

        return redirect('t_v_s');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tv = TV::findOrFail($id);
        $tv->delete();

        return redirect('t_v_s');
    }
}


