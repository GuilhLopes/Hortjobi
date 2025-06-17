<div class="container py-5">
    <h2 class="text-center mb-4">Editar Usuário</h2>

    <form wire:submit.prevent="atualizarUsuario" class="border p-4 rounded bg-white shadow-sm">
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" class="form-control" wire:model="name">
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" class="form-control" wire:model="email">
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" wire:model="is_admin" id="is_admin">
            <label class="form-check-label" for="is_admin">Administrador</label>
        </div>

        <button type="submit" class="btn btn-success w-100">Salvar Alterações</button>
    </form>
</div>
