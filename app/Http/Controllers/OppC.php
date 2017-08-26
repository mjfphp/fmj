<?php

namespace App\Http\Controllers;

use App\Article;
use App\Matiere;
use App\Operator;
use App\Poste;
use App\Time;
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

         $validator = Validator::make($request->all(), [

            'ref' => 'required|unique:opps',
            'name' => 'required:articles',
            
            'article_id'=>'required',
            'qte'=>'required',
            'montant'=>'required',
            'etat'=>'required',
            'dateOp' => 'required',
            'description'=>'nullable',    
            
        ]);


        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        $opp=new Opp;
        $opp->ref=$request->input('ref') ;
        $opp->name=$request->input('name') ;
        $opp->article_id=$request->input('article_id');
        $opp->qte=$request->input('qte');
        $opp->montant=$request->input('montant');
        $opp->etat=$request->input('etat');
        $opp->dateOp=$request->input('dateOp');
        $opp->description=$request->input('description');
        
        
        
        
        
        $opp->save();
        return redirect()->back();

    }


    public function show($id)
    {

    }

    public function matiere($id)
    {

    }


    public function update(Request $request, $id)
    {

        $opp=Opp::find($id);

        if($opp){

        $opp->ref=$request->input('ref') ;
        $opp->name=$request->input('name') ;
        $opp->qte=$request->input('qte');
        $opp->montant=$request->input('montant');
        $opp->etat=$request->input('etat');
        $opp->dateOp=$request->input('dateOp');
        $opp->description=$request->input('description');

          
          $opp->save();
        }

        return redirect()->back();
    }


    public function destroy($id)
    {
      $opp=Opp::find($id);
      if($opp)
        $opp->delete();
      return redirect()->back();
    }
}
