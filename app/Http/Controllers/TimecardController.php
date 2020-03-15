<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timecard;
use App\Employee;

class TimecardController extends Controller
{
    //
    public function in(Employee $employee){

        $timecard = new Timecard();
        $timecard->in = date("Y-m-d H:i:s");
        $timecard->employee_id = $employee->id;
        $timecard->save();
        // $employee->timecards()->save($timecard);

        return redirect('/');
    }
    public function out(Employee $employee){

        $timecard = new Timecard();
        $timecard->out = date("Y-m-d H:i:s");
        // $timecard->employee_id = $employee->id;
        $employee->timecards()->save($timecard);
        $timecard->save();

        dump($timecard);
        exit;

        // dd($employee);


        return redirect('/');
    }
}
