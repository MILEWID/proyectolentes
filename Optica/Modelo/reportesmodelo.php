<?php
include ("conexionprueba.php");
class ReporteModelo{

    function reporteadmin(){
        $conexion = new Cconexion();
        $query="SELECT * FROM `usuario` WHERE tipoUsuario = 'Administrador'";
        $resultado= $conexion->conectar()->query($query);
        return $resultado;
    }
}
?>