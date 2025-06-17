<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class CadastroUser extends Component
{

    public $name = '';
    public $email = '';
    public $senha = '';
    public $is_admin = false;

    public function createUser()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'senha' => 'required|string|min:6',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->senha,
            'is_admin' => $this->is_admin,
        ]);

        session()->flash('success', 'Usuário cadastrado com sucesso!');

        $this->reset(['name', 'email', 'senha']);
    }

    public function render()
    {
        return view('livewire.cadastro-user')
            ->layout('layouts.app');
    }
}
