<?php

class Client
{
private $user;
private $telephone;
private $mail;
private $mdp;
private $cin;

function __construct($user,$telephone,$mail,$mdp,$cin)
{
$this->user=$user;
$this->telephone=$telephone;
$this->mail=$mail;
$this->mdp=$mdp;
$this->cin=$cin;
}
function getuser(){return $this->user;}
function gettel(){return $this->telephone;}
function getmail(){return $this->mail;}
function getmdp(){return $this->mdp;}
function getcin(){return $this->cin;}
function setcin($cin){$this->cin=$cin;}
function setuser($user){$this->user=$user;}
function settel($telephone){$this->telephone=$telephone;}
function setemail($email){$this->mail=$mail;}
function setmdp($mdp){$this->mdp=$mdp;}
}
?>