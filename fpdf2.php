<?php
require "fpdf.php";

class fpdf2 extends fpdf{

    function Footer(){
        // Positionnement à 1,5 cm du bas
        $this->SetY(-15);
        // Police Arial italique 8
        $this->SetFont('Arial','B',18);
        // Numéro et nombre de pages
        $this->Cell(20,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');

        //$pdf->Cell(0,20,$pdf->PageNo(),'TB',2,'C');

    }
}
?>