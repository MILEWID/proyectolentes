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

  <link rel="stylesheet" href="<?php echo URL; ?>vista/css/cliente.css" />
  <link rel="stylesheet" href="<?php echo URL; ?>vista/css/mobile-style.css">

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
              <a class="nav-link" href="#">ACERCA DE</a>
            </li>
            <li class="nav-item dropdown">
              <div class="dropdown">
                <a href="#" class="nav-link">PRODUCTOS</a>
                <div class="dropdown-content">
                  <a href="#"><i class="fas fa-glasses mx-2"></i>Lentes</a>
                  <a href="#"><i class="far fa-eye mx-2"></i>Lunas</a>
                  <a href="#"><i class="fas fa-magic mx-2"></i>Armazones</a>
                  <a href="#"><i class="fas fa-shopping-bag mx-2"></i>Kit de Limpieza</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <div class="dropdown">
                <a href="#" class="nav-link">SERVICIOS</a>
              </div>
            </li>                  
            <li class="nav-item dropdown">
              <div class="dropdown">
                <a class="nav-link" href="#"><i class="fas fa-user-circle fa-2x mx-2"></i>Usuario</a>
                <div class="dropdown-content">
                  <a href="#"><i class="far fa-calendar-alt mx-2"></i>Agenda - Citas</a>
                  <a href="#"><i class="far fa-question-circle mx-2"></i>Ayuda</a>
                  <a href="#"><i class="fas fa-sign-out-alt mx-2"></i>Salir</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="container text-center">
      <div class="row">
        <div class="col-md-7 col-sm-12  text-white">
          <h2><span class="word" id="word"></span></h2>        
          <h1>DR. BYRON HIDALGO</h1>
          <p>
            Reciba un servicio especializado con la  mejor tecnología y precios, consulta con Nuestros Profesionales de la  Salud Visual.
          </p>
          <button class="btn btn-light px-5 py-2 primary-btn"><i class="fas fa-user-edit mx-2"></i>
            RESERVAR CITA
          </button>
        </div>
        <div class="col-md-5 col-sm-12">
          <img src="<?php echo URL; ?>vista/imágenes/undraw_doctors_white_cliente.svg" alt="doctor" class="img-fluid" />
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
        <p class="container text-center">
          Nuestra Visión tiene como objetivo mejorar la calidad de vida de sus pacientes a través de un servicio especializado en el cuidado de la salud visual. 
        </p>
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
                <img class="card-img-top" src="<?php echo URL; ?>vista/imágenes/Tratamientos_Servicio.jpg" alt="Card image cap">
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
        </div>
      </div>    
    </section>
    
    <!-- Section 4 -->
    <section class="section-4">
      <div class="container text-center">
        <h1 class="text-dark">MISIÓN Y VISIÓN</h1>
        <p class="text-secondary">subtitulo ......</p>
      </div>
      <div class="team row ">
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
              <div>
                <p class="banner-card">
                  <i class="fas fa-child fa-7x"></i>
                </p>                 
              </div>
                <div class="card-body">
                  <h3 class="card-title">MISIÓN</h3>
                  <p class="card-text">
                    Ofrecer un servicio integral mediante la combinación de valores, calidad de atención y asesoría, de manera que éstos satisfagan las necesidades y expectativas de nuestros clientes, produciendo un impacto positivo en sus vidas y crecimiento personal.
                  </p>
                  <p class="text-black-50">ÓPTICA VICTORIA</p>                 
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
                        <p class="card-text">
                          Establecida desde hace más de 10 años, cuenta con lo mejor en tecnología, y profesionales altamente calificados en el campo de la optometría, nos hemos identificado por brindar a nuestra estimable clientela, una atención personalizada de calidad.
                        </p>                        
                        <p class="text-black-50">NOMBRE PROPIETARIO</p>
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
                        <h3 class="card-title">PROPIETARIO</h3>
                        <p class="card-text">
                          Establecida desde hace más de 15 años, cuenta con lo mejor en tecnología, y profesionales altamente calificados en el campo de la optometría, nos hemos identificado por brindar a nuestra estimable clientela, una atención personalizada de calidad.
                        </p>  
                        <p class="text-black-50">OPTICA VICTORIA</p>                      
                      </div>
                    </div>
                  </div>
              </div>
        </div>
        </div>
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div>
                  <p class="banner-card">
                    <i class="fas fa-globe-americas fa-7x"></i>
                  </p>                 
                </div>
                <div class="card-body">
                  <h3 class="card-title">VISIÓN</h3>
                  <p class="card-text">                
                    Consolidarnos como la mejor opcion óptica para satisfacer sus necesidades, y seguiremos siendo los líderes como la cadena de ópticas de mayor cobertura nacional bajo el amparo de la tecnología, productividad, talento humano y un profundo espíritu de servicio.                   
                  </p> 
                  <p class="text-black-50">OPTICA VICTORIA</p>                              
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
          <img class="card-img-top" src="../imágenes/logop.jpg" alt="Card image cap">
          <p class="pt-4 text-muted">Copyright ©2021 Todos los derechos reservados |
            <span> Óptica Victoria</span>
          </p>
        </div>
        <div class="col-md-5 col-sm-12">
          <h4 class="text-light">Contactos</h4>
          <br>
          <p class="text-light">
            <i class="fas fa-map-marker-alt mx-3"></i>Riobamba
          </p>
          <p  class="text-light">
            <i class="fas fa-at mx-3"></i>optica@hotmail.com
          </p>
          <p  class="text-light">
            <i class="fab fa-whatsapp mx-3"></i>09980072777
          </p>        
          <form class="form-inline">
            <div class="col pl-0">
              <div class="input-group pr-5">
              
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
       <div class="col-md-2 col-sm-12">
          <h4 class="text-light">Siguenos</h4>
          <p class="text-muted">Encuéntranos en Facebook</p>
          <div class="column text-light">
            <i class="fab fa-facebook-f"></i>
            
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

  <script src="<?php echo URL; ?>vistas/js/cliente.js"></script>
</body>

</html>