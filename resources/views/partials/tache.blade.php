@section('table')
 <div class="container" >
          <div class="table-responsive text-center">
          <table class="table table-bordered table-striped display" id="table" border="0.5px" data-id="1" >
          <br>

       <thead>
             <tr>
                 <th class="text-center">Description</th>
                 <th class="text-center">temps</th>
                  <th class="text-center">Operateur</th>
                  <th class="text-center">actions</th>
             </tr>
       </thead>
       @if($times)
                   @foreach($times as $item)
                   <tr class="item{{$item->id}}">
                       <td>{{$item->description}}</td>
                       <td>{{$item->vh}}</td>
                       <td>
                        @if($item->operator)
                           {{$item->operator->name}}
                        @endif
                       </td>
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
                                        <label class="control-label col-md-2" for="description"><span style="color:crimson;font-size:32px;">*</span>description: </label><br>
                                        <div class="col-sm-10 col-md-8">
                                        <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}">
                                        </div>
                                   </div>

                                 <div class="form-group">
                                        <label class="control-label col-md-2" for="vh"><span style="color:crimson;font-size:32px;">*</span>Temps: </label><br>
                                        <div class="col-sm-10 col-md-8">
                                        <input type="text" class="form-control" id="vh" name="vh" value="{{old('vh')}}">
                                        </div>
                                   </div>

                                  <div class="form-group">
                                        <label class="control-label col-md-2" for="operator_id"><span style="color:crimson;font-size:32px;">*</span>Operators : </label><br>
                                        <div class="col-sm-10 col-md-8">
                                        <select  class="selectpicker show-menu-arrow form-control" id="operator_id" name="operator_id" value="{{old('operator_id')}}">
                                              @if($operators)
                                                 @foreach($operators as $el)
                                                  <option value="{{$el->id}}">{{$el->name}}</option>
                                                @endforeach
                                             @endif
                                        </select>
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
         <script  src="{{ URL::asset('js/time.js')}}"> </script>
           <script  src="{{ URL::asset('js/bootstrap-toggle.min.js')}}"> </script>
@endsection
