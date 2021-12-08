<?php

namespace App\Http\Controllers;

use App\Http\Requests\Categorias\ActualizarCategoria;
use App\Http\Requests\Categorias\CrearCategoria;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(CrearCategoria $request)
    {
        Categoria::create([
            'nombre' => $request->input('nombre')
        ]);

        return redirect()->route('categorias.index');
    }

    public function show(Categoria $categoria)
    {
        return view('categorias.show', compact('categoria'));
    }

    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    public function update(ActualizarCategoria $request, Categoria $categoria)
    {
        
        $categoria->update($request->validated());

        return redirect()->route('categorias.index');
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();

        return redirect()->route('categorias.index');
    }
}
