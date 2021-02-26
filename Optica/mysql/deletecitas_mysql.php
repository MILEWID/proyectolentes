<?php

$conexion = mysqli_connect('localhost','root','','bdoptica',3306);
if (!$conexion){
    echo "error".mysqli_connect_error();
}


$id = $_GET['id'];


mysqli_begin_transaction($conexion);
mysqli_autocommit($conexion,false);


$sql = "delete from citas where id = $id";

//echo $sql;

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