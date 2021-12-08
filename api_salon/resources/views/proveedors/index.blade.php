<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">Listado de proveedores</h2>
    </x-slot>
    <div class="row justify-content-center my-5">
        <div class="mb-4">
            <a class="btn btn-outline-success" href="{{ route('proveedors.create') }}">Crear Proveedor</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proveedores as $proveedor)
                    <tr>
                        <th scope="row"> {{ $proveedor->id }}</th>
                        <td> {{ $proveedor->nombre }}</td>
                        <td> {{ $proveedor->telefono }}</td>
                        <td> {{ $proveedor->direccion }}</td>
                        <td>
                            <div class="d-flex">
                                <a class="btn btn-outline-primary m-2" href="{{ route('proveedors.show', $proveedor->id) }}">Ver Proveedor</a>
                                <a class="btn btn-warning m-2" href="{{ route('proveedors.edit', $proveedor->id) }}">Editar Proveedor</a>
                                <form class="m-2" action="{{ route('proveedors.destroy', $proveedor->id) }}" method="POST" onsubmit="return confirm('Estas seguro?');">
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