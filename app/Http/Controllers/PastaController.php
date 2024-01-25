<?php

namespace App\Http\Controllers;

use App\Models\Pasta;
use Illuminate\Http\Request;

class PastaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Pasta::all();

        return view("pastas.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pastas.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $pasta = new Pasta();
        $pasta->title = $data["title"];
        $pasta->description = $data["description"];
        $pasta->type = $data["type"];
        $pasta->image = $data["image"];
        $pasta->cooking_time = $data["cooking_time"];
        $pasta->weight = $data["weight"];
        $pasta->save();

        // return view("pastas.show", compact("pasta"));
        return redirect()->route('pastas.show', $pasta->id);
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id) //senza dependecy injection
    public function show(Pasta $pasta) //CON dependecy injection
    {
        // $pasta = Pasta::find($id); //senza dependecy injection

        return view("pastas.show", compact("pasta"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
