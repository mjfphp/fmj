<?php

namespace App\Http\Controllers;

use App\Poste;
use Illuminate\Http\Request;
use Validator;

class PosteC extends Controller
{

    public function index()
    {
        $postes=Poste::all();
        return view('poste.poste')->with('postes',$postes);
    }


    public function create()
    {
        return view('poste.add');
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ref' => 'required|unique:postes',
            'intitule' => 'required|unique:postes',
            'taux' => 'nullable|numeric'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $poste=new Poste();
        $poste->ref=$request->input('ref') ;
        $poste->intitule=$request->input('intitule');
        $poste->taux=$request->input('taux');
        $poste->save();

        return redirect("/postes")->with('ok',"Le poste a étè bien ajouté");;
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'ref' => 'required|unique:postes,ref,'.$id,
            'intitule' => 'required|unique:postes,intitule,'.$id,
            'taux' => 'nullable|numeric'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $poste=Poste::find($id);
        $poste->ref=$request->input('ref') ;
        $poste->intitule=$request->input('intitule');
        $poste->taux=$request->input('taux');
        $poste->save();

        return redirect("/postes")->with('okk',"Le poste a étè bien modifié");;
    }


    public function destroy($id)
    {
       $p=Poste::find($id);
            $p->delete();
        return redirect()->back();
    }
}
