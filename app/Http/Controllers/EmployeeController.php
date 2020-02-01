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

    public function show($id){
        $employee = Employee::find($id);
        return view('employee.show',['employee'=>$employee]);
    }

    public function create(){
        return view('employee.create');
    }




}
