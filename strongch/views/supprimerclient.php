<?PHP
include "../core/clientC.php";
$clientC=new ClientC();
if (isset($_POST["user"])){
	$clientC->supprimerClient($_POST["user"]);
	header('Location: index.html');
}

?>