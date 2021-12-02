<?php

namespace App\Http\Controllers;

use App\Http\Requests\Proveedores\CreateSupplier;
use App\Http\Resources\ProveedorResource;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores = ProveedorResource::collection( Supplier::all() );

        return response($proveedores, Response::HTTP_OK);
    }

    public function store(CreateSupplier $request)
    {
        $product = Supplier::create([
            'name'    => $request->input('name'),
            'phone'   => $request->input('phone'),
            'address' => $request->input('address')
        ]);

        return (new ProveedorResource($product))->additional([
            'mensaje' => 'Proveedor agregado exitosamente' 
        ]);
    }

    public function show(Supplier $supplier)
    {
        $supplier = new ProveedorResource($supplier);
        return response($supplier, Response::HTTP_OK);
    }

    public function update(Request $request, Supplier $supplier)
    {
        $supplier->update([
            'name'    => $request->input('name', $supplier->name),
            'phone'   => $request->input('phone', $supplier->phone),
            'address' => $request->input('address', $supplier->address)
        ]);
        
        return (new ProveedorResource($supplier))->additional([
            'mensaje' => 'El proveedor ' . $supplier->name . ' ha sido actualizado' 
        ]);
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete(); 

        return (new ProveedorResource($supplier))->additional([
            'mensaje' => 'El proveedor ' . $supplier->name . ' ha sido eliminado' 
        ]);
    }
}
