@extends('layouts.app')

@section('title')
Articles
@endsection

@section('content')


       <div class="container ">
      <div class="row">
      <div class="col-md-4">
      <h2>   Gestion Des articles :</h2>
      </div>
       <div class="col-md-5"></div>
      <a href="{{route('articles.create')}}" class="btn btn-primary col-md-2"><span class="glyphicon glyphicon-plus"></span>Ajouter un article</a>
      </div>
      </div>


       <div class="container ">
       <div class="table-responsive text-center">
       <table class="table table-bordered table-striped display" id="table" border="0.5px" >
       <br>


       <br>
           <thead>
               <tr>
                   <th class="text-center">Reference</th>
                   <th class="text-center">Nom</th>
                   <th class="text-center">Description</th>
                   <th class="text-center">Prix ($)</th>
                   <th class="text-center">Poids</th>
                   <th class="text-center">Type</th>
                   <th class="text-center">Unité de mesure</th>
                   <th class="text-center">etat</th>
                   <th class="text-center">Actions</th>
               </tr>
           </thead>
     @if($articles)
     @foreach($articles as $item)
     <tr class="item{{$item->id}}">
         <td>{{$item->ref}}</td>
         <td>{{$item->name}}</td>
         <td>{{$item->description}}</td>
         <td>{{$item->standarPrice}}</td>
         <td>{{$item->weightNet}}</td>
         <td>{{$item->typ}}</td>
         <td>{{$item->uomId}}</td>
         <td>{{$item->state}}</td>
         <td><button class="edit-modal btn btn-info" id="{{$item->id}}"  >
                 <span class="glyphicon glyphicon-edit"></span> Modifier
             </button>
             <button class="delete-modal btn btn-danger" id="{{$item->id}}" data-info="/articles/">
                 <span class="glyphicon glyphicon-trash"></span> Effacer
             </button></td>
     </tr>
     @endforeach
     @endif
     </table>
     </div>
     </div>


@endsection

@include('partials.delete')

@section('modalE')
               <div id="editS" class="modal  fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog " style="width:600px;">
                                           <div class="modal-content">
                                               <div class="modal-header">
                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                           <h4 class="modal-title">Modifier</h4>
                                               </div>
                             <div class="modal-body">
                                   <form class="form-horizontal" method="post">
                                          {{ csrf_field()}}
                                   <input name="_method" type="hidden" value="put">



                                    <div class="form-group">
                                         <label class="control-label col-md-3" for="ref"><span style="color:crimson;font-size:32px;">*</span>Reference:</label><br>
                                         <div class="col-sm-5 col-md-4">
                                         <input type="text" class="form-control" id="ref" name="ref" value="{{old('ref')}}">
                                         </div>

                                         <label class="control-label col-md-1" for="name">Nom:</label>
                                         <div class="col-sm-1 col-md-4">
                                         <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                                         </div>
                                     </div>


                                     <div class="form-group">
                                        <label class="control-label col-md-3" for="uomId"><span style="color:crimson;font-size:32px;">*</span>Unité de mesure :</label><br>
                                        <div class="col-sm-5 col-md-4">
                                        <input type="text" class="form-control" id="uomId" name="uomId" value="{{old('uomId')}}">
                                        </div>
                                         <label class="control-label col-md-1" for="standarPrice">Prix($):</label>
                                         <div class="col-sm-1 col-md-4">
                                         <input type="number" step="0.01" class="form-control" id="standarPrice" name="standarPrice" value="{{old('standarPrice')}}">
                                         </div>
                                    </div>
                                    

                                     <div class="form-group">

                                       <label class="control-label col-md-3" for="type"><span style="color:crimson;font-size:32px;">*</span>type :</label><br>
                                       <div class="col-sm-5 col-md-4">
                                        <select class="selectpicker show-menu-arrow form-control"  id="typ" value="{{old('type')}}" name="type" type="text"  placeholder="type" autofocus required>
                                                     <option value="Consomable">Consomable</option>
                                                     <option value="Produit finie">Produit finie</option>
                                       </select>
                                       </div>
                                       <label class="control-label col-md-1" for="weightNet">Poids:</label>
                                         <div class="col-sm-1 col-md-4">
                                         <input type="number" step="0.01" class="form-control" id="weightNet" name="weightNet" value="{{old('weightNet')}}">
                                         </div>

                                     </div>


                                      <div class="form-group">
                                         <label class="control-label col-md-3" for="state">etat :</label>
                                         <div class="col-sm-5 col-md-4">
                                         <input type="text" class="form-control" id="state" name="state" value="{{old('state')}}">
                                         </div>

                                         <label class="control-label col-md-1" for="description">Description:</label>
                                      <div class="col-sm-1 col-md-4">
                                      <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}">
                                      </div>
                                     </div>


                                 


                                      <div class="modal-footer">
                                                 <button type="submit" class="btn btn-success"> <span class="glyphicon glyphicon-check"></span> Modifier</button>
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
