<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  protected $table = 'movies';
  protected $fillable = ['id  ','created_at','update_at','title','rating','release_date','length','genre_id'];

  // //Este es para los que no quiero guardar, asi me guarda todos menos este campo
  // protected $guarded = ['genre_id']
}
