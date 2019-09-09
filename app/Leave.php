<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    protected $fillable = [
        'firstname', 'middle_name', 'lastname', 'emp_id', 'date', 'leave_id', 'date_from', 'date_to', 'reason',
    ];
}
