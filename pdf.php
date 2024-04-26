<?php

$contents = $_POST['divContent'];


require_once('fpdf/fpdf.php') ;
require('html2pdf/html2pdf.php');

class PDF extends PDF_HTML
{
// Page header
function Header()
{
    // Logo
    $this->Image('fpdf/logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',28);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(60,10,'Report',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->MultiCell(190,10,WriteHTML($contents));
$pdf->Output();
?>