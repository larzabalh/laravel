<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  protected $table = 'movies';
  protected $fillable = ['id','title','rating','awards','length'];

  // //Este es para los que no quiero guardar, asi me guarda todos menos este campo
  // protected $guarded = ['genre_id']

  public function actors()
  {
  return $this->belongsToMany(Actors::class,'actor_movie','movie_id','actor_id');
  }
}
