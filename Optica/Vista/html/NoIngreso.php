<?php
//$datos = $valorescontrolador->fetch_assoc();
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
               <br>
               <h1 id="error">ERROR DE AUTENTIFICACIÓN</h1>
               <BR></BR>
               <h3 id="aviso">CONTRASEÑA O USUARIO INCORRECTO, POR FAVOR VERIFIQUE NUEVAMENTE</h2>

               <br> <br>
        <a href="<?php echo URL ?>ingreso" class="btn btn-primary" type="submit">LISTO</a>
        <a class="btn btn-dark" href="<?php echo URL ?>ingreso">CANCELAR</a>
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