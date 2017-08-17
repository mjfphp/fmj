<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $table="matieres";

    public function opp()
    {
        return $this->belongsTo('App\Opp','opp_id');
    }

    public function article()
    {
        return $this->belongsTo('App\Article','article_id');
    }

    public function poste()
    {
        return $this->belongsTo('App\Poste','poste_id');
    }
}
