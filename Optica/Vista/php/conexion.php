<?php 

// como se llama conexion , usuario,clave , base de datos a conectar 
//$conexion = mysqli_connect(nombreconexion,usuario,clave,datos);
$conexion = mysqli_connect('localhost','root','','bdoptica',3306);
if (!$conexion){
    echo "error".mysqli_connect_error();
}

?>
