<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timecard;


class TimecardController extends Controller
{
    //
    public function in($in){

        // $timecards = Timecard::find($in);
        $timecards = Timecard::orderBy('in','desc')->get();
        dd($timecards);

        return redirect('/');
    }
}
