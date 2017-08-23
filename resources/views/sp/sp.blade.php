@extends('layouts.app')

@section('title')
 Suivi de production
@endsection


@section('meta')
       <link href="{{ asset('css/bootstrap-toggle.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<br>

<div class="row" style="white-space:nowrap">
     <div class="col-md-2 col-xs-2" ></div>
     <h2 align="center"><strong>Suivi de production pour {{ $opp->name }}:</strong></h2>
     <br>
</div>
<br>

<div class="container ">

<table class="table table-striped table-hover ">
  
    <tr>
      <th class="text-center">Ordre de fabrication :</th><td class="text-center">{{ $opp->ref }}</td>
      <th class="text-center"><strong>Produit finie :</th><td class="text-center"> @if($opp->article)
                   {{$opp->article->name}}
                 @endif</td>
      <th class="text-center"><strong>Quantité :</th><td class="text-center">{{ $opp->qte }}</td>
      <th class="text-center"><strong>Date :</th><td class="text-center">{{ $opp->dateOp }}</td>
    </tr>

 
  
</table>
</div>


<br>

<!-- <div class="row">
       <div class="col-md-5 col-xs-5"></div>
       <div class="col-md-4 col-xs-4"></div>
       <button id="add" class="btn btn-success col-md-2 col-xs-2"><span class="glyphicon glyphicon-plus"></span> ajouter</button>
      <div class="col-md-1 col-xs-1"></div>
       <a href="#" class="btn btn-primary col-md-2 col-xs-2">Matiére consommable</a>
      <label class="col-md-1"></label>
      <a  href="#" class="btn btn-primary col-md-2 col-xs-2" >nombre d'heure</a>
<div class="col-md-1 col-xs-1"></div>
</div> -->

<br>
<br>



<!-- @if(!empty($times)) -->
@include('partials.tache')

@endsection
<!-- @include('partials.matiere') -->

<!-- @endif

@if(!empty($matieres))
@include('partials.matiere')
@endif
 -->