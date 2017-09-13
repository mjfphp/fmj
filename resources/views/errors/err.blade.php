
@extends('layouts.app')

@section('title')
    ERROR
@stop



@section('style')
    <link rel="stylesheet" href="/css/erreur.css">
@stop

@section('content')
    <div class="row">

        <center><strong><h1>  {{$e->err}} </h1><br></strong></center>
    </div>
    <div class="erreur-cont">
        <div class="flex-cont">
            <h2>{{$e->msg}}</h2>

            <p>{{$e->descp}}</p>
        </div>
    </div>
@stop