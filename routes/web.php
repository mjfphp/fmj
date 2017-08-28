<?php



Route::get('/', function () {
    return redirect('/opps');
});

Route::resource('/articles','ArticleC');
Route::resource('/opps','OppC');
Route::resource('/operators','OperatorC');
Route::resource('/postes','PosteC');
Route::resource('/times','TimesC');
Route::resource('/matieres','MatiereC');
Route::resource('/params','paramsC');
Route::resource('/cout','Cc');
