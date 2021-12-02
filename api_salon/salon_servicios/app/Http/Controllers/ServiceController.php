<?php

namespace App\Http\Controllers;

use App\Http\Requests\Servicios\CreateService;
use App\Http\Resources\ServicioResource;
use App\Models\Service;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ServiceController extends Controller
{

    public function index()
    {
        $serviciosQuery = Service::with('product', 'employee')->get();

        $servicios = ServicioResource::collection( $serviciosQuery );

        return response($servicios, Response::HTTP_OK);
    }

    public function store(CreateService $request)
    {
        $servicio = Service::create([
            'name'        => $request->input('nombre'),
            'price'       => $request->input('precio'),
            'duration'    => $request->input('duracion'),
            'product_id'  => $request->input('productId'),
            'employee_id' => $request->input('employeeId') 
        ]);

        return (new ServicioResource($servicio))->additional([
            'mensaje' => 'Servicio agregado exitosamente' 
        ]);
    }

    public function show(Service $service)
    {
        $servicio = new ServicioResource($service);
        return response($servicio, Response::HTTP_OK);
    }

    public function update(Request $request, Service $service)
    {
        $service->update([
            'name'        => $request->input('nombre', $service->name),
            'price'       => $request->input('precio', $service->price),
            'duration'    => $request->input('duracion', $service->duration),
            'product_id'  => $request->input('productId', $service->product_id),
            'employee_id' => $request->input('employeeId', $service->employee_id) 
        ]);
        
        return (new ServicioResource($service))->additional([
            'mensaje' => 'El servicio ' . $service->name . ' ha sido actualizado' 
        ]);
    }

    public function destroy(Service $service)
    {
        $service->delete(); 

        return (new ServicioResource($service))->additional([
            'mensaje' => 'El servicio ' . $service->name . ' ha sido eliminado' 
        ]);
    }
}
