<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable=['nom','taille','prix_unit','reduction','quantite','description','image','type_rayon_id','sous_categorie_id','rayon_id'];

    public function couleurs(){
        return $this->belongsToMany('App\Couleur');
    }
    public function rayon(){
        return $this->belongsTo("App\Rayon");
    }
    public function type_rayon(){
        return $this->belongsTo("App\Type_rayon");
    }
    public function sous_categorie(){
        return $this->belongsTo("App\Sous_categorie");
    }
}
