<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>FMJ/@yield('title')</title>

     @yield('meta')
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

     <nav id="header" class="navbar navbar-fixed-top">
            <div id="header-container" class="container navbar-container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="brand" class="navbar-brand" href="/">FMJ TECHNOLOGY</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/articles"><span class=" glyphicon  glyphicon-apple"></span>   Articles</a></li>
                        <li><a href="/operators"><span class=" glyphicon  glyphicon-user"></span>  Operateurs</a></li>
                        <li><a href="/opps"><span class=" glyphicon  glyphicon-fire"></span>  Production</a></li>
                        <li><a href="/postes"><span class=" glyphicon   glyphicon-lock"></span>  Postes</a></li>
                        <li><a href="/params"><span class=" glyphicon   glyphicon-cog"></span>  Configuration</a></li>
                        @yield('nav')
                    </ul>
                </div><!-- /.nav-collapse -->
            </div><!-- /.container -->
        </nav><!-- /.navbar -->
     @if ($errors->any())
         <div class="alert alert-danger">
             <ul>
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
             </ul>
         </div>
     @endif
       <div class="container">
         @yield('content')
         @yield('table')

</div>

    @yield('modalD')
    @yield('modalE')
    <script  src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
    <script  src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script  src="{{ URL::asset('js/jquery.dataTables.min.js') }}"></script>
    <script  src="{{ URL::asset('js/dataTables.bootstrap.min.js') }}"></script>
    <script  src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script  src="{{ URL::asset('js/global.js') }}"></script>
    @yield('js')
</body>
</html>
