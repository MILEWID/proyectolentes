<?php
class Cconexion{
    function conectar(){
        $conexion = new mysqli("localhost", "root", "", "bdoptica");

        return $conexion;
    }
    function conexionPDO(){
        try {
            //Creamos la conexión PDO por medio de una instancia de su clase
            $cnn = new PDO("mysql:host=localhost;dbname=bdoptica","root","");

            return $cnn;
        
        } catch (Exception $e) {
        
            echo $e->getMessage();
            
        }
    }

    public static function conexionPDO2(){
        $self = new self();
        return $self->conexionPDO();
    }
}
