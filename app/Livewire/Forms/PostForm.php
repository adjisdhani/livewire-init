<?php

namespace App\Livewire\Forms;

use Livewire\Form;

class PostForm extends Form
{
    #[\Livewire\Attributes\Rule(['required'])]
    public string $title = '';

    #[\Livewire\Attributes\Rule(['required'])]
    public string $body = '';

    public function store()
    {
        $getUserId = \Illuminate\Support\Facades\Auth::user()->id;
        $user = \App\Models\User::find($getUserId);
        $validate = $this->validate();

        $sikat = $user->posts()->create($validate);

        session()->flash('message', 'cie berhasil simpan nich');

        $this->reset();

        return $sikat;
    }
}
