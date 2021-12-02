@extends('plantilla')

@section('seccion')
    
    <section class="registrarse">
        <section class="form-register">
            <form action="/store" method="post" role="form">
             {{ csrf_field() }}
                <h4 class="hh">Formulario de Registro</h4>
                <input class="controls" type="text" name="name" placeholder="Nombre Completo">
                <input class="controls" type="text" name="username" placeholder="Nombre de Usuario">
                <input class="controls" type="text" name="gender"  placeholder="Género">
                <input class="controls" type="date" name="birthday"  placeholder="Fecha de Nacimiento">
                <input class="controls" type="email" name="email"  placeholder="Correo">
                <input class="controls" type="password" name="password"  placeholder="Ingrese su Contraseña">
                <input class="controls" type="password" name="password"  placeholder="Confirmar Contraseña">
                <input class="botons" type="submit" value="Registrar">
                <p><a href="Login.html#cover">¿Ya tengo Cuenta?</a></p>
            </form>
        </section>
    </section>

    <footer>
        <img src="img/logo_copia.jpg" alt="" class="logo">
    </footer>
@stop

