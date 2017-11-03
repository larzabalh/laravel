<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{

   protected $table = 'actors';
   protected $fillable = ['id','first_name','last_name','rating','favorite_movie_id'];

   public function movie()
   {
   return $this->belongsToMany(Movie::class,'actor_movie','actor_id','movie_id');
   }

}
