@extends('plantilla1')
@section('seccion')
    
    <section id="cover" class="min-vh-100">
        <div id="cover-caption" class="margen">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-8 mx-auto text-center form p4">
                        <div class="col-12 user-img">
                            <img src="img/logo.png" alt="">
                        </div>
                        <div class="px-2">
                            <form action="" method="post"class="justify-content-center"> 
                                
                                <div class="form-group"  id="user-group">
                                    <input type="email" class="form-control" placeholder="Correo">
                                </div>
                                <div class="form-group"  id="pass-group">
                                    <input type="password" class="form-control" placeholder="Contraseña">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-sign-in-alt"></i> Ingresar</button>
                            </form>
                            <div class="col-12 forgot">
                                <a href="#">Recordar Contraseña</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <img src="img/logo_copia.jpg" alt="" class="logo">
    </footer>
@stop
