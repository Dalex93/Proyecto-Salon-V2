<x-app-layout>
    <x-slot name="header">
        <h2>Ver Proveedor</h2>
    </x-slot>
    <div class="row justify-content-center my-5">
        <div class="card">
            <h5 class="card-header">Proveedor</h5>
            <div class="card-body">
                <h5 class="card-title">ID: {{ $proveedor->id}}</h5>
                <p class="card-text">
                    Nombre: {{ $proveedor->nombre}} <br/>
                    Telefono: {{ $proveedor->telefono}} <br/>
                    Dirección: {{ $proveedor->direccion}} <br/>
                </p>
                <a href="{{ route('proveedors.index') }}" class="btn btn-outline-primary">Regresar a Proveedores</a>
            </div>
        </div>
    </div>
</x-app-layout>