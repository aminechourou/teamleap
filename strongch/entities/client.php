<?php
class Client
{
private $user;
private $telephone;
private $mail;
private $mdp;

function __construct($user,$telephone,$mail,$mdp)
{
$this->user=$user;
$this->telephone=$telephone;
$this->mail=$mail;
$this->mdp=$mdp;
}
function getuser(){return $this->user;}
function gettel(){return $this->telephone;}
function getmail(){return $this->mail;}
function getmdp(){return $this->mdp;}
function setuser($user){$this->user=$user;}
function settel($telephone){$this->telephone=$telephone;}
function setemail($email){$this->mail=$mail;}
function setmdp($mdp){$this->mdp=$mdp;}
}
?>