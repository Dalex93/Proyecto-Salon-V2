<?php

namespace App\Http\Controllers;

use App\Http\Requests\Servicios\CrearServicio;
use App\Http\Requests\Servicios\EditarServicio;
use App\Models\Categoria;
use App\Models\Empleado;
use App\Models\Producto;
use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {
        $servicios = Servicio::all();
        return view('servicios.index', compact('servicios'));
    }

    public function create()
    {
        $empleados = Empleado::all();
        $categorias = Categoria::all();
        $productos = Producto::all();

        return view('servicios.create', compact('empleados', 'categorias' ,'productos'));
    }

    public function store(CrearServicio $request)
    {
        Servicio::create([
            'nombre'      => $request->input('nombre'),
            'precio'      => $request->input('precio'),
            'duracion'    => $request->input('duracion'),
            'product_id'  => $request->input('product_id'),
            'category_id' => $request->input('categoriaId'),
            'empleado_id' => $request->input('empleado_id')
        ]);

        return redirect()->route('servicios.index');
    }

    public function show(Servicio $servicio)
    {
        return view('servicios.show', compact('servicio'));
    }

    public function edit(Servicio $servicio)
    {
        $empleados = Empleado::all();
        $categorias = Categoria::all();
        $productos = Producto::all();

        return view('servicios.edit', compact('servicio', 'empleados', 'categorias','productos'));
    }

    public function update(EditarServicio $request, Servicio $servicio)
    {
        
        $servicio->update($request->validated());

        return redirect()->route('servicios.index');
    }

    public function destroy(Servicio $servicio)
    {
        $servicio->delete();

        return redirect()->route('servicios.index');
    }
}
