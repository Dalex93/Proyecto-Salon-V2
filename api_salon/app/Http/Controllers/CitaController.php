<?php

namespace App\Http\Controllers;

use App\Http\Requests\Citas\CrearCita;
use App\Http\Requests\Citas\EditarCita;
use App\Models\Cita;
use App\Models\CitasServicio;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CitaController extends Controller
{
    public function index()
    {
        $citas = Cita::with('servicios')->get();
        
        return view('citas.index', compact('citas'));
    }

    public function create()
    {
        $servicios = Servicio::all();

        return view('citas.create', compact('servicios'));
    }

    public function store(CrearCita $request)
    {
        try {
            DB::beginTransaction();

            $cita = new Cita();
            $cita->fecha = $request->input('fecha');
            $cita->hora = $request->input('hora');
            $cita->cliente = $request->input('cliente');
            $cita->email = $request->input('email');
            $cita->dni = $request->input('dni');

            $cita->save();

            foreach ($request->input('servicios') as $item) {
                $citaServicio = new CitasServicio();
                $citaServicio->cita_id = $cita->id;
                $citaServicio->cantidad = $item['cantidad'];
                $citaServicio->servicio_id = $item['servicioId'];

                $citaServicio->save();
            }

            DB::commit();

            return redirect()->route('citas.index');

        } catch (\Throwable $th) {
           DB::rollBack();
        }
        

        return redirect()->route('citas.index');
    }

    public function show(Cita $cita)
    {
        return view('citas.show', compact('cita'));
    }

    public function edit(Cita $cita)
    {
        $servicios = Servicio::all();

        return view('citas.edit', compact('cita', 'servicios'));
    }

    public function update(EditarCita $request, Cita $cita)
    {
        
        $cita->update($request->validated());

        return redirect()->route('citas.index');
    }

    public function destroy(Cita $cita)
    {
        $cita->delete();

        return redirect()->route('citas.index');
    }
}
