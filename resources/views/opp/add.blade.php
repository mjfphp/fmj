@extends('layouts.app')

@section('title', 'Ajouter Une Operation')

@section('content')


    <div class="row">
         <div class="col-md-4">
        <h2>Ajouter une opperation :</h2>
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

                       <div class="form-group">
                          <label for="ref" class="col-md-3 control-label">Nom</label>
                           <div class="col-md-4">
                               <input type="text"  placeholder="Nom de l'operation" class="form-control" value="{{old('name')}}" name="name" autofocus required>
                           </div>
                        <div class="col-md-4"></div>
                       </div>
      </div>



      <div class="row">
                        <div class="form-group">
                           <label for="description" class="col-md-3 control-label">Description</label>
                            <div class="col-md-4">
                                <input type="text"  placeholder="description" class="form-control" value="{{old('description')}}" name="description" autofocus required>
                            </div>
                         <div class="col-md-4"></div>
                        </div>
       </div>


       <div class="row">
                     <div class="form-group">
                     <label for="standarPrice" class="col-md-3 control-label">Date</label>
                     <div class="col-md-4">
                       <input type="text"  placeholder="date de l'operation" class="form-control" value="{{old('dateOp')}}" name="dateOp" autofocus required>
                    </div>
                       <div class="col-md-4"></div>
                    </div>
        </div>


       <div class="row">

                              <div class="form-group">
                                 <label for="weightNet" class="col-md-3 control-label">Etat</label>
                                  <div class="col-md-4">
                                      <input type="text"  placeholder="l'etat de l'operation" class="form-control" value="{{old('etat')}}" name="etat" autofocus required>
                                  </div>
                               <div class="col-md-4"></div>
                              </div>
                    </div>

       <div class="row">

                              <div class="form-group">
                                 <label for="type" class="col-md-3 control-label">Montant</label>
                                  <div class="col-md-4">
                                      <input type="text"  placeholder="montant" class="form-control" value="{{old('montant')}}" name="montant" autofocus required>
                                  </div>
                               <div class="col-md-4"></div>
                              </div>
                    </div>

       <div class="row">

                              <div class="form-group">
                                 <label for="ref" class="col-md-3 control-label">Produit finie</label>
                                  <div class="col-md-4">
                                       <select class="selectpicker show-menu-arrow form-control" value="{{old('type')}}"    id="produitF" name="produitF" value="{{old('produitF')}}"  autofocus required>
                                                    @if($articles)
                                                    @foreach($articles as $article)
                                                              <option value="{{$article->name}}">{{$article->name}}</option>
                                                    @endforeach
                                                    @endif
                                       </select>
                                  </div>
                               <div class="col-md-4"></div>
                              </div>
                    </div>

       <div class="row">

                              <div class="form-group ">
                                 <label for="state" class="col-md-3 control-label">Quantité</label>
                                  <div class="col-md-4">
                                      <input type="text"  placeholder="Quantité" class="form-control" value="{{old('qte')}}" name="qte" autofocus required>
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
