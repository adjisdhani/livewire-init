<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class Block extends Component
{
    public \App\Models\Posts $post;

    public $item;

    public function render()
    {
        return view('livewire.posts.block');
    }
}
