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

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'sex'=>'required'
        ]);
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->sex = $request->sex;
        $employee->save();
        return redirect('/');
    }

    public function edit(Employee $employee){
        return view('employee.edit')->with('employee',$employee);
    }

    public function update(Request $request,Employee $employee){
        $this->validate($request,[
            'name'=>'required',
            'sex'=>'required'
        ]);
        $employee->name = $request->name;
        $employee->sex = $request->sex;
        $employee->save();
        return redirect('/');
    }

    public function destroy(Employee $employee){
        $employee->delete();
        return redirect('/');
    }

}
