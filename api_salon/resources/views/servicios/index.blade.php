<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">Listado de servicios</h2>
    </x-slot>
    <div class="row justify-content-center my-5">
        <div class="mb-4">
            <a class="btn btn-outline-success" href="{{ route('servicios.create') }}">Crear Servicio</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Servicio</th>
                    <th scope="col">Duracion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Estilista</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($servicios as $servicio)
                    <tr>
                        <th scope="row"> {{ $servicio->id }}</th>
                        <td> {{ $servicio->nombre }}</td>
                        <td> {{ $servicio->duracion }}</td>
                        <td> {{ $servicio->precio }}</td>
                        <td> {{ $servicio->empleado_id }}</td>
                        
                        <td>
                            <div class="d-flex">
                                <a class="btn btn-outline-primary m-2" href="{{ route('servicios.show', $servicio->id) }}">Ver servicio</a>
                                <a class="btn btn-warning m-2" href="{{ route('servicios.edit', $servicio->id) }}">Editar servicio</a>
                                <form class="m-2" action="{{ route('servicios.destroy', $servicio->id) }}" method="POST" onsubmit="return confirm('Estas seguro?');">
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