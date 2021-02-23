<?php 

//include("./Modelo/reportes.modelo.php");

class reportes extends Controlador
{
    function __construct()
    {
        // parent funcion que permite llamar los metodos heredados 
		// de la clase padre
        parent:: __construct();
    }

	// Index encargado de cargar la vista por defecto de la seccion
    function index(){

        parent::cargarvista("html/reportes");

    }

    // funcion que permite ingresar los productos
}
