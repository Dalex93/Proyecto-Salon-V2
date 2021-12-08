<x-app-layout>
    <x-slot name="header">
        <h2>Ver Empleado</h2>
    </x-slot>
    <div class="row justify-content-center my-5">
        <div class="card">
            <h5 class="card-header">Empleado</h5>
            <div class="card-body">
                <h5 class="card-title">ID: {{ $empleado->id}}</h5>
                <p class="card-text">Nombre: {{ $empleado->nombre }} {{ $empleado->apellido }} </p>
                <p class="card-text">Salario: {{ $empleado->salario }} </p>
                <p class="card-text">Posicion de trabajo: {{ $empleado->posicion_trabajo }} </p>
                <a href="{{ route('empleados.index') }}" class="btn btn-outline-primary">Regresar a Empleados</a>
            </div>
        </div>
    </div>
</x-app-layout>