<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">Crear Cita</h2>
    </x-slot>
    <div class="row justify-content-center my-2">
        <div class="card">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h4 class="mb-3 mt-4">Nueva Cita</h4>
                    <hr>
                    <form method="POST" action="{{ route('citas.store') }}">
                        @csrf
                        <div class="row justify-content-between mb-3">
                            <div class="form-group col-md-6 flex-colum d-flex">
                                <label for="fecha" class="form-control-label">Fecha de la Cita</label>
                                <input 
                                    type="date" 
                                    class="form-control"
                                    name="fecha"
                                    value="{{ old('fecha', '') }}" 
                                    placeholder="Fecha de la cita"
                                />

                                @error('fecha')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 flex-colum d-flex">
                                <label for="hora" class="form-control-label">Hora</label>
                                <input 
                                    type="text" 
                                    class="form-control"
                                    name="hora"
                                    value="{{ old('hora', '') }}" 
                                    placeholder="Hora de la cita"
                                />

                                @error('hora')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row justify-content-between mb-3">
                            <div class="form-group col-md-4">
                                <label for="cliente" class="form-label">Cliente</label>
                                <input 
                                    type="text" 
                                    class="form-control"
                                    name="cliente"
                                    value="{{ old('cliente', '') }}" 
                                    placeholder="Cliente de la cita"
                                />

                                @error('cliente')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="email" class="form-label">Correo del Cliente</label>
                                <input 
                                    type="email" 
                                    class="form-control"
                                    name="email"
                                    value="{{ old('email', '') }}" 
                                    placeholder="Correo de cliente de la cita"
                                />

                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="dni" class="form-label">DNI</label>
                                <input 
                                    type="text" 
                                    class="form-control"
                                    name="dni"
                                    value="{{ old('dni', '') }}" 
                                    placeholder="DNI del Cliente de la cita"
                                />

                                @error('dni')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div> 
                        <div class="form-group col-md-12 mb-3">
                            <table class="table" id="dynamicService">
                                <tr>
                                    <th>Servicio</th>
                                    <th>Cantidad</th>
                                </tr>
                                <tr>
                                    <td class="col-md-4">
                                        <select class="form-select"  id="servicios[0][servicioId]"  name="servicios[0][servicioId]" aria-label="Seleccione un servicio">
                                            <option selected>Seleccione un servicio</option>
                                                @foreach($servicios as $servicio)
                                                      <option value="{{ $servicio->id }}">{{ $servicio->nombre }}</option>
                                                @endforeach
                                        </select>
                                    </td>  
                                    <td class="col-md-4">
                                        <input type="text" id="servicios[0][cantidad]" name="servicios[0][cantidad]" placeholder="Cantidad de personas" class="form-control" />
                                    </td>  

                                    <td><button type="button" name="add" id="add" class="btn btn-success">Agregar otro</button></td>  
                                </tr>
                            </table>
                        </div>
                        <button type="submit" class="btn btn-block btn-outline-primary mb-4">
                           Agregar cita
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        var i = 0;

        $("#add").click(function(){

            ++i;
            $("#dynamicService").append(`
                                <tr>
                                    <td class="col-md-4">
                                        <select class="form-select"  id="servicios[${i}][servicioId]"  name="servicios[${i}][servicioId]" aria-label="Seleccione un servicio">
                                            <option selected>Seleccione un servicio</option>
                                                @foreach($servicios as $servicio)
                                                      <option value="{{ $servicio->id }}">{{ $servicio->nombre }}</option>
                                                @endforeach
                                        </select>
                                    </td>  

                                    <td class="col-md-4">
                                        <input type="text" id="servicios[${i}][cantidad]" name="servicios[${i}][cantidad]" placeholder="Cantidad de personas" class="form-control" />
                                    </td>
                                    <td><button type="button" class="btn btn-danger remove-tr">Remover</button></td>
                                </tr>
            `);

    });

    $(document).on('click', '.remove-tr', function(){  

         $(this).parents('tr').remove();

    });  
</script>

</x-app-layout>