<?php 
include_once('fpdf.php');
$Cuenta=$_GET[c];
$Cuenta=utf8_decode($Cuenta);
//header("Content-Type: text/html; charset=ISO-8859-1 ");

$titulo="Haz finalizado el examen";
$calificacion=$_GET[cal];
$resultado=$_GET[rs];
//$contenidob=utf8_decode($contenido);

$pdf = new FPDF(); 
$pdf->AddPage(); 
$pdf->Image('images/LogoCGL.jpg',160,10,45);
$pdf->SetFont('Helvetica','B',16); 
$pdf->Cell(0,10,$Cuenta,0,1,'L'); 
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(0,10,$titulo,0,1,'C');
$pdf->Image('images/barras.jpg',80,65,45);
$pdf->SetFont('Helvetica','B',16); 
$pdf->SetTextColor(255,255,255); 
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Helvetica','B',18);
$pdf->MultiCell(0,10,$calificacion.'/100',0,'C');
$pdf->MultiCell(0,10,$resultado,0,'C');
$pdf->Output(); 


?> 
