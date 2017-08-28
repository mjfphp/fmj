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

    public function sth()
    {
        $postes=Poste::all();
        $s=0;
        foreach($postes as $p)
            $s+=$p->taux*$p->ch($this->attributes['id']);
        $s*=(1+$this->conf->dh/100);
        return $s;
    }

    public  function stm()
    {
        $postes=Poste::all();
        $s=0;
        foreach($postes as $p)
            $s+=$p->cm($this->attributes['id']);
        $s*=(1+$this->conf->dm/100);
        return $s;
    }

    public function Total()
    {
        return $this->stm()+$this->sth();
    }

    public function stu()
    {
        return $this->Total()*(1+($this->conf->b+$this->conf->it+$this->conf->ao+$this->conf->tfa+$this->conf->fg)/100);
    }

}
