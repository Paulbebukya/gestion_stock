<?php

namespace App\Models;

use App\Models\Piece;
use App\Models\Mecanicien;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commander extends Model
{
    use HasFactory;

    protected $fillable=[
        'mecaniciens_id','pieces_id','quantite'
    ];

    public function mecaniciens(){
        return $this->belongsTo(Mecanicien::class);
    }

    public function pieces(){
        return $this->belongsTo(Piece::class);
    }
}
