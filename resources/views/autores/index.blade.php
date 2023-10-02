<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/autores/index.css') }}">
    <div class="container">
        {{-- <h1>Lista de Autores</h1> --}}
        <br>
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
    </div>
</x-app-layout>

