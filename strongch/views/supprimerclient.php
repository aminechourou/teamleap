<?PHP
include "../core/clientC.php";
$clientC=new ClientC();
if (isset($_POST["user"])){
$clientC=new ClientC();
$result=$clientC->recupererClient($_POST['user']);
$s=0;
foreach($result as $row){
$s++;}
if($s!=0){
	$clientC->supprimerClient($_POST["user"]);
	header('Location: index.html');}
else {echo '<body onLoad="alert(\'pseudo n existe pas !\')">';
  echo '<meta http-equiv="refresh" content="0;URL=ModifierC.php">';}
}

?>