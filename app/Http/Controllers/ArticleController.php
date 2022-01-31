<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function blog()
    {
        $articles = Article::get();
        return view("posts.posts", compact('articles'));
    }

    public function store(Request $request)
    {
        $path = $request->file('image')->store('images', 'public');
        $article = new Article();
        $article->category = $request->get('category');
        $article->title = $request->get('title');
        $article->description = $request->get('description');
        $article->create_date = $request->get('calendar');
        $article->image = $path;

        $article->save();

        return back();
    }

}
