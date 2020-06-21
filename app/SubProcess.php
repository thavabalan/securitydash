<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubProcess extends Model
{
    public function process()
{
    return $this->belongsTo('App\Process','p_id');
}

public function updates()
    {
        return $this->hasMany('App\Update','s_id');
    }

    public function events()
    {
        return $this->hasMany('App\Event','s_id');
    }


}
