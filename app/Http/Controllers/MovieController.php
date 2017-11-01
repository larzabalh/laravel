<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Http\Requests\FormularioRequest;

class MovieController extends Controller
{
  public function Directory(){

    $peliculas = Movie::all();
      return view('peliculas.peliculas', ['peliculas' => $peliculas]);
    }

  public function formulario(){
      return view('peliculas.formulario');
  }

  public function crear(FormularioRequest $request){
    //La validacion la estoy haciendo en FORMULARIO REQUEST, si llego hasta aca esta todo ok.

    //Esto lo puedo usar si todos los campos del formulario son iguales a los campos de la base de datos!!!
    //Episode::create($request->all());

    //Si no coincide, le tengo que pasar todos los campos y asociarlos.

  $guardar = Movie::create([
    'title' => $request->input('title'),
    'rating'=> $request->input('rating'),
    'awards'=> $request->input('awards'),
    'length'=> $request->input('length'),
    'release_date' => $request->input('anio').'-'.$request->input('mes').'-'.$request->input('dia')
  ]);

      return redirect('peliculas');
    }


    public function editarformulario($id){
      $pelicula = Movie::find($id);
      return view('peliculas.peliculaedit')->with('pelicula', $pelicula);
    }
}
