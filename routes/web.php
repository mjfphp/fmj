<?php



Route::get('/', function () {
    return view('index');
});

Route::resource('/articles','ArticleC');
Route::resource('/opps','OppC');
Route::resource('/operators','OperatorC');
Route::resource('/postes','PosteC');
Route::resource('/times','TimesC');
Route::get('/test1',function(){
    $times=\App\Time::all();
    $operators=\App\Operator::all();
  $postes=\App\Poste::all();
  $opps=\App\Opp::all();
   return view('sp.sp')
       ->with('postes',$postes)
       ->with('opps',$opps)
       ->with('operators',$operators)
       ->with('times',$times);
});

Route::get('/test',function(){
    $matieres=\App\Matiere::all();
    $articles=\App\Article::all();
    $postes=\App\Poste::all();
    $opps=\App\Opp::all();
    return view('sp.sp')
        ->with('articles',$articles)
        ->with('postes',$postes)
        ->with('opps',$opps)
        ->with('matieres',$matieres);
});



