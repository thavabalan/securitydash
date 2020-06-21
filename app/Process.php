<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    public function subprocesses()
    {
        return $this->hasMany('App\SubProcess','p_id');
    }

    public function department()
    {
    return $this->belongsTo('App\Department','d_id');
    }
}
