<?php
include("conexionprueba.php");

class CitaModelo{
    function registrarCita($id, $nombre, $apellido, $fecha, $hora, $motivo){
        $nuevaconexion = new Cconexion();
        $query = "INSERT INTO cita(id, nombre, apellido, fecha, hora, motivo) VALUES('$id', '$nombre', '$apellido', '$fecha', '$hora', '$motivo')";
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

    // función modificar
    function modificar( $id, $nombre, $apellido, $fecha, $hora, $motivo){

        // intanciamos la conexion
        $conexion = new Cconexion();
        // i don't understood why you do select query if you want update...
        if (isset($_GET["id"])) //adquirimos el parametro del id
        {
            $id = $_GET["id"];
            $query = "SELECT * FROM cita WHERE id=$id";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result); //Estamos ubicandonos en la tabla del id
                $nombre = $row['nombre'];
                $apellido = $row['apellido'];
                $fecha = $row['fecha'];
                $hora = $row['hora'];
                $motivo = $row['motivo'];
            }
        }
        if (isset($_POST['update'])) {
            $id = $_GET['id'];
            $nombre= $_POST['nombre']; //estamos modificando los datos
            $apellido = $_POST['apellido']; 
            $fecha = $_POST['fecha'];
            $hora = $_POST['hora'];
            $motivo = $_POST['motivo'];
            
            $query = "UPDATE cita set nombre = '$nombre', apellido = '$apellido', fecha = '$fecha', hora = '$hora', maotivo = '$motivo' WHERE id=$id";
            mysqli_query($con, $query);
            echo "Se actualizó correctamente";
        }

    }

    function eliminarCita($id){
        // intanciamos la conexion
        $conexion = new Cconexion();
        $query = "DELETE FROM cita WHERE id=$id";
        $resultado = $conexion->conectar()->query($query);
        if ($resultado){
            return "ok";
        }else{
            echo "No existe la cita con ella :c, asi que no se pudo eliminar 😢😿";
        }
    }
}