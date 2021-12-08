<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">Listado de categorias</h2>
    </x-slot>
    <div class="row justify-content-center my-5">
        <div class="mb-4">
            <a class="btn btn-outline-success" href="{{ route('categorias.create') }}">Crear Categoria</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                    <tr>
                        <th scope="row"> {{ $categoria->id }}</th>
                        <td> {{ $categoria->nombre }}</td>
                        <td>
                            <div class="d-flex">
                                <a class="btn btn-outline-primary m-2" href="{{ route('categorias.show', $categoria->id) }}">Ver Categoria</a>
                                <a class="btn btn-warning m-2" href="{{ route('categorias.edit', $categoria->id) }}">Editar Categoria</a>
                                <form class="m-2" action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" onsubmit="return confirm('Estas seguro?');">
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