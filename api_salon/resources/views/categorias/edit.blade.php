<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">Editar categoria</h2>
    </x-slot>
    <div class="row justify-content-center my-2">
        <div class="card">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h4 class="mb-3 mt-4">Editar categoria {{ $categoria->id }} </h4>
                    <hr>
                    <form method="POST" action="{{ route('categorias.update', $categoria->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group col-md-6 mb-3">
                            <label for="nombre" class="form-label">Categoria</label>
                            <input 
                                type="text" 
                                class="form-control"
                                name="nombre"
                                value="{{ old('nombre', $categoria->nombre) }}" 
                                placeholder="Nombre de la categoria"
                            />

                            @error('nombre')
                                <p class="text-danget">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-block btn-outline-primary mb-4">
                           Editar categoria
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>