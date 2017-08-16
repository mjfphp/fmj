@extends('layouts.app')

@section('title', 'Ajouter Un Operateur')

@section('content')


    <div class="row">
         <div class="col-md-4">
        <h2>Ajouter un operateur :</h2>
         </div>
         <div class="col-md-4"></div>
        <a href="{{route('operators.index')}}" class="btn btn-primary col-md-2"><span class="glyphicon glyphicon glyphicon-arrow-left "> </span>   Retour</a>

        </div>
<br>
<br>
 <div class="container">


      <form class="form-horizontal" role="form" method="post" action="/operators">
        {{ csrf_field()}}
   <input type="hidden" name="_token" value="{{ csrf_token() }}">



      <div class="row">

                       <div class="form-group @if($errors->has('imm')) has-error @endif">
                          <label for="imm" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>Immatriculation</label><br>
                           <div class="col-md-4">
                               <input type="text"  placeholder="l'immatriculation de l'operateur" class="form-control" value="{{old('imm')}}" name="imm" autofocus required>
                           </div>
                           @if($errors->has('imm'))
                                               <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('imm') }}</div>
                           @endif
                        <div class="col-md-4"></div>
                       </div>
             </div>


      <div class="row">

                 <div class="form-group @if($errors->has('name')) has-error @endif">
                    <label for="name" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>Nom complet</label><br>
                     <div class="col-md-4">
                         <input type="text"  placeholder="le nom de l'operateur" class="form-control" value="{{old('name')}}" name="name" autofocus required>
                     </div>
                     @if($errors->has('name'))
                                         <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('name') }}</div>
                     @endif
                  <div class="col-md-4"></div>
                 </div>
       </div>

      <div class="row">
                        <div class="form-group @if($errors->has('cin')) has-error @endif">
                           <label for="cin" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>N° d'identité</label><br>
                            <div class="col-md-4">
                                <input type="text"  placeholder="CIN" class="form-control" value="{{old('cin')}}" name="cin" autofocus required>
                            </div>
                            @if($errors->has('cin'))
                                               <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('cin') }}</div>
                           @endif
                         <div class="col-md-4"></div>
                        </div>
       </div>


       <div class="row">
                     <div class="form-group @if($errors->has('n_phone')) has-error @endif">
                     <label for="n_phone" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>N° de télephone</label><br>
                     <div class="col-md-4">
                       <input type="number"  placeholder="le numéro de télephone de l'operateur " class="form-control" value="{{old('n_phone')}}" name="n_phone" autofocus required>
                    </div>
                    @if($errors->has('n_phone'))
                                       <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('n_phone') }}</div>
                   @endif
                       <div class="col-md-4"></div>
                    </div>
        </div>


       <div class="row">

                              <div class="form-group">
                                 <label for="n_pass" class="col-md-3 control-label">N° de passport</label>
                                  <div class="col-md-4">
                                      <input type="number"  placeholder="le Numéro de passport de l'operateur" class="form-control" value="{{old('n_pass')}}" name="n_pass" >
                                  </div>
                               <div class="col-md-4"></div>
                              </div>
                    </div>

       <div class="row">

                              <div class="form-group">
                                 <label for="birthDate" class="col-md-3 control-label">Date de naissance</label>
                                  <div class="col-md-4">
                                      <input type="date"  placeholder="la date de naissance de naissance de l'operateur" class="form-control" value="{{old('birthDate')}}" name="birthDate" >
                                  </div>
                               <div class="col-md-4"></div>
                              </div>
                    </div>

       <div class="row">

                              <div class="form-group">
                                 <label for="ville" class="col-md-3 control-label">Ville</label>
                                  <div class="col-md-4">
                                      <input type="text"  placeholder="Ville" class="form-control" value="{{old('ville')}}" name="ville" >
                                  </div>
                               <div class="col-md-4"></div>
                              </div>
                    </div>

       <div class="row">

                              <div class="form-group @if($errors->has('debutC')) has-error @endif">
                                 <label for="debutC" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>Début du contrat</label><br>
                                  <div class="col-md-4">
                                      <input type="date"  placeholder="la date de début du contrat" class="form-control" value="{{old('debutC')}}" name="debutC" autofocus required>
                                  </div>
                                  @if($errors->has('debutC'))
                                               <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('debutC') }}</div>
                           @endif
                               <div class="col-md-4"></div>
                              </div>
         </div>

         <div class="row">

                                <div class="form-group @if($errors->has('finC')) has-error @endif">
                                   <label for="finC" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>Fin du contrat</label><br>
                                    <div class="col-md-4">
                                        <input type="date"  placeholder="la date de fin du contrat" class="form-control" value="{{old('finC')}}" name="finC" autofocus required>
                                    </div>
                                    @if($errors->has('finC'))
                                               <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('finC') }}</div>
                           @endif
                                 <div class="col-md-4"></div>
                                </div>
           </div>


           <div class="row">

                                  <div class="form-group ">
                                     <label for="examMedical" class="col-md-3 control-label">Examen médicale</label>
                                      <div class="col-md-4">
                                          <input type="text"  placeholder="l'examen médicale de l'operateur" class="form-control" value="{{old('examMedical')}}" name="examMedical">
                                      </div>
                                   <div class="col-md-4"></div>
                                  </div>
             </div>




               <div class="row">

                                      <div class="form-group ">
                                         <label for="poste" class="col-md-3 control-label">Poste</label>
                                          <div class="col-md-4">
                                              <input type="text"  placeholder="le poste de l'operateur" class="form-control" value="{{old('poste')}}" name="poste" >
                                          </div>
                                       <div class="col-md-4"></div>
                                      </div>
                 </div>


                 <div class="row">

                                        <div class="form-group @if($errors->has('active')) has-error @endif">
                                           <label for="active" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>Active</label><br>
                                            <div class="col-md-4">
                                                <input type="boolean"  placeholder="Active" class="form-control" value="{{old('active')}}" name="active" autofocus required>
                                            </div>

                                            @if($errors->has('active'))
                                               <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('active') }}</div>
                           @endif
                                         <div class="col-md-4"></div>
                                        </div>
                   </div>


                 <div class="row">

                                        <div class="form-group ">
                                           <label for="n_depart" class="col-md-3 control-label">N° de department</label>
                                            <div class="col-md-4">
                                                <input type="text"  placeholder="N° de department" class="form-control" value="{{old('n_depart')}}" name="n_depart" >
                                            </div>
                                         <div class="col-md-4"></div>
                                        </div>
                   </div>



                 <div class="form-group">
                  <div class="col-md-3"></div>
                     <div class="col-md-4">
                         <button type="submit" class="btn btn-primary btn-block">Ajouter un operateur</button>
                     </div>
                 </div>

             </form> <!-- /form -->




         </div> <!-- ./container -->


@endsection
