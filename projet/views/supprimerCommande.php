<?PHP
include "../core/commandeC.php";
$commandeC=new CommandeC();

	$commandeC->supprimerCommande($_POST["id"]);

	header('Location: index.html');

}

?>