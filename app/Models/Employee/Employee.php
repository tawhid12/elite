<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Settings\Location\District;
use App\Models\Settings\Location\Upazila;

class Employee extends Model
{
    use HasFactory;
    public function bn_district(){
        return $this->belongsTo(District::class,'bn_pre_district_id','id');
    }
    public function bn_upazilla(){
        return $this->belongsTo(Upazila::class,'bn_pre_upazila_id','id');
    }
    public function bn_parm_district(){
        return $this->belongsTo(District::class,'bn_parm_district_id','id');
    }
    public function bn_parm_upazilla(){
        return $this->belongsTo(Upazila::class,'bn_parm_upazila_id','id');
    }
}
