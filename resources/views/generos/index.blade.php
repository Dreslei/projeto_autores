<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/autores/index.css') }}">
    </head>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Gêneros</h1>
                <a href="{{ route('generos.create') }}" class="btn btn-primary">Adicionar Gênero</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($generos as $genero)
                        <tr>
                            <td>{{ $genero->id }}</td>
                            <td>{{ $genero->nome }}</td>
                            <td>
                                <a href="{{ route('generos.edit', $genero) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('generos.destroy', $genero) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Deletar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
