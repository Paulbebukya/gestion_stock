<?php

namespace App\Models;

use App\Models\Commander;
use App\Models\Approvionner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Piece extends Model
{
    use HasFactory;

    protected $fillable=[
        'CodePiece','designation','prix','quantite'
    ];

    public function Approvionner(){
        return $this->hasMany(Approvionner::class);
    }

    public function commanders(){
        return $this->hasMany(Commander::class);
    }
}
