<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class ListaUsers extends Component
{
    public function render()
    {
        $users = User::latest()->get();

        return view('livewire.lista-users', compact('users'))
            ->layout('layouts.app');
    }
}
