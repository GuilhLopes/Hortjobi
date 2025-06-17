<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Administração</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="d-flex">

    <nav class="bg-black bg-gradient text-white p-3 vh-100" style="width: 250px;">
        <h4>Menu</h4>
        <ul class="nav flex-column">
            @if(auth()->user()->is_admin)
            <li class="nav-item">
                <a class="bg-secondary bg-gradient nav-link text-white mb-2 rounded-2" href="{{ route('lista') }}">Lista de Usuários</a>
            </li>
            <li class="nav-item">
                <a class="bg-secondary bg-gradient nav-link text-white rounded-2" href="{{ route('cadastro') }}">Cadastro de Usuários</a>
            </li>
            <li class="nav-item mt-3">
                <form method="POST" action="{{ route('logoutadm') }}">
                    @csrf
                    <button class="btn btn-sm btn-outline-light">Sair</button>
                </form>
            </li>
            @else
                <li>
                    <a class="bg-secondary bg-gradient nav-link text-white mb-2 rounded-2" href="{{ route('frutas') }}">Cadastro de Frutas</a>
                </li>
                <li>
                    <a class="bg-secondary bg-gradient nav-link text-white rounded-2" href="{{ route('lista.frutas') }}">Lista de Frutas</a>
                </li>
                <li class="nav-item mt-3">
                <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-sm btn-outline-light">Sair</button>
                    </form>
                </li>
            @endif
        </ul>
    </nav>

    <main class="p-4 flex-fill bg-light">
        @hasSection('content')
            @yield('content')
        @else
            {{ $slot ?? '' }}
        @endif
    </main>



    @livewireScripts
</body>
</html>
