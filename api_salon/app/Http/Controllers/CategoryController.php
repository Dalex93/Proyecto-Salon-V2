<?php

namespace App\Http\Controllers;

use App\Http\Requests\Categorias\CreateCategory;
use App\Http\Resources\CategoriaResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    public function index()
    {
        $categorias = CategoriaResource::collection( Category::all() );

        return response($categorias, Response::HTTP_OK);
    }

    public function store(CreateCategory $request)
    {
        $categoria = Category::create([
            'name' => $request->input('nombre')
        ]);

        return (new CategoriaResource($categoria))->additional([
            'mensaje' => 'Categoria agregada exitosamente' 
        ]);
    }

    public function show(Category $category)
    {
        $categoria = new CategoriaResource($category);
        return response($categoria, Response::HTTP_OK);
    }

    public function update(Request $request, Category $category)
    {
        $category->fill(['name' => $request->input('nombre', $category->name) ]);
        $category->update();

        return (new CategoriaResource($category))->additional([
            'mensaje' => 'La categoria ' . $category->name . ' ha sido actualizada' 
        ]);
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return (new CategoriaResource($category))->additional([
            'mensaje' => 'La categoria ' . $category->name . ' ha sido eliminada' 
        ]);
    }
}
