<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    public function index()
    {
        // Article listeleme
        $articles = Article::with(['category'])->latest()->get();
        return view("articles.index", compact('articles'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('articles.create', compact('categories'));
    }

    public function show($id)
    {
        $article = Article::with(['category'])->findOrFail($id);
        return view('articles.detail', compact('article'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|numeric|exists:categories,id',
            'title' => 'required',
            'content' => 'required|string|min:3',
        ]);

        $article = new Article;
        $article->category_id = $request->category_id;
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();

        return redirect('/articles/' . $article->id);
    }
}
