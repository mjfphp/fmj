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
       <table class="table table-bordered table-striped" id="table" border="0.5px">
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
         <td><button class="edit-modal btn btn-info">
                 <span class="glyphicon glyphicon-edit"></span> Edit
             </button>
             <button class="delete-modal btn btn-danger">
                 <span class="glyphicon glyphicon-trash"></span> Delete
             </button></td>
     </tr>
     @endforeach
     </table>
     </div>
     </div>
     <script src="https://code.jquery.com/jquery-1.12.3.js"></script>
         <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
         <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
         <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     <script  src="{{ URL::asset('js/editArticle.js') }}"></script>

@endsection

@section('modalD')
                    <div id="deleteA" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-dialog">
                                     <div class="modal-content">
                                         <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                     <h4 class="modal-title">Confirmation</h4>
                                         </div>
                              <div class="modal-body">
                                <form class="pure-form pure-form-stacked" method="post">
                                  {{ csrf_field()}}
                                  <input name="_method" type="hidden" value="DELETE">
                                  <h4>Vous voulez vraiment supprimer cet article ?</h4>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-danger"> <span class="glyphicon glyphicon-trash"></span> Confirmer</button>
                                <button type="button" class="btn btn-warning" data-dismiss="modal">
                                	<span class='glyphicon glyphicon-remove'></span> Annuler
                                </button>
                              </div>
                            </form>
                                </div>
                                </div>
                         </div>
                         </div>
@endsection





