<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plataforma;

class PlataformaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plataformas = Plataforma::all();
        return view('plataforma.index', compact('plataformas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('plataforma.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
        ]);

        Plataforma::create($request->all());
        return redirect()->route('plataforma.index')->with('success', 'Plataforma cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $plataforma = Plataforma::findOrFail($id);
        return view('plataforma.show', compact('plataforma'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $plataforma = Plataforma::findOrFail($id);
        return view('plataforma.edit', compact('plataforma'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $plataforma = Plataforma::findOrFail($id);

        $request->validate([
            'nome' => 'required',
        ]);

        $plataforma->update($request->all());
        return redirect()->route('plataforma.index')->with('success', 'Plataforma atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $plataforma = Plataforma::findOrFail($id);
        $plataforma->delete();

        return redirect()->route('plataforma.index')->with('success', 'Plataforma removida com sucesso!');
    }
}
