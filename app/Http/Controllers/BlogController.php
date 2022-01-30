<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index(){
        $articles = Article::all();
        return view('pages.index', [
            'articles' => $articles
        ]);
    }
}
