<?php

namespace App\Http\Controllers;

use App\Http\Resources\InvoiceResource;
use App\Models\Detail;
use App\Models\Invoice;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use Log;

class InvoiceController extends Controller
{
    
    public function index()
    {
        $facturasQuery = Invoice::with('user')->get();

        $facturas = InvoiceResource::collection( $facturasQuery );

        return response($facturas, Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $factura = new Invoice();
            $factura->invoice_date = Carbon::now();
            $factura->invoice_number = 'SALON-FACTURA-' . rand(); 
            $factura->isv = 0.15;
            $factura->user_id = $request->input('userId');

            $factura->save();

            $lineServices = []; 

            foreach ($request->input('servicios') as $item) {
                $servicio = Service::find($item['service_id']);

                $detalle = new Detail();
                $detalle->quantity = $item['cantidad'];
                $detalle->price = ($servicio->price * $item['cantidad']);
                $detalle->service_id = $servicio->id;

                $detalle->save();

                $lineServices[] = [
                    'nombre' => $servicio->name,
                    'monto'  => ($servicio->price * $item['cantidad']),
                    'moneda' => 'Lempiras'
                ];
            }

            DB::commit();

            $result = [
                'factura' => $factura->invoice_number,
                'metodoPago' => 'Efectivo',
                'servicios' => $lineServices
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
