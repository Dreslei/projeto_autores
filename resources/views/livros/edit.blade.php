<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Editar Livro
        </h2>
    </x-slot>
    <header>
        <link rel="stylesheet" href="{{ asset('css/livros/livros.css') }}">
    </header>
    <div class="container-livro">
        <form action="{{ route('livros.update', $livro->id) }}" method="POST" enctype="multipart/form-data" class="form-livro">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" name="titulo" value="{{ $livro->titulo }}" required>
            </div>
            <div class="form-group">
                <label for="resumo">Resumo</label>
                <textarea class="form-control" name="resumo" required>{{ $livro->resumo }}</textarea>
            </div>
            <div class="form-group">
                <label for="autor_id">Autor</label>
                <select class="form-control" name="autor_id" required>
                    <option value="">Selecione um autor</option>
                    @foreach($autores as $autor)
                        <option value="{{ $autor->id }}" {{ $autor->id == $livro->autor_id ? 'selected' : '' }}>{{ $autor->nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="genero_id">Gênero</label>
                <select class="form-control" name="genero_id" required>
                    <option value="">Selecione um gênero</option>
                    @foreach($generos as $genero)
                        <option value="{{ $genero->id }}" {{ $genero->id == $livro->genero_id ? 'selected' : '' }}>{{ $genero->nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="data_publicacao">Data de Publicação</label>
                <input type="date" class="form-control" name="data_publicacao" value="{{ $livro->data_publicacao ? \Carbon\Carbon::parse($livro->data_publicacao)->format('Y-m-d') : '' }}">
            </div>
            <div class="form-group">
                <label for="ISBN">ISBN</label>
                <input type="text" class="form-control" name="ISBN" value="{{ $livro->ISBN }}">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</x-app-layout>
