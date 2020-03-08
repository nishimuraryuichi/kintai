@extends('layouts.default')

@section('title','勤怠管理システム')

@section('content')
<h1>勤怠管理システム</h1>
<div class="register">
  <a href="{{ url('/employee/create') }}">登録</a>
</div>
<div class="employee-container">
  <div class="employee">
    @foreach ($employees as $employee)
    <a href="{{ action('EmployeeController@show',$employee->id) }}" class="employee-name">{{ $employee->name }}</a>
    @endforeach
  </div>






</div>
@endsection