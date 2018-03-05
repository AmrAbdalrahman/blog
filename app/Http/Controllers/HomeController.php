<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

     // get all articles for home page
    public function index()
    {
        $articles = Article::orderBy('id','desc')->get();
        return view('partial.home', compact('articles'));

    }

    // get the article by id
    public function getArticleById($id)
    {
        $article = Article::findOrFail($id);
        return view('partial.article', compact('article'));

    }

}
