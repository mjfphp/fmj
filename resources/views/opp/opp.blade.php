@extends('layouts.app')


@section('title')
Operation de production
@endsection

@section('content')

      <div class="row">
       <div class="col-md-4">
      <h2>Gestion de la production :</h2>
       </div>
       <div class="col-md-5"></div>
      <a href="{{route('opps.create')}}" class="btn btn-primary col-md-2"><span class="glyphicon glyphicon-plus"></span>  Ajouter une operation</a>

      </div>


       <div class="container ">
       <div class="table-responsive text-center">
       <table class="table table-bordered table-striped display" id="table" border="0.5px">
       <br>
       <br>
           <thead>
               <tr>

                   <th class="text-center">Référence</th>
                   <th class="text-center">Nom</th>
                   <th class="text-center">Produit finie</th>
                   <th class="text-center">Quantité </th>
                   <th class="text-center">Prix </th>
                   <th class="text-center">Montant</th>
                   <th class="text-center">etat</th>
                   <th class="text-center">Date</th>
                   <th class="text-center">Description</th>
                   <th class="text-center">Actions</th>

                </tr>


           </thead>
     @foreach($opps as $item)
     <tr class="item{{$item->id}}">

          <td>{{$item->ref}}</td>
          <td><a href="{{route('times.show',['id'=>$item->id])}}">{{$item->name}}</a></td>
          <td ><a href="{{route('articles.index',['id'=>$item->id])}}">
                 @if($item->article)
                   {{$item->article->name}}
                 @endif
          </td>
          <td>{{$item->qte}}</td>
         <td>@if($item->article)
                 {{$item->article->standarPrice}}
             @endif</td>
          <td>{{$item->montant}}</td>
          <td>{{$item->etat}}</td>
          <td>{{$item->dateOp}}</td>
          <td>{{$item->description}}</td>
           <td><button class="edit-modal btn btn-info" >
                   <span class="glyphicon glyphicon-edit" id="{{$item->id}}"></span> Modifier
               </button>
               <button class="delete-modal btn btn-danger" id="{{$item->id}}" data-info="/opps/">
                   <span class="glyphicon glyphicon-trash"></span> Effacer
               </button></td>

     </tr>
     @endforeach
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
                                         <label class="control-label col-md-2" for="ref"><span style="color:crimson;font-size:32px;">*</span>Référence :</label><br>
                                         <div class="col-sm-10 col-md-8">
                                         <input type="text" class="form-control" id="ref" name="ref" value="{{old('ref')}}">
                                         </div>
                                     </div>


                                    <div class="form-group">
                                         <label class="control-label col-md-2" for="name"><span style="color:crimson;font-size:32px;">*</span>Nom :</label><br>
                                         <div class="col-sm-10 col-md-8">
                                         <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                                         </div>
                                     </div>



                                    <div class="form-group">
                                       <label class="control-label col-md-2" for="qte"><span style="color:crimson;font-size:32px;">*</span>Quantité :</label><br>
                                       <div class="col-sm-10 col-md-8">
                                       <input type="number" step="0.01" class="form-control" id="qte" name="qte" value="{{old('qte')}}">
                                       </div>
                                   </div>





                                      <div class="form-group">
                                         <label class="control-label col-md-2" for="montant"><span style="color:crimson;font-size:32px;">*</span>Montant :</label><br>
                                         <div class="col-sm-10 col-md-8">
                                         <input type="number"  step ="0.01" class="form-control" id="montant" name="montant" value="{{old('montant')}}">
                                         </div>
                                     </div>


                            


                                      <div class="form-group">
                                         <label class="control-label col-md-2" for="etat"><span style="color:crimson;font-size:32px;">*</span>etat :</label><br>
                                         <div class="col-sm-10 col-md-8">
                                         <input type="text" class="form-control" id="etat" name="etat" value="{{old('etat')}}">
                                         </div>
                                     </div>


                        <div class="form-group">
                          <label class="control-label col-md-2" for="dateOp"><span style="color:crimson;font-size:32px;">*</span>Date :</label><br>
                          <div class="col-sm-10 col-md-8">
                            <input type="date" class="form-control" id="dateOp" name="dateOp" value="{{old('dateOp')}}">
                              </div>
                          </div>



                                     <div class="form-group">
                                         <label class="control-label col-md-2" for="description">Description:</label>
                                         <div class="col-sm-10 col-md-8">
                                         <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}">
                                         </div>
                                     </div>


                                      <div class="modal-footer">
                                                 <button type="submit" class="btn btn-success" > <span class="glyphicon glyphicon-check"></span> Modifier</button>
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

@section('js')
   <script  src="{{ URL::asset('js/opp.js')}}"> </script>
@endsection
