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
    $a=3;
   return view('sp.sp')
       ->with('a',$a)
       ->with('operators',$operators)
       ->with('times',$times);
});



