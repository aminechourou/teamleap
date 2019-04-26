<?PHP
include "../core/fidC.php";
$fidC=new FidC();
if (isset($_POST["num"])){
$fidC=new FidC();
$result=$fidC->recupererFid($_POST['num']);
$s=0;
foreach($result as $row){
$s++;}
if($s!=0){
	$fidC->supprimerFid($_POST["num"]);
echo '<body onLoad="alert(\'Carte fidélité supprimée avec succées...\')">';
  echo '<meta http-equiv="refresh" content="0;URL=indexon.php">';}

else {echo '<body onLoad="alert(\'Vérifier le numéro de votre compte...\')">';
 echo '<meta http-equiv="refresh" content="0;URL=indexon.php">';}
}
else
{
echo '<body onLoad="alert(\'Vérifier le numéro de votre compte...\')">';
 echo '<meta http-equiv="refresh" content="0;URL=indexon.php">';
}

?>