<?php

namespace App\Http\Controllers;

use App\Http\Requests\Citas\CreateAppointments;
use App\Http\Resources\CitasResource;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AppointmentController extends Controller
{
    public function index()
    {
        $citasQuery = Appointment::with('service')->get();
        
        $citas = CitasResource::collection( $citasQuery );

        return response($citas, Response::HTTP_OK);
    }

    public function store(CreateAppointments $request)
    {
        $servicios = $request->input('servicios');

        foreach ($servicios as $servicio) {
            $cita = new Appointment([
                'date'       => $request->input('fecha'),
                'hour'       => $request->input('hora'),
                'customer'   => $request->input('cliente'),
                'email'      => $request->input('correo'),
                'dni'        => $request->input('noIdentidad'),
                'service_id' => $servicio
            ]);

            $cita->save();
        }
        
        return response([
            'ok'      => true,
            'mensaje' => 'Cita agendada exitosamente' 
        ]);
    }

    public function show(Appointment $appointment)
    {
        $cita = new CitasResource($appointment);
        return response($cita, Response::HTTP_OK);
    }

    public function update(Request $request, Appointment $appointment)
    {
        $appointment->update([
            'date'       => $request->input('fecha', $appointment->date),
            'hour'       => $request->input('hora', $appointment->hour),
            'customer'   => $request->input('cliente', $appointment->customer),
            'email'      => $request->input('correo', $appointment->email),
            'dni'        => $request->input('noIdentidad', $appointment->dni),
            'service_id' => $request->input('serviceId', $appointment->service_id)
        ]);
        
        return (new CitasResource($appointment))->additional([
            'mensaje' => 'La cita ha sido actualizada' 
        ]);
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete(); 

        return (new CitasResource($appointment))->additional([
            'mensaje' => 'La cita ha sido eliminada' 
        ]);
    }
}
