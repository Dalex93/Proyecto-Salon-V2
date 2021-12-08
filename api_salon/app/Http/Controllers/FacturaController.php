<?php

namespace App\Http\Controllers;

use App\Models\Detalle;
use App\Models\Factura;
use App\Models\Servicio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacturaController extends Controller
{
    public function index()
    {
        $facturas = Detalle::with('factura', 'servicio')->get();
       
        return view('facturas.index', compact('facturas'));
    }

    public function create()
    {
        $servicios = Servicio::all();

        return view('facturas.create', compact('servicios'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $totalPagar = 0;

            $factura = new Factura();
            $factura->fecha_factura = Carbon::now();
            $factura->numero_factura = 'SALON-FACTURA-' . rand(); 
            $factura->isv = 0.15;
            $factura->cliente = $request->input('cliente');

            $factura->save();

            $lineServices = []; 

            foreach ($request->input('servicios') as $item) {
                $servicio = Servicio::find($item['servicioId']);

                $monto = ($servicio->precio * $item['cantidad']) ;

                $detalle = new Detalle();
                $detalle->cantidad = $item['cantidad'];
                $detalle->precio = $monto;
                $detalle->servicio_id = $servicio->id;
                $detalle->factura_id = $factura->id;

                $detalle->save();

                $totalPagar += $monto;

                $lineServices[] = [
                    'nombre' => $servicio->name,
                    'monto'  => $monto,
                    'moneda' => 'Lempiras'
                ];
            }

            DB::commit();

            $result = [
                'factura' => $factura->numero_factura,
                'metodoPago' => 'Efectivo',
                'servicios' => $lineServices,
                'totalPagar' => $totalPagar . ' Lempiras'
            ];

            return redirect()->route('facturas.index');

        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }

    public function show(Factura $factura)
    {
        $detalle = Detalle::where('factura_id', $factura->id)->with('factura', 'servicio')->first();
        
        return view('facturas.show', compact('factura', 'detalle'));
    }

    public function destroy(Factura $factura)
    {
        $factura->delete();

        return redirect()->route('facturas.index');
    }
}
