<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable=['nom','prix_unit','sous_categorie_id'];

    public function sous_categorie(){
        return $this->belongsTo('App\Sous_categorie');
    }
}
