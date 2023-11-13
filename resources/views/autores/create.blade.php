<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/autores/create.css') }}">
        <title>Novo Autor</title>
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Criar Autores') }}
        </h2>
    </x-slot>
    <body>
        <div class="container">
            <form action="{{ route('autores.store') }}" method="POST">
                <!-- Token CSRF para proteção contra ataques CSRF -->
                @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="data_nascimento">Data de Nascimento:</label>
                    <input type="date" name="data_nascimento" required>
                </div>
                <div class="form-group">
                    <label for="nacionalidade">Nacionalidade:</label>
                    <input type="text" name="nacionalidade" required>
                </div>
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('autores.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>

