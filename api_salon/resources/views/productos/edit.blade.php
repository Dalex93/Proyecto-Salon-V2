<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">Editar producto</h2>
    </x-slot>
    <div class="row justify-content-center my-2">
        <div class="card">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h4 class="mb-3 mt-4">Editar producto</h4>
                    <hr>
                    <form method="POST" action="{{ route('productos.update', $producto->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group col-md-6 mb-3">
                            <label for="nombre" class="form-label">Producto</label>
                            <input 
                                type="text" 
                                class="form-control"
                                name="nombre"
                                value="{{ old('nombre', $producto->nombre) }}" 
                                placeholder="Nombre del producto"
                            />

                            @error('nombre')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="descripcion" class="form-label">Descripcion</label>
                            <input 
                                type="text" 
                                class="form-control"
                                name="descripcion"
                                value="{{ old('descripcion', $producto->descripcion) }}" 
                                placeholder="Decripcion del producto"
                            />

                            @error('descripcion')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group col-md-6 mb-3">
                            <label for="precio" class="form-label">Precio</label>
                            <input 
                                type="number" 
                                class="form-control"
                                name="precio"
                                value="{{ old('precio', $producto->precio) }}" 
                                placeholder="Precio del producto"
                            />

                            @error('precio')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group col-md-6 mb-3">
                            <label for="marca" class="form-label">Marca</label>
                            <input 
                                type="text" 
                                class="form-control"
                                name="marca"
                                value="{{ old('marca', $producto->marca) }}" 
                                placeholder="Marca del producto"
                            />

                            @error('marca')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group col-md-6 mb-3">
                            <label for="categoryId" class="form-label">Categoria</label>
                            <select class="form-select"  id="categoryId"  name="categoryId" aria-label="Seleccione una categoria">
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
                            <label for="supplierId" class="form-label">Proveedor</label>
                            <select class="form-select" id="supplierId"  name="supplierId" aria-label="Seleccione una proveedor">
                              <option selected>Seleccione un proveedor</option>
                              @foreach($proveedores as $proveedor)
                                    <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                              @endforeach
                            </select>

                            @error('proveedorId')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-block btn-outline-primary mb-4">
                           Editar producto
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>