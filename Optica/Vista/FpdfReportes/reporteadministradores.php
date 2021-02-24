<?php
require('Vista/FpdfReportes/fpdf.php');


class PDF extends FPDF
{
// Cabecera de página
function Header()
{

    // Arial bold 15
    $this->Image('Vista/imágenes/banner.png',0,0,220,70,'png');
    $this->SetFont('Arial','B',11);
    $this -> Cell(60,10,utf8_decode(""),0,1);
    $this -> Cell(60,10,utf8_decode("Oftalmólogo : Dr Marcelo Herrera "),0,1);
    $this -> Cell(60,10,utf8_decode("Fecha de Impresión:").date("d/m/y"),0,1);
    $this -> Cell(60,10,utf8_decode(""),0,1);
    // Movernos a la derecha
    $this->SetFont('Arial','B',15);
    $this->Cell(50);
    // Título
    $this->Cell(100,10,'Reporte de Usuarios Administradores',0,0,'C');
    // Salto de línea
    $this->Ln(15);
    $this->SetFont('Arial','B',11);

    $this->Cell(10,10,'ID',1,0,'C',0);
    $this->Cell(40,10,'NOMBRE',1,0,'C',0);
    $this->Cell(40,10,'APELLIDO',1,0,'C',0);
    $this->Cell(40,10,'USUARIO',1,0,'C',0);
    $this->Cell(60,10,utf8_decode('CORREO ELECTRÓNICO'),1,1,'C',0);
}

// Pie de página
function Footer()
{
  $this->Image('Vista/imágenes/footer.png',0,270,220,70,'png');
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    $this->SetTextColor(255, 255, 255);
    // Número de página
    $this->Cell(0,10,utf8_decode('Riobamba Km 1 1/2    Óptica Victoria  Teléfono: 0996731042    Correo: optivictoria@gmail.com   Página ').$this->PageNo().'',0,0,'C');
}
}


$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
while($row=$valorescontrolador->fetch_assoc()){
  $pdf->Cell(10,10,$row['idUsuario'],1,0,'C',0);
  $pdf->Cell(40,10,$row['nombre'],1,0,'C',0);
  $pdf->Cell(40,10,$row['apellido'],1,0,'C',0);
  $pdf->Cell(40,10,$row['nombreUsuario'],1,0,'C',0);
  $pdf->Cell(60,10,$row['correoElectronico'],1,1,'C',0);
}
$pdf->Output();
?>