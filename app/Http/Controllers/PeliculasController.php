<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    private $peliculas = [

      1=>'Toy Story',
      2=>'Buscando a Nemo',
      3=>'300',
      4=>'Rocky',
      5=>'Rambo',
      6=>'Star Wars',
    ];

    public function prueba(){
      return view ('peliculas.prueba');
    }

    public function buscarPeliculas($id){

      if (!is_numeric($id)|| $id<1 || $id>6) {
        return view('peliculas.error', ['titulo' => $id]);
      }



      return view('peliculas.prueba', ['titulo' => $this->peliculas[$id]]);
    }

    public function buscarPeliculasXnombre($nombre){


      


      return view('peliculas.buscar', ['titulo' => $this->peliculas[$id]]);
    }


}
