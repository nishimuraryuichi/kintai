<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimecardController extends Controller
{
    //
    public function in(){
        $timecard = Timecard::create([
            'employee_id'=>'required',
            'in'=>'required'
        ]);
    }
}
