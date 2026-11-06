<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class ArticleCreate extends Component
{
    use WithFileUploads;
    
    public $title;
    public $body;
    public $user_id;
    public $img;


    protected $rules = [
        'title'=>'required',
        'body'=>'required',
    ];

    protected $messages = [
        '*.required' => 'Il campo :attribute è richiesto'
    ];

    public function articleStore(){
        $this->user_id = Auth::user()->id;
        if($this->img){
            $this->validate(['img'=>'image']);
        }else{
            $this->validate();
        }
        Article::create([
            'title'=>$this->title,
            'body'=>$this->body,
            'user_id'=>$this->user_id,
            'img' => !$this->img ? null : $this->img->store('images', 'public')
        ]);
        session()->flash('success', 'Articolo creato');
        return $this->redirectRoute('home');
    }

    public function render()
    {
        return view('livewire.article-create');
    }
}
