<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('create_date', 'desc')->get();
        return view('pages.index', [
            'articles' => $articles
        ]);
}
    public function show($id)
    {
        $article = Article::find($id);
        return view('posts.show-article', [
            'article' => $article
    ]);
    }

    public function home()
    {
        return view("pages.home");
    }
    public function tags()
    {
        return view("pages.tags");
    }
    public function about()
    {
        return view("pages.about");
    }

}
