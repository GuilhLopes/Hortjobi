<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class EditarUser extends Component
{
    public $userId;
    public $name;
    public $email;
    public $is_admin = false;

    public function mount($id)
    {
        $user = User::findOrFail($id);

        $this->userId = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->is_admin = $user->is_admin;
    }

    public function atualizarUsuario()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $this->userId,
        ]);

        $user = User::find($this->userId);
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'is_admin' => $this->is_admin,
        ]);

        session()->flash('success', 'Usuário atualizado com sucesso!');
        return redirect()->route('lista');
    }

    public function render()
    {
        return view('livewire.editar-user')->layout('layouts.app');
    }
}
