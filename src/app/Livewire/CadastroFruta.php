<?php

namespace App\Livewire;

use App\Models\Fruit;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CadastroFruta extends Component
{
    public $nome = '';
    public $preco = '';
    public $quantidade = '';

    public function createFruit()
    {
        $this->validate([
            'nome' => 'required|string|max:255',
            'preco' => 'required|numeric|min:0',
            'quantidade' => 'required|integer|min:1',
        ]);

        Fruit::create([
            'nome' => $this->nome,
            'preco' => $this->preco,
            'quantidade' => $this->quantidade,
        ]);

        session()->flash('success', 'Fruta cadastrada com sucesso!');
        $this->reset(['nome', 'preco', 'quantidade']);
    }

    public function render()
    {
        return view('livewire.cadastro-fruta')
            ->layout('layouts.app');
    }
}
