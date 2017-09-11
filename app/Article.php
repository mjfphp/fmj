<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected  $table="articles";

    public function matieres()
    {
        return $this->hasMany('App\Matiere');
    }

    public function opps()
    {
        return $this->hasMany('App\Opp');
    }


}
