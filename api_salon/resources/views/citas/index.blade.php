<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">Listado de citas</h2>
    </x-slot>
    <div class="row justify-content-center my-5">
        <div class="mb-4">
            <a class="btn btn-outline-success" href="{{ route('citas.create') }}">Crear Cita</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fecha de la cita</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Correo</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Servicio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($citas as $cita)
                    <tr>
                        <th scope="row"> {{ $cita->id }}</th>
                        <td> {{ $cita->fecha }}</td>
                        <td> {{ $cita->hora }}</td>
                        <td> {{ $cita->cliente }}</td>
                        <td> {{ $cita->email }}</td>
                        <td> {{ $cita->dni }}</td>
                        @foreach($cita->servicios as $servicio)
                            <td>
                                <div>
                                    {{ $servicio->nombre }}
                                </div>
                            </td>
                        @endforeach
                        <td>
                            <div class="d-flex">
                                <a class="btn btn-outline-primary m-2" href="{{ route('citas.show', $cita->id) }}">Ver Cita</a>
                                <a class="btn btn-warning m-2" href="{{ route('citas.edit', $cita->id) }}">Editar Cita</a>
                                <form class="m-2" action="{{ route('citas.destroy', $cita->id) }}" method="POST" onsubmit="return confirm('Estas seguro?');">
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