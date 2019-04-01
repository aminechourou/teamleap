<?php
include "../core/ProduitC.php";
include "../entities/Produit.php";

if( isset($_GET['idprod']) && isset($_GET['nomprod']) && isset($_GET['referenceprod'] ) && isset($_GET['categorieprod'] ) && isset($_GET['prixprod'] ) && isset($_GET['etatprod'] )&& isset($_GET['quantiteprod'] ) && isset($_GET['imageprod']) && isset($_GET['mailform']) )
{
   $idprod=$_GET['idprod'];
   $nomprod=$_GET['nomprod'];
   $referenceprod=$_GET['referenceprod'];
   $categorieprod=$_GET['categorieprod'];
   $prixprod=$_GET['prixprod'];
   $etatprod=$_GET['etatprod'];
   $quantiteprod=$_GET['quantiteprod'];
   $imageprod=$_GET['imageprod'];


  if(!empty($_GET['idprod']) && !empty($_GET['nomprod']) && !empty($_GET['referenceprod'] ) && !empty($_GET['categorieprod'] ) && !empty($_GET['prixprod'] ) && !empty($_GET['etatprod'] )&& !empty($_GET['quantiteprod'] ) && !empty($_GET['imageprod']) )
    {
    $po=new Produit($idprod,$nomprod,$referenceprod,$categorieprod,$prixprod,$etatprod,$quantiteprod,$imageprod);
    $produitC=new ProduitC();
    $mes=$produitC->ajouterprod($po);

    if($mes==true)
    $to='aziz.arfaou.98@gmail.com';
$sujet='test mail en local';
$texte="Un nouveau produit à été ajouté!";
$header='From : test@gmail.com';
mail($to,$sujet,$texte,$header);
    header('Location: produit.php');

}}
  ?>
