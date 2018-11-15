<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sous_categorie extends Model
{
    protected $fillable=['nom','categorie_id'];

    public function categorie(){
        return $this->belongsTo('App\Categorie');
    }
    public function services(){
        return $this->hasMany("App\Service");
    }
    public function produits(){
        return $this->hasMany('App\Produit');
    }
}
