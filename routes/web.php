<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::post('/peliculas/formulario', 'EpisodeController@crear');

Route::get('/peliculas/formulario', 'EpisodeController@formulario');

Route::get('/peliculas/episodes', 'EpisodeController@Directory');

Route::get('/peliculas/actores', 'ActorController@Directory');

Route::get('/peliculas/prueba', 'PeliculasController@prueba');

Route::get('/peliculas/prueba/{id}', 'PeliculasController@buscarPeliculas');

Route::get('/peliculas/buscar/{nombre}', 'PeliculasController@buscarPeliculasXnombre');


Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return 'Hola!';
});

Route::get('/miprimerruta/registro', function () {
    return 'primer ruta';
});

Route::get('/resultado/{numero}', function ($numero) {
    if ($numero %2 ==0){
      $resultado = "la pagina es par";
    }else {
      $resultado = "la pagina es impar";
    };
    return $resultado;
});

Route::get('/suma/{numero}/{numero2}', function ($numero,$numero2) {
    return $numero + $numero2;
});


Route::get('/ejercicio3/{numero}/{numero2?}', function ($numero,$numero2=null) {
    if ($numero2 ==null){
        if ($numero %2 ==0){
          $resultado = "la pagina es par";
        }else {
          $resultado = "la pagina es impar";
        };
    }else {
        $resultado = $numero * $numero2;
          };
    return $resultado;
});


Route::get('/ejercicio4/{nombre?}', function ($nombre=null) {

    if ($nombre !==null){
      return 'Hola '.$nombre;
    };
    return 'Hola persona desconocida';
});

Route::get('/potencia/{numero}/{numero2?}', function ($numero,$numero2=null) {
    if ($numero2 ==null){
        $resultado = $numero * $numero;
    }else {
        $resultado = $numero ** $numero2;
          };
    return $resultado;
});

Route::get('/hernan', function () {
    return view('hernan');
});

Route::get('/hernan2', 'PeliculasController@hernan2');
