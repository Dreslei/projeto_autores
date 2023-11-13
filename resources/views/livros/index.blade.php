<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Livros
        </h2>
    </x-slot>
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Sucesso!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <link rel="stylesheet" href="{{ asset('css/livros/livros.css') }}">

    <div class="container-livro">

        <a href="{{ route('livros.create') }}" class="btn btn-primary">Adicionar Livro</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Data de Publicação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($livros as $livro)
                    <tr>
                        <td>{{ $livro->id }}</td>
                        <td>{{ $livro->titulo }}</td>
                        <td>{{ $livro->autor->nome }}</td>
                        <td>{{ (new DateTime($livro->data_publicacao))->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('livros.show', $livro->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('livros.edit', $livro->id) }}" class="btn btn-warning">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $livros->links() }}
    </div>
</x-app-layout>
