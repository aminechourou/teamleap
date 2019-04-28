<?PHP
include "../core/transporteurC.php";
include "../config.php";

$transporteurC=new TransporteurC();

	$transporteurC->noterTransp($_GET['idTransporteur'],$_GET['note']);
	
	

	header('Location: COMMANDE.html');



?>