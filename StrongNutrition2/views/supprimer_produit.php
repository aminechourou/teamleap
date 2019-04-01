
<?php
include "../core/ProduitC.php";
$produitC=new ProduitC();
$listeProduits=$produitC->afficherptoduit();
$result=0 ;

	foreach($listeProduits as $row){

if (isset($_GET["idprod"])  && ($_GET["idprod"] == $row['idprod']))
{
	$produitC->supprimerprod($_GET["idprod"]);
	 header('Location: produit.php');
  }

	else { $result=1 ;}
}
	if($result==1) {
	{ 		echo '<script>alert("Id Introuvable, Veuillez saisir un ID valable")</script>' ;}
		?> &nbsp;
		<br>
		<a href="promo1supp.html">Retour à la page précedente</a>
		<?php
	}






//	echo "<script>alert(\"Le Produit est Introuvale. Veuillez saisir un ID valable.\")</script>";*/
?>
