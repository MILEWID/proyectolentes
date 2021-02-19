<?php
    class App{
        // mandamos por el constructor la url del controlador y la vista 
        function __construct()
        {
            // se valida si existe una variable URL
            if (isset($_GET["url"])){
                // Se obtiene el valor de url
                $url =  $_GET["url"];
                
                // se elimina los valores repetidos de '/'
                $url = rtrim($url, "/");

                // separamos el string por '/' y se crea un Array
                $url = explode("/",$url);

                //El valor de url[0] va a instanciar el archivo controlador y la clase 
                $clase = $url[0];

                if(isset($url[1])){ //verificamos si solicita ejecutar un metodo 
                    $metodo = $url[1];
                }else{
                    // sino recibe un metodo, por defecto ejecutara el metodo index
                    // index se encarga de cargar la vista inicial;
                    $metodo = "index";
                }

                if (!empty($clase)){
                    // Se guarda la ruta y luego se la incluye
                    // Ej: $clase = productos entonces con controlador/productos.php
                    $controlador = "controlador/$clase.php";
                    include($controlador);

                    // Se instancia un objeto del controlador requerido anteriormente
                    $vista = new $clase;

                    // se verifica que el metodo no este vacío
                    if(!empty($metodo)){
                        // se ejecuta un metodo del objeto instanciado
                        $vista ->{$metodo}();
                    }
                }
            }else{
                // Si no se recibe una variable URL
                // se carga por defecto la vista de inicio de sesion
                include("controlador/ingreso.php");

                // se instancia la clase ingreso
                $vista = new Ingreso();

                //se ejecuta el metodo index, que carga la vista principal de cada seccion
                $vista->index();
            }

        }
    }
?>