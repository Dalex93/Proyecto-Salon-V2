<x-app-layout>
    <x-slot name="header">
        <h2>Ver categoria</h2>
    </x-slot>
    <div class="row justify-content-center my-5">
        <div class="card">
            <h5 class="card-header">Categoria</h5>
            <div class="card-body">
                <h5 class="card-title">ID: {{ $categoria->id}}</h5>
                <p class="card-text">Nombre: {{ $categoria->nombre}}</p>
                <a href="{{ route('categorias.index') }}" class="btn btn-outline-primary">Regresar a Categorias</a>
            </div>
        </div>
    </div>
</x-app-layout>