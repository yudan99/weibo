<!-- <!DOCTYPE html>
<html>
<head>
  <title>Weibo App</title>
</head>
<body>
  <h1>主页</h1>
</body>
</html>
 -->

@extends('layouts.default')
@section('title','首页')
@section('content')
  <div class="jumbotron">
    <h1>Hello</h1>

    <p class="lead">
      欢迎来到<a href="#">凑学</a>
    </p>

    <p>
      一切从这里开始……
    </p>

    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">马上注册</a>
    </p>

  </div>
@stop
