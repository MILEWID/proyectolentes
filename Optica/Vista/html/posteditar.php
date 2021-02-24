<?php
include("conexionprueba.php");
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$motivo = $_POST['motivo'];

$sql = "UPDATE citas SET nombre = '$nombre', apellido ='$apellido', fecha = '$fecha', hora='$hora', motivo = '$motivo'
WHERE id = $id";
echo "Los datos se han guardado correctamente!";
header ("location:citas");
?>