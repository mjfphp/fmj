@extends('layouts.app')
@section('title')
Operation de production
@endsection

@section('content')
     
      <div class="row">
     
      <h2>Gestion de la production :</h2><br>
     
      
      <a href="{{route('opps.create')}}" class="btn btn-primary col-md-2"><span class="glyphicon glyphicon-plus"></span>  Ajouter une operation</a>

      <div class="col-md-2 col-xs-2"></div>
         
          @if(session('ok'))
              <div class="col-md-4 col-xs-4  alert alert-success" >
                  {{ session('ok') }}
              </div>
          @endif
          @if(session('okk'))
              <div class="col-md-4 col-xs-4  alert alert-success" >
                  {{ session('okk') }}
              </div>
          @endif

          @if(session('id'))
              <script>
                  $(function(){
                      $('.item'+session('id')).modal('show')
              </script>
          @endif
      </div>



       <div class="container ">
       <div class="table-responsive text-center">
       <table class="table table-bordered table-striped display" id="table" border="0.5px">
       <br>
       <br>
           <thead>
               <tr>
                   <th class="text-center">Référence</th>
                   <th class="text-center">Produit finie</th>
                   <th class="text-center">Quantité </th>
                   <th class="text-center">etat</th>
                   <th class="text-center">Date début</th>
                   <th class="text-center">Date fin</th>
                   <th class="text-center">Description</th>
                   <th class="text-center">Actions</th>

                </tr>


           </thead>
     @foreach($opps as $item)
     <tr class="item{{$item->id}}">

          <td><a href="{{route('times.show',['id'=>$item->id])}}">{{$item->ref}}</a></td>
          <td ><a href="{{route('articles.index',['id'=>$item->id])}}">
                 @if($item->article)
                   {{$item->article->name}}
                 @endif
          </td>
          <td>{{$item->qte}}</td>
          <td>{{$item->etat}}</td>
          <td>{{$item->dateD}}</td>
          <td>{{$item->dateF}}</td>
          <td>{{$item->description}}</td>
           <td><button class="edit-modal btn btn-info" id="{{$item->id}}">
                   <span class="glyphicon glyphicon-edit" ></span> Modifier
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
                                   <div class="modal-dialog " style="width:800px;">
                                           <div class="modal-content">
                                               <div class="modal-header">
                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                           <h4 class="modal-title">Modifier</h4>
                                               </div>
                             <div class="modal-body">
                                   <form class="form-horizontal" method="post">
                                          {{ csrf_field()}}
                                   <input name="_method" type="hidden" value="put">
                                   <input name="id" type="hidden" id="oppId">


                                    
                                    <div class="form-group">
                                         <label class="control-label col-md-2" for="ref"><span style="color:crimson;font-size:32px;">*</span>Référence :</label><br>
                                         <div class="col-sm-5 col-md-4 @if($errors->has('ref')) has-error @endif">
                                         <input type="text" class="form-control" id="ref" name="ref" value="{{old('ref')}}">
                                         @if($errors->has('ref'))
                                               <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('ref') }}</div>
                           @endif
                                         </div>

                                         <label class="control-label col-md-2" for="etat"></span>etat:</label> 
                                         <div class="col-sm-5 col-md-4 @if($errors->has('etat')) has-error @endif">
                                         <input type="text" class="form-control" id="etat" name="etat" value="{{old('etat')}}">
                                           @if($errors->has('etat'))
                                                      <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('etat') }}</div>
                                  @endif
                                         </div>
                                     </div>




                                     <div class="form-group">
                                         <label class="control-label col-md-2" for="description"><span style="color:crimson;font-size:32px;">*</span>Description:</label><br>
                                         <div class="col-sm-5 col-md-4">
                                         <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}">
                                         </div>

                                        <label class="control-label col-md-2" for="dateD">Date début :</label>
                                        <div class="col-sm-5 col-md-4 @if($errors->has('dateD')) has-error @endif">
                                        <input type="date" class="form-control" id="dateD" name="dateD" value="{{old('dateD')}}">
                                        @if($errors->has('dateD'))
                                        <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('dateD') }}</div>
                                       @endif
                                    
                                      </div>
                          
                                  </div>


                                    <div class="form-group">
                                       <label class="control-label col-md-2" for="qte"><span style="color:crimson;font-size:32px;">*</span>Quantité :</label><br>
                                       <div class="col-sm-5 col-md-4 @if($errors->has('qte')) has-error @endif">
                                       <input type="number" step="0.01" class="form-control" id="qte" name="qte" value="{{old('qte')}}">
                                          @if($errors->has('qte'))
                                                      <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('qte') }}</div>
                                  @endif

                                       </div>

                                        <label class="control-label col-md-2" for="dateF">Date fin :</label>
                                        <div class="col-sm-5 col-md-4 @if($errors->has('dateF')) has-error @endif">
                                        <input type="date" class="form-control" id="dateF" name="dateF" value="{{old('dateF')}}">
                                        @if($errors->has('dateF'))
                                        <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('dateF') }}</div>
                                        @endif
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
@if(count($errors))
   <script>
                              $('#editS').modal('show');
                              $('#editS form').attr('action',"/opps/" + {{old('id')}});
                              </script>

@endif

   <script  src="{{ URL::asset('js/opp.js')}}"> </script>
@endsection
