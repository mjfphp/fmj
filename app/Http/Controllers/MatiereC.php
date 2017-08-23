<?php

namespace App\Http\Controllers;

use App\Opp;
use App\Poste;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Matiere;
use App\Article;
class MatiereC extends Controller
{
   
    public function store(Request $request)
    {
        $matiere=new Matiere();
        $matiere->article_id=$request->input('article_id');
        $matiere->poste_id=$request->input('poste_id');
        $matiere->opp_id=$request->input('opp_id');
        $matiere->qte=$request->input('qte');
        $matiere->save();
        return redirect()->back();
    }

    
    public function show($id)
    {
        $opp=Opp::find($id);
        $opps=Opp::all();
        $articles=Article::where('typ','=','Consomable')->get();
        $postes=Poste::all();
        return view('calls.matiere')
            ->with('articles',$articles)
            ->with('postes',$postes)
            ->with('opp',$opp)
            ->with('opps',$opps);
    }

    public function update(Request $request, $id)
    {
        $matiere=Matiere::find($id);
        $matiere->article_id=$request->input('article_id');
        $matiere->poste_id=$request->input('poste_id');
        $matiere->opp_id=$matiere->opp_id;
        $matiere->qte=$request->input('qte');
        $matiere->save();
        return redirect()->back();
    }


    public function destroy($id)
    {
        Matiere::find($id)->delete();
        return redirect()->back();
    }
}
