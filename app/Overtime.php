<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Overtime extends Model
{
    protected $fillable = [
        'employee_id', 'date', 'duration', 'reason', 'status'
    ];
}
