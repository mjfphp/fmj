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
        $param=param::all()->first();
       return view('params.config')->with('param',$param);
    }


    public function store(Request $request)
    {

    }




    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }
}
