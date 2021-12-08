<x-app-layout>
    <x-slot name="header">
        <h2>Ver Servicio</h2>
    </x-slot>
    <div class="row justify-content-center my-5">
        <div class="card">
            <h5 class="card-header">Servicio</h5>
            <div class="card-body">
                <h5 class="card-title">ID: {{ $servicio->id}}</h5>
                <p class="card-text">Nombre: {{ $servicio->nombre}}</p>
                <p class="card-text">Descripcion: {{ $servicio->duracion}}</p>
                <p class="card-text">Precio: {{ $servicio->precio}}</p>
                <p class="card-text">Empleado: {{ $servicio->empleado_id}}</p>
                <p class="card-text">Producto: {{ $servicio->product_id}}</p>
                <a href="{{ route('servicios.index') }}" class="btn btn-outline-primary">Regresar a servicios</a>
            </div>
        </div>
    </div>
</x-app-layout>