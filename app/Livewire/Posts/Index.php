<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class Index extends Component
{
    #[\Livewire\Attributes\On('postCreated')]

    // public function updateList($post)
    // {

    // }

    public function placeholder()
    {
        return <<<'WAIT'
            <div>
                LOADING ...
            </div>
        WAIT;
    }

    public function render()
    {
        sleep(3);

        return view('livewire.posts.index', [
            'posts' => \App\Models\Posts::query()->with('user')->latest()->get(),
        ]);
    }
}
