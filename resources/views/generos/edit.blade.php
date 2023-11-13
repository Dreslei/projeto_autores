<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/generos/generos.css') }}">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Editar Genero') }}
        </h2>
    </x-slot>
    <div class="container-genero">
        <form action="{{ route('generos.update', $genero->id) }}" method="POST" class="form-genero">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nome">Título</label>
                <input type="text" class="form-control" name="nome" value="{{ $genero->nome }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
        <a href="{{ route('generos.index') }}" class="btn btn-secondary mt-4">Voltar</a>
    </div>
</x-app-layout>
