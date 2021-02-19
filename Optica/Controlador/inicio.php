<?php 
class Inicio extends Controlador{

    function __construct()
    {
        // parent funcion que permite llamar los metodos heredados 
		// de la clase padre
        parent::__construct();
    }
    /*
    * Metodo index permite cargar la vista principal por default
    */
    function index(){
		// ejecutan el metodo heredado de controlador para cargar la vista
        parent::cargarvista("html/cliente");
    }
}