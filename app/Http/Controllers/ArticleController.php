<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function index(Request $request)
    {
        $articles = Article::latest()->paginate(3);
        if ($request->expectsJson()) {
            return response()->json($articles);
        }
        return view('articles', compact('articles'));
    }

    function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('show_article', compact('article'));
    }
}
