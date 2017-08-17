<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MatiereC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $matieres=Matiere::all();
        $articles=Article::where('typ','=','Consomable')->get();
        return view('partials.matiere')
            ->with('articles',$articles)
            ->with('matieres',$matieres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        $matiere=new Matiere();
        $matiere->article_id=$request->input('article_id');
        $matiere->poste_id=$request->input('poste_id');
        $matiere->opp_id=$request->input('opp_id');
        $matiere->qte=$request->input('qte');
        $matiere->save();
        return redirect('/test');
    }

    
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        
    }

   
    public function update(Request $request, $id)
    {
        $matiere=Matiere::find($id);
       $matiere->article_id=$request->input('article_id');
        $matiere->poste_id=$request->input('poste_id');
        $matiere->opp_id=$request->input('opp_id');
        $matiere->qte=$request->input('qte');
        $matiere->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Matiere::find($id)->delete();
        return redirect()->back();
    }
}
