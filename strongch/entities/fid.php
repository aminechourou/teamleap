<?php
class Fid
{
private $num;
private $nom;
private $cinn;
function __construct($num,$nom,$cinn)
{
$this->num=$num;
$this->nom=$nom;
$this->cinn=$cinn;
}
function getnum(){return $this->num;}
function getnom(){return $this->nom;}
function getcinn(){return $this->cinn;}
function setnum($num){$this->num=$num;}
function setnom($nom){$this->nom=$nom;}
function setcinn($cinn){$this->cinn=$cinn;}
}
?>