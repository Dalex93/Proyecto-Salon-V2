<?php

namespace App\Http\Controllers;

use App\Http\Requests\Citas\CreateAppointments;
use App\Http\Resources\CitasResource;
use App\Models\Appointment;
use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CitasController extends Controller
{

    public function index()
    {
        $citasQuery = Appointment::with('user', 'service')->get();

        $citas = CitasResource::collection( $citasQuery );

        return response($citas, Response::HTTP_OK);
    }

    public function store(CreateAppointments $request)
    {
        $cita = Appointment::create([
            'date'       => $request->input('fecha'),
            'hour'       => $request->input('hora'),
            'user_id'    => Auth::user()->id,
            'service_id' => $request->input('serviceId')
        ]);

        return (new CitasResource($cita))->additional([
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
            'user_id'    => Auth::user()->id,
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
