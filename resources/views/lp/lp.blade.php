@extends('layouts.app')

@section('title')
Lignes de production de {{$opp->produitF}}
@endsection

@section('content')

   <div class="row">
          <div class="col-md-4">
         <h2>Gestion Des operateurs :</h2>
          </div>
          <div class="col-md-5"></div>
         <a href="{{route('operators.create')}}" class="btn btn-primary col-md-2"><span class="glyphicon glyphicon-plus"></span>   Ajouter un operateur</a>

   </div>

    <div class="container ">
         <div class="table-responsive text-center">
         <table class="table table-bordered table-striped display" id="table" border="0.5px">
         <br>
         <br>
          <thead>
             <tr>
                <th class="text-center">#</th>
                <th class="text-center">Article</th>
                <th class="text-center">Operateur</th>
                <th class="text-center">Quantité</th>
                <th class="text-center">Prix</th>
                <th class="text-center">Montant</th>
                <th class="text-center">temps</th>
             </tr>
         </thead>
           @if($opp)
          @foreach($opp-> as $item)

              <tr class="item{{$item->id}}">
                          <td>{{$item->id}}</td>
                           <td>{{$item->}}</td>
                           <td>{{$item->name}}</td>
                           <td>{{$item->cin}}</td>
                           <td>{{$item->n_phone}}</td>
                           <td>{{$item->n_pass}}</td>
                           <td>{{$item->birthDate}}</td>
                           <td>{{$item->ville}}</td>
                           <td>{{$item->debutC}}</td>
                           <td>{{$item->finC}}</td>
                           <td>{{$item->examMedical}}</td>
                           <td>{{$item->poste}}</td>
                           <td>{{$item->active}}</td>

                  <td><button class="edit-modal btn btn-info" >
                          <span class="glyphicon glyphicon-edit"></span> Modifier
                      </button>
                      <button class="delete-modal btn btn-danger">
                          <span class="glyphicon glyphicon-trash"></span> Effacer
                      </button></td>
              </tr>
              @endforeach
              @endif