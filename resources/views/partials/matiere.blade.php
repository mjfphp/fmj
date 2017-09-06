@section('table')
 <div class="container" >
          <div class="table-responsive text-center">
          <table class="table table-bordered table-striped display" id="table" border="0.5px" data-id="{{$opp->id}}" >
          <br>

       <thead>
             <tr>
                <th class="text-center">Poste</th>
                 <th class="text-center">Article</th>
                  <th class="text-center">Quantite</th>
                  <th class="text-center">Prix</th>
                  <th class="text-center">Unité de mesure</th>
                  <th class="text-center">Sous total</th>
                  <th class="text-center">Actions</th>
             </tr>
       </thead>
       @if($opp->matieres)
                   @foreach($opp->matieres as $item)
                   <tr class="item{{$item->id}}">

                   <td>
                        @if($item->poste)
                           {{$item->poste->intitule}}
                        @endif
                       </td>
                       <td>
                        @if($item->article)
                           {{$item->article->name}}
                        @endif
                       </td>
                       
                       <td>{{$item->qte}}</td>
                       <td>@if($item->article)
                 {{$item->article->standarPrice}}
             @endif</td>
                      <td>@if($item->article)
                 {{$item->article->uomId}}
             @endif</td>
             <td>@if($item->article)
                 {{($item->article->standarPrice)*($item->qte)}}
             @endif</td>
                       <td><button class="edit-modal btn btn-info" id="{{$item->id}}" >
                                <span class="glyphicon glyphicon-edit"></span> Modifier
                           </button>
                           <button class="delete-modal btn btn-danger" id="{{$item->id}}">
                               <span class="glyphicon glyphicon-trash"></span> Effacer
                           </button></td>
                  </tr>
                  @endforeach
               @endif
        </table>
    </div>
</div>
@endsection

@include('partials.delete')

@section('modalE')
               <div id="editS" class="modal  fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog " style="width:500px;">
                               <div class="modal-content">
                                     <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                         <h4 class="modal-title" id="operation">Modifier </h4>
                                     </div>
                            <div class="modal-body">
                                <form class="form-horizontal" method="post">
                                          {{ csrf_field()}}
                                   <input name="_method" type="hidden" value="PUT" class="method">




                                   
                                   <div class="form-group">
                                        <label class="control-label col-md-2" for="poste_id"><span style="color:crimson;font-size:32px;">*</span>Poste: </label><br>
                                        <div class="col-sm-10 col-md-8">
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
                                        <label class="control-label col-md-2" for="article_id"><span style="color:crimson;font-size:32px;">*</span>Article: </label><br>
                                        <div class="col-sm-10 col-md-8">
                                        <select  class="selectpicker show-menu-arrow form-control" id="article_id" name="article_id" value="{{old('article_id')}}">
                                              @if($articles)
                                                 @foreach($articles as $el)
                                                  <option value="{{$el->id}}">{{$el->name}}</option>
                                                @endforeach
                                             @endif
                                        </select>
                                        </div>
                                   </div>



                                   <div class="form-group">
                                        <label class="control-label col-md-2" for="qte"><span style="color:crimson;font-size:32px;">*</span>Quantite: </label><br>
                                        <div class="col-sm-10 col-md-8">
                                        <input type="number" step="0.0001" class="form-control" id="qte" name="qte" value="{{old('qte')}}">
                                        </div>
                                   </div>

                        
 

                                    <div class="modal-footer">
                                       <button type="submit" class="btn btn-success add"> <span class="glyphicon glyphicon-check"></span> Modifier</button>
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

@section('js')
         <script  src="{{ URL::asset('js/matiere.js')}}"> </script>
@endsection
