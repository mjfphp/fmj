<?php

namespace App\Http\Controllers;

use App\Operator;
use App\Opp;
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
        $time->opp_id=$request->input('opp_id');
        $time->save();
        return redirect()->back();
    }


    public function show($id)
    {
        $opp=Opp::find($id);
        $operators=Operator::all();
        return view('calls.tache')
            ->with('opp',$opp)
            ->with('operators',$operators);
    }


    public function update(Request $request, $id)
    {
        $time=Time::find($id);
        $time->description=$request->input('description');
        $time->vh=$request->input('vh');
        $time->operator_id=$time->opp_id;
        $time->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $time=Time::find($id);
            $time->delete();
           return redirect()->back();
    }
}
