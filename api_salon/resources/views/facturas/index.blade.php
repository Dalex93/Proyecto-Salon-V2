<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">Listado de facturas</h2>
    </x-slot>
    <div class="row justify-content-center my-5">
        <div class="mb-4">
            <a class="btn btn-outline-success" href="{{ route('facturas.create') }}">Crear factura</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Numero de factura</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Servicio</th>
                    <th scope="col">Impuesto (ISV)</th>
                    <th scope="col">Total a Pagar</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($facturas as $detalle)
                    <tr>
                        <th scope="row"> {{ $detalle->id }}</th>
                        <td> {{ $detalle->factura->fecha_factura }}</td>
                        <td> {{ $detalle->factura->numero_factura }}</td>
                        <td> {{ $detalle->factura->cliente }}</td>
                        <td> {{ $detalle->servicio->nombre }}</td>
                        <td> {{ ($detalle->factura->isv)* 100 }} %</td>
                        <td> {{ $detalle->precio }} Lps</td>
                        <td>
                            <div class="d-flex">
                                <a class="btn btn-outline-primary m-2" href="{{ route('facturas.show', $detalle->factura->id) }}">Ver factura</a>

                                <form class="m-2" action="{{ route('facturas.destroy', $detalle->factura->id) }}" method="POST" onsubmit="return confirm('Estas seguro?');">
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