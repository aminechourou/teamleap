
<?php
include "../core/fidC.php";
include "../entities/fid.php";
if(isset($_GET['num']) && isset($_GET['nom']) && isset($_GET['cin']))
{
$num=$_GET['num'];
$nom=$_GET['nom'];
$cin=$_GET['cin'];
if(!empty($_GET['num']) && !empty($_GET['nom']) && !empty($_GET['cin']))
{
$f=new Fid($num,$nom,$cin);
$fidC=new FidC();
$fidC->ajouterFid($f);
header('Location: cartefid.html');

}}
else {
echo "verifier les champs !";
}
?>