<?php
require('../FpdfReportes/fpdf.php');


class PDF extends FPDF
{
// Cabecera de página
    function Header()
    {

        // Arial bold 15
        $this->Image('../imágenes/banner.png',0,0,220,70,'png');
        $this->SetFont('Arial','B',11);
        $this -> Cell(60,10,utf8_decode(""),0,1);
        $this -> Cell(60,10,utf8_decode("Oftalmólogo : Dr Marcelo Herrera "),0,1);
        $this -> Cell(60,10,utf8_decode("Fecha de Impresión:").date("d/m/y"),0,1);
        $this -> Cell(60,10,utf8_decode(""),0,1);
        // Movernos a la derecha
        $this->SetFont('Arial','B',15);
        $this->Cell(50);
        // Título
        $this->Cell(100,10,'Reporte de Productos Mujeres',0,0,'C');
        // Salto de línea
        $this->Ln(15);
        $this->SetFont('Arial','B',11);

        $this->Cell(10,10,'ID',1,0,'C',0);
        $this->Cell(40,10,'NOMBRE',1,0,'C',0);
        $this->Cell(40,10,'MARCO',1,0,'C',0);
        $this->Cell(40,10,'TIPO',1,0,'C',0);
        $this->Cell(20,10,'PRECIO',1,0,'C',0);
        $this->Cell(30,10,'MATERIAL',1,0,'C',0);
        $this->Ln(10);
    }

// Pie de página
    function Footer()
    {
        $this->Image('../imágenes/footer.png',0,270,220,70,'png');
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',9);
        $this->SetTextColor(255, 255, 255);
        // Número de página
        $this->Cell(0,10,utf8_decode('Riobamba Km 1 1/2    Óptica Victoria    Teléfono: 0996731042             Página ').$this->PageNo().'',0,0,'C');
    }
}


$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);



$conexion = mysqli_connect('localhost','root','','bdoptica',3306);
if (!$conexion){
    echo "error".mysqli_connect_error();
}


mysqli_begin_transaction($conexion);
mysqli_autocommit($conexion,false);


$sql = "select * from producto where sexo = 'Femenino'";
$datos = null;
$cont =0 ;

try
{

    $result = mysqli_query($conexion,$sql);

    if($result ==true && mysqli_num_rows($result)>0)
    {
        while($read = mysqli_fetch_array($result))
        {

            $pdf->Cell(10,10,$read['id'],1,0,'C',0);
            $pdf->Cell(40,10,$read['nombre'],1,0,'C',0);
            $pdf->Cell(40,10,$read['marca'],1,0,'C',0);
            $pdf->Cell(40,10,$read['tipo'],1,0,'C',0);
            $pdf->Cell(20,10,$read['precio'],1,0,'C',0);
            $pdf->Cell(30,10,$read['material'],1,0,'C',0);

            $pdf->Ln(15);
        }



    }

    mysqli_commit($conexion);

}catch(Exception $e)
{
    mysqli_rollback($conexion);

}


$pdf->Output();
?>