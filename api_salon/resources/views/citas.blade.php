@extends('layouts.header_citas')
@section('citas')

<section>
    <form action="" method="post">
        <div class="cita">
            <h1>Haz tu Cita</h1>
        </div>
    <div class="container" id="contenedor">
        <div class="row">
            <div class="col-xl-12">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <span class="font">Tratamientos para Manos y Pies</span>
                </button>
                <div class="collapse" id="collapseExample">
                        <div class="table-responsive">
                            <table class="tabla1">
                                <tr>
                                    <th class="servicio">Servicios</th>
                                    <th class="l">Precio</th>
                                    <th class="obs">Observación</th>
                                    <th class="promo">Promoción</th>
                                </tr>
                                <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Manicure</label></td>
                                    <td class="precio">L 300.00</td>
                                    <td class="observacion">Pintado Normal</td>
                                    <td class="promocion"></td>
                                  </tr>
                                  <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Pedicure</label></td>
                                    <td class="precio">L 400.00</td>
                                    <td class="observacion">Pintado Normal</td>
                                    <td class="promocion"></td>
                                  </tr>
                                  <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Esmaltado Permanente</label></td>
                                    <td class="precio">L 250.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                  </tr>
                                  <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Esmaltado Normal</label></td>
                                    <td class="precio">L 100.00</td>
                                    <td class="observacion">Glass Normales</td>
                                    <td class="promocion"></td>
                                  </tr>
                                  <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Uñas Acrílicas Naturales</label></td>
                                    <td class="precio">L 280.00</td>
                                    <td class="observacion">Pintado Normal</td>
                                    <td class="promocion"></td>
                                  </tr>
                                  <tr>
                                    <td class="promocion"></td>
                                    <td class="precio">L 490.00</td>
                                    <td class="observacion">Pintado Permanente</td>
                                    <td class="promocion"></td>
                                  </tr>
                                  <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Uñas Acrílicas Babyboomer</label></td>
                                    <td class="precio">L 490.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                  </tr>
                                  <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Uñas Acrílicas Cover</label></td>
                                    <td class="precio">L 490.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                  </tr>
                                  <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Uñas Coofin</label></td>
                                    <td class="precio">L 550.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                  </tr>
                                  <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Uñas Almendradas</label></td>
                                    <td class="precio">L 600.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                  </tr>
                                  <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Baño de Acrílico Natural</label></td>
                                    <td class="precio">L 200.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                  </tr>
                                  <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Baño de Acrílico Cover</label></td>
                                    <td class="precio">L 350.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                  </tr>
                                  <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Baño de Calcio</label></td>
                                    <td class="precio">L 200.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                  </tr>
                                  <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Retirado de Acrílico</label></td>
                                    <td class="precio">L 100.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                  </tr>
                                  <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Retirado de Esmaltado Permanente</label></td>
                                    <td class="precio">L 70.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                  </tr>
                            </table>
                        </div>
                </div>
            </div>
        </div> 
    </div>
    
    <div class="container" id="contenedor">
        <div class="row">
            <div class="col-xl-12">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                    <span class="font">Servicios de Depilación</span>
                </button>
                <div class="collapse" id="collapseExample1">
                        <div class="table-responsive">
                            <table class="tabla2">
                                <tr>
                                    <th class="servicio">Servicios</th>
                                    <th class="l">Precio</th>
                                    <th class="obs">Observación</th>
                                    <th class="promo">Promoción</th>
                                </tr>
                                <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Depilacion de Ceja con Hilo</label></td>
                                    <td class="precio">L 200.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                </tr>
                                <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Depilación de Bigote con Hilo</label></td>
                                    <td class="precio">L 80.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                </tr>
                                <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Depilación de Ceja con Cera</label></td>
                                    <td class="precio">L 130.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                </tr>
                                <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Deiplación de Bigote con Cera</label></td>
                                    <td class="precio">L 80.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                </tr>
                                <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Depilación con Cera</label></td>
                                    <td class="precio">L 390.00</td>
                                    <td class="observacion">Media Pierna</td>
                                    <td class="promocion"></td>
                                </tr>
                                <tr>
                                    <td class="promocion"></td>
                                    <td class="precio">L 700.00</td>
                                    <td class="observacion">Pierna Completa</td>
                                    <td class="promocion"></td>
                                </tr>
                                <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Depilación de Bikiny</label></td>
                                    <td class="precio">L 450.00</td>
                                    <td class="observacion">Área de Bikiny</td>
                                    <td class="promocion"></td>
                                </tr>
                                <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"></label></td>
                                    <td class="precio">L 700.00</td>
                                    <td class="observacion">Completo</td>
                                    <td class="promocion"></td>
                                </tr>
                                <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Depilación de Axila</label></td>
                                    <td class="precio">L 180.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                </tr>
                                <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Liftin</label></td>
                                    <td class="precio">L 450.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                </tr>
                                <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Rizados</label></td>
                                    <td class="precio">L 450.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                </tr>
                                <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Planchado de Ceja</label></td>
                                    <td class="precio">L 450.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                </tr>
                                <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Pestaña Pelo a Pelo</label></td>
                                    <td class="precio">L 1200.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                </tr>
                                <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Pigmento de Ceja</label></td>
                                    <td class="precio">L 200.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="contenedor">
            <div class="row">
                <div class="col-xl-12">
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                        <span class="font">Tratamientos para el Cabello</span>
                    </button>
                    <div class="collapse" id="collapseExample2">
                        <div class="table-responsive">
                            <table class="tabla3">
                                <tr>
                                    <th class="servicio">Servicios</th>
                                    <th class="l">Precio</th>
                                    <th class="obs">Observación</th>
                                    <th class="promo">Promoción</th>
                                </tr>
                                <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Bordado Capilar</label></td>
                                    <td class="precio">Desde L 350.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                  </tr>
                                  <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Keratina Alfapartf</label></td>
                                    <td class="precio">Desde L 1200.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                  </tr>
                                  <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Keratina Brasil Cacau</label></td>
                                    <td class="precio">Desde L 1800.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                  </tr>
                                  <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Células Madre by Alfapartf</label></td>
                                    <td class="precio">L 700.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                  </tr>
                                  <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Botox Capilar by Brasil Cacau</label></td>
                                    <td class="precio">L 890.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                  </tr>
                                  <tr>
                                    <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Infusion by Truss</label></td>
                                    <td class="precio">L 700.00</td>
                                    <td class="observacion"></td>
                                    <td class="promocion"></td>
                                  </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="container" id="contenedor">
        <div class="row">
            <div class="col-xl-12">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
                    <span class="font">Servicios para el Cabello</span>
                </button>
                <div class="collapse" id="collapseExample3">
                    <div class="table-responsive">
                        <table class="tabla4">
                            <tr>
                                <th class="servicio">Servicios</th>
                                <th class="l">Precio</th>
                                <th class="obs">Observación</th>
                                <th class="promo">Promoción</th>
                            </tr>
                            <tr>
                                <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Secado</label></td>
                                <td class="precio">Desde L 150.00</td>
                                <td class="observacion">Depende del Largo</td>
                                <td class="promocion"></td>
                              </tr>
                              <tr>
                                <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Lavado</label></td>
                                <td class="precio">L 100.00</td>
                                <td class="observacion"></td>
                                <td class="promocion"></td>
                              </tr>
                              <tr>
                                <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Corte</label></td>
                                <td class="precio">Desde L 200.00</td>
                                <td class="observacion"></td>
                                <td class="promocion"></td>
                              </tr>
                              <tr>
                                <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Planchado</label></td>
                                <td class="precio">Desde L 150.00</td>
                                <td class="observacion"></td>
                                <td class="promocion"></td>
                              </tr>
                              <tr>
                                <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Ondas</label></td>
                                <td class="precio">L 250.00</td>
                                <td class="observacion"></td>
                                <td class="promocion"></td>
                              </tr>
                              <tr>
                                <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Tinte Completo</label></td>
                                <td class="precio">L 1000.00</td>
                                <td class="observacion">1 Tubo</td>
                                <td class="promocion"></td>
                              </tr>
                              <tr>
                                <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Baño de Color</label></td>
                                <td class="precio">L 890.00</td>
                                <td class="observacion"></td>
                                <td class="promocion"></td>
                              </tr>
                              <tr>
                                <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Balayage</label></td>
                                <td class="precio">Desde L 2000.00</td>
                                <td class="observacion"></td>
                                <td class="promocion"></td>
                              </tr>
                              <tr>
                                <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Babylights</label></td>
                                <td class="precio">Desde L 1700.00</td>
                                <td class="observacion"></td>
                                <td class="promocion"></td>
                              </tr>
                              <tr>
                                <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Rayos</label></td>
                                <td class="precio">Desde L 1500.00</td>
                                <td class="observacion"></td>
                                <td class="promocion"></td>
                              </tr>
                              <tr>
                                <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Iluminaciones</label></td>
                                <td class="precio">Desde L 1500.00</td>
                                <td class="observacion"></td>
                                <td class="promocion"></td>
                              </tr>
                              <tr>
                                <td class="headcol"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;">Peinados</label></td>
                                <td class="precio">L 400.00</td>
                                <td class="observacion"></td>
                                <td class="promocion"></td>
                              </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="container" id="contenedor">
        <div class="row">
            <div class="col-xl-12">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">
                    <span class="font">Servicios de Maquillaje</span>
                </button>
                <div class="collapse" id="collapseExample4">
                    <div class="table-responsive">
                       
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <section class="registrarse">
        <section class="form-register">
                <h4 class="hh">Ingresa tus Datos</h4>
                <span class="form"><input class="inputs" type="text" name="nombre" placeholder="Nombre Completo"></span><br>
                <span class="form"><input class="inputs" type="text" name="dni" placeholder="Número de Identidad Separado por Guiones"></span><br>
                <span class="form"><input class="inputs" type="email" name="correo" placeholder="Correo Electrónico"></span><br>
                <br><h4 class="hh">Horarios Disponibles</h4>
                <span class="hh1">Escoge una Fecha <input type="date" name="" id="" class="data"></span><br>
                <span class="hh1">Escoge la Hora <input type="time" name="" id="" class="data1"></span><br><br>
                <h4 class="personal">Personal de Confianza</h4>
                    <li class="li"><label><input type="radio" name="empleada" id=""> Scarleth Flores</label></li>
                    <li class="li"><label><input type="radio" name="empleada" id=""> Carolina Sauceda</label></li>
                    <li class="li"><label><input type="radio" name="empleada" id=""> Lorena Ortega</label></li>
                <input class="botons" type="submit" value="Hacer Cita">
        </section>
    </section>

    </form>
    
</section>



<footer>
    <img src="img/logo_copia.jpg" alt="" class="logo">
</footer>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection