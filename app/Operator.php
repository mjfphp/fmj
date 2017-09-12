<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    protected $table = "operators";

   public  function poste(){

       return $this->belongsTo('App\Poste','poste_id');
   }

   public function times()
   {
       return $this->hasMany('App\Time');
   }

}
