<!DOCTYPE html>
<html>
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><!-- meta para no agrandar la pantalla desde un movil -->
        
        <title>Bootstrap con khriz</title>
        
        <link rel="stylesheet" href="css/normalize.css" />
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" href="css/cssPersonalizado.css" />
    
    </head>
    
    <body>
        
        <nav id="navBarraSuperior" class="navbar navbar-fixed-top">
            <section class="navbar-inner">
                <section class="container">
                    <a href="" class="btn btn-navbar" data-toggle='collapse' data-target='.nav-collapse'>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a href="https://www.facebook.com/groups/340137609437367" class="brand">Grupo fb php</a>
                    
                    <section class="nav-collapse">
                        <ul class="nav">
                            <li class="active">
                                <a href="">
                                    <i class="icon-home "></i>
                                    Página principal
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="icon-heart"></i>
                                    ¿Web?
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="icon-book"></i>
                                    Contáctanos
                                </a>
                            </li>
                        </ul>
                    </section>
                </section>
            </section>
        </nav>
        
        <section class="container-fluid">
            <article class="row-fluid" id="artInformacion">
                <div class="span12">
                    <h3>Desarrollador web 2013</h3>
                    <p id="pParrafo" name="pParrafo">
                        Este es mi párrafo, entonces uds pueden
                        escribir lo que deseen en este espacio, pueden
                        colocar una sola linea o varias :D.
                    </p>
                </div>
            </article>
            
            <article class="row-fluid" id="artFormularios">
                <form class="form-signin" id="formUsuarioRegistrado" name="formUsuarioRegistrado">
                    <input autofocus required type="email" id="txtNombreUsuario" name="txtNombreUsuario" class="input-block-level" placeholder="Email" />
                    <input required type="password" id="pwClaveUsuario" name="pwClaveUsuario" class="input-block-level" placeholder="Ingresa tu clave" />
                    <button id="btnIngresar" name="btnIngresar" type="submit" class="btn btn-info">Ingresar</button>
                    
                    <label>
                        <input checked type="checkbox" id="chkboxRecordarDatos" name="chkboxRecordarDatos" value="Recordarme" /> Recordar mis datos
                        <label>
                            <a href="#" id="aOlvideClave" name="aOlvideClave">¿Olvide mi contraseña?</a>
                        </label>
                    </label>
                    
                </form>
                
                <form class="form-signin" id="formNuevoUsuario" name="formNuevoUsuario">
                    <h4 class="form-signin-heading">¿Eres nuevo? <small>Regístrate</small></h4>
                    <hr />
                    <input required type="text" id="txtNuevoNombreUsuario" name="txtNuevoNombreUsuario" class="input-block-level" placeholder="Nombre completo" />
                    <input required type="email" id="txtNuevoCorreoUsuario" name="txtNuevoCorreoUsuario" class="input-block-level" placeholder="Correo electrónico" />
                    <input required type="password" id="pwNuevaClaveUsuario" name="pwNuevaClaveUsuario" class="input-block-level" placeholder="Contraseña" />
                    
                    <a role="button" data-toggle='modal' href="#myModal" class="btn btn-warning offset6">Registrate</a>
                    <!--<button class="btn btn-warning offset6">Registrate</button>-->
                </form>
                
                <div id="myModal" class="modal hide fade">
                    <div class="modal-header">
                        <button class="close" data-dismiss='modal' aria-hidden='true'>&times;</button>
                        <h3>Gracias</h3>
                    </div>
                    <div class="modal-body">
                        <p>
                            Gracias por registrarte gratis con nosotros, no te cobraremos nada solo debes donar
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-primary" href="">Aceptar</a>
                        <a class="btn btn-danger" data-dismiss='modal' href="">Cerrar</a>
                    </div>
                </div>
                
            </article>
            
        </section>
        
        
        
        <footer>
            <a href="#"> Programo por comida </a>
            
            <a href="#"> Donen xfa </a>
        </footer>
        
        <!-- area de scripts -->
        <script src="js/js/quitandoWebKit.js"></script>
        <script src="js/jQuery/jquery.js"></script>
        <script src="js/jsBootstrap/bootstrap.js"></script>
        <!-- area de scripts -->
    </body>
</html>
