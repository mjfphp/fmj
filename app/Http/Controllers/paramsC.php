<?php

namespace App\Http\Controllers;

use App\param;
use Illuminate\Http\Request;

class paramsC extends Controller
{


    public function index()
    {
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
       return view('params.config')->with('param',$param);
    }


    public function store(Request $request)
    {
        $param=new param();
        $param->tfa=$request->input('tfa');
        $param->dm=$request->input('dm');
        $param->dh=$request->input('dh');
        $param->ao=$request->input('ao');
        $param->fg=$request->input('fg');
        $param->it=$request->input('it');
        $param->b=$request->input('b');
        $param->save();

        return redirect()->back();
    }




    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }
}
