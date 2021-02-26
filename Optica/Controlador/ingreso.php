<?php
// se requiere el modelo del ingreso
include ("./Modelo/login.model.php");


class Ingreso extends Controlador
{
	function __construct(){
		// parent funcion que permite llamar los metodos heredados 
		// de la clase padre
		parent::__construct();
	}
	
	// Index encargado de cargar la vista por defecto de la seccion
	function index ()
	{
		// ejecutan el metodo heredado de controlador para cargar la vista
		parent::cargarvista("html/Cliente-Registrarse");
	}
	function cliente(){
		parent::cargarvista("html/cliente");
	}

	function loginc(){
		// isset valida la existencia de una variable en memoria 
		if (isset ($_POST["nombre_usuario"]) && isset($_POST["contraseña_cliente"])) {

			// se istancia la clase de ingresoModel
			$consulta= new IngresoModelo();
			$result= $consulta->obtenerdatosu($_POST["nombre_usuario"]);

			$datosbdd = $result;

			// validacion si el usuario y la contrasenia son iguales
			if($datosbdd["nombreUsuario"]==$_POST["nombre_usuario"]&&($datosbdd["contrasena"]==$_POST["contraseña_cliente"]))
			{
				$tipousuario = $datosbdd["tipoUsuario"];
				if($tipousuario == "Administrador"){
					header("location: ".URL."productos");
				} else{
					header("location: ".URL."ingreso/cliente");
				}
			} else {
			

			echo "La contraseña o usuario no coinciden";
			}
		} 
	}
}