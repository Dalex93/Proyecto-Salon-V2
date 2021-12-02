<?php

namespace App\Http\Controllers;

use App\Http\Resources\InvoiceResource;
use App\Models\Detail;
use App\Models\Invoice;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class InvoiceController extends Controller
{
    public function index()
    {
        $facturasQuery = Invoice::all();

        $facturas = InvoiceResource::collection( $facturasQuery );

        return response($facturas, Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $totalPagar = 0;

            $factura = new Invoice();
            $factura->invoice_date = Carbon::now();
            $factura->invoice_number = 'SALON-FACTURA-' . rand(); 
            $factura->isv = 0.15;
            $factura->customer = $request->input('cliente');

            $factura->save();

            $lineServices = []; 

            foreach ($request->input('servicios') as $item) {
                $servicio = Service::find($item['servicioId']);

                $monto = ($servicio->price * $item['cantidad']) * 1.15;

                $detalle = new Detail();
                $detalle->quantity = $item['cantidad'];
                $detalle->price = $monto;
                $detalle->service_id = $servicio->id;
                $detalle->invoice_id = $factura->id;

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
                'factura' => $factura->invoice_number,
                'metodoPago' => 'Efectivo',
                'servicios' => $lineServices,
                'totalPagar' => $totalPagar . ' Lempiras'
            ];

            return response($result, Response::HTTP_OK);

        } catch (\Throwable $th) {
            DB::rollBack();
            return response([
                'error' => $th->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    public function show(Invoice $invoice)
    {
        $factura = new InvoiceResource($invoice);
        return response($factura, Response::HTTP_OK);
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete(); 
        
        return (new InvoiceResource($invoice))->additional([
            'mensaje' => 'La factura con numero ' . $invoice->invoice_number . ' ha sido eliminada' 
        ]);
    }
}
