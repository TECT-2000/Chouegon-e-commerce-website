<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
   protected $fillable=['description','titre','lieu','date'];
}
