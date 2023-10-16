<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Editar Livro
        </h2>
    </x-slot>

    <link rel="stylesheet" href="{{ asset('css/livros/livros.css') }}">

    <div class="container-livro">
        <form action="{{ route('livros.update', $livro->id) }}" method="POST" class="form-livro">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" name="titulo" value="{{ $livro->titulo }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
        <a href="{{ route('livros.index') }}" class="btn btn-secondary mt-4">Voltar</a>
    </div>
</x-app-layout>
