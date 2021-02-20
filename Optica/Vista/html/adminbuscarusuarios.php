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
                    <div class="h1"> USUARIO # <span>12345</span></div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="validationServer01">Nombre:</label>
                            <!-- is-valid es una clase para validar campos -->
                            <input type="text" class="form-control " disabled
                                required>
             
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationServer02">Apellido:</label>
                            <!-- is-valid es una clase para validar campos -->
                            <input type="text" class="form-control "  disabled
                                required>
                        </div>
                    </div>
                    <!--  eso es un comentario -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label >Email:</label>
                            <!-- is-valid es una clase para validar campos -->
                            <input type="email" class="form-control " id="validationServer03"
                            disabled required>
                           
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationServer04">Contraseña:</label>
                            <input type="password" class="form-control" id="validationServer04" disabled
                                required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="validationServerUsername">Nombre de Usuario</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                </div>
                                <input type="text" class="form-control " id="validationServerUsername"
                                disabled aria-describedby="inputGroupPrepend3" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationServer05">Tipo de Usuario</label>
                            <input type="text" class="form-control "  disabled
                            required>
                        </div>
                    </div>
        </div>
        <a href="<?php echo URL ?>/usuario/mostrarcontrolador" class="btn btn-primary" type="submit">GUARDAR DATOS</a>
        <a class="btn btn-dark" href="<?php echo URL ?>/usuario/mostrarcontrolador">CANCELAR</a>
        </form>
    </div>
    </div>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>

</html>