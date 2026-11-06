<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    

    public function create(){
        return view('article.create');
    }

    public function edit(Article $article){
        return view('article.edit', compact('article'));
    }

    public function show(Article $article){
        return view('article.show', compact('article'));
    }
}
