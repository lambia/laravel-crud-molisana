<?php

namespace App\Http\Controllers;

use App\Models\Pasta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PastaController extends Controller
{

    public function validation($data)
    {
        $validated = Validator::make($data, [
            "title" => "required|min:5|max:50",
            // "description" => "",
            "type" => "required|max:20",
            "image" => "required",
            "cooking_time" => "required|max:20",
            "weight" => "required|max:20",
        ], [
            'title.required' => 'Il titolo è necessario',
            'title.max' => 'Sei prolisso',
            'title.min' => 'Troppo corto',
        ])->validate();

        return $validated;
    }


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
        $dati_validati = $this->validation($data);

        $pasta = new Pasta();
        $pasta->fill($dati_validati);
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
        //senza dependecy injection
        // $pasta = Pasta::find($id);

        // if (!$pasta) {
        //     abort(404);
        // }

        // return view("pastas.show", compact("pasta"));

        //senza dependency injection, ma con FindOrFail
        // $pasta = Pasta::findOrFail($id);
        // return view("pastas.show", compact("pasta"));

        return view("pastas.show", compact("pasta"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasta $pasta)
    {
        return view("pastas.edit", compact("pasta"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasta $pasta)
    {
        $data = $request->all();
        $dati_validati = $this->validation($data);

        $pasta->update($dati_validati);

        return redirect()->route('pastas.show', $pasta->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasta $pasta)
    {
        $pasta->delete();

        return redirect()->route('pastas.index');
    }
}
