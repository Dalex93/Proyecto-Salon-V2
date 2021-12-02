
@extends('plantilla2')
@section('seccion')
    

    <section class="citas">
        <div style="width: auto;height: 1.5cm;padding-top: 0.5cm;text-align: center;">
            <span style="font-size: 50px;font-family: 'Yellowtail', cursive;text-decoration: underline;">Haz tu Cita</span>
        </div>
        <form action="" method="post">
            <div class="container-fluid" id="uñas">
                <div class="row">
                  <div class="col-xl-6">
                    <div style="text-align: center;padding-top: 0.9cm;">
                        <span style="font-size: 30px;font-family: 'Yellowtail', cursive;">Uñas</span>
                    </div>
                    <div style="margin-left: 0.5cm;" id="un">
                        <table class="tabla1">
                            <tr>
                                <th style="width: 6cm;">
                                    <span style="padding-left: 0.6cm;font-family: 'Sawarabi Mincho', sans-serif;" class="colores">Servicios</span>
                                </th>
                                <th style="text-align: center;width: 3.7cm;font-family: 'Sawarabi Mincho', sans-serif;" class="colores"><span>Precio</span></th>
                                <th style="text-align: center;width: 4cm;font-family: 'Sawarabi Mincho', sans-serif;" class="colores"><span>Observación</span></th>
                                <th style="text-align: center;width: 3cm;font-family: 'Sawarabi Mincho', sans-serif;" class="colores"><span>Promoción</span></th>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Manicure</span></label></td>
                                <td class="precio"><label><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 300.00</span></label></td>
                                <td class="obs"><span style="font-family: 'Sawarabi Mincho', sans-serif;font-size: 14px;">Pintado Normal</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Pedicure</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 400.00</span></td>
                                <td class="obs"><span style="font-family: 'Sawarabi Mincho', sans-serif;font-size: 14px;">Pintado Normal</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Esmaltado Permanente</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 250.00</span></td>
                                <td class="obs"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size:14px;font-family: 'Sawarabi Mincho', sans-serif;">Esmaltado Normal</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 100.00</span></td>
                                <td class="obs"><span style="font-family: 'Sawarabi Mincho', sans-serif;font-size: 14px;">Glass Normal</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size:14px;font-family: 'Sawarabi Mincho', sans-serif;">Uñas Acrílicas Naturales</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 280.00</span></td>
                                <td class="obs"><span style="font-family: 'Sawarabi Mincho', sans-serif;font-size: 14px;">Pintado Normal</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 490.00</span></td>
                                <td class="obs"><span style="font-family: 'Sawarabi Mincho', sans-serif;font-size: 14px;">Pintado Permanente</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size:14px;font-family: 'Sawarabi Mincho', sans-serif;">Uñas Acrílicas Babyboomer</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 490.00</span></td>
                                <td class="obs"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size:14px;font-family: 'Sawarabi Mincho', sans-serif;">Uñas Acrílicas Cover</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 490.00</span></td>
                                <td class="obs"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size:14px;font-family: 'Sawarabi Mincho', sans-serif;">Uñas Coofin</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 550.00</span></td>
                                <td class="obs"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size:14px;font-family: 'Sawarabi Mincho', sans-serif;">Uñas Almendradas</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 600.00</span></td>
                                <td class="obs"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size:14px;font-family: 'Sawarabi Mincho', sans-serif;">Baño de Acrílico Natural</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 200.00</span></td>
                                <td class="obs"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size:14px;font-family: 'Sawarabi Mincho', sans-serif;">Baño de Acrílico Cover</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 350.00</span></td>
                                <td class="obs"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size:14px;font-family: 'Sawarabi Mincho', sans-serif;">Baño de Calcio</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 200.00</span></td>
                                <td class="obs"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size:14px;font-family: 'Sawarabi Mincho', sans-serif;">Retirado de Acrílico</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 100.00</span></td>
                                <td class="obs"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size:14px;font-family: 'Sawarabi Mincho', sans-serif;">Retirado de Esmaltado Permanente</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 70.00</span></td>
                                <td class="obs"></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                  </div>
                  <div class="col-xl-6" id="depilacion">
                    <div style="text-align: center;padding-top: 0.9cm;">
                        <span style="font-size: 30px;font-family: 'Yellowtail', cursive;">Depilación</span>
                    </div>
                    <div style="margin-left: 0.5cm;" id="dep">
                        <table class="tabla2">
                            <tr>
                                <th style="width: 7cm;">
                                    <span style="padding-left: 0.6cm;font-family: 'Sawarabi Mincho', sans-serif;">Servicios</span>
                                </th>
                                <th style="text-align: center;width: 2.7cm;"><span style="font-family: 'Sawarabi Mincho', sans-serif;">Precio</span></th>
                                <th style="text-align: center;width: 4cm;"><span style="font-family: 'Sawarabi Mincho', sans-serif;">Observación</span></th>
                                <th style="text-align: center;width: 3cm;"><span style="font-family: 'Sawarabi Mincho', sans-serif;">Promoción</span></th>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Depilación de Ceja con Hilo</span></label></td>
                                <td class="precio"><label><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 200.00</span></label></td>
                                <td class="obs"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Depilación de Bigote con Hilo</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 80.00</span></td>
                                <td class="obs"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Depilación de Ceja con Cera</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 130.00</span></td>
                                <td class="obs"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Depilación de Bigote con Cera</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 80.00</span></td>
                                <td class="obs"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Depilación con Cera</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 390.00</span></td>
                                <td class="obs"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Media Pierna</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 700.00</span></td>
                                <td class="obs"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Pierna Completa</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Depilación de Bikiny</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 450.00</span></td>
                                <td class="obs"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Área de Bikiny</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 700.00</span></td>
                                <td class="obs"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Completo</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Depilación de Áxila</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 180.00</span></td>
                                <td class="obs"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Liftin</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 450.00</span></td>
                                <td class="obs"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Rizados</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 450.00</span></td>
                                <td class="obs"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Planchado de ceja</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 450.00</span></td>
                                <td class="obs"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Pestaña Pelo a Pelo</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 1200.00</span></td>
                                <td class="obs"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Pigmento de ceja</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 200.00</span></td>
                                <td class="obs"></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                  </div>
                </div>
            </div>
            <div class="container-fluid" id="cabello">
                <div class="row">
                  <div class="col-xl-6">
                    <div style="text-align: center;padding-top: 0.9cm;">
                        <span style="font-size: 30px;font-family: 'Yellowtail', cursive;">Cabello</span>
                    </div>
                    <div style="margin-left: 0.5cm;" id="cab">
                        <table class="tabla3">
                            <tr>
                                <th style="width: 6cm;">
                                    <span style="padding-left: 0.6cm;font-family: 'Sawarabi Mincho', sans-serif;">Servicios</span>
                                </th>
                                <th style="text-align: center;width: 3.7cm;font-family: 'Sawarabi Mincho', sans-serif;"><span>Precio</span></th>
                                <th style="text-align: center;width: 4cm;font-family: 'Sawarabi Mincho', sans-serif;"><span>Observación</span></th>
                                <th style="text-align: center;width: 3cm;font-family: 'Sawarabi Mincho', sans-serif;"><span>Promoción</span></th>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Bordado Capilar</span></label></td>
                                <td class="precio"><label><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Desde L.350</span></label></td>
                                <td class="obs"><span style="font-family: 'Sawarabi Mincho', sans-serif;font-size: 14px;"></span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Keratina Alfapartf</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Desde L.1200</span></td>
                                <td class="obs"><span style="font-family: 'Sawarabi Mincho', sans-serif;font-size: 14px;"></span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Keratina Brasil Cacau</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Desde L.1800</span></td>
                                <td class="obs"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size:14px;font-family: 'Sawarabi Mincho', sans-serif;">Células Madre by Alfapartf</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 700.00</span></td>
                                <td class="obs"><span style="font-family: 'Sawarabi Mincho', sans-serif;font-size: 14px;"></span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size:14px;font-family: 'Sawarabi Mincho', sans-serif;">Botox Capilar by Brasil Cacau</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 890.00</span></td>
                                <td class="obs"><span style="font-family: 'Sawarabi Mincho', sans-serif;font-size: 14px;"></span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size:14px;font-family: 'Sawarabi Mincho', sans-serif;">Infusion by Truss</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 700.00</span></td>
                                <td class="obs"><span style="font-family: 'Sawarabi Mincho', sans-serif;font-size: 14px;"></span></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                  </div>
                  <div class="col-xl-6" id="maquillaje">
                    <div style="text-align: center;padding-top: 0.9cm;">
                        <span style="font-size: 30px;font-family: 'Yellowtail', cursive;">Maquillaje</span>
                    </div>
                    <div style="margin-left: 0.5cm;" id="maq">
                        <table class="tabla4">
                            <tr>
                                <th style="width: 6cm;">
                                    <span style="padding-left: 0.6cm;font-family: 'Sawarabi Mincho', sans-serif;">Servicios</span>
                                </th>
                                <th style="text-align: center;width: 3.7cm;"><span style="font-family: 'Sawarabi Mincho', sans-serif;">Precio</span></th>
                                <th style="text-align: center;width: 4cm;"><span style="font-family: 'Sawarabi Mincho', sans-serif;">Observación</span></th>
                                <th style="text-align: center;width: 3cm;"><span style="font-family: 'Sawarabi Mincho', sans-serif;">Promoción</span></th>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Maquillaje Express</span></label></td>
                                <td class="precio"><label><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">L 450.00</span></label></td>
                                <td class="obs"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="label"><label><input type="checkbox" name="" id="" style="margin-right: 0.1cm;"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Maquillaje Profesional</span></label></td>
                                <td class="precio"><span style="font-size: 14px;font-family: 'Sawarabi Mincho', sans-serif;">Desde L.700</span></td>
                                <td class="obs"></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                  </div>
                </div>
            </div> 
            <!--<div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6">
                        <div style="border: 1px solid white;margin-top: 1cm;width: 10cm;margin-left: 12.5cm;border-radius: 5px;" id="cita">
                            <div style="margin-bottom: 1cm;padding-left: 0.8cm;">
                                <h4 style="text-align: center;padding-top: 1cm;font-family: 'Yellowtail', cursive;font-size: 30px;">Horarios Disponibles</h4>
                                <span>Selecciona una Hora <label><input type="date" name="" id="" class="atencion"></label></span><br><br>
                                <span>Selecciona una Fecha <label><input type="time" name="" id="" class="atencion"></label></span><br><br>
                                <p style="text-align: center;font-family: 'Yellowtail', cursive;font-size: 30px;">Personal de Confianza</p>
                                <span style="font-family: 'Sawarabi Mincho', sans-serif;"><label><input type="radio" name="empleada" id=""> Scarleth Flores</label></span><br>
                                <span style="font-family: 'Sawarabi Mincho', sans-serif;"><label><input type="radio" name="empleada" id=""> Carolina Sauceda</label></span><br>
                                <span style="font-family: 'Sawarabi Mincho', sans-serif;"><label><input type="radio" name="empleada" id=""> Lorena Ortega</label></span><br><br>
                                <span style="padding-left: 3.2cm;text-align: center;"><input type="submit" value="Hacer Cita" class="atencion1"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <section class="registrarse">
                <section class="form-register">
                    <form action="" method="post">
                        <h4 class="hh">Horarios Disponibles</h4>
                        <span>Escoge una Fecha <input type="date" name="" id=""></span><br>
                        <span>Escoge la Hora <input type="time" name="" id=""></span><br>
                            <li class="li"><label><input type="radio" name="empleada" id=""> Scarleth Flores</label></li>
                            <li class="li"><label><input type="radio" name="empleada" id=""> Carolina Sauceda</label></li>
                            <li class="li"><label><input type="radio" name="empleada" id=""> Lorena Ortega</label></li>
                        <input class="botons" type="submit" value="Hacer Cita">
                    </form>
                </section>
            </section>
        </form>
    </section>

    <footer>
        <img src="img/logo_copia.jpg" alt="" class="logo">
    </footer>
@stop
    
