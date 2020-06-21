<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    public function companies()
{
    return $this->belongsToMany('App\Company','company_requirement', 
    'r_id', 'c_id')->withPivot('status','tool_used','level_of_maturity','linux_covered','windows_covered','clients_covered','servers_covered','terminal_c_drive_covered','pti','response_time_c','response_time_i','performance_issue','mean_time_to_response_c','mean_time_to_response_i','cost','contract_expiry_date','license_required','hyperlink_documentation','comments');

}

public function departments()
{
    return $this->belongsToMany('App\Department','department_requirement', 
    'r_id', 'd_id');
}
public function category()
{
    return $this->belongsTo('App\Category','c_id');
}
public function dependency()
    {
        return $this->belongsToMany('App\Requirement','dependencies','r_id','depend_id');
    }
public function requirement()
{
    return $this->belongsTo('App\Requirement');
}

public function concepts()

{
    return $this->belongsToMany('App\Concept','concept_requirements','r_id','c_id');
}
public function governance()
{
    return $this->belongsToMany('App\Governance','governances_requirements','r_id','g_id');
}
public function itils()
{
    return $this->belongsToMany('App\Itil','itils_requirement','r_id','i_id');
}

public function subrequirement()
{
    return $this->hasMany('App\SubRequirement','req_id');
}
}
