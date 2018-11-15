<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_rayon extends Model
{
    protected $fillable=['nom'];

    public function produits(){
        return $this->hasMany('App\Produit');
    }
}
