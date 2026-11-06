<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class ArticleIndex extends Component
{
    public function render()
    {
        $articles = Article::all()->sortByDesc('created_at');
        return view('livewire.article-index', compact('articles'));
    }
}
