<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link rel="stylesheet" href="../css/Cliente-Registrarse.css">
</head>

<body>
  <header>
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg">
        <a id="logo" class="navbar-brand" href="#"> <i class="fas fa-glasses fa-1x mx-2"> </i>
          ÓPTICA "VICTORIA"</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-align-right text-light"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mr-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">INICIO
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URL?>Vista/html/acercade.html">ACERCA DE</a>
            </li>             
            <li class="nav-item dropdown">
              <div class="dropdown">
                <a class="nav-link" href="#"><i class="fas fa-user-circle fa-2x mx-2"></i></a>
                <div class="dropdown-content">
                  <a href="" data-toggle="modal" data-target="#registrarse-cliente" >Crear Cuenta</a>
                  <a href="" data-toggle="modal" data-target="#inicio-cliente">Iniciar Sesión </a>              
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <section class="section-1 container-fluid p-0">
      
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="../imágenes/pexels-andrew-wilus-5515756.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../imágenes/pexels-helena-lopes-933964.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../imágenes/pexels-aline-viana-prado-3491678.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        </section>
    </div>
  </header>

  <div class="modal fade" id="registrarse-cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registrarse</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo URL; ?>usuario/registrarcontroladorCliente" method="POST">
            <label for="nombre-usuario"> Nombre de Usuario</label>
            <p><input type="text" name="nombre-usuario" id="nombre-usuario"> </input> </p>
            <label for="nombre-cliente"> Nombre </label>
            <p><input type="text"  name="nombre-cliente" id="nombre-cliente"> </input> </p>           
            <label for="apellido-cliente"> Apellido </label>
            <p><input type="text" name="apellido-cliente" id="apellido-cliente"> </input></p>       
            <label for="correo-cliente"> Correo </label>
            <p><input type="email" name="correo-cliente" id="correo-cliente"></input></p> 
            <label for="contraseña-cliente">Contraseña</label>
            <p><input type="password"  name="contrasena-cliente" id="contraseña-cliente"> </input></p>              
            <input type="submit" value="Crear Cuenta" class="btn btn-primary"></input>
            <input type="button" value="Cancelar"class="btn btn-warning"> </input>          
          </form>
        </div>      
      </div>
    </div>
  </div>

  <div class="modal fade" id="inicio-cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesión</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" name="form-registro">
            <label for="nombre-usuario"> Nombre de Usuario</label>
            <p><input type="text" id="nombre-usuario"> </input> </p>          
            <label for="contraseña-cliente">Contraseña</label>
            <p><input type="password" id="contraseña-cliente"> </input></p>  
            <p><a href="">¿Olvidaste tu Contraseña?</a></p>            
            <input type="submit" value="Ingresar" class="btn btn-primary"></input>
            <input type="button" value="Cancelar"class="btn btn-warning"> </input>          
          </form>
        </div>      
      </div>
    </div>
  </div>

  <main>

    <section class="section-2 container-fluid ">       
      <div class="purchase text-center">
        <h1>"Prueba Nuestros Servicios"</h1>      
        <div class="cards">
          <div class="d-flex flex-row justify-content-center flex-wrap">
            <div class="card mr-2 shadow-lg">
              <div class="inner">
                <img class="card-img-top" src="../imágenes/Consulta_Servicio.jpg" alt="Card image cap">
              </div>
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">CONSULTAS</h5>
                </div>
                <p class="card-text">
                  Realiza un control de tu estado de salud visual para prevenir posibles problemas patológicos.                
                </p>              
              </div>
            </div>
            

            <div class="card">
              <div class="inner">
                <img class="card-img-top" src="../imágenes/Tratamientos_Servicio.jpg" alt="Card image cap">
              </div>
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">TRATAMIENTOS</h5>
                </div>
                <p class="card-text">
                  Realiza un control de tu estado de salud visual para prevenir posibles problemas patológicos.                
                </p>                
              </div>
            </div>
                  
            <div class="card">
              <div class="inner">
                <img class="card-img-top" src="../imágenes/L Contacto_Servicio.jpg" alt="Card image cap">
              </div>
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">LENTES DE CONTACTO</h5>
                </div>
                <p class="card-text">
                  Realiza un control de tu estado de salud visual para prevenir posibles problemas patológicos.                
                </p> 
                         
              </div>
            </div>

          </div>
        </div> 

        <div class="purchase text-center">
          <h1>"Revisa Nuestros Productos"</h1>      
          <div class="cards">
            <div class="d-flex flex-row justify-content-center flex-wrap">
              <div class="card">
                <div class="inner">
                  <img class="card-img-top" src="../imágenes/Consulta_Servicio.jpg" alt="Card image cap">
                </div>
                <div class="card-body">
                  <div class="title">
                    <h5 class="card-title">LENTES</h5>
                  </div>
                  <p class="card-text">
                    Realiza un control de tu estado de salud visual para prevenir posibles problemas patológicos.                
                  </p>              
                </div>
              </div>
              
  
              <div class="card">
                <div class="inner">
                  <img class="card-img-top" src="../imágenes/Tratamientos_Servicio.jpg" alt="Card image cap">
                </div>
                <div class="card-body">
                  <div class="title">
                    <h5 class="card-title">LUNAS - ARMAZONES</h5>
                  </div>
                  <p class="card-text">
                    Realiza un control de tu estado de salud visual para prevenir posibles problemas patológicos.                
                  </p>                
                </div>
              </div>
                    
              <div class="card">
                <div class="inner">
                  <img class="card-img-top" src="../imágenes/L Contacto_Servicio.jpg" alt="Card image cap">
                </div>
                <div class="card-body">
                  <div class="title">
                    <h5 class="card-title">KITS DE LIMPIEZA</h5>
                  </div>
                  <p class="card-text">
                    Realiza un control de tu estado de salud visual para prevenir posibles problemas patológicos.                
                  </p>                            
                </div>
              </div>
  
            </div>
          </div> 
    </section>
  </main>

  
  <footer>
    <div class="container-fluid p-0">
      <div class="row text-left">
        <div class="col-md-5 col-sm-5">
          <img class="imgfoot" src="<?php echo URL; ?>vista/imágenes/logopp.png" alt="Card image cap">
          <p class="pt-4 text-muted">Copyright ©2021 Todos los derechos reservados |
            <span> Óptica Victoria</span>
          </p>
        </div>
       <div class="col-md-5 col-sm-12">
          <h4 class="text-light">Contactos</h4>
          <br>
          <p class="text-light">
           
             <?php
