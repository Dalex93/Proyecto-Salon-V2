<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold" style="text-align:center;">
            {{ __('Administración') }}
        </h2>
    </x-slot>

    <div class="row justify-content-center my-5">
        <div class="col-md-12">
            <div class="card shadow bg-light">
                <div class="card-body bg-white px-5 py-3 border-bottom rounded-top">
                    <div class="mx-3 my-3">
                        <h3 class="h3 my-4" style="text-align:center">
                            <span style="font-family: 'Yellowtail', cursive;">Bienvenido al sistema de administración de Salon de Belleza 365 Beauty Salon</span>
                        </h3>
                        <div>
                            <h4>En este dashboard podrá administrar todos los módulos correspondientes al sistema del salon 365 Beauty Salon</h4>
                               <li style="list-style:none;">Módulo de Empleados</li>
                               <li style="list-style:none;">Módulo de Proveedores</li>
                               <li style="list-style:none;">Módulo de Categorías</li>
                               <li style="list-style:none;">Módulo de Productos</li>
                               <li style="list-style:none;">Módulo de Servicios</li>
                               <li style="list-style:none;">Módulo de Citas</li>
                               <li style="list-style:none;">Módulo de Facturas</li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>