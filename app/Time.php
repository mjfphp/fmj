<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $table="times";

    public function opp()
    {
        return $this->belongsTo('App\Opp','opp_id');
    }

    public  function operator()
    {
        return $this->belongsTo('App\Operator','operator_id');
    }

    public  function poste()
    {
        return $this->belongsTo('App\Poste','poste_id');
    }
}
