<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    public function requirements()
{
    return $this->belongsToMany('App\Requirement', 'company_requirement', 
      'c_id', 'r_id')->withPivot('status','tool_used','level_of_maturity','linux_covered','windows_covered','clients_covered','servers_covered','terminal_c_drive_covered','pti','response_time_c','response_time_i','performance_issue','mean_time_to_response_c','mean_time_to_response_i','cost','contract_expiry_date','license_required','hyperlink_documentation','comments');
      
    
}
}