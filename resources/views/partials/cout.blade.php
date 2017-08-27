@section('table')
 <div class="container" >
          <div class="table-responsive text-center">
          <table class="table table-bordered table-striped display" id="table" border="0.5px" data-id="{{$opp->id}}" >
          <br>

       <thead>
             <tr>
                 <th class="text-center"><strong>Designation</strong></th>
                 <th class="text-center">P.T ( Matieres)</th>
                  <th class="text-center">Heures</th>
                  <th class="text-center">Taux</th>
                  <th class="text-center">P.T (Heures)</th>
             </tr>
       </thead>
           @if(!$posts->isEmpty())
                            @foreach($posts as $item)
                            <tr class="item{{$item->id}}">
                                <td><strong>{{$item->intitule}}</strong></td>
                                <td>{{$item->cm($opp->id)}}</td>
                                <td>{{$item->ch($opp->id)}}</td>
                                <td>{{$item->taux}}</td>
                                <td>{{($item->taux)*($item->ch($opp->id))}}</td>
                            </tr>
                            @endforeach
            @endif
      </table>
      </div>
      </div>
@endsection
