<?PHP
include "../core/commandeC.php";
$commandeC=new CommandeC();
if (isset($_POST["id"])) {


	$commandeC->supprimerCommande($_POST["id"]);
	header('Location: index.html');

}

?>