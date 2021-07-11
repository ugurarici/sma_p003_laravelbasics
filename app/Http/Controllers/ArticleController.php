<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        // Article listeleme
        $articles = Article::latest()->get();
        return view("articles.index", compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.detail', compact('article'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required|string|min:3',
        ]);

        $article = new Article;
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();

        return redirect('/articles/' . $article->id);
    }
}
