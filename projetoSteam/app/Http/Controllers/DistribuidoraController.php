<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distribuidora;

class DistribuidoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $distribuidoras = Distribuidora::all();
        return view('distribuidoras.index', compact('distribuidoras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('distribuidoras.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:100',
            'descricao' => 'string|max:255',
        ]);

        Distribuidora::create($request->all());

        return redirect()->route('distribuidoras.index');
    }

    /**
     * Show the specified resource.
     */
    public function show(string $id)
    {
        $distribuidora = Distribuidora::findOrFail($id);
        return view('distribuidoras.show', compact('distribuidora'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $distribuidora = Distribuidora::findOrFail($id);
        return view('distribuidoras.edit', compact('distribuidora'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $distribuidora = Distribuidora::findOrFail($id);

        $distribuidora->update([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
        ]);

        return redirect()->route('distribuidoras.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $distribuidora = Distribuidora::findOrFail($id);
        $distribuidora->delete();

        return redirect()->route('distribuidoras.index');
    }
}
