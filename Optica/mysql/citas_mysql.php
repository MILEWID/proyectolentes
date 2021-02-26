<?php

$conexion = mysqli_connect('localhost','root','','bdoptica',3306);
if (!$conexion){
    echo "error".mysqli_connect_error();
}


$name = $_GET['nombre'];
$ape = $_GET['ape'];
$fecha = $_GET['fecha'];
$hora = $_GET['hora'];
$motivo = $_GET['motivo'];



mysqli_begin_transaction($conexion);
mysqli_autocommit($conexion,false);


$sql = "insert into citas(nombre,apellido,fecha,hora,motivo) 
        values('".$name."','".$ape."','".$fecha."','".$hora."','".$motivo."')";


try
{

    if(mysqli_query($conexion,$sql))
    {
        echo json_encode(array("status_code"=>200));
    }else
        {
            echo json_encode(array("status_code"=>250));
        }

    mysqli_commit($conexion);

}catch(Exception $e)
{
    mysqli_rollback($conexion);
    echo json_encode(array("status_code"=>400));
}


?>