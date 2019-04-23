<?PHP
include "../core/CategorieC.php";
$categorie1C=new CategorieC();
$listeCategorie2=$categorie1C->afficherProduits2();

//var_dump($listeEmployes-> fetchAll());

foreach($listeCategorie2 as $row){
	?>
	<tr>
	<td><?PHP echo $row['idcat']; ?></td>
	<td><?PHP echo $row['nomcat']; ?></td>
	<td><?PHP echo $row['description']; ?></td>
	<td><?PHP echo $row['affich']; ?></td>



<?php
}
?>
