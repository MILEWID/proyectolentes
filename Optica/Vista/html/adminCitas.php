<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo URL ?>vista/css/adminListaCita.css">
    <link rel="stylesheet" href="<?php echo URL ?>vista/css/directorios.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script src="http://localhost/proyectolentes/Optica/Vista/js/citas.js"></script>


    <title>Administrar Citas</title>

</head>

<body>
<?php include "menu.php" ?>
    <div class="container">
        <div class="h1">DIRECTORIO DE CITAS</div>
        <div class="row justify-content-end">
            <button type="button" class="btn btn-primary col-2" data-bs-toggle="modal" data-bs-target="#exampleModalCrear">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-plus-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
                AGREGAR</button>
            <button type="button" class="btn btn-dark col-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                    viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
                BUSCAR</button>
        </div>
<br>
        <div class="table-responsive">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">Identificador</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Motivo</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php


                    $conexion = mysqli_connect('localhost','root','','bdoptica',3306);
                    if (!$conexion){
                        echo "error".mysqli_connect_error();
                    }



                    $sql = "select * from citas";
                    $datos = null;
                    $cont =0 ;
                    $result = mysqli_query($conexion,$sql);

                    if($result && mysqli_num_rows($result)>0)
                    {

                    while($row=mysqli_fetch_array($result)){
                    ?>

                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['apellido']; ?></td>
                        <td><?php echo $row['fecha']; ?></td>
                        <td><?php echo $row['hora']; ?></td>
                        <td><?php echo $row['motivo']; ?></td>
                        <td>
                            
                            <a href="<?php echo URL; ?>citas/editar?id=<?php echo $row['id'];?> " class="btn btn-light">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </a>
                            <button class="btn btn-danger" onclick="return ConfirmEliminar(<?php echo $row['id']; ?>)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd"
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg>
                            </button>
                        </td>
                      </tr> 
                    <?php
                    }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
    <!-- Button trigger modal -->


    <!-- Modales -->
    <!-- Modal para buscar -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?php echo URL?>citas/buscarcita2" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Buscar Cita</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body container">
                        Ingrese los datos para buscar su cita:
                        <div class="row">
                            <div class="col-8">
                            <label for="nombre">Nombre: </label>
                                <input type="text" class="form-control" placeholder="Escriba el nombre" name="nombre" required> 
                            </div>
                            <br> <br> <br>
                            <div class="col-8">
                            <label for="apellido">Apellido: </label>
                                <input type="text" class="form-control" placeholder="Escriba el apellido" name="apellido" required> 
                            </div>
                            <div class="col-4">
                                <input type="submit" value="Buscar" class="btn-dark">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    function ConfirmEliminar(id)
    {
        var respuesta=confirm("¿Está seguro que desea eliminar la cita?");
            if (respuesta==true)
            {
                window.location.href= "<?php echo URL; ?>citas/eliminarCita?id="+id+"";
            } 
    }
</script>
<!-- Modal -->
<div class="modal fade" id="exampleModalCrear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <input type="text" id="id_inputNames" pattern="[A-Za-z]+"  title="Ingrese solo letras" minlength="2" maxlength="50"  class="form-control" placeholder="Nombres" aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="text"  id="id_inputApes" pattern="[A-Za-z]+"  title="Ingrese solo letras" minlength="2" maxlength="50" class="form-control" placeholder="Apellidos" aria-label="Last name">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <input type="date" id="id_inputDate" min="2021-02-27" max="2041-05-28" class="form-control" placeholder="" aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="time" id="id_inputTime" min="09:00" max="17:30" class="form-control" placeholder="Last name" aria-label="Last name">
                        </div>
                    </div>
                    <br>

                    <div class="form-floating">
                        <textarea class="form-control" id="id_inputMotivos" minlength="2" maxlength="250" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
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



</body>

</html>