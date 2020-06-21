<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itil extends Model
{
    public function requirements()
    {
        return $this->belongsToMany('App\Requirement','itils_requirement','i_id','r_id');
    }
}
