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

    public function cm($id)
    {
        $matiere=Matiere::where('poste_id','=',$this->attributes['id'])->where('opp_id','=',$id)->get();
        $s=0;
        foreach($matiere as $m)
            $s+=($m->qte)*($m->article->standarPrice);
        return $s;
    }
    public function ch($id)
    {
       $times=Time::where('poste_id', '=', $this->attributes['id'])->where('opp_id', '=', $id)->get();
        $s=0;
        foreach($times as $t)
            $s+=($t->qte)*($t->vh);
        return $s;
    }
    
}
