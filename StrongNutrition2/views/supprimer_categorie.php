<?php
include "../core/CategorieC.php";
$categorieC=new CategorieC();
$listeProduit=$categorieC->affichercatt();
$resultat=0 ;

	foreach($listeProduit as $row){

if (isset($_GET["idcat"])  && ($_GET["idcat"] == $row['idcat']) )
{
	$categorieC->supprimercat($_GET["idcat"]);
	 header('Location: categ.php');

}  else { $result=1 ;}
}
if($resultat==1) {
echo '<script>alert("Id Introuvable, Veuillez saisir un ID valable")</script>' ;}
	?>

	<?php


/*
$connection=mysqli_connect("localhost", "root", "", "strongnutrition");

$ID=$_GET['idcat']; // On récupére le ID dans l'url par exemple
$SupprimerSQL=mysqli_query($connection, "DELETE FROM Categorie WHERE idcat='$ID'");

if((!$SupprimerSQL) && ($_GET["idcat"]==$ID) ){
    echo "<p class='alert alert-danger'>L'enregistrement n'a pas été supprimé</p>";
}
else {
    echo "<p class='alert alert-success'>Le disque ".$_GET['idcat']." a bien été supprimé</p>";
}*/

/*
$categorieC=new CategorieC();
if (isset($_GET["idcat"]) && ($_GET["idcat"]==':idcat'))
{
	$categorieC->supprimercat($_GET["idcat"]);
	 header('Location: categ.php');
 } Else echo"false";
*/
	/*//$mess=$categorieC->supprimercat($_GET["idcat"]);

	if($_GET["idcat"]==':idcat')
	 {  header('Location: categ.php'); }
	Else { ?>

	 <a href="categ1supp.php">Retour à la page précedente</a>
	 <?php
	 echo "<script>alert(\"La catégorie est Introuvale. Veuillez saisir un ID valable.\")</script>";
	 } ?>


	 	$employeC->supprimerEmploye($_POST["cin"]);
	 	header('Location: afficherEmploye.php');
	}*/
	 ?>
