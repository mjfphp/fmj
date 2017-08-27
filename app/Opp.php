<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Opp extends Model
{
    protected $tables="opps";

    public function times()
    {
        return $this->hasMany('App\Time');
    }

    public function matieres()
    {
        return $this->hasMany('App\Matiere');
    }

    public function article()
    {
        return $this->belongsTo('App\Article','article_id');
    }

    public function conf()
    {
        return $this->belongsTo('App\param','param_id');
    }

}
