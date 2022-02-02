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


    public function article($id)
    {
        $articles = Article::where('id', $id)->first();
        return view('posts.show-article', [
            'article' => $articles
    ]);
    }
}
