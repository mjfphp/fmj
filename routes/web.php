<?php



Route::get('/', function () {
    return view('index');
});

Route::resource('/articles','ArticleC');


