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
//buscar
    function buscar($idUsuario){
        $conexion = new Cconexion();
        $query="SELECT * FROM usuario WHERE idUsuario = '$idUsuario'";
        $resultado= $conexion->conectar()->query($query);
        return $resultado;
    }


    function mostrarByID($idUsuario){
        $conexion = new Cconexion();
        $query="SELECT * FROM usuario WHERE idUsuario = '$idUsuario'";
        $resultado= $conexion->conectar()->query($query);
        return $resultado;

    }

    // función modificar
    function modificar( $nombreUsuario, $idUsuario, $nombre, $apellido, $tipoUsuario, $correoElectronico, $contrasena){

        // intanciamos la conexion
        $con = new Cconexion();
        // i don't understood why you do select query if you want update...            
        $query = "UPDATE usuario set nombreUsuario = '$nombreUsuario', nombre= 'nombre',apellido = '$apellido', tipoUsuario = '$tipoUsuario', correoElectronico = '$correoElectronico', contrasena = '$contrasena' WHERE idUsuario ='$idUsuario'";
        $resultado = $con->conectar()->query($query);
         
        print_r($resultado->errorInfo());

        return 'ok';
    }
}
?>