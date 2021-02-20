<?php
include ("conexionprueba.php");
class CusuarioModel{
    // funciones para registrar modificar y eliminar 
    function registrar( $nombre ,$apellido, $email,$contra, $nomusu, $tipusu){

        // intanciamos la conexion
        $conexion = new Cconexion();
        $query="INSERT INTO usuario(nombreUsuario, nombre, apellido, tipoUsuario, correoElectronico, contrasena) VALUES('$nomusu', '$nombre', '$apellido','$tipusu', '$email', '$contra')";
        $resultado= $conexion->conectar()->query($query);
        if ($resultado){
            return "ok";
        }else{
            echo "No se ha podido guardar el registro";
        }
    }

    function mostrar(){
        $conexion = new Cconexion();
        $query="SELECT * FROM usuario";
        $resultado= $conexion->conectar()->query($query);
        return $resultado;
    }

    function eliminar($id){
        $conexion = new Cconexion();
        $query= "DELETE FROM usuario WHERE idUsuario='$id'";
        $resultado = $conexion->conectar()->query($query);
        if ($resultado){
            return "ok";
        }else{
            echo "No existe el registro que desea eliminar";
        }
    }

//funcion modificar
    function modificar( $idUsuario, $nombreUsuario, $nombre, $apellido,$tipoUsuario, $correoElectronico, $contrasena){

        // intanciamos la conexion
        $conexion = new Cconexion();
        if (isset($_GET["idUsuario"])) //adquirimos el parametro del id
        {
            $id = $_GET["idUsuario"];
            $query = "SELECT * FROM usuario WHERE id=$idUsuario";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result); //Estamos ubicandonos en la tabla del id
                $nombreUsuario = $row['nombreUsuario'];
                $nombre = $row['nombre'];
                $apellido = $row['apellido'];
                $tipoUsuario = $row['tipoUsuario'];
                $correoElectronico = $row['correoElectronico'];
                $contrasena = $row['contrasena'];
                
            }
        }
        if (isset($_POST['update'])) {
            $id = $_GET['id'];
            $nombreUsuario= $_POST['nombreUsuario']; //estamos modificando los datos
            $nombre = $_POST['nombre']; 
            $apellido = $_POST['apellido']; 
            $tipoUsuario = $_POST['tipoUsuario'];
            $correoElectronico = $_POST['correoElectronico'];
            $contrasena = $_POST['contrasena'];
           
            
            $query = "UPDATE producto set nombreUsuario = '$nombreUsuario', nombre = '$nombre', apellido='$apellido', tipoUsuario = '$tipoUsuario', correoElectronico = '$correoElectronico', contrasena = '$contrasena' WHERE id=$id";
            mysqli_query($con, $query);
            echo "Se actualizo correctamente";
        }

    }
}
?>