$url="https://outlook.live.com/owa/"; 
echo "<a class='fas fa-map-marker-alt mx-3' href='$url'></a>";
?> Machala
          </p>
          <p  class="text-light">
            <?php
$url="https://www.google.com.ec/maps/place/Machala/@-3.2568589,-79.9960488,13z/data=!3m1!4b1!4m5!3m4!1s0x90330e252f104ed1:0xea4e189f2b2da97e!8m2!3d-3.2581112!4d-79.9553924?hl=es-419"; 
echo "<a class='fas fa-at mx-3' href='$url'></a>";
?> 
            optivictoria@gmail.com
          </p>
          <p  class="text-light">
 <?php
$url=" https://web.whatsapp.com/"; 
echo "<a class='fab fa-whatsapp mx-3' href='$url'></a>";
?> 

           0960051989
          </p>        
          <form class="form-inline">
            <div class="col pl-0">
              <div class="input-group pr-5">
               
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-2 col-sm-12">
          <h4 class="text-light">Síguenos</h4>
          <p class="text-muted">En Facebook</p>
          <div class="column text-light">
<?php
$url="https://m.facebook.com/profile.php?id=107756200792351&ref=content_filter"; 
echo "<a class='fab fa-facebook-f' href='$url'></a>";
?> 

           
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="../js/cliente.js"></script>
  
</body>


</html>