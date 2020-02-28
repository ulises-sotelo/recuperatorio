<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actor extends Model
{
  public function movies()
 {
     return $this->belongsTo('App\movie', 'actor_id');
 }
}
