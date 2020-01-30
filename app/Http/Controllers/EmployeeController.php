<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    //
    public function index(){
        $employees = Employee::orderBy('created_at','desc')->get();
        // dd($employees->toArray());
        return view('employee.index',['employees'=>$employees]);
    }
}
