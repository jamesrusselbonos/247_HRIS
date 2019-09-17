<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prototype_Employee extends Model
{
    protected $fillable = [
        'employee_id', 'employee_img', 'gender', 'firstname', 'middle_name', 'lastname', 'department_id', 'status_id', 'address', 'city', 'province', 'country', 'zip_code', 'home_number', 'mobile_number', 'work_email', 'personal_email', 'birthday', 'SIN_SSN', 'emergency_name', 'relationship', 'emergency_address', 'emergency_number', 'job_id', 'job_description', 'job_level_id', 'job_position_id', 'date_hired', 'date_terminated', 'SSS_no', 'philhealth_no', 'pagibig_no', 'TIN_no', 'NBI_no', 'diploma', 'medical', 'TOR', 'birth_cert', 'brgy_clearance', 'cedula',
    ];

    public function user(){
    	return $this->belongsTo('App\User','employee_id','employee_id');
    }


    public function timesheet()
       {
           return $this->hasMany('App\Timesheet', 'employee_id', 'employee_id');
       }     

       public function schedule()
       {
           return $this->hasMany('App\schedule', 'employee_id', 'employee_id');
       } 
}
