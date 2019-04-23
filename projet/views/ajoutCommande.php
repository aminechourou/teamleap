<?php
include "../core/commandeC.php";
include "../entities/commande.php";

if ($_POST['id']>8)
{
	?>
	<script type="text/javascript">
		alert ("nooooooon")
	</script>
	<?PHP
	echo "<META http-equiv='refresh' content='0;URL=index.html'>";
}

if(isset($_GET['id']) && isset($_GET['nom']) && isset($_GET['categorie']) && isset($_GET['prix']))
{
$id=$_GET['id'];
$nom=$_GET['nom'];
$categorie=$_GET['categorie'];
$prix=$_GET['prix'];

if(!empty($_GET['id']) && !empty($_GET['nom']) && !empty($_GET['categorie']) && !empty($_GET['prix']))
{
$c=new commande($id,$nom,$categorie,$prix);
$commandeC=new CommandeC();
$commandeC->ajouterCommande($c);
if($commandeC->ajouterCommande($c)==true)
echo "OK";
header('location:index.html') ;
}}
?>