<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class GeneroController extends Controller
{

    public function index()
    {
        $generos = Genero::all();
        return view('generos.index', compact('generos'));
    }

    public function create()
    {
        return view('generos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        Genero::create($request->all());

        return redirect()->route('generos.index')->with('success', 'Gênero criado com sucesso!');
    }

    public function show(Genero $genero)
    {
        return view('generos.show', compact('genero'));
    }

    public function edit(Genero $genero)
    {
        return view('generos.edit', compact('genero'));
    }

    public function update(Request $request, Genero $genero)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $genero->update($request->all());

        return redirect()->route('generos.index')->with('success', 'Gênero atualizado com sucesso!');
    }

    public function destroy(Genero $genero)
    {
        $genero->delete();
        return redirect()->route('generos.index')->with('success', 'Gênero deletado com sucesso!');
    }
}
