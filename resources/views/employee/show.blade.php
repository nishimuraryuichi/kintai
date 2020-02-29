@extends('layouts.default')

@section('title','勤怠管理システム')

@section('content')
<h1>{{ $employee->name }}</h1>
      <div class="register">
        <form method="post" action="{{ route('employee/in') }}">
        <?php 
          $now = new DateTime();
          echo $now->format('Y月m月d日 H時i分s秒').PHP_EOL;
        ?>
          @csrf
          @method('POST')
          <button type="submit">出勤</button>
        </form>
        <form method="post" action="{{ route('employee/in') }}">
          @csrf
          @method('POST')
          <button type="submit">退勤</button>
        </form>
      </div>
      <div class="fix">
        <a href="{{ action('EmployeeController@edit',$employee) }}">編集</a>
      </div>
@endsection
