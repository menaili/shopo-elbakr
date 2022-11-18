<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use App\Models\Article;
use App\Models\Favorite;

class Articles extends Component
{
    public function render()
    {
        return view('includes.product');
    }

    public function addtofavorit($id)
    {
        
    }
}
