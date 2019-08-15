<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = [
        'job_level', 'description',
    ];
}
