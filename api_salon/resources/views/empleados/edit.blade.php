<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">Editar Empleado</h2>
    </x-slot>
    <div class="row justify-content-center my-2">
        <div class="card">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h4 class="mb-3 mt-4">Actualizar datos de Empleado</h4>
                    <hr>
                    <form method="POST" action="{{ route('empleados.update', $empleado->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group col-md-6 mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input 
                                type="text" 
                                class="form-control"
                                name="nombre"
                                value="{{ old('nombre', $empleado->nombre) }}" 
                                placeholder="Nombre del empleado"
                            />

                            @error('nombre')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input 
                                type="text" 
                                class="form-control"
                                name="apellido"
                                value="{{ old('apellido', $empleado->apellido) }}" 
                                placeholder="Apellido del empleado"
                            />

                            @error('apellido')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="salario" class="form-label">Salario</label>
                            <input 
                                type="number" 
                                class="form-control"
                                name="salario"
                                value="{{ old('salario', $empleado->salario) }}" 
                                placeholder="Salario del empleado"
                            />

                            @error('salario')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="posicion_trabajo" class="form-label">Posicion de trabajo</label>
                            <input 
                                type="text" 
                                class="form-control"
                                name="posicion_trabajo"
                                value="{{ old('posicion_trabajo', $empleado->posicion_trabajo) }}" 
                                placeholder="Posicion de trabajo del empleado"
                            />

                            @error('posicion_trabajo')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-block btn-warning mb-4">
                           Editar Empleado
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>