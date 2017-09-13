@extends('layouts.app')

@section('title')
Operateurs
@endsection

@section('content')

      <div class="row">
       
      <h2>Gestion Des operateurs :</h2><br>
      
       
      <a href="{{route('operators.create')}}" class="btn btn-primary col-md-2"><span class="glyphicon glyphicon-plus"></span>Ajouter un operateur</a>

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

                   <th class="text-center">Immatriculation</th>
                    <th class="text-center">Nom complet</th>
                    <th class="text-center">CIN</th>
                    <th class="text-center">N° de télephone</th>
                    <th class="text-center" >N° de passport</th>
                    <th class="text-center">Date de naissance</th>
                    <th class="text-center">Ville</th>
                    <th class="text-center">Début du contrat</th>
                    <th class="text-center">Fin du contrat</th>
                    <th class="text-center">Examen médicale</th>
                    <th class="text-center">Poste</th>
                    <th class="text-center">Active</th>
                   <th class="text-center">Actions</th>
               </tr>
           </thead>

     @foreach($operators as $item)

     <tr class="item{{$item->id}}">
                  <td>{{$item->imm}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->cin}}</td>
                  <td>{{$item->n_phone}}</td>
                  <td>{{$item->n_pass}}</td>
                  <td>{{$item->birthDate}}</td>
                  <td>{{$item->ville}}</td>
                  <td>{{$item->debutC}}</td>
                  <td>{{$item->finC}}</td>
                  <td>{{$item->examMedical}}</td>
                  <td>@if($item->poste)
                      {{$item->poste->intitule}}
                          @endif
                  </td>
                  <td>@if($item->active)
                       {{'Active'}}
                       @else
                      {{'Desactive'}}
                          @endif
                  </td>

         <td ><button class="edit-modal btn btn-info " id="{{$item->id}}">
                 <span class="glyphicon glyphicon-edit"></span> Modifier
             </button>
             <button class="delete-modal btn btn-danger" id="{{$item->id}}" data-info="/operators/">
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
                                   <div class="modal-dialog " style="width:1000px;">
                                           <div class="modal-content">
                                               <div class="modal-header">
                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                           <h4 class="modal-title">Modifier</h4>
                                               </div>
                             <div class="modal-body">
                                   <form class="form-horizontal" method="post">
                                          {{ csrf_field()}}
                                   <input name="_method" type="hidden" value="put">
                                   <input name="id" type="hidden" id="operatorId">



 
                                   <div class="form-group ">
                                         <label class="control-label col-md-2" for="imm"><span style="color:crimson;font-size:32px;">*</span>Immatriculation:</label><br>

                                         <div class="col-sm-5 col-md-4 @if($errors->has('imm')) has-error @endif">
                                         <input type="text" class="form-control" id="imm" name="imm" value="{{old('imm')}}">
                                         @if($errors->has('imm'))
                                               <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('imm') }}</div>
                                               
                           @endif
                                         </div>


                                         <label class="control-label col-md-2" for="birthDate">Date de naissance :</label>
                                         <div class="col-sm-5 col-md-4">
                                         <input type="date" class="form-control" id="birthDate" name="birthDate" value="{{old('birthDate')}}">
                                         </div>

                                     </div>


                                   <div class="form-group">
                                       <label class="control-label col-md-2" for="name"><span style="color:crimson;font-size:32px;">*</span>Nom complet:</label><br>
                                       <div class="col-sm-5 col-md-4 @if($errors->has('name')) has-error @endif">
                                       <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                                        @if($errors->has('name'))
                                         <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('name') }}</div>
                     @endif
                                       </div>

                                       <label class="control-label col-md-2" for="n_pass">N° de passport:</label>
                                         <div class="col-sm-5 col-md-4">
                                         <input type="text" class="form-control" id="n_pass" name="n_pass" value="{{old('n_pass')}}">
                                         </div>

                                         </div>

                                   <div class="form-group">
                                       <label class="control-label col-md-2" for="n_phone"><span style="color:crimson;font-size:32px;">*</span>N° de télephone:</label><br>
                                       <div class="col-sm-5 col-md-4  @if($errors->has('n_phone')) has-error @endif">
                                       <input type="number" class="form-control" id="n_phone" name="n_phone" value="{{old('n_phone')}}">
                                        @if($errors->has('n_phone'))
                                       <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('n_phone') }}</div>
                   @endif

                                       </div>


                                        <label class="control-label col-md-2" for="examMedical">Examen médicale :</label>
                                        <div class="col-sm-5 col-md-4">
                                        <input type="text" class="form-control" id="examMedical" name="examMedical" value="{{old('examMedical')}}">
                                        </div>

                                   </div>


                                      <div class="form-group">
                                        <label class="control-label col-md-2" for="cin"><span style="color:crimson;font-size:32px;">*</span>CIN: </label><br>
                                        <div class="col-sm-5 col-md-4 @if($errors->has('cin')) has-error @endif">
                                        <input type="text" class="form-control" id="cin" name="cin" value="{{old('cin')}}">
                                        @if($errors->has('cin'))
                                               <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('cin') }}</div>
                           @endif
                                        </div>

                                        <label class="control-label col-md-2" for="ville">Ville :</label>
                                       <div class="col-sm-5 col-md-4">
                                       <input type="text" class="form-control" id="ville" name="ville" value="{{old('ville')}}">
                                       </div>

                                        </div>


                                     <div class="form-group">
                                        <label class="control-label col-md-2" for="active"><span style="color:crimson;font-size:32px;">*</span>Active :</label><br>
                                        <div class="col-sm-5 col-md-4 @if($errors->has('active')) has-error @endif">
                                            <select  class="selectpicker show-menu-arrow form-control" id="active" name="active" value="{{old('active')}}">
                                                    <option value="0">desactive</option>
                                                    <option value="1">active</option>
                                            </select>
                                        </div>
                                       <label class="control-label col-md-2" for="poste">Poste :</label>
                                       <div class="col-sm-5 col-md-4">
                                           <select  class="selectpicker show-menu-arrow form-control" id="poste_id" name="poste_id" value="{{old('poste_id')}}">
                                               @if($postes)
                                                   @foreach($postes as $el)
                                                       <option value="{{$el->id}}">{{$el->intitule}}</option>
                                                   @endforeach
                                               @endif
                                           </select>
                                       </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="debutC" class="col-md-2 control-label"><span style="color:crimson;font-size:32px;">*</span>Début du contrat :</label><br>
                                        <div class="col-sm-5 col-md-4 @if($errors->has('debutC')) has-error @endif">
                                        <input type="text" class="form-control" id="debutC" name="debutC" value="{{old('debutC')}}">
                                         @if($errors->has('debutC'))
                                                <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('debutC') }}</div>
                            @endif
                                        </div>
                                         <label for="finC" class="col-md-2 control-label" >Fin du contrat :</label>
                                        <div class="col-sm-5 col-md-4 @if($errors->has('finC')) has-error @endif">
                                        <input type="text" class="form-control" id="finC" name="finC" value="{{old('finC')}}">
                                         @if($errors->has('finC'))
                                                <div class="error" style="color:red">{{ $errors->first('finC') }}</div>
                                      @endif  
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
@if(count($errors))
 <script>
    $('#editS').modal('show');
    $("#editS form").attr('action',"/operators/" + {{old('id')}});
  </script>
@endif
   <script  src="{{ URL::asset('js/operator.js')}}"> </script>
@endsection
