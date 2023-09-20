<?php

namespace App\Http\Controllers;

use App\Models\Piece;
use App\Models\Commander;
use App\Models\Mecanicien;
use Illuminate\Http\Request;

class CommanderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          //
    
        $commandes = Commander::orderBy("created_at", 'desc')->paginate(10);

        $mecaniciens = Mecanicien::orderBy('created_at', 'desc')->get();

        $pieces = Piece::orderBy('created_at', 'desc')->get();

        return view('commande.index', compact('commandes', 'mecaniciens', 'pieces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function table()
    {
        //
        $commandes = Commander::orderBy("created_at", 'desc')->paginate(10);

    return view('Commande.table',compact('commandes'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'mecaniciens_id' => ['numeric'],
            'pieces_id' => ['numeric'],
            'quantite' => ['numeric']
        ]);

        
        Commander::create($data);

        return redirect()->route('commande.index')->with('success', 'Commande créée avec succès!');


    }

    /**
     * Display the specified resource.
     */
    public function show(Commander $commander)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commander $commander)
    {
        //

        $mecaniciens = Mecanicien::orderBy('created_at', 'desc')->get();

        $pieces = Piece::orderBy('created_at', 'desc')->get();

        return view('commande.edit', compact('commander', 'mecaniciens', 'pieces'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Commander $commander)
    {
        //
        $data = $request->validate([
            'mecaniciens_id' => ['numeric'],
            'pieces_id' => ['numeric'],
            'quantite' => ['numeric']
        ]);

        $commander->update($data);

        return redirect()->route('commande.index')->with('success', 'commande modifée avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commander $commander)
    {
        //
        $commander->delete();

        return redirect()->route('commande.index')->with('success', "commande supprimée avec succès!");

    }
}
