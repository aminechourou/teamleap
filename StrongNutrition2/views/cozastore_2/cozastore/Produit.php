<?php
class Produit {

private $idprod;
private $nomprod;
private $referenceprod;
private $categorieprod;
private $prixprod;
private $etatprod;
private $quantiteprod;
private $imageprod;


function __construct($idprod,$nomprod,$referenceprod,$categorieprod,$prixprod,$etatprod,$quantiteprod,$imageprod)
{ $this->idprod=$idprod;
  $this->nomprod=$nomprod;
  $this->referenceprod=$referenceprod;
  $this->categorieprod=$categorieprod;
  $this->prixprod=$prixprod;
  $this->etatprod=$etatprod;
  $this->quantiteprod=$quantiteprod;
  $this->imageprod=$imageprod;
}

function getidprod() {return $this->idprod;}
function getnomprod() {return $this->nomprod;}
function getreferenceprod() {return $this->referenceprod;}
function getcategorieprod() {return $this->categorieprod;}
function getprixprod() {return $this->prixprod;}
function getetatprod() {return $this->etatprod;}
function getquantiteprod() {return $this->quantiteprod;}
function getimageprod() {return $this->imageprod;}


function setidprod($idprod) {$this->idprod=$idprod;}
function setprod($nomprod) {$this->nomprod=$nomprod;}
function setreference($referenceprod) {$this->referenceprod=$referenceprod;}
function setcategotieprod($categorieprod) {$this->categorieprod=$categorieprod;}
function setprixprod($prixprod) {$this->prixprod=$prixprod;}
function setetatprod($etatprod) {$this->etatprod=$etatprod;}
function setquantiteprod($quantiteprod) {$this->quantiteprod=$quantiteprod;}
function setimageprod($imageprod) {$this->imageprod=$imageprod;}
}
?>
