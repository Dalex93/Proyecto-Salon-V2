<?php

namespace App\Http\Controllers;

use App\Http\Requests\Productos\ActualizarProducto;
use App\Http\Requests\Productos\CrearProducto;
use App\Models\Categoria;
use App\Models\Inventario;
use App\Models\Producto;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        $proveedores = Supplier::all();

        return view('productos.create', compact('categorias', 'proveedores'));
    }

    public function store(CrearProducto $request)
    {
        $producto = Producto::create([
            'nombre'        => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio'       => $request->input('precio'),
            'marca'        => $request->input('marca'),
            'category_id' => $request->input('categoriaId'),
            'supplier_id' => $request->input('supplierId') 
        ]);

        Inventario::create([
            'cantidad_disponible' => 1,
            'product_id'          => $producto->id
        ]);

        return redirect()->route('productos.index');
    }

    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }

    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();
        $proveedores = Supplier::all();

        return view('productos.edit', compact('producto', 'categorias', 'proveedores'));
    }

    public function update(ActualizarProducto $request, Producto $producto)
    {
        
        $producto->fill([
            'nombre'       => $request->input('nombre', $producto->nombre),
            'descripcion'  => $request->input('descripcion', $producto->descripcion),
            'precio'       => $request->input('precio', $producto->precio),
            'marca'        => $request->input('marca', $producto->marca),
            'category_id'  => $request->input('categoriaId', $producto->category_id),
            'supplier_id'  => $request->input('supplierId', $producto->supplier_id) 
        ]);

        $producto->update();

        return redirect()->route('productos.index');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('productos.index');
    }
}
