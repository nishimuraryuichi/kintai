@extends('layouts.default')

@section('title','登録')

@section('content')
<h1>登録</h1>
<div class="employee-container">
  <form method="post" action="{{ url('/employee') }}">
    @csrf
    <p>
      <input type="text" name="name" placeholder="名前" value="{{ old('name') }}">
      @if ($errors->has('name'))
        <p>{{ $errors->first('name') }}</p>
      @endif
    </p>
    <p>
    <input type="text" name="sex" placeholder="性別" value="{{ old('sex') }}">
      @if ($errors->has('sex'))
        <p>{{ $errors->first('sex') }}</p>
      @endif
    </p>
    <p>
      <input type="submit" value="add">
    </p>
  </form>

</div>
@endsection