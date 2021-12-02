<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro 365-Beauty Salon</title>
    <link rel="stylesheet" href="{{ asset('css/registro/estilos2.css') }} ">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logo.png">
</head>
<body>
    <header>
        <h2 class="h2"><a href="index.html"><img src="img/logo_copia.jpg" alt="" class="logo"></a></h2>
        <input type="checkbox" name="" id="check">
        <label for="check" class="mostrar-menu">
            &#8801
        </label>
        <nav class="menu">
            <a class="pag-inicio" href="index.html">Inicio</a>
            <a href="index.html#serv">Servicios</a>
            <a href="Citas.html#citas">Reserva Ahora</a>
            <a href="index.html#contactanos">Contacto</a>
            <a class="enlace" href="https://api.whatsapp.com/send?phone=50499606386&fbclid=IwAR3ZLNqglf-0-7JUNin7ZLnDwNmgJHWeQnPCd_v7mgUOOtUkPcAE6F-Iqyk"><i style="color: green;" class="fab fa-whatsapp"></i></a>
            <a class="enlace" href="https://www.instagram.com/365beauty.hn/?fbclid=IwAR1tilLjO3W7Wl2doEc37fKf_6HjB93sEbXRMI6pMC1SpBL1Wb3xuKUxEKo"><i style="color: #9938B3;" class="fab fa-instagram"></i></a>
            <a class="enlace" href="https://www.facebook.com/365beauty.hn"><i class="fab fa-facebook" style="color: #1E56A1;"></i></a>
            <a href="Login.html#cover" id="inicio">Iniciar Sesión</a>
            <label for="check" class="esconder-menu">
                &#215
            </label>
        </nav>
    </header>

    @yield('seccion')

</body>
</html>
