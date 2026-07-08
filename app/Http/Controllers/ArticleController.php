<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('article.index', ['articles'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        //
        $article = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'author' => $request->author,
            'body' => $request->body,
        ];

        if($request->file('img')){
            $article['img'] = $request->file('img')->store('img', 'public');
        }

        Article::create($article);
        return redirect()->back()->with('message', 'Articolo creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $updateArticle = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'author' => $request->author,
            'body' => $request->body,
        ];

        if($request->file('img')){
            $updateArticle['img'] = $request->file('img')->store('img', 'public');
        }

        $article->update($updateArticle);
        return redirect(route('articles.show', compact('article')))->with('message', 'Articolo aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('articles.index'))->with('message', 'Articolo eliminato con successo');
    }
}
