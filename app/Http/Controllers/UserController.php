<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
  public function operateur(){
  return view('operateur',array('user'=>Auth::user()));
}
public function article(){
return view('article',array('user'=>Auth::user()));
}
public function operation(){
return view('operation',array('user'=>Auth::user()));
}
}
