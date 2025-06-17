<div>
    <h3 class="text-center">Lista de Usuários</h3>
    <div class="table-responsive mt-4">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Cadastrado em</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                        <td>
                            <a href="{{ route('editar.user', $user->id) }}" class="btn btn-sm btn-warning">Editar</a>

                            <button wire:click="removerUsuario({{ $user->id }})"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Tem certeza que deseja remover este usuário?')">
                                Remover
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Nenhum usuário cadastrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
