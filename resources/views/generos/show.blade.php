<x-app-layout>
    <div class="container">
        <h2>Detalhes do Gênero</h2>
        <p><strong>ID:</strong> {{ $genero->id }}</p>
        <p><strong>Nome:</strong> {{ $genero->nome }}</p>
        <a href="{{ route('generos.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</x-app-layout>

