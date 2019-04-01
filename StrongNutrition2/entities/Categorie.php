<?php
class Categorie {

private $idcat;
private $nomcat;
private $description;
private $affich;

function __construct($idcat,$nomcat,$description,$affich)
{ $this->idcat=$idcat;
  $this->nomcat=$nomcat;
  $this->description=$description;
  $this->affich=$affich;
}
function getidcat() {return $this->idcat;}
function getnomcat() {return $this->nomcat;}
function getdescription() {return $this->description;}
function getaffich() {return $this->affich;}
function setidcat($idcat) {$this->idcat=$idcat;}
function setnomcat($nomcat) {$this->nomcat=$nomcat;}
function setdescription($description) {$this->description=$description;}
function setaffich($affich) {$this->affich=$affich;}
}
?>
