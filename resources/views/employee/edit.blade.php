@extends('layouts.default')

@section('title','編集')

@section('content')
<h1>編集</h1>
<div class="employee-container">
  <form method="post" action="{{ url('/employee',$employee->id) }}">
    @csrf
    {{ method_field('patch') }}
    <p>
      <input type="text" name="name" placeholder="名前" value="{{ old('name',$employee->name) }}">
      @if ($errors->has('name'))
        <p>{{ $errors->first('name') }}</p>
      @endif
    </p>
    <p>
    <input type="text" name="sex" placeholder="性別" value="{{ old('sex',$employee->sex) }}">
      @if ($errors->has('sex'))
        <p>{{ $errors->first('sex') }}</p>
      @endif
    </p>
    <p>
      <input type="submit" value="update">
    </p>
  </form>
  <form method="post" action="{{ url('/employee',$employee->id) }}">
    @csrf
    @method('delete')
    <input type="submit" value="削除">
  </form>

</div>
@endsection