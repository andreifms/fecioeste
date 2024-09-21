<?php

namespace App\Http\Controllers;

use App\Models\Avaliador;
use Illuminate\Http\Request;

class AvaliadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $avaliadores = Avaliador::with('user')->get();
        return view('avaliadores.index', compact('avaliadores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('avaliadores.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'tipo_avaliador' => 'required|string|max:255',
        ]);
        Avaliador::create($validated);
        return redirect()->route('avaliadores.index')->with('success', 'Avaliador criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Avaliador $avaliador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $avaliador = Avaliador::findOrFail($id);
        $users = User::all();
        return view('avaliadores.edit', compact('avaliador', 'users'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'tipo_avaliador' => 'required|string|max:255',
        ]);
        $avaliador = Avaliador::findOrFail($id);
        $avaliador->update($validated);
        return redirect()->route('avaliadores.index')->with('success', 'Avaliador atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $avaliador = Avaliador::findOrFail($id);
        $avaliador->delete();
        return redirect()->route('avaliadores.index')->with('success', 'Avaliador excluído com sucesso!');
    }
}
