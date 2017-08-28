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
                                <td>{{$item->cm($opp->id)}} $</td>
                                <td>{{$item->ch($opp->id)}}</td>
                                <td>{{$item->taux}}</td>
                                <td>{{($item->ch($opp->id))*$item->taux}} $</td>
                            </tr>
                            @endforeach


                            </table>
                                  </div>
                                  </div>

                                    <div class="table-responsive text-center">
                                            <table class="table table-bordered table-striped display"  border="0.5px" data-id="{{$opp->id}}" >
                            <tr>
                                 <td ><strong> Divers</strong></td>
                                 <td>Matieres : </td>
                                 <td>{{$opp->conf->dm}} %</td>
                                 <td>Heures : </td>
                                 <td>{{$opp->conf->dh}} %</td>
                            </tr>
                             <tr style="background:#636363;color:#f5f5f5">
                                       <td ><strong> Sous Total</strong></td>
                                       <td>Matieres : </td>
                                       <td>{{$opp->stm()}} $</td>
                                       <td>Heures : </td>
                                      <td><strong>{{$opp->sth()}} $</strong></td>
                             </tr>
                             <tr style="background:#636363;color:#f5f5f5">
                                    <td ><strong>  Total (avant impots) </strong></td>
                                    <td> {{ $opp->Total() }}</td>
                             </tr>
                             <tr>
                                <td ><strong> Transport et frais attachés  </strong></td>
                                <td>{{$opp->conf->tfa}} % </td>
                                <td>{{($opp->conf->tfa/100)*$opp->Total()}} $</td>
                             </tr>
                             <tr>
                                <td ><strong> Amortissement outillage  </strong></td>
                                <td>{{$opp->conf->ao}} % </td>
                                <td>{{($opp->conf->ao/100)*$opp->Total()}} $ </td>
                             </tr>
                              <tr>
                                <td ><strong> Frais Généraux  </strong></td>
                                <td>{{$opp->conf->fg}} % </td>
                                <td>{{($opp->conf->fg/100)*$opp->Total()}}</td>
                             </tr>
                             <tr>
                                <td ><strong> Impôts et taxes  </strong></td>
                                <td>{{$opp->conf->it}} % </td>
                                <td>{{($opp->conf->it/100)*$opp->Total()}} $</td>
                             </tr>
                             <tr>
                                <td ><strong> Bénéfice  </strong></td>
                                <td>{{$opp->conf->b}} % </td>
                                <td>{{($opp->conf->b/100)*$opp->Total()}} $</td>
                             </tr>
                             <tr style="background:#c2bc33;color:#282828;font-size: 20px">
                                <td ><strong>  Total   </strong></td>
                                <td>{{$opp->stu()}} </td>
                                <td>{{(int) $opp->stu()}} $</td>
                             </tr>
                             </table>
                             </div>
                         <div class="row">
                        <div class="col-xs-10 col-md-10"></div>
                       <a href="/cout/{{$opp->id}}/edit" class="  btn  btn-lg  btn-success     col-md-2 col-xs-2" role="button" aria-pressed="true" > <span class="glyphicon glyphicon-upload"></span>  Mettre à jour</a>
                       </div>
                       <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;</div>
            @endif
<script>

</script>
@endsection

@section('js')
      <script  src="{{ URL::asset('js/cout.js') }}"></script>
@endsection
