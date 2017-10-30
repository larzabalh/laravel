<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Episode;
use App\Http\Requests\FormularioRequest;

class EpisodeController extends Controller
{
  public function Directory(Request $request){

    var_dump ($request);
    die;
    $episodes = Episode::all();
      return view('peliculas.episodes', ['episodes' => $episodes]);
    }

    public function formulario(){
        return view('peliculas.formulario');
      }

    public function crear(FormularioRequest $request){
      //La validacion la estoy haciendo en FORMULARIO REQUEST, si llego hasta aca esta todo ok.

      //Esto lo puedo usar si todos los campos del formulario son iguales a los campos de la base de datos!!!
      //Episode::create($request->all());

      //Si no coincide, le tengo que pasar todos los campos y asociarlos.

        $guardar = Episode::create ([
          'title'=>$request->input('titulo')
        ]);

        return view('peliculas.formulariook', ['request' => $request]);


        }



}
