@extends('layouts.app')

@section('title')
 Suivi de production
@endsection



@section('meta')
       <link href="{{ asset('css/bootstrap-toggle.min.css') }}" rel="stylesheet">
@endsection

@section('content')


       <h2 align="center"><strong>Suivi de production:</strong></h2>



<div class="container">

  <h4><u><strong>Ordre de fabrication :</strong></u>&nbsp;{{ $opp->ref }}&nbsp;&nbsp;&nbsp;&nbsp;<strong><u>Date d'operation:</u></strong>&nbsp;{{ $opp->dateOp }}
&nbsp;&nbsp;&nbsp;&nbsp;<strong><u>Produit finie :</u></strong>&nbsp; 
    @if($opp->article)
                   {{$opp->article->name}}
                 @endif

&nbsp;&nbsp;&nbsp;&nbsp;<strong><u>Quantité :</u></strong>&nbsp;{{ $opp->qte }}
</h4>
<br>

</div>


<div class="row">
        @if(!isset($posts))
           <button id="add" class="btn btn-lg btn-success col-md-2 col-xs-2"><span class="glyphicon glyphicon-plus"></span> ajouter</button>
        @endif
                 <div class="col-md-1 col-xs-1"></div>
      <a href="/matieres/{{$opp->id}}" class="@if(isset($operators) || isset($posts))  btn btn-lg btn-primary    @else btn  btn-lg btn-secondary  active @endif col-md-1 col-xs-1 " role="button" aria-pressed="true">Matiére</a>
      &nbsp;&nbsp;<a href="/times/{{$opp->id}}" class="@if(isset($articles) || isset($posts))  btn btn-lg btn-primary   @else btn btn-lg btn-secondary  active @endif col-md-1 col-xs-1" role="button" aria-pressed="true">Temps</a>
      <a href="/cout/{{$opp->id}}" class="@if(!isset($posts))  btn btn-lg btn-primary  active @else btn  btn-lg btn-secondary  active @endif col-md-1 col-xs-1" role="button" aria-pressed="true">Coùt</a>
      @if(isset($posts))
       <div class="col-md-1 col-xs-1"></div>
        <h2 class="col-md-2 col-xs-2">Details : </h2>
      @endif
</div>
     
      






@yield('partials')

@endsection


