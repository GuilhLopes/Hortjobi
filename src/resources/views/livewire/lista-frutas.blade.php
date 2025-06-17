<div class="container py-5">
    <h2 class="text-center mb-4">Lista de Frutas</h2>
    
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($frutas->isEmpty())
        <div class="alert alert-info">Nenhuma fruta cadastrada ainda.</div>
    @else
        <table class="table table-striped table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($frutas as $fruta)
                    <tr>
                        <td>{{ $fruta->nome }}</td>
                        <td>R$ {{ number_format($fruta->preco, 2, ',', '.') }}</td>
                        <td>{{ $fruta->quantidade }}</td>
                        <td>
                            <a href="{{ route('editar.fruta', $fruta->id) }}" class="btn btn-sm btn-warning">
                                Editar
                            </a>
                            <button wire:click="removerFruta({{ $fruta->id }})"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Tem certeza que deseja remover esta fruta?')">
                                Remover
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    @endif
</div>
