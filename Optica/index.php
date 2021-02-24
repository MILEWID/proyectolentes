<?php
// Definir constante URL 
define("URL","http://localhost:8080/proyectolentes/Optica/");

// incluimos los archivos principales para el funcionamiento de la app
include("./libs/app.php");
include("./libs/controlador.php");
include("./libs/vista.php");

// se instancia e inicializa la applicacion
$app = new App();