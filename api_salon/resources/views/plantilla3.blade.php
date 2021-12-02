<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>365 Beauty Salon</title>
    <link rel="stylesheet" href="{{ asset('css/index/estilos6.css') }} ">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Mincho&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Mincho&family=Yellowtail&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"/>
    
</head>
<body>
    <header>
        <h2 class="h2"><a href="index.html"><img src="img/logo_copia.jpg" alt="" class="logo"></a></h2>
        <input type="checkbox" name="" id="check">
        <label for="check" class="mostrar-menu">
            &#8801
        </label>
        <nav class="menu">
            <a href="index.html#serv">Servicios</a>
            <a href="Citas.html">Reserva Ahora</a>
            <a href="index.html#contactanos">Contacto</a>
            <a class="enlace" href="https://api.whatsapp.com/send?phone=50499606386&fbclid=IwAR3ZLNqglf-0-7JUNin7ZLnDwNmgJHWeQnPCd_v7mgUOOtUkPcAE6F-Iqyk"><i style="color: green;" class="fab fa-whatsapp"></i></a>
            <a class="enlace" href="https://www.instagram.com/365beauty.hn/?fbclid=IwAR1tilLjO3W7Wl2doEc37fKf_6HjB93sEbXRMI6pMC1SpBL1Wb3xuKUxEKo"><i style="color: #9938B3;" class="fab fa-instagram"></i></a>
            <a class="enlace" href="https://www.facebook.com/365beauty.hn"><i class="fab fa-facebook" style="color: #1E56A1;"></i></a>
            <a href="Registro.html" id="inicio">Registrarse</a>
            <a href="Registro.html" id="inicio">Iniciar Sesión</a>
            <label for="check" class="esconder-menu">
                &#215
            </label>
        </nav>
    </header>

    @yield('seccion')
    
   </body>
</html>
