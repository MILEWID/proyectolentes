<?php
include("conexionprueba.php");

if(empty($_REQUEST['id'])){
    echo "No se encuentra el id";
    mysqli_close($conexion);
}
$id = $_REQUEST['id'];
$sql = mysqli_query($conexion, "SELECT * FROM citas WHERE id = $id");
$resul_sql = mysqli_num_rows($sql);

if($resul_sql ==0){
    echo "algo salio mal";
} else{
    while($mostrar = mysqli_fetch_array($sql)){
        $nombre = $mostrar['nombre'];
        $apellido = $mostrar['apellido'];
        $fecha = $mostrar['fecha'];
        $hora = $mostrar['hora'];
        $motivo = $mostrar['motivo'];
    }
}
?>


<!DOCTYPE html>
<html lang="en">

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
    <title>Modificar cita</title>
</head>

<body>
    <?php include "menu.php" ?>
    <div class="container">
        <div class="row justify-content-center">
            <form method="POST" action="posteditar.php">
                <class class="form-row">
                    <div class="h1">MODIFICAR CITAS</div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationServer01">Nombre:</label>
                                <!-- is-valid es una clase para validar campos -->
                                <input type="text" class="form-control " id="validationServer01" value=<?php echo $nombre ?>
                                     required>
                                <div class="valid-feedback">
                                    Es correcto
                                </div>
                                <div class="invalid-feedback">
                                    Es Incorrecto
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationServer02">Apellido:</label>
                                <!-- is-valid es una clase para validar campos -->
                                <input type="text" class="form-control " id="validationServer02" value=<?php echo $apellido ?>
                                    required>
                                <div class="valid-feedback">
                                    Correcto
                                </div>
                                <div class="invalid-feedback">
                                    Incorrecto
                                </div>
                            </div>
                        </div>

                        <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="validationServer03">Fecha de consulta:</label>
                            <!-- is-valid es una clase para validar campos -->
                            <input type="date" class="form-control " id="validationServer03" value=<?php echo $fecha ?>
                                required>
                            <div class="valid-feedback">
                                Es correcto
                            </div>
                            <div class="invalid-feedback">
                                Es Incorrecto
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationServer04">Hora:</label>
                            <input type="time" min="09:00" max="17:30" class="form-control" id="validationServer04" value=<?php echo $hora ?>
                                required>
                            <div class="valid-feedback">
                                Correcto
                            </div>
                            <div class="invalid-feedback">
                                Por favor ingrese una hora válida.
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group col-md-6">
                                    <label for="validationServer05">Motivo de consulta: </label>
                                    <input type="textarea" rows="10" cols="50" id="validationServer05" class="form-control" name="motivo" value=<?php echo $motivo ?> required>
                                </div>
                            </div>
                        </div>
                    <br>
                    <br>
                </div>
                <button class="btn btn-primary" type="submit">GUARDAR DATOS</button>
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