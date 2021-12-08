<x-app-layout>
    <x-slot name="header">
        <h2>Ver Detalle Factura</h2>
    </x-slot>
    <div class="row justify-content-center my-5">
        <div class="card">
            <h5 class="card-header">Factura</h5>
            <div class="card-body">
                <h5 class="card-title">ID: {{ $detalle->factura}}</h5>
                <p class="card-text">Fecha: </p>
                
                <a href="{{ route('facturas.index') }}" class="btn btn-outline-primary">Regresar a Facturas</a>
            </div>
        </div>
    </div>
</x-app-layout>