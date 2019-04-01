<?php
include "../core/PackC.php";
include "../entities/Pack.php";


if (isset($_GET["reference"])){
	
	$packC=new PackC();
	$packC->supprimerpack($_GET["reference"]);
    
	if($_GET["reference"]== ":reference")
	 {  header('Location: pack.php');;}
	 else {echo "false";} }
?>

