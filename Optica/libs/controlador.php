    <?php 
class Controlador{

    function __construct()
    {
        // Se instancia un objeto de la clase Base vista
        $this-> vistaa= new Vista();
    }

    //Metodo que se herada a todos los controladores para cargar las vistas 
    /**
    * $ruta -> variable que indicara la ubicacion de archivo vista
    * $vist -> variable encargada se hacerle llegar los datos a la vista por defecto null
    * @return void
    */
    function cargarvista($ruta ,$vist= null){
        $this->vistaa->requerirvista($ruta,$vist);
    }
}