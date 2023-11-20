<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/autores/index.css') }}">

    <script src="{{ asset('js/autores.js') }}"></script>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Lista Autores') }}
        </h2>
    </x-slot>
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
                            <form action="{{ route('autores.destroy', $autor->id) }}" id="deletarForm" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="deletarAutor()">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        {{ $autores->links() }}
        <br>
    </div>
</x-app-layout>

