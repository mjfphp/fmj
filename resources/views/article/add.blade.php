@extends('layouts.app')

@section('title', 'Ajouter Un Article')

@section('content')


    <div class="row">
         <div class="col-md-4">
        <h1>Ajouter un article :</h1>
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

                       <div class="form-group">
                          <label for="ref" class="col-md-3 control-label">Reference</label>
                           <div class="col-md-4">
                               <input type="text"  placeholder="reference" class="form-control" value="{{old('ref')}}" name="ref" autofocus required>
                           </div>
                        <div class="col-md-4"></div>
                       </div>
             </div>


      <div class="row">

                 <div class="form-group">
                    <label for="name" class="col-md-3 control-label">Name</label>
                     <div class="col-md-4">
                         <input type="text"  placeholder="name" class="form-control" value="{{old('name')}}" name="name" autofocus required>
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
                     <label for="standarPrice" class="col-md-3 control-label">standar Price</label>
                     <div class="col-md-4">
                       <input type="text"  placeholder="standar Price" class="form-control" value="{{old('standarPrice')}}" name="standarPrice" autofocus required>
                    </div>
                       <div class="col-md-4"></div>
                    </div>
        </div>


       <div class="row">

                              <div class="form-group">
                                 <label for="weightNet" class="col-md-3 control-label">weight Net</label>
                                  <div class="col-md-4">
                                      <input type="text"  placeholder="weight Net" class="form-control" value="{{old('weightNet')}}" name="weightNet" autofocus required>
                                  </div>
                               <div class="col-md-4"></div>
                              </div>
                    </div>

       <div class="row">

                              <div class="form-group">
                                 <label for="type" class="col-md-3 control-label">type</label>
                                  <div class="col-md-4">
                                      <input type="text"  placeholder="type" class="form-control" value="{{old('type')}}" name="type" autofocus required>
                                  </div>
                               <div class="col-md-4"></div>
                              </div>
                    </div>

       <div class="row">

                              <div class="form-group">
                                 <label for="ref" class="col-md-3 control-label">uom Id</label>
                                  <div class="col-md-4">
                                      <input type="text"  placeholder="uom Id" class="form-control" value="{{old('uomId')}}" name="uomId" autofocus required>
                                  </div>
                               <div class="col-md-4"></div>
                              </div>
                    </div>

       <div class="row">

                              <div class="form-group ">
                                 <label for="state" class="col-md-3 control-label">state</label>
                                  <div class="col-md-4">
                                      <input type="text"  placeholder="state" class="form-control" value="{{old('state')}}" name="state" autofocus required>
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
