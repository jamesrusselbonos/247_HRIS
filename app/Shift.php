<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $fillable = [
         'id', 'name', 'shift_start', 'shift_end', 'break_start', 'break_end', 
     ];
}
