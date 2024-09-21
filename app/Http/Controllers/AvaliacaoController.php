<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use App\Models\QuesitoAvaliativo;
use App\Models\Avaliador;
use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
    /**
     * Exibe uma lista de todas as avaliações.
     */
    public function index()
    {
        // Carregar todas as avaliações, incluindo o avaliador e o quesito avaliativo.
        $avaliacoes = Avaliacao::with(['avaliador', 'quesitoAvaliativo'])->get();

        // Retorna a view com a listagem de avaliações
        return view('avaliacoes.index', compact('avaliacoes'));
    }

    /**
     * Exibe o formulário para criar uma nova avaliação.
     */
    public function create()
    {
        // Carregar todos os quesitos avaliativos e avaliadores para preencher o formulário
        $quesitosAvaliativos = QuesitoAvaliativo::all();
        $avaliadores = Avaliador::all();

        // Retorna a view de criação de avaliação
        return view('avaliacoes.create', compact('quesitosAvaliativos', 'avaliadores'));
    }

    /**
     * Armazena uma nova avaliação no banco de dados.
     */
    public function store(Request $request)
    {
        // Validação dos dados recebidos
        $validated = $request->validate([
            'quesito_avaliativo_id' => 'required|exists:quesito_avaliativos,id',
            'avaliador_id' => 'required|exists:avaliadors,id',
            'nota' => 'required|integer|min:0|max:10', // Nota entre 0 e 10
        ]);

        // Criar a nova avaliação
        Avaliacao::create($validated);

        // Redireciona para a página de listagem com uma mensagem de sucesso
        return redirect()->route('avaliacoes.index')->with('success', 'Avaliação criada com sucesso!');
    }

    /**
     * Exibe o formulário de edição de uma avaliação existente.
     */
    public function edit($id)
    {
        // Carregar a avaliação pelo ID
        $avaliacao = Avaliacao::findOrFail($id);

        // Carregar os quesitos avaliativos e avaliadores para preencher o formulário de edição
        $quesitosAvaliativos = QuesitoAvaliativo::all();
        $avaliadores = Avaliador::all();

        // Retornar a view de edição
        return view('avaliacoes.edit', compact('avaliacao', 'quesitosAvaliativos', 'avaliadores'));
    }

    /**
     * Atualiza uma avaliação existente no banco de dados.
     */
    public function update(Request $request, $id)
    {
        // Validação dos dados recebidos
        $validated = $request->validate([
            'quesito_avaliativo_id' => 'required|exists:quesito_avaliativos,id',
            'avaliador_id' => 'required|exists:avaliadors,id',
            'nota' => 'required|integer|min:0|max:10', // Nota entre 0 e 10
        ]);

        // Carregar a avaliação pelo ID
        $avaliacao = Avaliacao::findOrFail($id);

        // Atualizar a avaliação com os novos dados
        $avaliacao->update($validated);

        // Redireciona para a página de listagem com uma mensagem de sucesso
        return redirect()->route('avaliacoes.index')->with('success', 'Avaliação atualizada com sucesso!');
    }

    /**
     * Exclui uma avaliação do banco de dados.
     */
    public function destroy($id)
    {
        // Carregar a avaliação pelo ID
        $avaliacao = Avaliacao::findOrFail($id);

        // Deletar a avaliação
        $avaliacao->delete();

        // Redireciona para a página de listagem com uma mensagem de sucesso
        return redirect()->route('avaliacoes.index')->with('success', 'Avaliação excluída com sucesso!');
    }
}
