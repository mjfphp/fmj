<?php

namespace App\Http\Controllers;

use App\Opp;
use App\Poste;
use App\param;
use Illuminate\Http\Request;

class Cc extends Controller
{


    public function show($id)
    {
        $opp = Opp::find($id);
        if ($opp) {
            $posts = Poste::all();
            return view('calls.cout')->with('opp', $opp)->with('posts', $posts);
        }
    }


    public function edit($id)
    {
        $opp = Opp::find($id);
        if ($opp) {
            $param=param::all()->last();
            $opp->param_id=$param;
        }
        return redirect()->back();
    }

}

