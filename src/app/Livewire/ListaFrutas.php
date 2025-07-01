<?php

namespace App\Livewire;

use App\Models\Fruit;
use Livewire\Component;

class ListaFrutas extends Component
{
    public function removerFruta($id)
    {
        $fruta = \App\Models\Fruit::findOrFail($id);
        $fruta->delete();

        session()->flash('success', 'Fruta removida com sucesso!');
    }

    public function render()
    {
        $frutas = Fruit::orderBy('created_at', 'desc')->get();

        return view('livewire.lista-frutas', [
            'frutas' => $frutas
        ])->layout('layouts.app');
    }
}
