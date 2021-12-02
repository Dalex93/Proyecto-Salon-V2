@extends('plantilla3')
@section('seccion')

    <section class="bienvenida">
      
        <div class="palabras">
            <h3><span class="landing">Bienvenida</span></h3>
            <h4 class="oracion"><span>A un espacio que inspira confianza, satisfacción & belleza</span></h4>
        </div>
    </section>

    <section>
        <div class="servicio" id="serv">
            <span class="servicios">Nuestros Servicios</span>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                  <div class="card" id="carta">
                    <img src="img/Uñas.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Uñas</h5>
                      <div class="d-grid gap-2 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-4 mx-auto">
                        <a href="Citas.html#uñas" class="reserva">Reservar</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card" id="carta">
                    <img src="img/Depilación.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Depilación</h5>
                      <div class="d-grid gap-2 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-4 mx-auto">
                       <a href="Citas.html#depilacion" class="reserva">Reservar</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card" id="carta">
                    <img src="img/Cabello.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Cabello</h5>
                      <div class="d-grid gap-2 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-4 mx-auto">
                        <a href="Citas.html#cabello" class="reserva">Reservar</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card" id="carta">
                    <img src="img/Maquillaje.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Maquillaje</h5>
                      <div class="d-grid gap-2 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-4 mx-auto">
                        <a href="Citas.html#maquillaje" class="reserva">Reservar</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card" id="visita">
                        <div class="card-body" >
                          <h5 class="card-title" id="parrafo">Visítanos</h5>
                          <p class="card-text" id="lugar">Estamos ubicados en Col. Las Minitas, 1 cuadra abajo del redondel, esquina frente a Home Gallery.</p>
                          <div class="mapa">
                            <iframe class="mediano" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3869.6560657347054!2d-87.19264583998968!3d14.097469115846009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6fa38699f4b67f%3A0x613ec7de6dd46b9!2s365%20Beauty%20Salon!5e0!3m2!1ses-419!2shn!4v1637897555586!5m2!1ses-419!2shn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <iframe class="pequeño" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3869.6560657347054!2d-87.19264583998968!3d14.097469115846009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6fa38699f4b67f%3A0x613ec7de6dd46b9!2s365%20Beauty%20Salon!5e0!3m2!1ses-419!2shn!4v1637897555586!5m2!1ses-419!2shn" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <section class="body" id="contactanos">
      <div class="content">

        <h1 class="loguito">Contácta<span>nos</span></h1>

        <div class="contact-wrapper animated bounceInUp" id="contactar">
            <div class="contact-form">
                <h3 style="text-align: center;">Contáctanos</h3>
                <form action="" method="post">
                    <p>
                        <label>Nombre Completo</label>
                        <input type="text" name="fullname" required>
                    </p>
                    <p>
                        <label>Correo Electrónico</label>
                        <input type="email" name="email" required>
                    </p>
                    <p>
                        <label>Número de Teléfono</label>
                        <input type="tel" name="phone" required>
                    </p>
                    <p>
                        <label>Asunto</label>
                        <input type="text" name="affair">
                    </p>
                    <p class="block">
                       <label>Mensaje</label> 
                        <textarea name="message" rows="3" required></textarea>
                    </p>
                    <p class="block">
                        <button type="submit">Enviar</button>
                    </p>
                </form>
            </div>
            <div class="contact-info">
                <h4 class="info">Más Información</h4>
                    <li class="lista"><i class="fas fa-map-marker-alt"></i> Col. Las Minitas, 1 cuadra abajo del redondel, esquina frente a Home Gallery</li>
                    <li class="lista"><i class="fas fa-phone"></i> <a href="https://api.whatsapp.com/send?phone=50499606386&fbclid=IwAR2gyM18Nt2pl6gss2xZV7FNaAyYFr9c-1CSQnhDLSrkr2VhwKI6Rh4fmF8" class="telefo">+504 9960-6386</a></li>
                    <li class="lista"><i class="fas fa-envelope-open-text"></i> 365beautysalon@gmail.com</li>
                <h4 class="info">Horario de Atención</h4>
                    <li class="lista">Lunes a Sábado de 9am a 6pm</li>
                    <li class="lista">Domingos de 11am a 5pm</li>
            </div>
        </div>

    </div>
    </section>

    <section class="mision-pagina">
      <div class="container" id="conteni">
        <div class="row">
          <div class="col-xl-6" id="mision">
            <h1 class="texto">Misión</h1>
          </div>
          <div class="col-xl-6" id="nuestra">
            <p id="parra">Nuestra misión es satisfacer las necesidades de belleza de nuestros clientes mediante servicios de alta calidad, brindado por un personal calificado que inspira confianza, para darle la mejor experiencia y superar expectativas en nuestros clientes.</p>
          </div>
        </div>
      </div>
    </section>

    <footer>
        <img src="img/logo_copia.jpg" alt="" class="logo">
    </footer>
@stop