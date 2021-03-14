<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class SearchBar extends Component
{
    public $search;
    public $articles = [];

    public function render()
    {
        return view('livewire.search-bar');
    }

    public function updatedSearch($search)
    {
        $this->articles = Article::where('title', 'like', '%' . $search . '%')->orWhere('body', 'like', '%' . $search . '%')->get();
        if (!$this->search) {
            $this->articles = [];
        }
    }

    public function submit()
    {
        return redirect()->route('search.result', ['search' => $this->search]);
    }
}
