<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Couleur extends Model
{
    protected $fillable=['nom','valeur'];

    public function produits(){
        return $this->belongsToMany('App\Produit');
    }
}
