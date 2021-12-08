<x-app-layout>
    <x-slot name="header">
        <h2>Ver Cita</h2>
    </x-slot>
    <div class="row justify-content-center my-5">
        <div class="card">
            <h5 class="card-header">Cita</h5>
            <div class="card-body">
                <h5 class="card-title">ID: {{ $cita->id}}</h5>
                <p class="card-text">Fecha: {{ $cita->fecha}}</p>
                <p class="card-text">Hora: {{ $cita->hora}}</p>
                <p class="card-text">Cliente: {{ $cita->cliente}}</p>
                <p class="card-text">DNI: {{ $cita->dni}}</p>
                <a href="{{ route('citas.index') }}" class="btn btn-outline-primary">Regresar a Citas</a>
            </div>
        </div>
    </div>
</x-app-layout>