<?php
include "../core/CategorieC.php";
include "../entities/Categorie.php";


if( isset($_GET['nomcat']) && isset($_GET['description'] ) && isset($_GET['affich'] ))
{ 
  $nomcat=$_GET['nomcat'];
  $description=$_GET['description'];
  $affich=$_GET['affich'];

  if( !empty($_GET['nomcat']) && !empty($_GET['description']) && !empty($_GET['affich']) )
  {
    $p=new Categorie($nomcat,$description,$affich);
    $categorieC=new CategorieC();
    $mes=$categorieC->ajouter($p);
    if($mes==true) {
 header('Location: categ.php');
}}}
  ?>
