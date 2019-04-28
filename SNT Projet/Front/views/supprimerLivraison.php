<?PHP
include "../core/livraisonC.php";
include "../config.php";

$livraisonC=new LivraisonC();

	$result=$livraisonC->recupererLivraison($_GET['num']);
	
	foreach($result as $row){
		
		$result2=$livraisonC->recupererClient($row['cinClient']);
		foreach($result2 as $row1){
			
				$to=$row1['mail'];
	$sujet='Annulation du livraison';
	$text='Bonjour Mr/Mm '.$row1['nom'].' Votre demmande d annulation du livraison est effectué avec succès';
	$header='From : Strong Nutrition Tunisia';
	mail($to,$sujet,$text,$header);
	

		}
	}
	$livraisonC->supprimerLivraison($_GET["num"]);
	header('Location: COMMANDE.html');



?>