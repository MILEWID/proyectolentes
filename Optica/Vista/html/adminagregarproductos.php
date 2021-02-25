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
    <title>Agregar Productos</title>
</head>

<body>
<?php include "menu.php" ?>
    <div class="container">
        <div class="row justify-content-center">
            <form action="<?php echo URL?>productos/ingresarProdu" method="POST">
                <class class="form-row">
                    <div class="h1">AGREGAR PRODUCTOS</div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="validationServer02">Nombre:</label>
                            <!-- is-valid es una clase para validar campos -->
                            <input type="text" class="form-control " name="validationServer01" id="validationServer02" placeholder="lentes"
                                required>
                            <div class="valid-feedback">
                                Correcto
                            </div>
                            <div class="invalid-feedback">
                                Incorrecto
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationServer01">Marca:</label>
                            <!-- is-valid es una clase para validar campos -->
                            <input type="text" class="form-control " name="validationServer02" id="validationServer01" placeholder="vitalia"
                                required>
                            <div class="valid-feedback">
                                Es correcto
                            </div>
                            <div class="invalid-feedback">
                                Es Incorrecto
                            </div>
                        </div>
                    </div>
                    <!--  eso es un comentario -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="validationServer02">Tipo:</label>
                            <!-- is-valid es una clase para validar campos -->
                                <select class="form-select form-select" name="validationServer03" aria-label=".form-select-lg example">
                                    <option selected value="Lentes de contacto">Lentes de contacto</option>
                                    <option value="paños">Paños</option>
                                    <option value="cordones">Cordones</option>
                                    <option value="coaja de los lentes">Cajas de los lentes</option>
                                    <option value="gafas">Gafas</option>
                                    <option value="lentes">Lentes</option>
                                </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationServer01">Precio:</label>
                            <!-- is-valid es una clase para validar campos -->
                            <input type="text" class="form-control " name="validationServer04" id="validationServer01" placeholder="5$"
                                required>
                            <div class="valid-feedback">
                                Es correcto
                            </div>
                            <div class="invalid-feedback">
                                Es Incorrecto
                            </div>
                        </div>
                    </div>
                    <div class="row">              
                        <div class="col-md-6 mb-3">
                            <label for="validationServer01">Material:</label>
                            <!-- is-valid es una clase para validar campos -->
                            <input type="text" class="form-control " name="validationServer05" id="validationServer01" placeholder="lino"
                                required>
                            <div class="valid-feedback">
                                Es correcto
                            </div>
                            <div class="invalid-feedback">
                                Es Incorrecto
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationServer02">Género:</label>
                            <!-- is-valid es una clase para validar campos -->
                            <select class="form-select form-select" name="validationServer06" aria-label=".form-select-lg example">
                                <option selected value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>

                    </div>
        </div>
        <button class="btn btn-primary" type="submit">GUARDAR DATOS</button>
        <a class="btn btn-dark" href="<?php echo URL ?>productos">CANCELAR</a>
        </form>
    </div>
    </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script>
        $("#menu").load("adminmenu.html header");
    </script>

</body>

</html>