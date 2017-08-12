<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>FMJ/@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/bar.css') }}" rel="stylesheet">
    <script  src="{{ URL::asset('js/app.js') }}"></script>
    <script  src="{{ URL::asset('js/bar.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//code.jquery.com/jquery-1.12.3.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <link rel="icon" href="{!! asset('images/pomme.ico') !!}"/>
</head>
<body>

<div class='wrapper'>
  <div class='sidebar'>
    <div class='title'>
      FMJ
    </div>

    <ul class='nav'>
      <li>
        <a href="/" title="principale">Principale</a>
      </li>
      <li>
        <a href="/operateur" title="Operateur">Operateur</a>
      </li>
      <li>
        <a href="/articles" title="Article">Article</a>
      </li>
      <li>
        <a href="/operation" title="Operation">Operation</a>
      </li>
      </ul>
  </div>
  <div class='content isOpen'>
    <a class='button'></a>
       <div class="container">
         @yield('content')
<script  sr="{{ URL::asset('js/jquery-3.1.1.js') }}"></script>

</body>
</html>
