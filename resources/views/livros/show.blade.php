<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Detalhes do Livro
        </h2>
    </x-slot>

    <link rel="stylesheet" href="{{ asset('css/livros/livros.css') }}">

    <div class="container-livro form-livro">
        <h3>{{ $livro->titulo }}</h3>
        <p><strong>Autor:</strong> {{ $livro->autor->nome }}</p>
        <p><strong>Gênero:</strong> {{ $livro->genero->nome }}</p>
        <p><strong>Data de Publicação:</strong> {{ $livro->data_publicacao }}</p>
        <p><strong>ISBN:</strong> {{ $livro->ISBN }}</p>
        <p><strong>Resumo:</strong> {{ $livro->resumo }}</p>
        <a href="{{ route('livros.index') }}" class="btn btn-secondary mt-4">Voltar</a>
    </div>
</x-app-layout>
