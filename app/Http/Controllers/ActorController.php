<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{


  public function Directory(){

    $actores = Actor::all();
      return view('peliculas.actores', ['actores' => $actores]);
    }
}