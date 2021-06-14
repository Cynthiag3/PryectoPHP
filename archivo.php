<?php
require 'conexion.php';
require 'fpdf/fpdf.php';
            

class PDF extends FPDF
{
   //Cabecera de página
   function Header()
   {
      date_default_timezone_set('America/Chihuahua');
      $hoy= date('F j, Y, G:i a');
   
      $this->Image('tiendita.jpg',10,8,33);

      $this->SetFont('Arial','B',16);
      $this->Cell(200,10,'REPORTE DE INVENTARIO',0,0,'C');
      $this->Ln(15);
      $this->SetFont('Arial','B',12);
      $this->Cell(200,10,'Ciudad Juarez, Chihuahua '.$hoy,0,0,'C');
      $this->Ln(10);
      $this->Cell(200,10,'------------------------------------------------------------------------------',0,0,'C');
      $this->Ln(15);


      
     
   }
   function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

 $qry = $link->prepare("SELECT * FROM productos");
            $qry -> execute(); 
	        	$row = $qry->fetchAll(PDO::FETCH_OBJ); 


//Creación del objeto de la clase heredada
$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',15);
$pdf->Cell(0,10,'Mis productos',0,0,'C');
$pdf->Ln(15);

$pdf->Cell(45,7,'Producto',1,0,'C');
$pdf->Cell(45,7,'Costo',1,0,'C');
$pdf->Cell(45,7,'Codigo',1,0,'C');
$pdf->Cell(45,7,'Categoria',1,1,'C');

$pdf->SetFont('Times','',12);

foreach ($row as $dato) {
$pdf->Cell(45,7,$dato->nombre,1,0,'C');
$pdf->Cell(45,7,$dato->costo,1,0,'C');
$pdf->Cell(45,7,$dato->codigo_barra,1,0,'C');
$pdf->Cell(45,7,$dato->categoria,1,1,'C');

}




$pdf->Output();


?>