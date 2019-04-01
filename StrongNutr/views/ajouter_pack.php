<?php
include "../core/PackC.php";
include "../entities/Pack.php";

if( isset($_GET['reference']) && isset($_GET['nom']) && isset($_GET['description']) && isset($_GET['prix']) && isset($_GET['quantite']) && isset($_GET['etat']) && isset($_GET['image']) && isset($_GET['datee']) && isset($_GET['mailform']) )
{
$reference=$_GET['reference'];
$nom=$_GET['nom'];
$description=$_GET['description'];
$prix=$_GET['prix'];
$quantite=$_GET['quantite'];
$etat=$_GET['etat'];
$image=$_GET['image'];
$datee=$_GET['datee'];

if( !empty($_GET['reference']) && !empty($_GET['nom']) && !empty($_GET['description']) && !empty($_GET['prix']) && !empty($_GET['quantite']) && !empty($_GET['etat']) && !empty($_GET['image']) && !empty($_GET['datee']) )
{
$pack=new Pack($reference,$nom,$description,$prix,$quantite,$etat,$image,$datee);
 $packC=new PackC();
 $mes=$packC->ajouter($pack);
if ($mes==true)
	//echo "Ajout avec succées " ;
	$to='aziz.arfaou.98@gmail.com';
$sujet='Nouvelle Pack ajoutée ';
$texte="nouvelle pack ajouter";
$header='From : test@gmail.com';
mail($to,$sujet,$texte,$header);
	header('Location: pack.php');
	
}}
?>
