<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>FMJ/@yield('title')</title>


    <script  src="{{ URL::asset('js/app.js') }}"></script>
    <script  src="{{ URL::asset('js/bar.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bar.css') }}" rel="stylesheet">


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
  <div class='content '>
    <a class='button'></a>
       <div class="container">
         @yield('content')


</div>
</div>
</div>
    @yield('modalD')
    @yield('modalE')
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
         <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
          <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @yield('js')
</body>
</html>
