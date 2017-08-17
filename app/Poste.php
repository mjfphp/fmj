<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    protected $table="postes";

    public function matieres()
    {
        return $this->hasMany('App\Matiere');
    }

    public function operators()
    {
        return $this->hasMany('App\Operator');
    }
}
