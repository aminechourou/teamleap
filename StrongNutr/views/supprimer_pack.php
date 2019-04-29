<?php
include "../core/PackC.php";
include "../entities/Pack.php";


$packC=new PackC();

	$listePack=$packC->afficherpack();
$resultat=0 ;
  foreach($listePack as $row){
	if(isset($_GET["reference"]) && ($_GET["reference"] ==$row['reference']))
	{
		  
	  $packC->supprimerpack($_GET["reference"]);
		  header('Location: pack.php');
	}
  
	
		  
else	{ $resultat=1 ;
		}}
if($resultat==1) {
{ echo '<script>alert("Reference Introuvable")</script>' ;}
}

?>

