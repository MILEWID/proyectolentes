<?php 

include("./Modelo/reportesmodelo.php");

class reportes extends Controlador
{   
    function __construct()
    {
        parent:: __construct();
    }

    function index(){
        parent::cargarvista("html/reportes");
    }
    function reporteadmin(){
        $consulta = new ReporteModelo();
        $result  = $consulta->reporteadmin();
        parent::cargarvista("FpdfReportes/reporteadministradores", $result);
    }

    function reporteModcLI(){
        $consulta = new ReporteModelo();
        $result  = $consulta->reportemodcli();
        parent::cargarvista("FpdfReportes/reporteModCliente", $result);
    }

    function reporteusuarios(){
        $consulta = new ReporteModelo();
        $result  = $consulta->reporteusuarios();
        parent::cargarvista("FpdfReportes/reporteusuarios", $result);
    }
}
