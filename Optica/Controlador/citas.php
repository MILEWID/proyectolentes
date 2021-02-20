<?php 
// todas las rutas deben establecese desde el index

// se requiere el modelo de productos
include("./Modelo/citas.modelo.php");

class Citas extends Controlador
{
    function __construct()
    {
        // parent funcion que permite llamar los metodos heredados 
		// de la clase padre
        parent:: __construct();
    }

	// Index encargado de cargar la vista por defecto de la seccion
    function index(){
        // se obtienen los datos del modelo producto (BDD)
        $consulta = new CitaModelo();
        $result  = $consulta->mostrar();

		// ejecutan el metodo heredado de controlador para cargar la vista
        // y se le pasa los datos a la vista
        parent::cargarvista("html/adminCitas",$result);

    }

    // funcion que permite ingresar los productos
    function ingresarCita(){
        //verificar nombre de variable aun no existe (como ella :'v)
        $id = $_POST["validationServer01"];
        $nombre = $_POST["validationServer02"];
        $apellido = $_POST["validationServer03"];
        $fecha = $_POST["validationServer04"];
        $hora = $_POST["validationServer05"];
        $motivo = $_POST["validationServer06"];
        header("location: ".URL."citas");

        //se realiza la consulta
        $consulta = new CitaModelo();
        $result = $consulta->registrarCita()

        // se valida si la consulta fue existosa
        if ($consulta == "okey"){
            echo "Si se guardo";
        }
        else{
            echo $result;
        }
    }

    // carga la vista para agregar los productos
    function agregar(){
        parent::cargarvista("html/adminCitas");
    }

    // carga la vista para editar los productos
    function editar(){
        parent::cargarvista("html/adminModificarCitas");
    }

}
