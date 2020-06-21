<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Governance extends Model
{
    public function requirements()
    {
        return $this->belongsToMany('App\Requirement','governances_requirements','g_id','r_id');
    }
}
