<!-- 
ejemplo sencillo utilizando Bootstrap de Twitter, creado por
Khriz Enríquez, mayor informacion @khrizenriquez (twitter)
/khrizenriquez (facebook)
-->
<!DOCTYPE html>
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><!-- meta para no agrandar la pantalla desde un movil -->
        
        <title>Bootstrap con khriz</title>
        
        <link rel="stylesheet" href="css/normalize.css" />
        <link rel="stylesheet" href="css/templateSate.css" />
        <link rel="stylesheet" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" href="css/estiloPersonalizado.css" />
    </head>
    
    <body>
        <!-- seccion que me servira para mi barra de navegacion de la pagina nada mas -->
        <nav id='navBarraSuperior' class='navbar navbar-fixed-top'>
            <section class='navbar-inner'>
                <section class='container'>
                    <a class='btn btn-navbar' data-toggle='collapse' data-target='.nav-collapse'>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                    </a>
                    <a class='brand' href='https://www.facebook.com/groups/340137609437367/'>Grupo desarrollador web</a>
                    <section class='nav-collapse'>
                        <ul class='nav'>
                            <li class='active' name=''>
                                <a href='index.php'>
                                    <i class="icon-home icon-white"></i>
                                    Página principal
                                </a>
                            </li>
                            <li class='' name=''>
                                <a href='porqueWeb.php'>
                                    <i class="icon-heart icon-white"></i>
                                    ¿Por que la web?
                                </a>
                            </li>
                            <li class='' name=''>
                                <a href='contactanos.php'>
                                    <i class="icon-book icon-white"></i>
                                    ¡Contactanos!
                                </a>
                            </li>
                        </ul>
                    </section><!--/.nav-collapse -->
                </section>
            </section>
        </nav>
        <!-- seccion que me servira para mi barra de navegacion de la pagina nada mas -->
        
        <!-- seccion de mi pagina que tendra informacion como login -->
        
        <section class="container-fluid">
            <article class="row-fluid" id="artInformacion">
                <div class="span12">
                    <h3>Desarrollador web 2013</h3>
                    <p id="pParrafo" name="pParrafo">
                        Tener información significa tener un gran poder (aparente), pero utilizarla es tener realmente ese poder (absoluto)
                    </p>
                </div>
            </article>
            
            <article class="row-fluid" id="artFormularios">
                
                <form class="form-signin" id="formUsuarioRegistrado" name="formUsuarioRegistrado">
                    <input autofocus id="txtNombreUsuario" name="txtNombreUsuario" type="email" class="input-block-level" placeholder="Email">
                    
                    <input id="pwClaveUsuario" name="pwClaveUsuario" type="password" class="input-block-level" placeholder="Password">
                    
                    <button id="btnIngresar" name="btnIngresar" class="btn btn-info" type="submit">Ingresar</button>
                    
                    <label>
                        <input id="chkboxRecordarDatos" name="chkboxRecordarDatos" type="checkbox" value="Recordarme" checked> Recordar mis datos
                        <label for="Olvide">
                            <a href="#" id="aOlvideClave" name="aOlvideClave">¿Olvidaste tu contraseña?</a>
                        </label>
                    </label>
                </form>
                
                <form class="form-signin" id="formNuevoUsuario" name="formNuevoUsuario">
                    <h4 class="form-signin-heading">¿Eres nuevo? <small>Regístrate</small></h4>
                    <hr />
                    <input name="txtNuevoNombreUsuario" id="txtNuevoNombreUsuario" type="text" class="input-block-level" placeholder="Nombre completo">
                    <input name="emNuevoCorreoUsuario" id="emNuevoCorreoUsuario" type="email" class="input-block-level" placeholder="Correo electrónico">
                    <input name="pwnNuevaClaveUsuario" id="pwnNuevaClaveUsuario" type="password" class="input-block-level" placeholder="Password">
                    
                    <button class="btn btn-warning offset6" type="submit">Registrate</button>
                </form>

            </article>
        </section>
        
<!--        <div class="active progress progress-info progress-striped">
  <div class="bar " style="width: 20%"></div>
</div>
<div class="active progress progress-success progress-striped">
  <div class="bar " style="width: 40%"></div>
</div>
<div class="active progress progress-warning progress-striped">
  <div class="bar" style="width: 60%"></div>
</div>
<div class="active progress progress-danger progress-striped">
  <div class="bar" style="width: 80%"></div>
</div>-->


        <!-- seccion de mi pagina que tendra informacion como login -->
        
        <!-- seccion de mi pie de pagina -->
        <footer>
            <a href="#">Donaciones &nbsp;||&nbsp;</a>
            <a href="">Sobre nosotros</a>
        </footer>
        <!-- seccion de mi pie de pagina -->
        
        <script src="js/js/quitandoWebKit.js"></script>
        <script src="js/jQuery/fondosCambiantes.js"></script>
        <script src="js/jQuery/jquery.js"></script>
        <script src="js/jsBootstrap/bootstrap.js"></script>
        <script src="js/jQuery/jqueryCollapse.js"></script>
        <!--<script src="js/jsBootstrap/bootstrap-collapse.js"></script>-->
        
    </body>
</html>