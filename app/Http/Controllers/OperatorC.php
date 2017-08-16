<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operator;
use App\Http\Controllers\Controller;

class OperatorC extends Controller
{

    public function index()
    {
      $operators=Operator::all();
      return view('operator.operator')->with('operators',$operators);
    }


    public function create()
    {
        return view('operator.add');
    }



    public function store(Request $request)
    {
      $operator=new Operator;
      $operator->imm=$request->input('imm');
      $operator->name=$request->input('name');
      $operator->cin=$request->input('cin');
      $operator->n_phone=$request->input('n_phone');
      $operator->n_pass=$request->input('n_pass');
      $operator->birthDate=$request->input('birthDate');
      $operator->ville=$request->input('ville');
      $operator->debutC=$request->input('debutC');
      $operator->finC=$request->input('finC');
      $operator->examMedical=$request->input('examMedical');
      $operator->poste=$request->input('poste');
      $operator->active=$request->input('active');
      $operator->save();

      return redirect()->back();
    }


    public function show($id)
    {

    }


    public function update(Request $request, $id)
    {
      $operator=Operator::find($id);
      if($operator) {
        $operator->imm=$request->input('imm');
        $operator->name=$request->input('name');
        $operator->cin=$request->input('cin');
        $operator->n_phone=$request->input('n_phone');
        $operator->n_pass=$request->input('n_pass');
        $operator->birthDate=$request->input('birthDate');
        $operator->ville=$request->input('ville');
        $operator->debutC=$request->input('debutC');
        $operator->finC=$request->input('finC');
        $operator->examMedical=$request->input('examMedical');
        $operator->poste=$request->input('poste');
        $operator->active=$request->input('active');
        $operator->save();
      }


      return redirect('/operators');

    }


    public function destroy($id)
    {
      $operator=Operator::find($id);
      if($operator)
          $operator->delete();
      return redirect()->back();
    }
}
