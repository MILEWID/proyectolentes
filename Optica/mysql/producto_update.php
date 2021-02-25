<?php

$id = $_GET['id'];
$nombre = $_GET['name'];
$marca = $_GET['marca'];
$precio = $_GET['precio'];
$tipo = $_GET['type'];
$material = $_GET['material'];
$sexo = $_GET['sexo'];

$conexion = mysqli_connect('localhost','root','','bdoptica',3306);
if (!$conexion){
    echo "error".mysqli_connect_error();
}






mysqli_begin_transaction($conexion);
mysqli_autocommit($conexion,false);


$sql = "update producto set nombre = '".$nombre."', marca = '".$marca."' , tipo = '".$tipo."', precio = ".$precio.", material = '".$material."', sexo = '".$sexo."' where id = $id";


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
