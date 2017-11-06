<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Http\Requests\FormularioRequest;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
  public function Directory(){

    $peliculas = Movie::paginate(5);
      return view('peliculas.peliculas', ['peliculas' => $peliculas, 'user'=>Auth::user()]);
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

    public function update(FormularioRequest $request,$id){
      //La validacion la estoy haciendo en FORMULARIO REQUEST, si llego hasta aca esta todo ok.

      //Esto lo puedo usar si todos los campos del formulario son iguales a los campos de la base de datos!!!
      //Episode::create($request->all());

      //Si no coincide, le tengo que pasar todos los campos y asociarlos.

    $guardar = Movie::find($id);

    $guardar-> title = $request->input('title');
    $guardar-> rating = $request->input('rating');
    $guardar-> awards = $request->input('awards');
    $guardar-> length = $request->input('length');

    $guardar->save();


        return redirect('peliculas');
      }

      public function paginaborrar($id){
      $pelicula = Movie::find($id);




          return view('peliculas.borrar')->with ('pelicula',$pelicula);
        }
        public function delete($id){
        $guardar = Movie::find($id);

        $guardar->delete();


            return redirect('peliculas');
          }

}
