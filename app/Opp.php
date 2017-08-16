<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Opp extends Model
{
    protected $tables="opps";

    public function lps()
    {
        return $this->hasMany('App\Lp');
    }
}
