<?php

namespace App\Models;

use App\Models\Commander;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mecanicien extends Model
{
    use HasFactory;

    protected $fillable=[
        'CodeMecan','nom','telephone','email','adresses'
    ];

    public function commanders(){
        return $this->hasMany(Commander::class);
    }

    
}
