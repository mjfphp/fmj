@extends('layouts.app')

@section('title', 'Ajouter Une Operation')

@section('content')


    <div class="row">
         <div class="col-md-4">
        <h2>Ajouter une operation :</h2>
         </div>
         <div class="col-md-4"></div>
        <a href="{{route('opps.index')}}" class="btn btn-primary col-md-2"><span class="glyphicon glyphicon glyphicon-arrow-left "> </span>   Retour</a>

        </div>
<br>
<br>
 <div class="container">


      <form class="form-horizontal" role="form" method="post" action="/opps">
        {{ csrf_field()}}
   <input type="hidden" name="_token" value="{{ csrf_token() }}">


<div class="row">

                      <div class="form-group @if($errors->has('ref')) has-error @endif">
                          <label for="ref" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>Référence</label><br>
                           <div class="col-md-4">
                               <input type="text"  placeholder="la référence de l'opération" class="form-control" value="{{old('ref')}}" name="ref" autofocus required>
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
                               <input type="text"  placeholder="le nom de l'operation" class="form-control" value="{{old('name')}}" name="name" autofocus required>
                           </div>
                           @if($errors->has('name'))
                                               <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('name') }}</div>
                           @endif
                        <div class="col-md-4"></div>
                       </div>
      </div>


 <div class="row">

                              <div class="form-group @if($errors->has('produitF')) has-error @endif">
                                 <label for="produitF" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>Produit finie</label><br>
                                  <div class="col-md-4">
                                       <select class="selectpicker show-menu-arrow form-control" value="{{old('produitF')}}"    id="produitF" name="article_id" value="{{old('produitF')}}"  autofocus required>
                                                    @if($articles)
                                                    @foreach($articles as $article)
                                                              <option value="{{$article->id}}">{{$article->name}}</option>
                                                    @endforeach
                                                    @endif
                                       </select>
                                  </div>
                                  @if($errors->has('produitF'))
                                                      <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('produitF') }}</div>
                                  @endif
                               <div class="col-md-4"></div>
                              </div>
                    </div>





       <div class="row">

                              <div class="form-group @if($errors->has('qte')) has-error @endif">
                                 <label for="qte" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>Quantité</label><br>
                                  <div class="col-md-4">
                                      <input type="number" step="0.01"  placeholder="Quantité" class="form-control" value="{{old('qte')}}" name="qte" autofocus required>
                                  </div>
                                  @if($errors->has('qte'))
                                                      <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('qte') }}</div>
                                  @endif
                               <div class="col-md-4"></div>
                              </div>
         </div>



       <div class="row">

                              <div class="form-group @if($errors->has('montant')) has-error @endif">
                                 <label for="montant" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>Montant</label><br>
                                  <div class="col-md-4">
                                      <input type="number" step="0.01" placeholder="le montant total de l'operation" class="form-control" value="{{old('montant')}}" name="montant" autofocus required>
                                  </div>

                                  @if($errors->has('montant'))
                                                      <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('montant') }}</div>
                                  @endif
                               <div class="col-md-4"></div>
                              </div>
                    </div>





        <div class="row">

                              <div class="form-group @if($errors->has('etat')) has-error @endif">
                                 <label for="etat" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>etat</label><br>
                                  <div class="col-md-4">
                                      <input type="text"  placeholder="l'etat de l'operation" class="form-control" value="{{old('etat')}}" name="etat" autofocus required>
                                  </div>

                                  @if($errors->has('etat'))
                                                      <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('etat') }}</div>
                                  @endif
                               <div class="col-md-4"></div>
                              </div>
                    </div>



       <div class="row">
                     <div class="form-group @if($errors->has('dateOp')) has-error @endif">
                     <label for="dateOp" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>Date</label><br>
                     <div class="col-md-4">
                       <input type="date"  placeholder="date de l'operation" class="form-control" value="{{old('dateOp')}}" name="dateOp" autofocus required>
                    </div>

                    @if($errors->has('dateOp'))
                                        <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('dateOp') }}</div>
                    @endif
                       <div class="col-md-4"></div>
                    </div>
        </div>


      
            <div class="row">
                        <div class="form-group">
                           <label for="description" class="col-md-3 control-label">Description</label>
                            <div class="col-md-4">
                                <input type="text"  placeholder="description" class="form-control" value="{{old('description')}}" name="description">
                            </div>
                         <div class="col-md-4"></div>
                        </div>
       </div>s
      



                 <div class="form-group">
                  <div class="col-md-3"></div>
                     <div class="col-md-4">
                         <button type="submit" class="btn btn-primary btn-block">Ajouter une operation</button>
                     </div>
                 </div>

             </form> <!-- /form -->




         </div> <!-- ./container -->


@endsection
