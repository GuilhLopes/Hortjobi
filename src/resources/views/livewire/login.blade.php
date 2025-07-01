<div>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="w-100" style="max-width: 400px;">
            <h2>Login</h2>

            @if (session()->has('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form wire:submit.prevent="login" class="bg-white p-4 shadow rounded">
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" class="form-control" wire:model="email" name="email">
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label>Senha</label>
                    <input type="password" class="form-control" wire:model="password" name="password">
                    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <button class="btn btn-primary w-100">Entrar</button>
            </form>
        </div>
    </div>

</div>
