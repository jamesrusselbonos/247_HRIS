<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeSheet extends Model
{
   	protected $table = 'timesheets';
   	protected $primaryKey = 'id';
    protected $fillable = [

           'employee_id', 'date', 'date_from', 'date_to',
       ];
    protected $dates = ['created_at', 'updated_at', 'date_from','date_to', 'date'];


       public function user(){

       	return $this->belongsTo('App\User');
       }
}
