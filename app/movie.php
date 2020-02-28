<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{

      public function actors(){
        return $this->belongsTo('App\movie', 'actor_id');
      }
      public function genres(){
        return $this->hasMany('App\movie', 'genre_id');
      }
}
