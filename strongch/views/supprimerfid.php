<?PHP
include "../core/fidC.php";
$fidC=new FidC();
if (isset($_POST["num"])){
	$fidC->supprimerFid($_POST["num"]);
	header('Location: cartefid.html');
}
else
{
echo "verifier le numéro !!";
}

?>