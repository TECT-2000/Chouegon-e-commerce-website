<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable=['titre','contenu','etat','expediteur_id','recepteur_id'];

    public function utilisateur(){
        return $this->belongsTo('App\Utilisateur');
    }
}
