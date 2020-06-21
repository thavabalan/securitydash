<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    public function subprocess()
{
    return $this->belongsTo('App\SubProcess','s_id');
}
}
