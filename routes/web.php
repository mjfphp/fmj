<?php



Route::get('/', function () {
    return view('index');
});

Route::resource('/articles','ArticleC');
Route::resource('/opps','OppC');
Route::resource('/operators','OperatorC');
Route::resource('/postes','PosteC');
Route::resource('/times','TimesC');
Route::resource('/matieres','MatiereC');
Route::resource('/params','paramsC');

Route::get('/test',function(){
      $opp=\App\Opp::find(1);
       echo "les postes : <br>";
      $post=\App\Poste::all();
       foreach($post as $p)
           echo $p->intitule."  :    PT MATERIEL   ($) :   ".$p->cm($opp->id)." Heures : ".$p->ch(1)." P total ".$p->ch(1)*$p->taux."<br>";
});