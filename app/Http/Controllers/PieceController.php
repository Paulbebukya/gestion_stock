<?php

namespace App\Http\Controllers;

use App\Models\Piece;
use Illuminate\Http\Request;

class PieceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $pieces= Piece::orderBy('created_at', 'desc')->paginate(10);
        
        return view('mecanicien.index',compact('pieces'));
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
            'designation' => ['string', 'max:10'],
            'prix' => ['numeric', 'max:14'],
            'quantite' => ['nullable', 'max:255']
        ]);

        $data['CodePiece'] ="Pie". substr(time(), 0, -4) . mt_rand(1000, 9999);

        Piece::create($data);

        return redirect()->route('piece.index')->with('success', 'piece créé avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Piece $piece)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Piece $piece)
    {
        //
        return  view('piece.edit', compact('piece'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Piece $piece)
    {
        //
        $data = $request->validate([
            'designation' => ['string', 'max:10'],
            'prix' => ['numeric', 'max:14'],
            'quantite' => ['nullable', 'max:255']
        ]);

        $piece->update($data);

        return redirect()->route('piece.index')->with('success', 'piece modifiée avec succès!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Piece $piece)
    {
        //
        $piece->delete();

        return redirect()->route('piece.index')->with('success', 'piece supprimée avec succès!');

    }
}
