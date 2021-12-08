<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">Listado de empleados</h2>
    </x-slot>
    <div class="row justify-content-center my-5">
        <div class="mb-4">
            <a class="btn btn-outline-success" href="{{ route('empleados.create') }}">Crear Empleado</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Salario</th>
                    <th scope="col">Posicion de Trabajo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($empleados as $empleado)
                    <tr>
                        <th scope="row"> {{ $empleado->id }}</th>
                        <td> {{ $empleado->nombre }} {{ $empleado->apellido }}</td>
                        <td> {{ $empleado->salario }}</td>
                        <td> {{ $empleado->posicion_trabajo }}</td>
                        <td>
                            <div class="d-flex">
                                <a class="btn btn-outline-primary m-2" href="{{ route('empleados.show', $empleado->id) }}">Ver empleado</a>
                                <a class="btn btn-warning m-2" href="{{ route('empleados.edit', $empleado->id) }}">Editar empleado</a>
                                <form class="m-2" action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" onsubmit="return confirm('Estas seguro?');">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-outline-danger" value="Delete">
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>