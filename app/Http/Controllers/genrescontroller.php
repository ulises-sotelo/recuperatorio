<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\genre;

class genrescontroller extends Controller
{
  public function buscargen() {
    $gen = genre_id::all();

      $var=compact("gen");
      return view("/genres",$var);
  }
}
