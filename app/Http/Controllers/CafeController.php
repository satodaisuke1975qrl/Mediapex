<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafe;

class CafeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cafes = Cafe::all();
        return view('cafe_form.index' , compact('cafes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('cafe_form.create' , compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => ['required', 'max:50'],
            'pref' => ['required', 'max:4'],
            'address' => ['required', 'max:100'],
            'review' => ['required', 'numeric', 'decimal:0,1'],
            'is_visible' => ['required', 'boolean'],
        ]);

        $cafe = new Cafe;
        $cafe->name = $request->name;
        $cafe->pref = $request->pref;
        $cafe->address = $request->address;
        $cafe->review = $request->review;


        if($request->is_visible == 1){
            $cafe->is_visible = true;
        }
        elseif($request->is_visible == 0){
            $cafe->is_visible = false;
        }

        $cafe->save();

        return redirect('cafes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cafe = Cafe::find($id);

        return view('cafe_form.show' , compact('cafe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cafe = Cafe::find($id);

        return view('cafe_form.edit' , compact('cafe'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:50'],
            'pref' => ['required', 'max:4'],
            'address' => ['required', 'max:100'],
            'review' => ['required', 'numeric', 'decimal:0,1'],
            'is_visible' => ['required', 'boolean'],
        ]);


        $cafe = Cafe::find($id);
        $cafe->name = $request->name;
        $cafe->pref = $request->pref;
        $cafe->address = $request->address;
        $cafe->review = $request->review;

        if($request->is_visible == 1){
            $cafe->is_visible = true;
        }
        elseif($request->is_visible == 0){
            $cafe->is_visible = false;
        }

        $cafe->save();

        return redirect('cafes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cafe = Cafe::findOrFail($id);
        $cafe->delete();

        return redirect('cafes');
    }
}
