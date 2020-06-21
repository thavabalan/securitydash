<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function subprocess()
{
    return $this->belongsTo('App\SubProcess','s_id');
}
}
