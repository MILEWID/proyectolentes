<?php
    // todas las rutas deben establecese desde el index

    // se requiere el modelo de usuarios
    include("./Modelo/usuario.modelo.php");
class Usuario extends Controlador{

    function __construct()
    {
        // parent funcion que permite llamar los metodos heredados 
		// de la clase padre
        parent::__construct();
    }

	// Index encargado de cargar la vista por defecto de la seccion
    function index(){
        $this->mostrarcontrolador();
    }

    // carga la vista para registra los usuarios
    function registrar(){
        parent::cargarvista("html/adminagregarusuarios");
    }

    // recibe los datos dela vista de usuario
    function registrarcontrolador(){
        $nombre=$_POST['validationServer01'];
        $apellido=$_POST['validationServer02'];
        $email=$_POST['validationServer03'];
        $contrasena=$_POST['validationServer04'];
        $nombreUsuario=$_POST['validationServerUsername'];
        $tipoUsuario=$_POST['validationServer05'];

        // instancia del modelo usuario
        $registro = new CusuarioModel();
        $consulta = $registro->registrar($nombre ,$apellido,$email,$contrasena,$nombreUsuario,$tipoUsuario);

        // valida si la consulta fue correcta
        if ($consulta == "ok"){
            header("Location: ".URL."usuario/mostrarcontrolador");
        }
        else{
            echo "No se ha podido guardar";
        }
    }

    // carga la vista principal de agregar cliente
    function registrarcliente(){
        parent::cargarvista("html/agregarcliente");
    }

    function registrarcontroladorCliente(){
        $nombre=$_POST['nombre-cliente'];
        $apellido=$_POST['apellido-cliente'];
        $email=$_POST['correo-cliente'];
        $contrasena=$_POST['contrasena-cliente'];
        $nombreUsuario=$_POST['nombre-usuario'];
        $tipoUsuario="Cliente";

        // instancia del modelo
        $registro = new CusuarioModel();
        $consulta = $registro->registrar($nombre ,$apellido,$email,$contrasena,$nombreUsuario,$tipoUsuario);
        if ($consulta == "ok"){
            header("Location: ".URL."usuario/mostrarcontrolador");
        }
        else{
            echo "No se ha podido guardar";
        }
    }

	// funcion encargada de cargar la vista por defecto de la seccion y pasar datos a la vista
    function mostrarcontrolador(){
        // se obtienen los datos del modelo usuario (BDD)
        $registro = new CusuarioModel();
        $consulta = $registro->mostrar();

        // ejecutan el metodo heredado de controlador para cargar la vista
        // y se le pasa los datos a la vista
        parent::cargarvista("html/adminusuarios",$consulta);
    }

    // metodo para eliminar usuario
    function eliminarControlador(){
        $id = $_REQUEST['id'];

        $registro = new CusuarioModel();

        $consulta = $registro->eliminar($id);
        if ($consulta == "ok"){
            header("Location: ".URL."usuario/mostrarcontrolador");
        }else{
            echo "No se ha podido eliminar el registro";
        }

    }

    // carga la vista principal de editar usuario
    function editar(){
        parent::cargarvista('html/admineditarusuarios');
    }

}
?>