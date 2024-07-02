<?php

namespace App\Http\Controllers;
use App\Models\Jogo;
use App\Models\Distribuidora;
use App\Models\Genero;
use Illuminate\Http\Request;


class JogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
    {
        $jogo = Jogo::all(); // Use the Jogo model
        return view('jogos.index', compact('jogo'));
    }


    /**
     * Show the form for creating a new resource.
     */
   // JogosController.php
public function create()
{
    $distribuidoras = Distribuidora::all();
    $generos = Genero::all();

    return view('jogos.create', compact('distribuidoras', 'generos'));
}


    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'nome' => 'required',
        'descricao' => 'required',
        'requisitos' => 'required',
        'imagens' => 'nullable|url', // Validate the image URL
        'avaliacao' => 'required|numeric|between:0,10',
        'data_lancamento' => 'required|date',
        'distribuidoras_id' => 'required|exists:distribuidoras,id',
        'genero_id' => 'required|exists:generos,id',
    ]);

    // Create a new Jogo instance
    $jogo = new Jogo($validatedData);

    // Save the game data to the database
    $jogo->save();

    // Redirect or return a response
    return redirect()->route('jogos.index')->with('success', 'Jogo criado com sucesso!');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
{
    $jogo = Jogo::findOrFail($id);
    $generos = Genero::all();
    $distribuidoras = Distribuidora::all(); // Retrieve all distribuidoras
    return view('jogos.show', compact('jogo', 'generos', 'distribuidoras'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jogo = Jogo::findOrFail($id);
        $generos = Genero::all();
        $distribuidoras = Distribuidora::all();
        return view('jogos.edit', compact('jogo', 'generos'));
    }

    /**
     * Update the specified resource in storage.
     */
  public function update(Request $request, $id)
{
    // Validate the request data
    $validatedData = $request->validate([
        'nome' => 'required',
        'descricao' => 'required',
        'genero_id' => 'required|exists:generos,id',
        'data_lancamento' => 'required|date',
        'avaliacao' => 'required|numeric|between:0,10',
        'imagens' => 'required|url',
    ]);

    // Find the game record
    $jogo = Jogo::findOrFail($id);

    // Update the game record with the validated data
    $jogo->update($validatedData);

    // Redirect to the desired page (e.g., index)
    return redirect()->route('jogos.index')->with('success', 'Game updated successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $jogo = Jogo::findOrFail($id);
    $jogo->delete();

    return redirect()->route('jogos.index')
        ->with('success', 'Jogo removido com sucesso!');
}
}
