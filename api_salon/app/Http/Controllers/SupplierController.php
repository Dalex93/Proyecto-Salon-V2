<?php

namespace App\Http\Controllers;

use App\Http\Requests\Proveedores\CrearProveedor;
use App\Http\Requests\Proveedores\EditarProveedor;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

    public function index()
    {
        $proveedores = Supplier::all();
        return view('proveedors.index', compact('proveedores'));
    }

    public function create()
    {
        return view('proveedors.create');
    }

    public function store(CrearProveedor $request)
    {
        Supplier::create([
            'nombre'   => $request->input('nombre'),
            'telefono' => $request->input('telefono'),
            'direccion' => $request->input('direccion')
        ]);

        return redirect()->route('proveedors.index');
    }

    public function show(Supplier $proveedor)
    {
        return view('proveedors.show', compact('proveedor'));
    }

    public function edit(Supplier $proveedor)
    {
        return view('proveedors.edit', compact('proveedor'));
    }

    public function update(EditarProveedor $request, Supplier $proveedor)
    {
        
        $proveedor->update($request->validated());

        return redirect()->route('proveedors.index');
    }

    public function destroy(Supplier $proveedor)
    {
        $proveedor->delete();

        return redirect()->route('proveedors.index');
    }
}
