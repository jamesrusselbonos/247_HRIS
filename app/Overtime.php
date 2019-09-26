<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Overtime extends Model
{
	protected $table = 'overtimes';
	protected $primaryKey = 'otime_id';
    protected $fillable = [
        'employee_id', 'date', 'duration', 'reason', 'status'
    ];
}
