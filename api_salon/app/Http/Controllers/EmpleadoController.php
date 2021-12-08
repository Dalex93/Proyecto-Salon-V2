<?php

namespace App\Http\Controllers;

use App\Http\Requests\Empleados\CrearEmpleado;
use App\Http\Requests\Empleados\EditarEmpleado;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados'));
    }

    public function create()
    {
        return view('empleados.create');
    }

    public function store(CrearEmpleado $request)
    {
        Empleado::create([
            'nombre'           => $request->input('nombre'),
            'apellido'         => $request->input('apellido'),
            'salario'          => $request->input('salario'),
            'posicion_trabajo' => $request->input('posicion_trabajo')
        ]);

        return redirect()->route('empleados.index');
    }

    public function show(Empleado $empleado)
    {
        return view('empleados.show', compact('empleado'));
    }

    public function edit(Empleado $empleado)
    {
        return view('empleados.edit', compact('empleado'));
    }

    public function update(EditarEmpleado $request, Empleado $empleado)
    {
        
        $empleado->update($request->validated());

        return redirect()->route('empleados.index');
    }

    public function destroy(Empleado $empleado)
    {
        $empleado->delete();

        return redirect()->route('empleados.index');
    }
}
