<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">Editar proveedor</h2>
    </x-slot>
    <div class="row justify-content-center my-2">
        <div class="card">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h4 class="mb-3 mt-4">Editar proveedor</h4>
                    <hr>
                    <form method="POST" action="{{ route('proveedors.update', $proveedor->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group col-md-6 mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input 
                                type="text" 
                                class="form-control"
                                name="nombre"
                                value="{{ old('nombre', $proveedor->nombre) }}" 
                                placeholder="Nombre del proveedor"
                            />

                            @error('nombre')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="nombre" class="form-label">Telefono</label>
                            <input 
                                type="text" 
                                class="form-control"
                                name="telefono"
                                value="{{ old('telefono', $proveedor->telefono) }}" 
                                placeholder="Telefono del proveedor"
                            />

                            @error('telefono')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="direccion" class="form-label">Direccion</label>
                            <input 
                                type="text" 
                                class="form-control"
                                name="direccion"
                                value="{{ old('direccion', $proveedor->direccion) }}" 
                                placeholder="Direccion del proveedor"
                            />

                            @error('telefono')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-block btn-outline-primary mb-4">
                           Editar proveedor
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>