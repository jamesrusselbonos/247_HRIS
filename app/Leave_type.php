<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave_type extends Model
{
    protected $fillable = [
        'leave_type', 'description',
    ];

    public function leave(){

    	return $this->hasMany('App\Prototype_Employee');
    }
}
