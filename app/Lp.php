<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lp extends Model
{
    protected $table="lps";


    public function article()
    {
        return $this->belongsTo('App\Article','article_id');
    }

    public function opp()
    {
        return $this->belongsTo('App\Opp','opp_id');
    }

    public function operator()
    {
        return $this->belongsTo('App\Operator','opp_id');
    }
}
