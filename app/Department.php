<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function requirements()
{
    return $this->belongsToMany('App\Department', 'department_requirement', 
      'd_id', 'r_id')->withPivot('confidentially','integrity','availability');
      
}
public function processes()
    {
        return $this->hasMany('App\Process','d_id');
    }
}
