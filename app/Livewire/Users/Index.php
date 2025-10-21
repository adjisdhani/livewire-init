<?php

namespace App\Livewire\Users;

use Livewire\Component;

class Index extends Component
{
    use \Livewire\WithPagination;

    public function render()
    {
        return view('livewire.users.index', [
            'users' => \App\Models\User::query()->latest()->paginate(20),
        ]);
    }
}
