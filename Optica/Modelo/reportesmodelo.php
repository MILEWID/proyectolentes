<?php
include ("conexionprueba.php");
class ReporteModelo{

    function reporteadmin(){
        $conexion = new Cconexion();
        $query="SELECT * FROM `usuario` WHERE tipoUsuario = 'Administrador'";
        $resultado= $conexion->conectar()->query($query);
        return $resultado;
    }

    function reportemodcli(){
        $conexion = new Cconexion();
        $query="SELECT * FROM `usumod`";
        $resultado= $conexion->conectar()->query($query);
        return $resultado;
    }

    function reporteusuarios(){
        $conexion = new Cconexion();
        $query="SELECT * FROM `usuario`";
        $resultado= $conexion->conectar()->query($query);
        return $resultado;
    }


    function reporteTipoLentes(){
        $conexion = new Cconexion();
        $query="SELECT * FROM `producto`";
        $resultado= $conexion->conectar()->query($query);
        return $resultado;
    }

    function reporteCitas(){
        $conexion = new Cconexion();
        $query="SELECT * FROM `citas`";
        $resultado= $conexion->conectar()->query($query);
        return $resultado;
    }

    function reporteTopLente(){
        $conexion = new Cconexion();
        $query="SELECT * FROM `producto` ORDER BY `precio` DESC LIMIT 5";
        $resultado= $conexion->conectar()->query($query);
        return $resultado;

    }
}
?>