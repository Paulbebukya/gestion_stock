<?php

namespace App\Models;

use App\Models\Approvionner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fournisseur extends Model
{
    use HasFactory;

    protected $fillable=[
        'CodeFourn','nom','telephone','email','adresses'
    ];

    public function Approvionners(){
        return $this->hasMany(Approvionner::class);
    }

}
