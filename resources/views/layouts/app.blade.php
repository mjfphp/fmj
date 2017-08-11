<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>FMJ/@yield('title')</title>
    <link href="{{ asset('css/bar.css') }}" rel="stylesheet">
    <script  src="{{ URL::asset('js/app.js') }}"></script>
    <script  src="{{ URL::asset('js/bar.js') }}"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

      <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>


       <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    
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
        <a href="/article" title="Article">Article</a>
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
  <script src="{{ URL::asset('js/jquery-3.1.1.js') }}" ></script>
</body>
</html>
