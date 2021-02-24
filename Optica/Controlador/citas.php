<?php 

// se requiere el modelo de citas
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

    function modificarCita(){
        parent::cargarvista("html/adminModificarCita");
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
        $result = $consulta->registrarCita($id, $nombre, $apellido, $fecha, $hora, $motivo);
        // se valida si la consulta fue existosa
        if ($consulta == "okey"){
            echo "Si se guardo";
        }
        else{
            echo $result;
        }
    }

    function buscarcita(){
        parent::cargarvista("html/BuscarCitas");
    }

    function mostrarCita(){
        // se obtienen los datos del modelo usuario (BDD)
        $registro = new CitaModelo();
        $consulta = $registro->mostrar();

        // ejecutan el metodo heredado de controlador para cargar la vista
        // y se le pasa los datos a la vista
        parent::cargarvista("html/adminCitas",$consulta);
    }

    // carga la vista para agregar los productos
    function agregar(){
        parent::cargarvista("html/adminCitas");
    }

    // carga la vista para editar los productos
    function editar(){ 
        if(!empty($_GET['id'])){
            $consulta = new CitaModelo();
            $resultado = $consulta->mostrarByID($_GET['id']);
            parent::cargarvista("html/adminModificarCita",$resultado);
        }else{
            echo "no hay";
        }
    }

    function editar2(){
        if(isset($_POST['id'])){
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $fecha = $_POST['fecha'];
            $hora = $_POST['hora'];
            $motivo = $_POST['motivo'];
            $consulta = new CitaModelo();
            $resultado = $consulta->modificar($id, $nombre, $apellido, $fecha, $hora, $motivo);
            if($resultado == 'ok'){
                header("location:" .URL. "citas");
            }
            else{
                echo 'algo salio mal';
            }           
        }else{
            echo "no llego";
        }
    }

    function eliminarCita(){
        $id = $_REQUEST['id'];
        $registro = new CitaModelo();
        $consulta = $registro->eliminarCita($id);
        if ($consulta == "ok"){
            header("Location: ".URL."citas/index"); // puede que de error
        }else{
            echo "No se ha podido eliminar el registro";
        }
    }


}
