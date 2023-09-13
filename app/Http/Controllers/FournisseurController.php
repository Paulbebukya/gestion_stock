<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $fournisseurs= Fournisseur::orderBy('created_at', 'desc')->paginate(10);

        return view('fournisseur.index', compact('fournisseurs'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'nom' => ['string', 'max:10'],
            'telephone' => ['numeric', 'max:14'],
            'email' => ['nullable', 'max:255'],
            'adresses' => ['nullable', 'max:255']
        ]);

        $data['CodeFourn'] = "Four". substr(time(), 0, -4) . mt_rand(1000, 9999);

        Fournisseur::create($data);

        return redirect()->route('fournisseur.index')->with('success', 'Fournisseur créé avec succès!');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Fournisseur $fournisseur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fournisseur $fournisseur)
    {
        //
        return view('fournisseur.edit', compact('fournisseur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fournisseur $fournisseur)
    {
        //
        $data = $request->validate([
            'nom' => ['string', 'max:10'],
            'telephone' => ['numeric', 'max:14'],
            'email' => ['nullable', 'max:255'],
            'adresses' => ['nullable', 'max:255']
        ]);

        $fournisseur->update($data);

        return redirect()->route('fournisseur.index')->with('success', 'Fournisseur Modifié avec succès!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fournisseur $fournisseur)
    {
        //
        $fournisseur->delete();

        return redirect()->route('fournisseur.index')->with('success', 'Fournisseur supprimé avec succès!');

    }
}
