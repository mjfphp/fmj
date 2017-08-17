<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    protected $table = "operators";

    public function setActiveAttribute($value)
{
    $this->attributes['active'] = (int) $value;
}

}
