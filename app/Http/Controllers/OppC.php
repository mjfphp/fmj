<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Opp;
use Validator;

use App\Http\Controllers\Controller;

class OppC extends Controller
{

    public function index()
    {
        $opps=Opp::all();
        $articles=Article::where('typ','=','Produit finie')->get();
        return view('opp.opp')
            ->with('articles',$articles)
            ->with('opps',$opps);
    }


    public function create()
    {
        $articles=Article::where('typ','=','Produit finie')->get();
        return view('opp.add')
            ->with('articles',$articles);
    }


    public function store(Request $request)
    {
        //
        $opp=new Opp;
        $opp->name=$request->input('name') ;
        $opp->description=$request->input('description');
        $opp->dateOp=$request->input('dateOp');
        $opp->etat=$request->input('etat');
        $opp->montant=$request->input('montant');
        $opp->produitF=$request->input('produitF');
        $opp->qte=$request->input('qte');
        $opp->save();
        return redirect()->back();

    }


    public function show($id)
    {


    }


    public function update(Request $request, $id)
    {
        //
        $opp=Opp::find($id);
        if($opp){

          $opp->name=$request->input('name') ;
          $opp->description=$request->input('description');
          $opp->dateOp=$request->input('dateOp');
          $opp->etat=$request->input('etat');
          $opp->montant=$request->input('montant');
          $opp->produitF=$request->input('produitF');
          $opp->qte=$request->input('qte');
          $opp->save();
        }

        return redirect('/opps');
    }


    public function destroy($id)
    {
      $opp=Opp::find($id);
      if($opp)
        $opp->delete();
      return redirect()->back();
    }
}
