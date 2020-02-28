<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
  protected $guarded=[];

    public function movies()
    {
        return $this->hasMany('App\movie', 'genre_id');
    }

}
