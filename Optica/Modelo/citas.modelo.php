<?php
include("conexionprueba.php");

class CitaModelo{
    function registrarCita($id, $nombre, $apellido, $fecha, $hora, $motivo){
        $nuevaconexion = new Cconexion();
        $query = "INSERT INTO cita (id, nombre, apellido, fecha, hora, motivo) VALUES('$id', '$nombre', '$apellido', '$fecha', '$hora', '$motivo')";
        $resul = $nuevaconexion->conectar()->query($query);
        //imprimir el valor de resul
        var_dump ($resul);
        if($resul){
            return "okey";
        }else{
            return "error";
        }
    }
    
    function mostrar(){
        $conexion = new Cconexion();
        $query="SELECT * FROM citas";
        $resultado= $conexion->conectar()->query($query);
        return $resultado;
    }

    function mostrarByID($id){
        $conexion = new Cconexion();
        $query="SELECT * FROM citas WHERE id = '$id'";
        $resultado= $conexion->conectar()->query($query);
        return $resultado;
    }

    function mostrarByDatos($nombre, $apellido){
        $conexion = new Cconexion();
        $query="SELECT * FROM citas WHERE nombre = '$nombre' and apellido = '$apellido'";
        $resultado= $conexion->conectar()->query($query);
        return $resultado;
    }

    function buscar($id){
        $conexion = new Cconexion();
        $query="SELECT * FROM citas WHERE id = '$id'";
        $resultado= $conexion->conectar()->query($query);
        return $resultado;
    }

    // función modificar
    function modificar( $id, $nombre, $apellido, $fecha, $hora, $motivo){

        // intanciamos la conexion
        $con = new Cconexion();
        // i don't understood why you do select query if you want update...            
        $query = "UPDATE citas set nombre = '$nombre', apellido = '$apellido', fecha = '$fecha', hora = '$hora', motivo = '$motivo' WHERE id ='$id'";
        $resultado = $con->conexionPDO()->query($query);
         
        print_r($resultado->errorInfo());

        return 'ok';
    }

    function eliminarCita($id){
        // intanciamos la conexion
        $conexion = new Cconexion();
        $query = "DELETE FROM cita WHERE id=$id";
        $resultado = $conexion->conectar()->query($query);
        if ($resultado){
            return "ok";
        }else{
            echo "No existe ninguna cita ";
        }
    }
}