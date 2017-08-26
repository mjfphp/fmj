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

