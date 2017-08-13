@extends('layouts.app')

@section('title')
Articles
@endsection

@section('content')

      <div class="row">
       <div class="col-md-4">
      <h1>Gestion Des articles :</h1>
       </div>
       <div class="col-md-5"></div>
      <a href="{{route('articles.create')}}" class="btn btn-primary col-md-2"><span class="glyphicon glyphicon-plus"></span> Add an article</a>

      </div>


       <div class="container ">
       <div class="table-responsive text-center">
       <table class="table table-bordered table-striped display" id="table" border="0.5px">
       <br>
       <br>
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
         <td>{{$item->ref}}</td>
         <td>{{$item->name}}</td>
         <td>{{$item->description}}</td>
         <td>{{$item->standarPrice}}</td>
         <td>{{$item->weightNet}}</td>
         <td>{{$item->typ}}</td>
         <td>{{$item->uomId}}</td>
         <td>{{$item->state}}</td>
         <td><button class="edit-modal btn btn-info" >
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

@section('modalE')
               <div id="editA" class="modal  fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog " style="width:500px;">
                                           <div class="modal-content">
                                               <div class="modal-header">
                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                           <h4 class="modal-title">Edit</h4>
                                               </div>
                             <div class="modal-body">
                                   <form class="form-horizontal" method="post">
                                          {{ csrf_field()}}
                                   <input name="_method" type="hidden" value="put">

                                   <div class="form-group">
                                   	  <label class="control-label col-md-2" for="id">ID :</label>
                                   	    <div class="col-sm-10 col-md-8">
                                   		<input type="text" class="form-control" id="id" disabled>
                                   		</div>
                                   </div>

                                    <div class="form-group">
                                         <label class="control-label col-md-2" for="ref">Reference :</label>
                                         <div class="col-sm-10 col-md-8">
                                         <input type="text" class="form-control" id="ref" name="ref" value="{{old('ref')}}">
                                         </div>
                                     </div>

                                     <div class="form-group">
                                         <label class="control-label col-md-2" for="name">Name :</label>
                                         <div class="col-sm-10 col-md-8">
                                         <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                                         </div>
                                     </div>

                                     <div class="form-group">
                                         <label class="control-label col-md-2" for="description">Description :</label>
                                         <div class="col-sm-10 col-md-8">
                                         <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}">
                                         </div>
                                     </div>

                                     <div class="form-group">
                                         <label class="control-label col-md-2" for="standarPrice">Standar Price ($):</label>
                                         <div class="col-sm-10 col-md-8">
                                         <input type="number" class="form-control" id="standarPrice" name="standarPrice" value="{{old('standarPrice')}}">
                                         </div>
                                     </div>

                                      <div class="form-group">
                                         <label class="control-label col-md-2" for="weightNet">WeightNet :</label>
                                         <div class="col-sm-10 col-md-8">
                                         <input type="number" class="form-control" id="weightNet" name="weightNet" value="{{old('weightNet')}}">
                                         </div>
                                     </div>

                                     <div class="form-group">
                                         <label class="control-label col-md-2" for="type">type :</label>
                                         <div class="col-sm-10 col-md-8">
                                         <input type="text" class="form-control" id="typ" name="type" value="{{old('type')}}">
                                         </div>
                                     </div>

                                      <div class="form-group">
                                         <label class="control-label col-md-2" for="uomId">uom ID :</label>
                                         <div class="col-sm-10 col-md-8">
                                         <input type="text" class="form-control" id="uomId" name="uomId" value="{{old('uomId')}}">
                                         </div>
                                     </div>

                                      <div class="form-group">
                                         <label class="control-label col-md-2" for="state">State :</label>
                                         <div class="col-sm-10 col-md-8">
                                         <input type="text" class="form-control" id="state" name="state" value="{{old('state')}}">
                                         </div>
                                     </div>

                                      <div class="modal-footer">
                                                 <button type="submit" class="btn btn-success"> <span class="glyphicon glyphicon-check"></span> Edit</button>
                                                 <button type="button" class="btn btn-warning" data-dismiss="modal">
                                                   <span class='glyphicon glyphicon-remove'></span> Annuler
                                                 </button>
                                      </div>
                             </form>
                                        </div>
                                        </div>
                                        </div>



@endsection

@section('js')
   <script  src="{{ URL::asset('js/article.js')}}"> </script>
@endsection





