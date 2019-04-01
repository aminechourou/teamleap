<?php
class Fid
{
private $num;
private $nom;
private $cin;
function __construct($num,$nom,$cin)
{
$this->num=$num;
$this->nom=$nom;
$this->cin=$cin;
}
function getnum(){return $this->num;}
function getnom(){return $this->nom;}
function getcin(){return $this->cin;}
function setnum($num){$this->num=$num;}
function setnom($nom){$this->nom=$nom;}
function setemail($cin){$this->cin=$cin;}
}
?>