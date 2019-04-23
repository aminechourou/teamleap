
<?php
include "../core/PromoC.php";
include "../entities/Promo.php";

if( isset($_GET['reference']) && isset($_GET['nom']) && isset($_GET['aprix']) && isset($_GET['taux']) && isset($_GET['nprix']) && isset($_GET['quantite']) && isset($_GET['etat']) && isset($_GET['image']) && isset($_GET['datee']) && isset($_GET['mailform']) )
{
$reference=$_GET['reference'];
	$nom=$_GET['nom'];
$aprix=$_GET['aprix'];
$taux=$_GET['taux'];
$nprix=$_GET['nprix'];
$quantite=$_GET['quantite'];
$etat=$_GET['etat'];
	$image=$_GET['image'];
$datee=$_GET['datee'];

if( !empty($_GET['reference']) && !empty($_GET['nom']) && !empty($_GET['aprix']) && !empty($_GET['taux']) && !empty($_GET['nprix']) && !empty($_GET['quantite']) && !empty($_GET['etat']) && !empty($_GET['image']) && !empty($_GET['datee']) )
{
$promo=new Promo($reference,$nom,$aprix,$taux,$nprix,$quantite,$etat,$image,$datee);
 $promoC=new PromoC();
 $mes=$promoC->ajouter($promo);
if ($mes==true)
	//echo "Ajout avec succées " ;
	$to='aziz.arfaou.98@gmail.com';
$sujet='nouvelle promotion ajouter';
$texte="nouvelle promotion ajouter";
$header='From : test@gmail.com';
mail($to,$sujet,$texte,$header);
	header('Location: reduc.php');
	
}}
?>
