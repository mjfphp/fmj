<?php

namespace App\Http\Controllers;

use App\Time;
use Illuminate\Http\Request;

class TimesC extends Controller
{

    public function index()
    {

    }





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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $time=Time::find($id);
        $time->description=$request->input('description');
        $time->vh=$request->input('vh');
        $time->operator_id=$request->input('operator_id');
        $time->save();
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
        Time::find($id)->delete();
        return redirect()->back();
    }
}
