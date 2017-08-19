@extends('layouts.app')

@section('title')
Operateurs
@endsection

@section('content')

      <div class="row">
       <div class="col-md-4">
      <h2>Gestion Des operateurs :</h2>
       </div>
       <div class="col-md-5"></div>
      <a href="{{route('operators.create')}}" class="btn btn-primary col-md-2"><span class="glyphicon glyphicon-plus"></span>Ajouter un operateur</a>

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
                  <td>{{$item->poste}}</td>
                  <td>{{$item->active}}</td>

         <td ><button class="edit-modal btn btn-info " id="{{$item->id}}">
                 <span class="glyphicon glyphicon-edit"></span> Modifier
             </button>
             <button class="delete-modal btn btn-danger" id="{{$item->id}}">
                 <span class="glyphicon glyphicon-trash"></span> Effacer
             </button></td>
     </tr>
     @endforeach
     </table>
     </div>
     </div>


@endsection

@section('modalD')
                    <div id="deleteS" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                  <h4>Vous voulez vraiment supprimer cet operateur ?</h4>
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

                                   <div class="form-group">
                                       <label class="control-label col-md-2" for="name"><span style="color:crimson;font-size:32px;">*</span>Nom complet:</label><br>
                                       <div class="col-sm-5 col-md-4">
                                       <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                                       </div>

                                       <label class="control-label col-md-2" for="ville">Ville :</label>
                                       <div class="col-sm-5 col-md-4">
                                       <input type="text" class="form-control" id="ville" name="ville" value="{{old('ville')}}">
                                       </div>
                                   </div>

                                   <div class="form-group">
                                       <label class="control-label col-md-2" for="n_phone"><span style="color:crimson;font-size:32px;">*</span>N° de télephone:</label><br>
                                       <div class="col-sm-5 col-md-4">
                                       <input type="number" class="form-control" id="n_phone" name="n_phone" value="{{old('n_phone')}}">
                                       </div>

                                       <label class="control-label col-md-2" for="poste">Poste :</label>
                                       <div class="col-sm-5 col-md-4">
                                       <input type="text" class="form-control" id="poste" name="poste" value="{{old('poste')}}">
                                       </div>


                                   </div>


                                     <div class="form-group">
                                         <label class="control-label col-md-2" for="imm"><span style="color:crimson;font-size:32px;">*</span>Immatriculation:</label><br>
                                         <div class="col-sm-5 col-md-4">
                                         <input type="text" class="form-control" id="imm" name="imm" value="{{old('imm')}}">
                                         </div>
                                         <label class="control-label col-md-2" for="birthDate">Date de naissance :</label>
                                         <div class="col-sm-5 col-md-4">
                                         <input type="date" class="form-control" id="birthDate" name="birthDate" value="{{old('birthDate')}}">
                                         </div>


                                     </div>








                                      <div class="form-group">
                                        <label class="control-label col-md-2" for="cin"><span style="color:crimson;font-size:32px;">*</span>CIN: </label><br>
                                        <div class="col-sm-5 col-md-4">
                                        <input type="text" class="form-control" id="cin" name="cin" value="{{old('cin')}}">
                                        </div>


                                         <label class="control-label col-md-2" for="n_pass">N° de passport:</label>
                                         <div class="col-sm-5 col-md-4">
                                         <input type="text" class="form-control" id="n_pass" name="n_pass" value="{{old('n_pass')}}">
                                         </div>
                                     </div>


                                     <div class="form-group">
                                        <label class="control-label col-md-2" for="active"><span style="color:crimson;font-size:32px;">*</span>Active :</label><br>
                                        <div class="col-sm-5 col-md-4">
                                        <input type="text" class="form-control" id="active" name="active" value="{{old('active')}}">
                                        </div>

                                        <label class="control-label col-md-2" for="examMedical">Examen médicale :</label>
                                        <div class="col-sm-5 col-md-4">
                                        <input type="text" class="form-control" id="examMedical" name="examMedical" value="{{old('examMedical')}}">
                                        </div>
                                    </div>




                                    <div class="form-group">
                                        <label class="control-label col-md-2" for="debutC"></span>Début du contrat :</label>
                                        <div class="col-sm-5 col-md-4">
                                        <input type="text" class="form-control" id="debutC" name="debutC" value="{{old('debutC')}}">
                                        </div>
                                        <label class="control-label col-md-2" for="finC"></span>Fin du contrat : </label>
                                        <div class="col-sm-5 col-md-4">
                                        <input type="text" class="form-control" id="finC" name="finC" value="{{old('finC')}}">
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
   <script  src="{{ URL::asset('js/operator.js')}}"> </script>
@endsection
