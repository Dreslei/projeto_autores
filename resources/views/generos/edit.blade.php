<x-app-layout>
<div class="container">
    <h2>Editar Gênero</h2>
    <form action="{{ route('generos.update', $genero) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" value="{{ $genero->nome }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
</x-app-layout>
