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

    function buscar($id){
        $conexion = new Cconexion();
        $query= "SELECT FROM usuario WHERE idUsuario='$id'";
        $resultado = $conexion->conectar()->query($query);
        if ($resultado){
            return "ok";
        }else{
            echo "No existe el registro que desea buscar";
        }
    }

//funcion modificar
    function modificar( $nombreUsuario, $idUsuario, $nombre, $apellido, $tipoUsuario, $correoElectronico, $contrasena){

        // intanciamos la conexion
        $conexion = new Cconexion();
        if (isset($_GET["idUsuario"])) //adquirimos el parametro del id
        {
            $idUsuario = $_GET["idUsuario"];
            $query = "SELECT * FROM usuario WHERE idUsuario=$idUsuario";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result); //Estamos ubicandonos en la tabla del id
                $nombreUsuario = $row['nombreUsuario '];
                $nombre = $row['nombre'];
                $apellido = $row['apellido'];
                $tipoUsuario = $row['tipoUsuario'];
                $correoElectronico = $row['correoElectronico'];
                $contrasena = $row['contrasena'];
                
            }
        }
        if (isset($_POST['update'])) {
            $nombreUsuario = $row['nombreUsuario '];
            $idUsuario = $_GET['idUsuario'];
            $nombre= $_POST['nombre']; //estamos modificando los datos
            $apellido = $_POST['apellido']; 
            $tipoUsuario = $_POST['tipoUsuario'];
            $correoElectronico = $_POST['correoElectronico'];
            $contrasena = $_POST['contrasena'];
            
            
            $query = "UPDATE usuario set nombreUsuario = '$nombreUsuario ',nombre = '$nombre', apellido = '$apellido', tipoUsuario = '$tipoUsuario', correoElectronico = '$correoElectronico', contrasena = '$contrasena' WHERE idUsuario=$idUsuario";
            mysqli_query($con, $query);
            echo "Se actualizó correctamente";
            //mysqli_query($con, $query);
            
        }

    }
}
?>