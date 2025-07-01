<div class="container py-5">
    <h2 class="text-center mb-4">Editar Fruta</h2>

    @if (session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form wire:submit.prevent="atualizarFruta" class="border p-4 rounded bg-white shadow-sm">
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" class="form-control" wire:model="nome">
            @error('nome') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>Preço</label>
            <input type="number" class="form-control" wire:model="preco" step="0.01">
            @error('preco') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>Quantidade</label>
            <input type="number" class="form-control" wire:model="quantidade">
            @error('quantidade') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="btn btn-success w-100">Salvar Alterações</button>
    </form>
</div>
