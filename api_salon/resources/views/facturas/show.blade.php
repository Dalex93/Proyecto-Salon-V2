<x-app-layout>
    <x-slot name="header">
        <h2>Ver Factura</h2>
    </x-slot>
    <div class="row justify-content-center my-5">
        <div class="card">
            <h5 class="card-header">Factura</h5>
            <div class="card-body">
                <h5 class="card-title">ID: {{ $factura->id}}</h5>
                <p class="card-text">Fecha: {{ $factura->fecha_factura}}</p>
                <p class="card-text">Factura No: {{ $factura->numero_factura}}</p>
                <p class="card-text">Cliente: {{ $factura->cliente}}</p>
                <p class="card-text">Servicio: {{ $detalle->servicio->nombre}}</p>
                <p class="card-text">Impuesto ISV: {{ ($factura->isv)* 100 }} %</p>
                <p class="card-text">Total: {{ $detalle->precio}}</p>
               
                <a href="{{ route('facturas.index') }}" class="btn btn-outline-primary">Regresar a Facturas</a>
            </div>
        </div>
    </div>
</x-app-layout>