<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    // Método para exibir a lista de autores
    public function index()
    {
        // Obtém todos os autores do banco de dados usando o model 'Autor'
        $autores = Autor::all();
        // Retorna a view 'autores.index' e passa os autores como um parâmetro
        return view('autores.index', compact('autores'));
        // compact -> Cria um array associativo.
    }

    // Método para exibir o formulário de criação de autor
    public function create()
    {
        // Retorna a view 'autores.create'
        return view('autores.create');
    }

    // Método para armazenar os dados do novo autor no banco de dados
    public function store(Request $request)
    {
        // Cria uma nova instância do model 'Autor' com os dados fornecidos no request
        $autor = new Autor([
            'nome' => $request->input('nome'),
            'data_nascimento' => $request->input('data_nascimento'),
            'nacionalidade' => $request->input('nacionalidade')
        ]);
        // Salva o autor no banco de dados
        $autor->save();
        // Redireciona para a rota 'autores.index' após salvar
        return redirect()->route('autores.create');
    }

    // Método para exibir os detalhes de um autor específico
    public function show($id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $autor = Autor::findOrFail($id);
        // Retorna a view 'autores.show' e passa o autor como parâmetro
        return view('autores.show', compact('autor'));
    }

    // Método para exibir o formulário de edição de autor
    public function edit($id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $autor = Autor::findOrFail($id);
        // Retorna a view 'autores.edit' e passa o autor como parâmetro
        return view('autores.edit', compact('autor'));
    }

    // Método para atualizar os dados do autor no banco de dados
    public function update(Request $request, $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $autor = Autor::findOrFail($id);
        // Atualiza os campos do autor com os dados fornecidos no request
        $autor->nome = $request->input('nome');
        $autor->data_nascimento = $request->input('data_nascimento');
        $autor->nacionalidade = $request->input('nacionalidade');
        // Salva as alterações no autor
        $autor->save();
        // Redireciona para a rota 'autores.index' após salvar
        return redirect()->route('autores.index');
    }

    // Método para excluir um autor do banco de dados
    public function destroy($id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $autor = Autor::findOrFail($id);
        // Exclui o autor do banco de dados
        $autor->delete();
        // Redireciona para a rota 'autores.index' após excluir
        return redirect()->route('autores.index');
    }
}
