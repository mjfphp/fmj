<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opp;
use App\Http\Controllers\Controller;

class OppC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opps=Opp::all();
        return view('opp.opp')->with('opps',$opps);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('opp.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $opp=Opp::find($id);
      if($opp)
        $opp->delete();
      return redirect()->back();
    }
}
