<x-app-layout>
    <x-slot name="header">
        <h2>Ver Producto</h2>
    </x-slot>
    <div class="row justify-content-center my-5">
        <div class="card">
            <h5 class="card-header">Producto</h5>
            <div class="card-body">
                <h5 class="card-title">ID: {{ $producto->id}}</h5>
                <p class="card-text">Nombre: {{ $producto->nombre}}</p>
                <p class="card-text">Descripcion: {{ $producto->descripcion}}</p>
                <p class="card-text">Precio: {{ $producto->precio}}</p>
                <p class="card-text">Marca: {{ $producto->marca}}</p>
                <p class="card-text">Categoria: {{ $producto->category_id}}</p>
                <p class="card-text">Proveedor: {{ $producto->supplier_id}}</p>
                <a href="{{ route('productos.index') }}" class="btn btn-outline-primary">Regresar a Productos</a>
            </div>
        </div>
    </div>
</x-app-layout>