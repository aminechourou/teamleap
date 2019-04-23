<?php
class Pack
{
	private $reference;
	private $nom;
	private $description;
	private $prix;
	private $quantite;
	private $etat;
	private $image;
	private $datee;
	

function __construct($reference,$nom,$description,$prix,$quantite,$etat,$image,$datee)
{
	$this->reference=$reference;
	$this->nom=$nom;
	$this->description=$description;
	$this->prix=$prix;
	$this->quantite=$quantite;
	$this->etat=$etat;
	$this->image=$image;
	$this->datee=$datee;

}

function getreference() { return $this->reference; }

function getnom() { return $this->nom;  }

function getdescription() { return $this->description; }

function getprix() { return $this->prix; }

function getquantite() { return $this->quantite;  }

function getetat() { return $this->etat; }
function getimage() { return $this->image; }
	function getdatee() { return $this->datee; }

function setreference($reference) {$this->reference=$reference;}
function setnom($nom) {$this->nom=$nom;}
function setdescription($description) {$this->description=$description;}
function setprix($prix) {$this->prix=$prix;}
function setquantite($quantite) {$this->quantite=$quantite;}
function setetat($etat) {$this->etat=$etat;}
function setimage($image) {$this->image=$image;}
function setdatee($datee) {$this->datee=$datee;}

}
?>
