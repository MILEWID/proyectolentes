<?php 
// todas las rutas deben establecese desde el index

// se requiere el modelo de productos
include("./Modelo/productos.modelo.php");

class Productos extends Controlador
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
        $consulta = new ProductoModelo();
        $result  = $consulta->mostrar();

		// ejecutan el metodo heredado de controlador para cargar la vista
        // y se le pasa los datos a la vista
        parent::cargarvista("html/adminproductos",$result);

    }

    function mostrarproductos(){
         // se obtienen los datos del modelo producto (BDD)
         $consulta = new ProductoModelo();
         $result  = $consulta->mostrar();
 
         // ejecutan el metodo heredado de controlador para cargar la vista
         // y se le pasa los datos a la vista
         parent::cargarvista("html/clientesmostrarproductos",$result);
    }

    // funcion que permite ingresar los productos
    function ingresarProdu(){
        //verificar nombre de variable aun no existe (como ella :'v) 
        // reply: nunca existio bro :c
        $nombre = $_POST["validationServer01"];
        $marca = $_POST["validationServer02"];
        $tipo = $_POST["validationServer03"];
        $precio = $_POST["validationServer04"];
        $material = $_POST["validationServer05"];
        $sexo = $_POST["validationServer06"];
        header("location: ".URL."productos");

        //se realiza la consulta
        $consulta = new ProductoModelo();
        $result = $consulta->registrarProdu($nombre, $marca, $tipo, $precio, $material, $sexo);

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
        parent::cargarvista("html/adminagregarproductos");
    }

    // carga la vista para editar los productos
    function editar(){
        parent::cargarvista("html/admineditarproductos");
    }

    function eliminarProdu(){
        $id = $_REQUEST['id'];

        $registro = new ProductoModelo();

        $consulta = $registro->eliminarProdu($id);
        if ($consulta == "ok"){
            header("Location: ".URL."productos/index");
            //echo "Si se elimino";
        }else{
            echo "No se ha podido eliminar el registro";
        }

    }
    function buscarprodu(){
        // solo carga la vista 
        parent::cargarvista("html/adminbuscarproductos");
    }

}
