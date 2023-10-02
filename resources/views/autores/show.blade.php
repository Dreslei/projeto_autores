<x-app-layout>
    <div class="author-details-layout">
        <link rel="stylesheet" href="{{ asset('css/autores.css') }}">
        <h1>Detalhes do Autor</h1>
        <ul>
            <li><strong>ID:</strong> {{ $autor->id }}</li>
            <li><strong>Nome:</strong> {{ $autor->nome }}</li>
            <li><strong>Nacionalidade:</strong> {{  $autor->nacionalidade }}</li>
            <li><strong>Data de Nascimento:</strong> {{ date_format(new DateTime($autor->data_nascimento), 'd/m/Y') }}</li>
        </ul>
        <a href="{{ route('autores.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</x-app-layout>
