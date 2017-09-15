<?php

namespace App\Http\Controllers;

use App\Operator;
use App\Opp;
use App\Poste;
use App\Time;
use Illuminate\Http\Request;

class TimesC extends Controller
{



    public function store(Request $request)
    {
        $time=new Time();
        $time->description=$request->input('description');
        $time->vh=$request->input('vh');
        $time->operator_id=$request->input('operator_id');
        $time->poste_id=$request->input('poste_id');
        $time->opp_id=$request->input('opp_id');
        $time->qte=$qte->input('qte');
        $time->save();
        return redirect()->back()->with('ok',"La tache a étè bien ajouté");
    }


    public function show($id)
    {
        $opp=Opp::find($id);
        $postes=Poste::all();
        $operators=Operator::all();
        return view('calls.tache')
            ->with('opp',$opp)
            ->with('postes',$postes)
            ->with('operators',$operators);
    }


    public function update(Request $request, $id)
    {
        $time=Time::find($id);
        $time->description=$request->input('description');
        $time->vh=$request->input('vh');
        $time->opp_id=$time->opp_id;
        $time->operator_id=$request->input('operator_id');
        $time->poste_id=$request->input('poste_id');
        $time->qte=$request->input('qte');
        $time->save();
        return redirect()->back()->with('okk',"La tache a étè bien modifié");
    }

    public function destroy($id)
    {
        $time=Time::find($id);
            $time->delete();
           return redirect()->back();
    }
}
