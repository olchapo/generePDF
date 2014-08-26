<?php

require "fpdf2.php";

$pdf = new fpdf2();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,20,'Hello World !','TB',2,'C');
$pdf->Cell(0,20,$pdf->PageNo(),'TB',2,'C');
$pdf->MultiCell(0,10,' Cette méthode permet imprimer du texte avec des
 retours à la ligne. Ceux-ci peuvent être automatiques (dès que le texte
 atteint le bord droit de la cellule) ou explicites (via le caractère. Autant
 de cellules que nécessaire sont imprimées, les unes en dessous des autres. ',1,'J');

$pdf->Image('images.jpg',10,100,-300);
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,20,'Deuxieme page !','TB',2,'C');
$pdf->Cell(0,20,$pdf->PageNo(),'TB',2,'C');


$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,20,'et trois','TB',2,'C');
$pdf->Cell(0,20,$pdf->PageNo(),'TB',2,'C');


$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,20,'derniere','TB',2,'C');
$pdf->Cell(0,20,$pdf->PageNo(),'TB',2,'C');
$pdf->Output();
?>