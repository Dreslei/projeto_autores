<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/autores/index.css') }}">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Lista Autores') }}
        </h2>
    </x-slot>
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Sucesso!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <div class="container">
        <form action="{{ route('autores.index') }}" method="GET" class="search-form">
            <div class="search-container">
                <input type="text" name="search" placeholder="Pesquisar autores..." value="{{ request()->query('search') }}" class="search-input">
                <button type="submit" class="search-button">Pesquisar</button>
            </div>
        </form>
        <a href="{{ route('autores.create') }}" class="btn btn-primary">Novo Autor</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Nacionalidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($autores as $autor)
                    <tr>
                        <td class="colunas">{{ $autor->id }}</td>
                        <td id="nome">{{ $autor->nome }}</td>
                        <td class="colunas">{{ date_format(new DateTime($autor->data_nascimento), 'd/m/Y') }}</td>
                        <td>{{ $autor->nacionalidade }}</td>
                        <td>
                            <a href="{{ route('autores.show', $autor->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('autores.edit', $autor->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('autores.destroy', $autor->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $autores->links() }}
    </div>
</x-app-layout>

