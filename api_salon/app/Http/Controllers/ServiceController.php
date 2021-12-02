<?php

namespace App\Http\Controllers;

use App\Http\Requests\Servicios\CreateService;
use App\Http\Resources\ServiceSingleResource;
use App\Http\Resources\ServicioResource;
use App\Models\Service;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ServiceController extends Controller
{
    public function index()
    {
        $serviciosQuery = Service::all();
        
        $servicios = ServicioResource::collection( $serviciosQuery );

        return response($servicios, Response::HTTP_OK);
    }

    public function store(CreateService $request)
    {

        $data = [
            'name'        => $request->input('nombre'),
            'price'       => $request->input('precio'),
            'duration'    => $request->input('duracion'),
            'product_id'  => $request->input('productId'),
            'employee_id' => $request->input('employeeId') 
        ];

        $servicio = new Service($data);
        $servicio->save();

        return (new ServiceSingleResource($servicio))->additional([
            'mensaje' => 'Servicio agregado exitosamente' 
        ]);
    }

    public function show(Service $service)
    {
        $servicio = new ServiceSingleResource($service);
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
        
        return (new ServiceSingleResource($service))->additional([
            'mensaje' => 'El servicio ' . $service->name . ' ha sido actualizado' 
        ]);
    }

    public function destroy(Service $service)
    {
        $service->delete(); 

        return (new ServiceSingleResource($service))->additional([
            'mensaje' => 'El servicio ' . $service->name . ' ha sido eliminado' 
        ]);
    }
}
