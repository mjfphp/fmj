@extends('layouts.app')

@section('title')
FMJ
@endsection

@section('content')

      <div class="row">
       <div class="col-md-4">
      <h1>Gestion Des articles :</h1>
       </div>
       <div class="col-md-5"></div>
      <a href="{{route('articles.create')}}" class="btn btn-primary col-md-2"><span class="glyphicon glyphicon-plus"> Ajouter un article</span></a>

      </div>
       <br>
       <br>
       <div class="container ">
       <div class="table-responsive text-center">
       <table class="table table-borderless" id="table">
           <thead>
               <tr>
                   <th class="text-center">#</th>
                   <th class="text-center">Reference</th>
                   <th class="text-center">Name</th>
                   <th class="text-center">Description</th>
                   <th class="text-center">Standard Price ($)</th>
                   <th class="text-center">Weight Net</th>
                   <th class="text-center">Type</th>
                   <th class="text-center">Uom Id</th>
                   <th class="text-center">State</th>
                   <th class="text-center">Actions</th>
               </tr>
           </thead>
     @foreach($articles as $item)
     <tr class="item{{$item->id}}">
         <td>{{$item->id}}</td>
         <td>{{$item->name}}</td>
         <td>{{$item->ref}}</td>
         <td>{{$item->description}}</td>
         <td>{{$item->standarPrice}}</td>
         <td>{{$item->weightNet}}</td>
         <td>{{$item->typ}}</td>
         <td>{{$item->uomId}}</td>
         <td>{{$item->state}}</td>
         <td><button class="edit-modal btn btn-info"
                 data-info="{{$item->id}},{{$item->ref}},{{$item->description}},{{$item->standarPrice}},{{$item->weightNet}},{{$item->typ}},{{$item->uomId}},{{$item->state}}">
                 <span class="glyphicon glyphicon-edit"></span> Edit
             </button>
             <button class="delete-modal btn btn-danger"
                 data-info="{{$item->id}},{{$item->ref}},{{$item->description}},{{$item->standarPrice}},{{$item->weightNet}},{{$item->typ}},{{$item->uomId}},{{$item->state}}">
                 <span class="glyphicon glyphicon-trash"></span> Delete
             </button></td>
     </tr>
     @endforeach
     </table>
     </div>
     </div>
     <script  src="{{ URL::asset('js/editArticle.js') }}"></script>
@endsection
