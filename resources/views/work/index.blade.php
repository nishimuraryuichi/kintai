<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>勤怠管理システム</title>
    <link rel="stylesheet" href="/css/styles.css">
  </head>
  <body>
    <div class="main-container">
      <h1>勤怠管理システム</h1>
      <div class="register">
        <a href="">登録</a>
      </div>
      <div class="employee-container">
        <div class="employee">
          @foreach ($employees as $employee)
          <a href="" class="employee-name">{{ $employee->name }}</a>
          @endforeach
        </div>
      </div>
    </div>
  </body>
</html>