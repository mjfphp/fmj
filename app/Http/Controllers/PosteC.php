<?php

namespace App\Http\Controllers;

use App\Poste;
use Illuminate\Http\Request;

class PosteC extends Controller
{

    public function index()
    {
        $postes=Poste::all();
        return view('poste.poste')->with('postes',$postes);
    }


    public function create()
    {
        return view('poste.add');
    }


    public function store(Request $request)
    {
        $poste=new Poste();
        $poste->ref=$request->input('ref') ;
        $poste->intitule=$request->input('intitule');
    }


    public function show($id)
    {

    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }
}
