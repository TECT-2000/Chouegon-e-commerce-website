<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
   protected $fillable=['nom'];

   public function produits(){
       return $this->hasMany('App\Produit');
   }
}
