<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Session;
use Validator;

use App\Http\Controllers\Controller;
class ArticleC extends Controller
{

    public function index()
    {
        $articles=Article::all();
        return view('article.article')->with('articles',$articles);
    }

    public function create()
    {
        return view('article.add');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ref' => 'required|unique:articles',
            'name' => 'required',
            'description'=>'nullable',
            'standarPrice'=>'nullable',
            'weightNet'=>'nullable',
            'uomId'=>'required',
            'state'=>'nullable'
        ]);


        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $article=new Article;
        $article->ref=$request->input('ref');
        $article->name=$request->input('name');
        $article->description=$request->input('description');
        $article->standarPrice=$request->input('standarPrice');
        $article->weightNet=$request->input('weightNet');
        $article->typ=$request->input('type');
        $article->uomId=$request->input('uomId');
        $article->state=$request->input('state');
        $article->save();
        return redirect("/articles");

    }

    public function show($id)
    {

    }





    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'ref' => 'required|unique:articles,ref,'.$id,
            'name' => 'required',
            'description'=>'nullable',
            'standarPrice'=>'nullable',
            'weightNet'=>'nullable',
            'uomId'=>'required',
            'state'=>'nullable'
        ]);


        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $article=Article::find($id);
        if($article) {
            $article->ref=$request->input('ref');
            $article->name=$request->input('name');
            $article->description=$request->input('description');
            $article->standarPrice=$request->input('standarPrice');
            $article->weightNet=$request->input('weightNet');
            $article->typ=$request->input('type');
            $article->uomId=$request->input('uomId');
            $article->state=$request->input('state');
            $article->save();
        }


        return redirect('/articles');
    }


    public function destroy($id)
    {
        $article=Article::find($id);
        if($article)
            $article->delete();
        return redirect()->back();
    }

}
