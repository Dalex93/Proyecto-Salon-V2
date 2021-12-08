<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">Listado de Productos</h2>
    </x-slot>
    <div class="row justify-content-center my-5">
        <div class="mb-4">
            <a class="btn btn-outline-success" href="{{ route('productos.create') }}">Crear Producto</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <th scope="row"> {{ $producto->id }}</th>
                        <td> {{ $producto->nombre }}</td>
                        <td> {{ $producto->descripcion }}</td>
                        <td> {{ $producto->precio }}</td>
                        <td> {{ $producto->marca }}</td>
                        <td>
                            <div class="d-flex">
                                <a class="btn btn-outline-primary m-2" href="{{ route('productos.show', $producto->id) }}">Ver producto</a>
                                <a class="btn btn-warning m-2" href="{{ route('productos.edit', $producto->id) }}">Editar producto</a>
                                <form class="m-2" action="{{ route('productos.destroy', $producto->id) }}" method="POST" onsubmit="return confirm('Estas seguro?');">
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