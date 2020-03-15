<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = ['name','sex'];

    public function timecards()                                                                                                                
    {                                                                                                                                          
        return $this->hasMany('App\Timecard');                                                                                                 
    }
}
