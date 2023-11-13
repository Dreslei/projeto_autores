<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-white leading-tight">
        {{ __('Adicionar Generos') }}
    </h2>
</x-slot>
<div class="container">
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
