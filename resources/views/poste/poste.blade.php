@extends('layouts.app')

@section('title')
Postes
@endsection

@section('content')

     <div class="row">
       
        <h2>Gestion des postes :</h2><br>
         <a href="{{route('postes.create')}}" class="btn btn-primary col-md-2"><span class="glyphicon glyphicon-plus"></span>   Ajouter un poste</a>
         </div>

    <div class="container">
          <div class="table-responsive text-center">
          <table class="table table-bordered table-striped display" id="table" border="0.5px">
          <br>
          <br>

       <thead>
             <tr>
                 <th class="text-center">Reference</th>
                 <th class="text-center">Intitule</th>
                 <th class="text-center">Taux</th>
                  <th class="text-center">Actions</th>
             </tr>
       </thead>
        @if($postes)
            @foreach($postes as $item)
            <tr class="item{{$item->id}}">
                <td>{{$item->ref}}</td>
                <td>{{$item->intitule}}</td>
                <td>{{$item->taux}}</td>
                <td><button class="edit-modal btn btn-info" id="{{$item->id}}" >
                         <span class="glyphicon glyphicon-edit"></span> Modifier
                    </button>
                    <button class="delete-modal btn btn-danger" id="{{$item->id}}" data-info="/postes/">
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
                                         <h4 class="modal-title">Modifier <span id="id"></span></h4>
                                     </div>
                            <div class="modal-body">
                                <form class="form-horizontal" method="post">
                                          {{ csrf_field()}}
                                   <input name="_method" type="hidden" value="PUT">
                                   <input name="id" type="hidden" id="posteId">




                                    <div class="form-group">
                                         <label class="control-label col-md-2" for="ref"><span style="color:crimson;font-size:32px;">*</span>Reference: </label><br>
                                         <div class="col-sm-10 col-md-8 @if($errors->has('ref')) has-error @endif">
                                         <input type="text" class="form-control" id="ref" name="ref" value="{{old('ref')}}">
                                           @if($errors->has('ref'))
                                     <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('ref') }}</div>
                        @endif
                                         </div>
                                     </div>

                                     <div class="form-group">
                                         <label class="control-label col-md-2" for="intitule"><span style="color:crimson;font-size:32px;">*</span>intitule: </label><br>
                                         <div class="col-sm-10 col-md-8 @if($errors->has('intitule')) has-error @endif">
                                         <input type="text" class="form-control" id="intitule" name="intitule" value="{{old('intitule')}}">
                                          @if($errors->has('intitule'))
                                     <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('intitule') }}</div>
                        @endif
                                         </div>
                                    </div>

                                       <div class="form-group ">
                                                                  <label for="taux" class="col-md-2 control-label">taux :</label>
                                                                   <div class="col-md-8 ">
                                                                       <input type="number"  step="0.1" placeholder="description" id="taux" class="form-control" value="{{old('taux')}}" name="taux" autofocus required>
                                                                      
                                                                   </div>
                                                                   
                                                                <div class="col-md-4"></div>
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
                   </div>
@endsection

@section('js')
@if(count($errors))
   <script>
                              $('#editS').modal('show');
                              $('#editS form').attr('action',"/postes/" + {{old('id')}});
                              </script>

@endif

         <script  src="{{ URL::asset('js/poste.js')}}"> </script>
@endsection