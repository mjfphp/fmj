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
                        <div class="form-group">
                           <label for="ref" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>reference :</label><br>
                            <div class="col-md-4">
                                <input type="text"  placeholder="Reference" class="form-control" value="{{old('ref')}}" name="ref" autofocus required>
                            </div>
                         <div class="col-md-4"></div>
                        </div>
       </div>

       <div class="row">
                         <div class="form-group">
                            <label for="intitule" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>intitule :</label><br>
                             <div class="col-md-4">
                                 <input type="text"  placeholder="description" class="form-control" value="{{old('intitule')}}" name="intitule" autofocus required>
                             </div>
                          <div class="col-md-4"></div>
                         </div>
        </div>





                         <div class="form-group">
                          <div class="col-md-3"></div>
                             <div class="col-md-4">
                                 <button type="submit" class="btn btn-primary btn-block">Ajouter une opperation</button>
                             </div>
                         </div>

                     </form> <!-- /form -->




                 </div> <!-- ./container -->


        @endsection
