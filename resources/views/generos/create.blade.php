<x-app-layout>
<div class="container">
    <h2>Adicionar Gênero</h2>
    <form action="{{ route('generos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
</x-app-layout>
