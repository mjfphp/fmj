<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link  href="{{ asset('css/app.css') }}"   rel="stylesheet">

               <title>@section('title') Forget @show</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
     </head>

     <body>
           @yield('content')
     </body>




    <script src="{{ URL::asset('js/app.js') }}"></script>
</html>