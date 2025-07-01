<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public string $email = '';
    public string $password = '';

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->regenerate();

            // Redireciona para a rota correta com base no tipo de usuário
            return auth()->user()->is_admin
                ? redirect('/adm')
                : redirect('/');
        }

        session()->flash('error', 'Credenciais inválidas.');
    }

    public function render()
    {
        return view('livewire.login')
            ->layout('layouts.guest');
    }
}
