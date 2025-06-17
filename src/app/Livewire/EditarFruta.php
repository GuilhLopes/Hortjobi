<?php

namespace App\Livewire;

use App\Models\Fruit;
use Livewire\Component;

class EditarFruta extends Component
{
    public $frutaId;
    public $nome;
    public $preco;
    public $quantidade;

    public function mount($id)
    {
        $fruta = Fruit::findOrFail($id);
        $this->frutaId = $fruta->id;
        $this->nome = $fruta->nome;
        $this->preco = $fruta->preco;
        $this->quantidade = $fruta->quantidade;
    }

    public function atualizarFruta()
    {
        $this->validate([
            'nome' => 'required|string|max:255',
            'preco' => 'required|numeric|min:0',
            'quantidade' => 'required|integer|min:1',
        ]);

        $fruta = Fruit::find($this->frutaId);
        $fruta->update([
            'nome' => $this->nome,
            'preco' => $this->preco,
            'quantidade' => $this->quantidade,
        ]);

        session()->flash('success', 'Fruta atualizada com sucesso!');
        return redirect()->route('lista.frutas');
    }

    public function render()
    {
        return view('livewire.editar-fruta')->layout('layouts.app');
    }
}
