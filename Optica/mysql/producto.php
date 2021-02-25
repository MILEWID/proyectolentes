<?php

$conexion = mysqli_connect('localhost','root','','bdoptica',3306);
if (!$conexion){
    echo "error".mysqli_connect_error();
}


$id = $_GET['id'];



mysqli_begin_transaction($conexion);
mysqli_autocommit($conexion,false);


$sql = "select * from producto where id = $id";


try
{

    $result = mysqli_query($conexion,$sql);

    if($result ==true && mysqli_num_rows($result)>0)
    {
        while($read = mysqli_fetch_array($result))
        {
            $datos = array("id"=>$read['id'],"nombre"=>$read['nombre']
            ,"marca"=>$read['marca'],"tipo"=>$read['tipo']
            ,"precio"=>$read['precio'],"material"=>$read['material']
            ,"sexo"=>$read['sexo']);

        }
        echo json_encode(array("status_code"=>200,"datos"=>$datos));
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