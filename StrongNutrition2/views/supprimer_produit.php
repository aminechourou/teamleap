
<?php
include "../core/ProduitC.php";
$produitC=new ProduitC();
//$listeProduits=$produitC->afficherptoduit();



if (isset($_GET['valider']) )
{
	$produitC->supprimerprod($_GET["idprod"]);
	 header('Location: produit.php');
  }

	?>
