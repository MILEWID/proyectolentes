<?php 

// Clase de la vista base -> encargada de requerir la vista
class  Vista{

    /**
    * $valorescontrolador -> variable encargada de pasar
    * los datos de ser necesario a la vista por defecto null
    * @return void
    */
    function requerirvista($ruta, $valorescontrolador = null){
        // incluye la vista y la muestra
        require "Vista/$ruta.php";
    }
}