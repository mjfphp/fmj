<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Controllers\Controller;

class ArticleC extends Controller
{

    public function index()
    {
        $articles=Article::all();
        return view('article.article')->with('articles',$articles);
    }

    public function create(Request $request)
    {
        $request->session()->forget('article');
        return view('article.add');
    }

    public function store(Request $request)
    {
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

        return redirect()->back();

    }

    public function show($id)
    {

    }


    public function edit($id,Request $request)
    {
        $article=Article::find($id);
        if($article)
        {
            $request->session()->put('article',$article->id);
            return view('articles.add')->with('article',$article);
        }
        else
            return redirect('/articles');
    }


    public function update(Request $request, $id)
    {
        $article=Article::find($id);
        $article->ref=$request->input('ref');
        $article->name=$request->input('name');
        $article->description=$request->input('description');
        $article->standarPrice=$request->input('standarPrice');
        $article->weightNet=$request->input('weightNet');
        $article->typ=$request->input('type');
        $article->uomId=$request->input('uomId');
        $article->state=$request->input('state');
        $article->save();

        return redirect('/articles');
    }


    public function destroy($id)
    {
        echo "ok";
    }

}
