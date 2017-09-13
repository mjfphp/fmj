<?php

namespace App\Http\Controllers;

use App\Article;

use App\param;

use Illuminate\Http\Request;
use App\Opp;
use Validator;

use App\Http\Controllers;

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
            'article_id'=>'required',
            'qte'=>'required',
            'etat'=>'nullable',
            'dateD' => 'nullable',
            'dateF' => 'nullable',
            'description'=>'required',    
            
        ]);


        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $n=Param::all()->count();
        if(!$n)
        {
            $param=new param();
            $param->tfa=10;
            $param->dm=10;
            $param->dh=15;
            $param->ao=3;
            $param->fg=15;
            $param->it=20;
            $param->b=15;
            $param->save();
        }
        $param=param::all()->last();

        $opp=new Opp;
        $opp->ref=$request->input('ref') ;
        $opp->article_id=$request->input('article_id');
        $opp->qte=$request->input('qte');
        $opp->etat=$request->input('etat');
        $opp->dateD=$request->input('dateD');
        $opp->dateF=$request->input('dateF');
        $opp->description=$request->input('description');
        $opp->param_id=$param->id;

        
        
        
        
        $opp->save();
        return redirect("/opps")->with('ok',"L'opération a étè bien ajouté");

    }


    public function show($id)
    {

    }

    public function matiere($id)
    {

    }


    public function update(Request $request, $id)
    {
        
        $validator = Validator::make($request->all(), [

            'ref' => 'required|unique:opps,ref,'.$id,
            'etat'=>'nullable',
            'description'=>'required',
            'dateD' => 'nullable',
            'qte'=>'required',
            'dateF' => 'nullable',
            
      
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $opp=Opp::find($id);
        if($opp){

        $opp->ref=$request->input('ref') ;
        $opp->etat=$request->input('etat');
        $opp->description=$request->input('description');
        $opp->dateD=$request->input('dateD');
        $opp->qte=$request->input('qte');
        $opp->dateF=$request->input('dateF');  
        $opp->save();
        }

        return redirect("/opps")->with('okk',"L'opération a étè bien modifié");
    }


    public function destroy($id)
    {
      $opp=Opp::find($id);
      if($opp)
        $opp->delete();
      return redirect()->back();
    }
}
