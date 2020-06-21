<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concept extends Model
{
    public function requirements()
    {
        return $this->belongsToMany('App\Requirement','concept_requirements','c_id','r_id');
    }
}
