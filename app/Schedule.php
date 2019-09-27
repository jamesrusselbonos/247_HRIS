<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
   protected $fillable = [
        'employee_id', 'date_from', 'date_to', 'shift_id', 'task', 'comment', 'duration', 'other', 
    ];
    
    // protected $dates = ['created_at', 'updated_at', 'date_from','date_to'];

    public function employee(){

    	return $this->belongsTo('App\Prototype_Employee', 'employee_id' , 'employee_id');
    }
}
