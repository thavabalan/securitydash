<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubRequirement extends Model
{
    public function requirement()
    {
        return $this->belongsTo('App\Requirement','req_id');
    }
}
