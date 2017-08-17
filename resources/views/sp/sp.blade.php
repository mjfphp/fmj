@extends('layouts.app')

@section('title')
 Suivi de production
@endsection


@section('meta')
       <link href="{{ asset('css/bootstrap-toggle.min.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="row" style="white-space:nowrap">
     <div class="col-md-2 col-xs-2" ></div>
     <div class="col-md-6 col-xs-6 pull-left"> <h2><strong>Suivi de production du cheval :</strong></h2></div>
     <div class="col-md-4 col-xs-4 pull-right">
    <input type="checkbox" checked data-toggle="toggle" data-width="200" data-on="Taches" data-off="Matieres" data-onstyle="primary" data-offstyle="danger" class="form-control">
     </div>
     <br>
</div>

<br>

<div class="row">
       <div class="col-md-5 col-xs-5"></div>
       <div class="col-md-4 col-xs-4"></div>
       <button id="add" class="btn btn-success col-md-2 col-xs-2"><span class="glyphicon glyphicon-plus"></span>ajouter une matiere</button>
      <div class="col-md-1 col-xs-1"></div>
</div>



@endsection
@if(isset($matieres))
@include('partials.matiere')
@else
@include('partials.tache')
@endif