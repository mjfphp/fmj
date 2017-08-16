@extends('layouts.app')

@section('title', 'Ajouter Un Article')

@section('content')


    <div class="row">
         <div class="col-md-4">
        <h2>Ajouter un article :</h2>
         </div>
         <div class="col-md-4"></div>
        <a href="{{route('articles.index')}}" class="btn btn-primary col-md-2"><span class="glyphicon glyphicon glyphicon-arrow-left "> </span>   Retour</a>

        </div>
<br>
<br>
 <div class="container">


      <form class="form-horizontal" role="form" method="post" action="/articles">
        {{ csrf_field()}}
   <input type="hidden" name="_token" value="{{ csrf_token() }}">

   <div class="row">
     <div class="form-group @if($errors->has('ref')) has-error @endif">
                         <label for="ref" class="col-md-3 control-label">Reference  : </label>
                          <div class="col-md-4">
                              <input type="text"  placeholder="reference" class="form-control" value="{{old('ref')}}" name="ref" autofocus required>
                          </div>
                           @if($errors->has('ref'))
                       <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('ref') }}</div>
                          @endif
                       <div class="col-md-4"></div>
                      </div>
    </div>






      <div class="row">

                 <div class="form-group @if($errors->has('name')) has-error @endif">
                    <label for="name" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>Nom</label><br>
                     <div class="col-md-4">
                         <input type="text"  placeholder="nom de l'article" class="form-control" value="{{old('name')}}" name="name" autofocus required>
                     </div>
                     @if($errors->has('name'))
                                  <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('name') }}</div>
                     @endif

                  <div class="col-md-4"></div>
                 </div>
       </div>

      <div class="row">
                        <div class="form-group"  >
                           <label for="description" class="col-md-3 control-label">Description</label>
                            <div class="col-md-4">
                                <input type="text"  placeholder="la description de l'article" class="form-control" value="{{old('description')}}" name="description" >
                            </div>

                         <div class="col-md-4"></div>
                        </div>
       </div>


       <div class="row">
                     <div class="form-group">
                     <label for="standarPrice" class="col-md-3 control-label">Prix </label>
                     <div class="col-md-4">
                       <input type="number" step="0.01"  placeholder="prix unitaire de l'article" class="form-control" value="{{old('standarPrice')}}" name="standarPrice" >
                    </div>
                       <div class="col-md-4"></div>
                    </div>
        </div>


       <div class="row">

                              <div class="form-group">
                                 <label for="weightNet" class="col-md-3 control-label"></span>Poids</label>
                                  <div class="col-md-4">
                                      <input type="number" step="0.01" placeholder="poids de l'article" class="form-control" value="{{old('weightNet')}}" name="weightNet" >
                                  </div>
                               <div class="col-md-4"></div>
                              </div>
                    </div>

       <div class="row">

                              <div class="form-group" >
                              <label for="type" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>type</label><br>
                              <div class="col-md-4">

                                  <select class="selectpicker show-menu-arrow form-control" value="{{old('type')}}" name="type" type="text"  placeholder="type" autofocus required>
                                     <option value="Consomable">Consomable</option>
                                     <option value="Produit finie">Produit finie</option>
                                  </select>

                              </div>
                               <div class="col-md-4"></div>
                              </div>
                    </div>

       <div class="row">

                              <div class="form-group" @if($errors->has('uomId')) has-error @endif">
                                 <label for="ref" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>Unité de mesure</label><br>
                                  <div class="col-md-4">
                                      <input type="text"  placeholder="unité de mesure" class="form-control" value="{{old('uomId')}}" name="uomId" autofocus required>
                                  </div>
                                  @if($errors->has('uomId'))
                                            <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('uomId') }}</div>
                                 @endif
                               <div class="col-md-4"></div>
                              </div>
                    </div>

       <div class="row">

                              <div class="form-group ">
                                 <label for="state" class="col-md-3 control-label">etat</label>
                                  <div class="col-md-4">
                                      <input type="text"  placeholder="l'etat de l'article" class="form-control" value="{{old('state')}}" name="state" >
                                  </div>

                               <div class="col-md-4"></div>
                              </div>
         </div>


                 <div class="form-group">
                  <div class="col-md-3"></div>
                     <div class="col-md-4">
                         <button type="submit" class="btn btn-primary btn-block">Ajouter un article</button>
                     </div>
                 </div>

             </form> <!-- /form -->




         </div> <!-- ./container -->


@endsection
