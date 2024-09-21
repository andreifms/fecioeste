<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Escola;
use App\Models\Orientador;
use App\Models\Projeto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projetos = Projeto::with(['area', 'escola', 'orientador', 'coorientador'])->get();

        // Retornar a view de listagem de projetos, passando os projetos para a view
        return view('projetos.index', compact('projetos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $areas = Area::all();
        $escolas = Escola::all();
        $orientadores = Orientador::all();

        // Retornar a view de criação de projeto, passando as áreas, escolas e orientadores
        return view('projetos.create', compact('areas', 'escolas', 'orientadores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'nivel' => 'required|string|max:255',
            'area_id' => 'required|exists:areas,id',
            'escola_id' => 'required|exists:escolas,id',
            'orientador_id' => 'required|exists:orientadors,id',
            'coorientador_id' => 'nullable|exists:orientadors,id',
            'convidado' => 'required|boolean',
        ]);

        // Criar um novo projeto com os dados validados
        Projeto::create($validated);

        // Redirecionar para a página de listagem de projetos com uma mensagem de sucesso
        return redirect()->route('projetos.index')->with('success', 'Projeto criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projeto $projeto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projeto $projeto)
    {
        $projeto = Projeto::findOrFail($id);

        // Buscar todas as áreas, escolas e orientadores para preencher os selects no formulário
        $areas = Area::all();
        $escolas = Escola::all();
        $orientadores = Orientador::all();

        // Retornar a view de edição de projeto, passando o projeto e os dados auxiliares
        return view('projetos.edit', compact('projeto', 'areas', 'escolas', 'orientadores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projeto $projeto)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'nivel' => 'required|string|max:255',
            'area_id' => 'required|exists:areas,id',
            'escola_id' => 'required|exists:escolas,id',
            'orientador_id' => 'required|exists:orientadors,id',
            'coorientador_id' => 'nullable|exists:orientadors,id',
            'convidado' => 'required|boolean',
        ]);

        // Buscar o projeto pelo id
        $projeto = Projeto::findOrFail($id);

        // Atualizar o projeto com os novos dados
        $projeto->update($validated);

        // Redirecionar para a página de listagem de projetos com uma mensagem de sucesso
        return redirect()->route('projetos.index')->with('success', 'Projeto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projeto $projeto)
    {
        $projeto = Projeto::findOrFail($id);

        // Deletar o projeto
        $projeto->delete();

        // Redirecionar para a página de listagem de projetos com uma mensagem de sucesso
        return redirect()->route('projetos.index')->with('success', 'Projeto excluído com sucesso!');
    }
}
