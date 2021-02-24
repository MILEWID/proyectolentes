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

    //cargar la vista para modificar los usuarios
   function modificar(){
        parent::cargarvista("html/admineditarusuarios");
    }

    //cargar la vista para buscar los usuarios
    function buscar(){
        parent::cargarvista("html/adminbuscarusuarios");
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

        function buscarcita(){
        if(isset($_POST['idUsuario'])){
            $consulta = new CusuarioModel();
            $resultado = $consulta->mostrarByID($_POST['idUsuario']);
            parent::cargarvista("html/adminbuscarusuarios",$resultado);
        }
        else{
            echo "no llega";
        }
    }


    // carga la vista para editar los productos
    function editar(){ 
        if(!empty($_GET['idUsuario'])){
            $consulta = new CusuarioModel();
            $resultado = $consulta->mostrarByID($_GET['idUsuario']);
            
           parent::cargarvista("html/admineditarusuarios",$resultado);
           echo $resultado;
        }else{
           // echo "no hay";
        }
    }

    function editar2(){
        if(isset($_POST['idUsuario'])){
            $idUsuario = $_POST['idUsuario'];
            $nombreUsuario = $_POST['nombre'];
            $nombre=$_POST['nombreUsuario'];
            $apellido = $_POST['apellido'];
            $tipoUsuario= $_POST['tipoUsuario'];
            $correoElectronico = $_POST['correoElectronico'];
            $contrasena = $_POST['contrasena'];
            $consulta = new CusuarioModel();
            $resultado = $consulta->modificar($nombreUsuario, $idUsuario,$nombre ,$apellido,$tipoUsuario, $correoElectronico,$contrasena);
            if($resultado == 'ok'){
                header("location:" .URL. "usuario");
            }
            else{
                echo 'algo salio mal';
            }           
        }else{
            echo "no llego";
        }
    }

    }



