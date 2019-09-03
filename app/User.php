<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employee_id', 'employee_img', 'gender', 'firstname', 'middle_name', 'lastname', 'department_id', 'status_id', 'address', 'city', 'province', 'country', 'zip_code', 'home_number', 'mobile_number', 'work_email', 'personal_email', 'birthday', 'SIN_SSN', 'emergency_name', 'relationship', 'emergency_address', 'emergency_number', 'job_id', 'job_description', 'job_level_id', 'job_position_id', 'date_hired', 'date_terminated', 'SSS_no', 'philhealth_no', 'pagibig_no', 'TIN_no', 'NBI_no', 'diploma', 'medical', 'TOR', 'birth_cert', 'brgy_clearance', 'cedula', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
       {
           return $this
               ->belongsToMany('App\Role')
               ->withTimestamps();
       }


       public function authorizeRoles($roles)
       {
         if ($this->hasAnyRole($roles)) {
           return true;
         }
         abort(401, 'This action is unauthorized.');
       }
       public function hasAnyRole($roles)
       {
         if (is_array($roles)) {
           foreach ($roles as $role) {
             if ($this->hasRole($role)) {
               return true;
             }
           }
         } else {
           if ($this->hasRole($roles)) {
             return true;
           }
         }
         return false;
       }
       public function hasRole($role)
       {
         if ($this->roles()->where('name', $role)->first()) {
           return true;
         }
         return false;
       }

       public function timeSheets(){
          return $this->as('App\TimeSheet', 'employee_id');
       }
}
