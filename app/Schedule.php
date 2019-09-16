<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
   protected $fillable = [
        'employee_id', 'date_from', 'date_to', 'task', 'comment', 'duration', 'other', 
    ];
    
    protected $dates = ['created_at', 'updated_at', 'date_from','date_to'];
}
