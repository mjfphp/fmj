@extends('layouts.app')
@section('title', 'Ajouter un  poste')

@section('content')


    <div class="row">
         <div class="col-md-4">
        <h2>Ajouter un poste :</h2>
         </div>
         <div class="col-md-4"></div>
        <a href="{{route('postes.index')}}" class="btn btn-primary col-md-2"><span class="glyphicon glyphicon glyphicon-arrow-left "> </span>   Retour</a>

        </div>
<br>
<br>
 <div class="container">
     <form class="form-horizontal" role="form" method="post" action="/postes">
           {{ csrf_field()}}
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

       <div class="row">
                        <div class="form-group @if($errors->has('ref')) has-error @endif">
                           <label for="ref" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>Reference :</label><br>
                            <div class="col-md-4">
                                <input type="text"  placeholder="La reference de poste" class="form-control" value="{{old('ref')}}" name="ref" autofocus required>
                            </div>
                             @if($errors->has('ref'))
                                     <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('ref') }}</div>
                        @endif
                         <div class="col-md-4"></div>
                        </div>
       </div>

       <div class="row">
                         <div class="form-group @if($errors->has('intitule')) has-error @endif">
                            <label for="intitule" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>Intitule :</label><br>
                             <div class="col-md-4">
                                 <input type="text"  placeholder="Le nom de poste" class="form-control" value="{{old('intitule')}}" name="intitule" autofocus required>
                             </div>
                             @if($errors->has('intitule'))
                                     <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('intitule') }}</div>
                        @endif
                          <div class="col-md-4"></div>
                         </div>

                         <br>
        </div>
        <div class="row">
                         <div class="form-group ">
                            <label for="taux" class="col-md-3 control-label">Taux :</label>
                             <div class="col-md-4">
                                 <input type="number"  step="0.1" placeholder="Le taux de ce poste" class="form-control" value="{{old('taux')}}" name="taux" autofocus required>
                             </div>
                          <div class="col-md-4"></div>
                         </div>
        </div>





                         <div class="form-group">
                          <div class="col-md-3"></div>
                             <div class="col-md-4">
                                 <button type="submit" class="btn btn-primary btn-block">Ajouter un poste</button>
                             </div>
                         </div>

                     </form> <!-- /form -->




                 </div> <!-- ./container -->


        @endsection
