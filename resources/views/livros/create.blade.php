<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Adicionar Livro
        </h2>
    </x-slot>
    <header>
        <link rel="stylesheet" href="{{ asset('css/livros/livros.css') }}">
    </header>
    <div class="container-livro">
        <form action="{{ route('livros.store') }}" method="POST" class="form-livro">
            @csrf
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" name="titulo" required>
            </div>
            <div class="form-group">
                <label for="resumo">Resumo</label>
                <textarea class="form-control" name="resumo" required></textarea>
            </div>
            <div class="form-group">
                <label for="autor_id">Autor</label>
                <select class="form-control" name="autor_id" required>
                    <option value="">Selecione um autor</option>
                    @foreach($autores as $autor)
                        <option value="{{ $autor->id }}">{{ $autor->nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="genero_id">Gênero</label>
                <select class="form-control" name="genero_id" required>
                    <option value="">Selecione um genero</option>
                    @foreach($generos as $genero)
                        <option value="{{ $genero->id }}">{{ $genero->nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="data_publicacao">Data de Publicação</label>
                <input type="date" class="form-control" name="data_publicacao">
            </div>
            <div class="form-group">
                <label for="ISBN">ISBN</label>
                <input type="text" class="form-control" name="ISBN">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</x-app-layout>
