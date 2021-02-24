<?php
$datos = $valorescontrolador->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="es">
<!--hola-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet"  href="<?php echo URL ?>vista/css/adminmenu.css">
    <link rel="stylesheet" href="<?php echo URL ?>vista/css/directorios.css">
    <link rel="stylesheet" href="<?php echo URL ?>vista/css/agregar.css">
    <title> Usuario </title>
</head>

<body>
<?php include "menu.php" ?>
    <div class="container">
        <div class="row justify-content-center">
            <form>
                <class class="form-row">
                    <div class="h1"> DATOS DE LA CITA  <span> <?php $apellido ?> </span></div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="validationServer01">Nombre:</label>
                            <!-- is-valid es una clase para validar campos -->
                            <input type="text" class="form-control" value="<?php echo $datos['nombre'] ?>" disabled
                                readonly>
             
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationServer02">Apellido:</label>
                            <!-- is-valid es una clase para validar campos -->
                            <input type="text" class="form-control " value="<?php echo $datos['apellido'] ?>"  disabled
                                readonly>
                        </div>
                    </div>
                    <!--  eso es un comentario -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label >Fecha de consulta:</label>
                            <!-- is-valid es una clase para validar campos -->
                            <input type="date" class="form-control " value="<?php echo $datos['fecha'] ?>" id="validationServer03"
                            disabled readonly>
                           
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationServer04">Hora:</label>
                            <input type="time" class="form-control" id="validationServer04" value="<?php echo $datos['hora'] ?>" disabled
                                readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="validationServerUsername">Motivo de consulta</label>
                            <div class="input-group">
                                <input type="textarea" class="form-control " value="<?php echo $datos['motivo'] ?>"
                                disabled aria-describedby="inputGroupPrepend3" readonly>
                            </div>
                        </div>
                    </div>
        </div>
        <a href="<?php echo URL ?>citas" class="btn btn-primary" type="submit">LISTO</a>
        <a class="btn btn-dark" href="<?php echo URL ?>citas">CANCELAR</a>
        </form>
    </div>
    </div>


    </div>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script>
        $("#menu").load("adminmenu.html header");
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>

</html>