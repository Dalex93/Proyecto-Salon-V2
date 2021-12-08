<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">Editar servicio</h2>
    </x-slot>
    <div class="row justify-content-center my-2">
        <div class="card">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h4 class="mb-3 mt-4">Actualizar datos de servicio</h4>
                    <hr>
                    <form method="POST" action="{{ route('servicios.update', $servicio->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group col-md-6 mb-3">
                            <label for="nombre" class="form-label">Servicio</label>
                            <input 
                                type="text" 
                                class="form-control"
                                name="nombre"
                                value="{{ old('nombre', $servicio->nombre) }}" 
                                placeholder="Nombre del servicio"
                            />

                            @error('nombre')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="precio" class="form-label">Precio</label>
                            <input 
                                type="number" 
                                class="form-control"
                                name="precio"
                                value="{{ old('precio', $servicio->precio) }}" 
                                placeholder="Precio del servicio"
                            />

                            @error('precio')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group col-md-6 mb-3">
                            <label for="duracion" class="form-label">Duracion</label>
                            <input 
                                type="time" 
                                class="form-control"
                                name="duracion"
                                value="{{ old('duracion', date('d-m-Y', strtotime($servicio->duracion))) }}" 
                                placeholder="Duracion del servicio"
                            />

                            @error('duracion')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group col-md-6 mb-3">
                            <label for="product_id" class="form-label">Producto</label>
                            <select class="form-select"  id="product_id"  name="product_id" aria-label="Seleccione un producto">
                              <option selected>Seleccione un producto</option>
                              @foreach($productos as $producto)
                                    <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                              @endforeach
                              
                            </select>

                            @error('product_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="categoriaId" class="form-label">Categoria</label>
                            <select class="form-select"  id="categoriaId"  name="categoriaId" aria-label="Seleccione una categoria">
                              <option selected>Seleccione una categoria</option>
                              @foreach($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                              @endforeach
                              
                            </select>

                            @error('categoryId')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="empleado_id" class="form-label">Estilista</label>
                            <select class="form-select" id="empleado_id"  name="empleado_id" aria-label="Seleccione un estilista">
                              <option selected>Seleccione un estilista</option>
                              @foreach($empleados as $empleado)
                                    <option value="{{ $empleado->id }}">{{ $empleado->nombre }}</option>
                              @endforeach
                            </select>

                            @error('empleado_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-block btn-outline-primary mb-4">
                           Editar Servicio
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>