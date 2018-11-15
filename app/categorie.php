<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable=['nom'];

    public function sous_categories(){
        return $this->hasMany('App\Sous_categorie');
    }
}
