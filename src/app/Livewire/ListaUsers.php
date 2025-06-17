<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class ListaUsers extends Component
{
    public function removerUsuario($id)
    {
        $usuario = \App\Models\User::findOrFail($id);
        $usuario->delete();

        session()->flash('success', 'Usuário removido com sucesso!');
    }

    public function render()
    {
        $users = User::latest()->get();

        return view('livewire.lista-users', compact('users'))
            ->layout('layouts.app');
    }
}
