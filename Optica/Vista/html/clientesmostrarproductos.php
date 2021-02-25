<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo URL ?>vista/css/adminmenu.css">
    <link rel="stylesheet" href="<?php echo URL ?>vista/css/directorios.css">
    <link rel="stylesheet" href="<?php echo URL; ?>vista/css/cliente.css" />
  <link rel="stylesheet" href="<?php echo URL; ?>vista/css/mobile-style.css">  
  <link rel="stylesheet" href="<?php echo URL; ?>vista/css/vistaproducliente.css">  
    <script src="http://localhost/proyectolentes/Optica/Vista/js/producto.js"></script>
    <title>Administrar Usuarios</title>

</head>

<body>
<header>
<div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg">
        <a id="logo" class="navbar-brand" href="#"> <i class="fas fa-glasses fa-1x mx-2"> </i>
          OPTICA "VICTORIA"</a>
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
              <a class="nav-link" href="#">SOBRE</a>
            </li>
            <li class="nav-item dropdown">
              <div class="dropdown">
                <a href="<?php echo URL?>productos/mostrarproductos" class="nav-link">PRODUCTOS</a>
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
                <div class="dropdown-content">
                  <a href="#"><i class="fas fa-user-check mx-2"></i>Consultas</a>
                  <a href="#"><i class="fas fa-hand-holding-heart mx-2"></i>Tratamientos</a>
                  <a href="#"><i class="far fa-eye mx-2"></i>L. Contacto</a>
                </div>
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
</header>
    <div class="container">
        <div class="h1">DIRECTORIO DE PRODUCTOS</div>
        <div class="row justify-content-end">
            
                <button type="button" class="btn btn-dark col-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                    viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
                BUSCAR</button>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre:</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Tipo:</th>
                        <th scope="col">Precio:</th>
                        <th scope="col">Material</th>
                        <th scope="col">sexo:</th>
                       
                    </tr>
                </thead>
                <tbody id="id_table_body_product">
                    <?php
                    while($row=$valorescontrolador->fetch_assoc()){
                    ?>

                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['marca']; ?></td>
                        <td><?php echo $row['tipo']; ?></td>
                        <td><?php echo $row['precio']; ?></td>
                        <td><?php echo $row['material']; ?></td>
                        <td><?php echo $row['sexo']; ?></td>
                      </tr> 
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        

    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div >
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Buscar Productos</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body container">
                        Ingrese el ID del usuario a buscar:
                        <div class="row">
                            <div class="col-8">
                                <input type="text"  id="idProducto" class="form-control" placeholder="ej: 10" name="id" required>
                            </div>
                            <div class="col-4">
                                <input type="submit" value="Buscar" onclick="producto_id()" class="btn-dark">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo URL ?>vista/js/jquery-3.2.1.min.js"></script>
    <script>
        $("#menu").load("adminmenu.html header");
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>