<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo URL ?>vista/css/adminmenu.css">
    <link rel="stylesheet" href="<?php echo URL ?>vista/css/directorios.css">
    <script src="http://localhost/proyectolentes/Optica/Vista/js/producto.js"></script>
    <title>Productos</title>

</head>

<body>
<?php include "menu.php" ?>
    <div class="container">
        <div class="h1">DIRECTORIO DE PRODUCTOS</div>
        <div class="row justify-content-end">
            <a href="<?php echo URL?>productos/agregar" type="button" class="btn btn-primary col-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-plus-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
                AGREGAR</a>
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
                        <th scope="col">Género:</th>
                        <th scope="col">Opciones:</th>
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
                        <td>
                            <a href="<?php echo URL; ?>productos/editar?id=<?php echo $row['id']; ?>&name=<?php echo $row['nombre']; ?>&marca=<?php echo $row['marca']; ?>&precio=<?php echo $row['precio']; ?>&material=<?php echo $row['material']; ?>" class="btn btn-light">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </a>
                            <a href="<?php echo URL; ?>productos/eliminarProdu?id=<?php echo $row['id'];?> "  class="btn btn-danger" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd"
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg>
                            </a>
                        </td>
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
</body>

</html>