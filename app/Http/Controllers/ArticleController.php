<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all()->sortByDesc("updated_at");
        return view("articles.index", ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("articles.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = Article::create([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $article
     * @return \Illuminate\Http\Response
     */
    public function show($article)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($article)
    {
        $article = Article::find($article);
        return view("articles.edit", ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $article)
    {
        $article = Article::find($article)->update([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($article)
    {
        $article = Article::find($article)->delete();
        return redirect()->route('articles.index');
    }
}
