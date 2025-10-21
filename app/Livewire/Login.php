<?php

namespace App\Livewire;

use Livewire\Component;

#[\Livewire\Attributes\Layout('components.layouts.guest')]

class Login extends Component
{
    #[\Livewire\Attributes\Rule(['required', 'email'])]
    public string $email = '';

    #[\Livewire\Attributes\Rule(['required'])]
    public string $password = '';

    public function login()
    {
        if (\Illuminate\Support\Facades\Auth::attempt($this->validate())) {
            return redirect()->route('home');
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
