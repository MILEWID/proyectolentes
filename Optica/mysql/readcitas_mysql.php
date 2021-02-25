<?php

$conexion = mysqli_connect('localhost','root','','bdoptica',3306);
if (!$conexion){
    echo "error".mysqli_connect_error();
}


mysqli_begin_transaction($conexion);
mysqli_autocommit($conexion,false);


$sql = "select * from cita";
$datos = null;
$cont =0 ;

try
{

    $result = mysqli_query($conexion,$sql);

    if($result ==true && mysqli_num_rows($result)>0)
    {
        while($read = mysqli_fetch_array($result))
        {
            $datos[$cont] = array("id"=>$read['id'],"nombre"=>utf8_decode($read['nombre'])
            ,"apellido"=>utf8_decode($read['apellido']),"fecha"=>$read['fecha']
            ,"hora"=>$read['hora'],"motivo"=>utf8_decode($read['motivo']));
            $cont++;
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