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

                      <div class="form-group">
                          <label for="ref" class="col-md-2 control-label"><span style="color:crimson;font-size:32px;">*</span>Référence</label><br>
                           <div class="col-md-4  @if($errors->has('ref')) has-error @endif">
                               <input type="text"  placeholder="la référence de l'opération" class="form-control" value="{{old('ref')}}" name="ref" autofocus required>
                           
                           @if($errors->has('ref'))
                                               <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('ref') }}</div>
                           @endif
                           </div>
                            
                            <label for="etat" class="col-md-2 control-label">etat</label>
                            <div class="col-md-4 @if($errors->has('etat')) has-error @endif">
                             <input type="text"  placeholder="l'etat de l'operation" class="form-control" value="{{old('etat')}}" name="etat" autofocus required>
                             @if($errors->has('etat'))
                               <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('etat') }}</div>
                              @endif
                              </div>
                       </div>
      </div>


 <div class="row">

                              <div class="form-group ">
                                 <label for="article_id" class="col-md-2 control-label"><span style="color:crimson;font-size:32px;">*</span>Produit finie</label><br>
                                  <div class="col-md-4 @if($errors->has('article_id')) has-error @endif">
                                       <select class="selectpicker show-menu-arrow form-control" id="article_id" name="article_id" value="{{old('article_id')}}"  autofocus required>
                                                    @if($articles)
                                                    @foreach($articles as $article)
                                                              <option value="{{$article->id}}">{{$article->name}}</option>
                                                    @endforeach
                                                    @endif
                                       </select>
                                  
                                  @if($errors->has('article_id'))
                                                      <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('article_id') }}</div>
                                  @endif
                                  </div>
                              <label for="dateD" class="col-md-2 control-label">Date début</label>
                              <div class="col-md-4 @if($errors->has('dateD')) has-error @endif">
                              <input type="date"  placeholder="La date de début de l'operation" class="form-control" value="{{old('dateD')}}" name="dateD" autofocus required>
                    

                                  @if($errors->has('dateD'))
                                        <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('dateD') }}</div>
                                   @endif
                                  </div>

                              </div>
                    </div>





       <div class="row">

                              <div class="form-group ">
                                 <label for="qte" class="col-md-2 control-label"><span style="color:crimson;font-size:32px;">*</span>Quantité</label><br>
                                  <div class="col-md-4 @if($errors->has('qte')) has-error @endif">
                                      <input type="number" step="0.01"  placeholder="Quantité" class="form-control" value="{{old('qte')}}" name="qte" autofocus required>
                                  
                                  @if($errors->has('qte'))
                                                      <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('qte') }}</div>
                                  @endif
                                  </div>
                               <label for="dateF" class="col-md-2 control-label">Date fin</label>
                              <div class="col-md-4 @if($errors->has('dateF')) has-error @endif">
                              <input type="date"  placeholder="La date de fin de l'operation" class="form-control" value="{{old('dateF')}}" name="dateF" autofocus required>
                    

                                  @if($errors->has('dateF'))
                                        <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('dateF') }}</div>
                                   @endif
                                  </div>

                              </div>
        
         </div>



      
            <div class="row">
                        <div class="form-group">
                           <label for="description" class="col-md-2 control-label">Description</label>
                            <div class="col-md-10">
                                <input type="text"  placeholder="La description de l'operation" class="form-control" value="{{old('description')}}" name="description">
                            </div>
                         <div class="col-md-4"></div>
                        </div>
       </div>
      
<br><br>


                 <div class="form-group">
                  <div class="col-md-3"></div>
                     <div class="col-md-4">
                         <button type="submit" class="btn btn-primary btn-block">Ajouter une operation</button>
                     </div>
                 </div>

             </form> <!-- /form -->




         </div> <!-- ./container -->


@endsection
