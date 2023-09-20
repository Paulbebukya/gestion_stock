<?php

namespace App\Http\Controllers;

use App\Models\Approvionner;
use App\Models\Fournisseur;
use App\Models\Piece;
use Illuminate\Http\Request;

class ApprovionnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $approvionners = Approvionner::orderBy("created_at", 'desc')->paginate(10);

        $fournisseurs = Fournisseur::orderBy('created_at', 'desc')->get();

        $pieces = Piece::orderBy('created_at', 'desc')->get();

        return view('Approvisionnement.index', compact('approvionners', 'fournisseurs', 'pieces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function table()
    {
        //
        $approvionners = Approvionner::orderBy("created_at", 'desc')->paginate(10);

        return view('Approvisionnement.table', compact('approvionners'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'fournisseurs_id' => ['numeric'],
            'pieces_id' => ['numeric'],
            'quantite' => ['numeric']
        ]);

    

        $approvionner = Approvionner::create($data);

        if ($approvionner) {

            $piece = Piece::where("id", $data['pieces_id'])->first();

            $quantite_update = $piece->quantite + $data['quantite'];

            $piece->update([
                "quantite" => $quantite_update
            ]);
        } else {

            return redirect()->route('approvionner.index')->with('error', "Echec d'enregitrement");
        }


        return redirect()->route('approvionner.index')->with('success', 'Approvionner créée avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Approvionner $approvionner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Approvionner $approvionner)
    {
        //
        $fournisseurs = Fournisseur::orderBy('created_at', 'desc')->get();

        $pieces = Piece::orderBy('created_at', 'desc')->get();

        return view('Approvisionnement.edit', compact('approvionner', 'fournisseurs', 'pieces'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Approvionner $approvionner)
    {
        //
        $data = $request->validate([
            'fournisseurs_id' => ['numeric'],
            'pieces_id' => ['numeric'],
            'quantite' => ['numeric']
        ]);

        $approvionner->update($data);

        return redirect()->route('approvionner.index')->with('success', 'Approvionner modifé avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Approvionner $approvionner)
    {
        //
        $approvionner->delete();

        return redirect()->route('approvionner.index')->with('success', 'Approvionner supprimé avec succès!');
    }
}
