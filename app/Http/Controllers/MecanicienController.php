<?php

namespace App\Http\Controllers;

use App\Models\Mecanicien;
use Illuminate\Http\Request;

class MecanicienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $mecaniciens= Mecanicien::orderBy('created_at', 'desc')->paginate(10);
        
        return view('mecanicien.index',compact('mecaniciens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function table()
    {
        //  
        $mecaniciens= Mecanicien::orderBy('created_at', 'desc')->paginate(10);
        return view('Mecanicien.table', compact('mecaniciens'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'nom' => ['string'],
            'telephone' => ['numeric'],
            'email' => ['nullable', 'max:255'],
            'adresses' => ['nullable', 'max:255']
        ]);

    
        $data['CodeMecan'] = "Meca". substr(time(), 0, -4) . mt_rand(1000, 9999);

        Mecanicien::create($data);

        return redirect()->route('mecanicien.index')->with('success', 'Mecanicien créé avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mecanicien $mecanicien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mecanicien $mecanicien)
    {
        return view('mecanicien.edit', compact('mecanicien'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mecanicien $mecanicien)
    {
        //

        $data = $request->validate([
            'nom' => ['string', 'max:10'],
            'telephone' => ['numeric',],
            'email' => ['nullable', 'max:255'],
            'adresses' => ['nullable', 'max:255']
        ]);

        $mecanicien->update($data);

        return redirect()->route('mecanicien.index')->with('success', 'mecanicien Modifié avec succès!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mecanicien $mecanicien)
    {
        //
        $mecanicien->delete();

        return redirect()->route('mecanicien.index')->with('success', 'mecanicien supprimé avec succès!');

    }
}
