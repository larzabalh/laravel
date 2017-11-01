<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{

   protected $table = 'actors';
   protected $fillable = ['id','created_at','update_at','first_name','last_name','rating','favorite_movie_id'];


}
