

<?php
require('fpdf/fpdf.php');

include "../core/clientC.php";
include "../entities/client.php";

$pdf=new FPDF();
$clientC=new ClientC();
$listeClients=$clientC->afficherClients();





                 foreach($listeClients as $row){

 $n=$row['user']; 
 $t=$row['telephone']; 
$m=$row['mail'];  
 $c=$row['cin']; 







$pdf->addPage();
$pdf->SetFont("Arial","B","40");
$pdf->Cell(70,10,"Bienvenue a Strong Nutrition",0,1,"Center"); 
$pdf->Cell(70,10,"",0,1,"Center"); 

$pdf->SetFont("Arial","B","25");
$pdf->Cell(130,10,"PDF FicheClient   2018/2019",1,1,"Center"); 
$pdf->Cell(70,10,"",0,1,"Center");
$pdf->SetFont("Arial","B","20"); 
$pdf->write( 5 , " Client :");
$pdf->SetFont("Arial","B","15");
$pdf->Cell(70,10,"",0,1,"Center"); 
$pdf->write( 5 , " Nom  :".$n);
$pdf->Cell(70,10,"",0,1,"Center"); 
$pdf->write( 5 , " Telephone  :".$t);
$pdf->Cell(70,10,"",0,1,"Center"); 
$pdf->write( 5 , " Mail :".$m);
$pdf->Cell(70,10,"",0,1,"Center"); 
$pdf->write( 5 , " Carte d identite  :".$c);
$pdf->Cell(70,10,"",0,1,"Center");
$pdf->Cell(70,10,"",0,1,"Center");
$pdf->Cell(70,10,"",0,1,"Center");
  } 
$pdf->output();
?>