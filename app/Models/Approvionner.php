<?php

namespace App\Models;

use App\Models\Piece;
use App\Models\Fournisseur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Approvionner extends Model
{
    use HasFactory;

    protected $fillable=[
        'fournisseurs_id','pieces_id','quantite'
    ];

    public function fournisseurs(){
        return $this->belongsTo(Fournisseur::class);
    }

    public function pieces(){
        return $this->belongsTo(Piece::class);
    }
}
