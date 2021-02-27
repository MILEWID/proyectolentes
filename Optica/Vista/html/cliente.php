<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>CLIENTE-ÓPTICA</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <link rel="stylesheet" href="<?php echo URL; ?>vista/css/cliente.css" />
  <link rel="stylesheet" href="<?php echo URL; ?>vista/css/mobile-style.css">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script src="http://localhost/proyectolentes/Optica/Vista/js/citas.js"></script>



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
            <li class="nav-item">
            <a href="<?php echo URL?>productos/mostrarproductos" class="nav-link">PRODUCTOS</a>
            </li>                     
            <li class="nav-item dropdown">
              <div class="dropdown">
                <a class="nav-link" href="#"><i class="fas fa-user-circle fa-2x mx-2"></i>Usuario</a>
                <div class="dropdown-content">
                  <a hhref="#" data-bs-toggle="modal" data-bs-target="#exampleModal" ><i class="far fa-calendar-alt mx-2"></i>Agendar-Cita</a>
                  <a href="#"><i class="far fa-question-circle mx-2"></i>Ayuda</a>
                  <a href="#"><i class="fas fa-sign-out-alt mx-2"></i>Salir</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="container text-center" >
      <div class="row">
        <div class="col-md-7 col-sm-12  text-white">
          <span class="word" id="word"></span>     
          <h1>Dr. Byron Hidalgo</h1>
          <p>
            Reciba un servicio especializado con la  mejor tecnología y precios...
          </p>
          <button class="btn btn-light px-5 py-2 primary-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" ><i class="fas fa-user-edit mx-2"></i>
            RESERVAR CITA
          </button>
        </div>
        <div class="col-md-5 col-sm-12">
          <img src="<?php echo URL; ?>vista/imágenes/undraw_doctors_white_cliente.svg" alt="doctor" />
        </div>
      </div>
    </div>
  </header>


  <main>
    <section class="section-2 container-fluid p-0">
      <div class="cover">
        <div class="overlay"></div>
        <div class="content text-center">
          <h1>PRODUCTOS</h1>
          <p>
            Bienvenido a la sección de productos, revisa nuestra galería para más detalles...
          </p>
        </div>
      </div>
      <div class="container-fluid text-center">
        <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">

          <div class="rect">
            <h1>20</h1>
            <p>LENTES</p>
            <div class="container">
              <img src="<?php echo URL; ?>vista/imágenes/Lentes de Sol_Productos.jpg" alt="" class="img-fluid">
            </div>   
            <a href="#" class="btn btn-dark px-5 py-2 primary-btn mb-5"><i class="fas fa-plus-circle mx-2"></i>Ver más</a>           
          </div>

          <div class="rect">
            <h1>100</h1>
            <p>LUNAS</p>
            <div class="container">
              <img src="<?php echo URL; ?>vista/imágenes/Lentes de Sol_Productos.jpg" alt="" class="img-fluid">
            </div>
            <a href="#" class="btn btn-dark px-5 py-2 primary-btn mb-5"><i class="fas fa-plus-circle mx-2"></i>Ver más</a>    
          </div>
          <div class="rect">
            <h1>56</h1>
            <p>ARMAZONES</p>
            <div class="container">
              <img src="<?php echo URL; ?>vista/imágenes/Lentes de Sol_Productos.jpg" alt="" class="img-fluid">
            </div> 
            <a href="#" class="btn btn-dark px-5 py-2 primary-btn mb-5"><i class="fas fa-plus-circle mx-2"></i>Ver más</a>      
          </div>

          <div class="rect">
            <h1>91</h1>
            <p>KIT DE LIMPIEZA</p>
            <div class="container">
              <img src="<?php echo URL; ?>vista/imágenes/Lentes de Sol_Productos.jpg" alt="" class="img-fluid">
            </div> 
            <a href="#" class="btn btn-dark px-5 py-2 primary-btn mb-5"><i class="fas fa-plus-circle mx-2"></i>Ver más</a>    
          </div>
            
        </div>
      </div>

      <div class="purchase text-center">
        <h1>"Prueba Nuestros Servicios"</h1>
        
        <div class="cards">
          <div class="d-flex flex-row justify-content-center flex-wrap">
            <div class="card">
              <div class="inner">
                <img class="card-img-top" src="<?php echo URL; ?>vista/imágenes/Consulta_Servicio.jpg" alt="Card image cap">
              </div>
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">CONSULTAS</h5>
                </div>
                <p class="card-text">
                  Realiza un control de tu estado de salud visual para prevenir posibles problemas patológicos.                
                </p>
                <div class="pricing">
                  <h1>$50.99</h1>
                  <br>
                  <a href="#" class="btn btn-dark px-5 py-2 primary-btn mb-5"><i class="fas fa-user-edit mx-2"></i>Agendar Cita</a>
                </div>
              </div>
            </div>
            

            <div class="card">
              <div class="inner">
                <img class="card-img-top" src="<?php echo URL; ?>vista/imágenes/lunass.jfif" alt="Card image cap">
              </div>
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">TRATAMIENTOS</h5>
                </div>
                <p class="card-text">
                  Realiza un control de tu estado de salud visual para prevenir posibles problemas patológicos.                
                </p>
                <div class="pricing">
                  <h1>$100.99</h1>
                  <br>
                  <a href="#" class="btn btn-dark px-5 py-2 primary-btn mb-5"><i class="fas fa-user-edit mx-2"></i>Agendar Cita</a>
                </div>
              </div>
            </div>
                  
            <div class="card">
              <div class="inner">
                <img class="card-img-top" src="<?php echo URL; ?>vista/imágenes/L Contacto_Servicio.jpg" alt="Card image cap">
              </div>
              <div class="card-body">
                <div class="title">
                  <h5 class="card-title">LENTES DE CONTACTO</h5>
                </div>
                <p class="card-text">
                  Realiza un control de tu estado de salud visual para prevenir posibles problemas patológicos.                
                </p>
                <div class="pricing">
                  <h1>$45.99</h1>
                  <br>
                  <a href="#" class="btn btn-dark px-5 py-2 primary-btn mb-5"><i class="fas fa-user-edit mx-2"></i>Agendar Cita</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="section-3 container-fluid p-0 text-center">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <h1>Conoce nuestros horarios de atención</h1> 

   <h2>Lunes-Viernes: </h2>  <br><br>
          <h2>08h:00 - 18h:00 </h2>  <br>  <br>
           
            <h2>Sábado-Domingo: </h2>  <br><br>   
           <h2>08h:00 - 16h:00 </h2>      
        </div>
      </div>    
    </section>
    
    <!-- Section 4 -->
    <section class="section-4">
     
      <div class="team row ">
       
       <div class="col-md-4 col-12">
            <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner text-center">
                  <div class="carousel-item active">
                    <div class="card mr-2 d-inline-block shadow">
                      <div>
                        <p class="banner-card">
                          <i class="fas fa-glasses fa-7x"></i>
                        </p>                 
                      </div>                    
                      <div class="card-body">
                        <h3 class="card-title">ÓPTICA VICTORIA</h3>
                                          
                        <p class="text-black-50">Dr. Byron Hidalgo</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card  d-inline-block mr-2 shadow">
                      <div>
                        <p class="banner-card">
                          <i class="fas fa-user-md fa-7x"></i>
                        </p>                 
                      </div>    
                      <div class="card-body">
                        
                        <p class="text-black-50">ÓPTICA VICTORIA</p>                      
                      </div>
                    </div>
                  </div>
              </div>
        </div>
        </div>
        

         <div class="col-md-4 col-12">
            <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner text-center">
                  <div class="carousel-item active">
                    <div class="card mr-2 d-inline-block shadow">
                      <div>
                        <p class="banner-card">
                          <i class="fas fa-glasses fa-7x"></i>
                        </p>                 
                      </div>                    
                      <div class="card-body">
                        <h3 class="card-title">ÓPTICA VICTORIA</h3>
                                          
                        <p class="text-black-50">Dr. Byron Hidalgo</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card  d-inline-block mr-2 shadow">
                      <div>
                        <p class="banner-card">
                          <i class="fas fa-user-md fa-7x"></i>
                        </p>                 
                      </div>    
                      <div class="card-body">
                        
                        <p class="text-black-50">ÓPTICA VICTORIA</p>                      
                      </div>
                    </div>
                  </div>
              </div>
        </div>
        </div>


         <div class="col-md-4 col-12">
            <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner text-center">
                  <div class="carousel-item active">
                    <div class="card mr-2 d-inline-block shadow">
                      <div>
                        <p class="banner-card">
                          <i class="fas fa-glasses fa-7x"></i>
                        </p>                 
                      </div>                    
                      <div class="card-body">
                        <h3 class="card-title">ÓPTICA VICTORIA</h3>
                                          
                        <p class="text-black-50">Dr. Byron Hidalgo</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card  d-inline-block mr-2 shadow">
                      <div>
                        <p class="banner-card">
                          <i class="fas fa-user-md fa-7x"></i>
                        </p>                 
                      </div>    
                      <div class="card-body">
                        
                        <p class="text-black-50">ÓPTICA VICTORIA</p>                      
                      </div>
                    </div>
                  </div>
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Cita</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body container">
                    <div class="row">
                        <div class="col">
                            <input type="text" id="id_inputNames"  class="form-control" placeholder="Nombres" aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="text"  id="id_inputApes" class="form-control" placeholder="Apellidos" aria-label="Last name">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <input type="date" id="id_inputDate" class="form-control" placeholder="" aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="time" id="id_inputTime" class="form-control" placeholder="Last name" aria-label="Last name">
                        </div>
                    </div>
                    <br>

                    <div class="form-floating">
                        <textarea class="form-control" id="id_inputMotivos" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comentarios</label>
                    </div>

                    <div class="col-4">
                        <input type="submit" value="Guardar" class="btn-dark" onclick="insertCita()">
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>




  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

    <script src="<?php echo URL; ?>vista/js/cliente.js"></script>
</body>

</html>