@extends('layouts.default')

@section('title','勤怠管理システム')

@section('content')
<h1>{{ $employee->name }}</h1>
      <div class="register">
        <a href="/">出勤</a>
        <a href="/">退勤</a>
      </div>
      <div class="fix">
        <a href="{{ action('EmployeeController@edit',$employee) }}">編集</a>
      </div>
@endsection
