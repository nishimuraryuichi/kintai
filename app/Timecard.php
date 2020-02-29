<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timecard extends Model
{
    //
    protected $fillable = ['employee_id','in','out'];
}
