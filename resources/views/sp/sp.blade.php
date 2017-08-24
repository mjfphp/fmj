@extends('layouts.app')

@section('title')
 Suivi de production
@endsection



@section('meta')
       <link href="{{ asset('css/bootstrap-toggle.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<br>

<div class="row">
       <div class="col-md-5 col-xs-5"></div>
       <div class="col-md-4 col-xs-4"></div>
       <button id="add" class="btn btn-success col-md-2 col-xs-2"><span class="glyphicon glyphicon-plus"></span> ajouter</button>
       <div class="col-md-1 col-xs-1" ></div>
       </div>
       <h2 align="center"><strong>Suivi de production:</strong></h2> 

<!-- <div class="row" style="white-space:nowrap">
      
</div>
 -->
<br>
<div class="container">

  <h4><u><strong>Ordre de fabrication :</strong></u>&nbsp;{{ $opp->ref }}&nbsp;&nbsp;&nbsp;&nbsp;<strong><u>Date d'operation:</u></strong>&nbsp;{{ $opp->dateOp }}
&nbsp;&nbsp;&nbsp;&nbsp;<strong><u>Produit finie :</u></strong>&nbsp; 
    @if($opp->article)
                   {{$opp->article->name}}
                 @endif

&nbsp;&nbsp;&nbsp;&nbsp;<strong><u>Quantité :</u></strong>&nbsp;{{ $opp->qte }}









  </h4>


</div>
<br>
<div class="row">
  <div class="col-md-1 col-xs-1" ></div>
      <a href="/matieres/{{$opp->id}}" class="@if(isset($articles))  btn btn-primary btn-lg active @else btn btn-secondary btn-lg active @endif " role="button" aria-pressed="true">Matiére</a>
      <div class="col-md-1 col-xs-1"></div>
      <a href="/times/{{$opp->id}}" class="@if(!isset($articles))  btn btn-primary btn-lg active @else btn btn-secondary btn-lg active @endif" role="button" aria-pressed="true">Temps</a>

     <br>
</div>
     
      
<br>
<br>





@yield('partials')

@endsection


