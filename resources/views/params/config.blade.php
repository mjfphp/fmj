@extends('layouts.app')

@section('title', 'Configuration ')

@section('content')


    <div class="row">
         <div class="col-md-4">
        <h2>Configuration  :  </h2>
         </div>
    </div>
 <div class="container">


      <form class="form-horizontal" role="form" method="post" action="/params">
        {{ csrf_field()}}
      <input type="hidden" name="_token" value="{{ csrf_token() }}">




        <div class="row">
            <div class="form-group @if($errors->has('dm')) has-error @endif">
                                <label for="dm" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>Divers Matieres : </label><br>
                                 <div class="col-md-4 input-group">
                                     <input type="number"  value="{{$param->dm}}" class="form-control" placeholder=" {{old('dm')}}" name="dm" autofocus required>
                                      <span class="input-group-addon">%</span>
                                 </div>
                                  @if($errors->has('dm'))
                              <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('dm') }}</div>
                                 @endif
                              <div class="col-md-4"></div>
                             </div>
           </div>

           <div class="row">
                 <div class="form-group @if($errors->has('dh')) has-error @endif">
                                           <label for="dh" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>Divers horaires : </label><br>
                                            <div class="col-md-4 input-group">
                                                <input type="number"  value="{{$param->dh}}" class="form-control" placeholder="{{old('dh')}}" name="dh" autofocus required>
                                                <span class="input-group-addon">%</span>
                                            </div>
                                             @if($errors->has('dh'))
                                         <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('dh') }}</div>
                                            @endif
                                         <div class="col-md-4"></div>
                                        </div>
                 </div>

            <div class="row">
                        <div class="form-group @if($errors->has('tfa')) has-error @endif">
                                            <label for="tfa" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>  Transport et frais attachés : </label><br>
                                             <div class="col-md-4 input-group">
                                                 <input type="number"  value="{{$param->tfa}}" class="form-control" placeholder="{{old('tfa')}}" name="tfa" autofocus required>
                                                 <span class="input-group-addon">%</span>
                                                 
                                             </div>
                                              @if($errors->has('tfa'))
                                          <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('tfa') }}</div>
                                             @endif
                                          <div class="col-md-4"></div>
                                         </div>
                       </div>

            <div class="row">
                        <div class="form-group @if($errors->has('ao')) has-error @endif">
                                            <label for="ao" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>  Amortissement et outillage : </label><br>
                                             <div class="col-md-4 input-group">
                                                 <input type="number"  value="{{$param->ao}}" class="form-control" placeholder="{{old('ao')}}" name="ao" autofocus required>
                                                 <span class="input-group-addon">%</span>
                                                 
                                             </div>
                                              @if($errors->has('ao'))
                                          <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('ao') }}</div>
                                             @endif
                                          <div class="col-md-4"></div>
                                         </div>
                       </div>

              <div class="row">
                             <div class="form-group @if($errors->has('fg')) has-error @endif">
                                                 <label for="fg" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>  Frais Generaux : </label><br>
                                                  <div class="col-md-4 input-group">
                                                      <input type="number"  value="{{$param->fg}}" class="form-control" placeholder="{{old('fg')}}" name="fg" autofocus required>
                                                      <span class="input-group-addon">%</span>
                                                      
                                                  </div>
                                                   @if($errors->has('fg'))
                                               <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('fg') }}</div>
                                                  @endif
                                               <div class="col-md-4"></div>
                                              </div>
               </div>

               <div class="row">
                                            <div class="form-group @if($errors->has('it')) has-error @endif">
                                                                <label for="it" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>  Impots et taxes : </label><br>
                                                                 <div class="col-md-4 input-group">
                                                                     <input type="number"  value="{{$param->it}}" class="form-control" placeholder="{{old('it')}}" name="it" autofocus required>
                                                                     <span class="input-group-addon">%</span>
                                                                     
                                                                 </div>
                                                                  @if($errors->has('it'))
                                                              <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('it') }}</div>
                                                                 @endif
                                                              <div class="col-md-4"></div>
                                         </div>
               </div>

               <div class="row">
                                         <div class="form-group @if($errors->has('b')) has-error @endif">
                                                  <label for="b" class="col-md-3 control-label"><span style="color:crimson;font-size:32px;">*</span>  Benefice : </label><br>
                                                     <div class="col-md-4 input-group">
                                                        <input type="number"  value="{{$param->b}}" class="form-control" placeholder="{{old('b')}}" name="b" autofocus required>
                                                        <span class="input-group-addon">%</span>
                                                        
                                                      </div>
                                                  @if($errors->has('b'))
                                                       <div class="error" style="color:red"><span class="glyphicon glyphicon-remove"></span> {{ $errors->first('b') }}</div>
                                                 @endif
                                              <div class="col-md-4"></div>
                                         </div>
               </div>

              <div class="form-group">
                                <div class="col-md-3"></div>
                                   <div class="col-md-4">
                                       <button type="submit" class="btn btn-primary btn-block">enregistrer</button>
                                   </div>
                               </div>
               </form>
               </div>
               @endsection