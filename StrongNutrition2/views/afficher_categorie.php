<?php
include "../core/CategorieC.php";
$categorie1C=new CategorieC();
$listeEmployes=$categorie1C->affichercatt();
?>

<table border="1">
<tr>
<td>id</td>
<td>Nom</td>
<td>desc</td>
<td>affich</td>
<td>tarif horaire</td>

</tr>
<?php
foreach($listeEmployes as $row){
	?>
	<tr>
	<td><?PHP echo $row['idcat']; ?></td>
	<td><?PHP echo $row['nomcat']; ?></td>
	<td><?PHP echo $row['description']; ?></td>
	<td><?PHP echo $row['affich']; ?></td>


	</tr>
	<?php
}
?>
</table>
