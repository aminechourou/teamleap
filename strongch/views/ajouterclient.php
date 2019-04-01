<?php
include "../core/clientC.php";
include "../entities/client.php";
if(isset($_GET['user']) && isset($_GET['telephone']) && isset($_GET['mail']) && isset($_GET['mdp']))
{
$user=$_GET['user'];
$telephone=$_GET['telephone'];
$mail=$_GET['mail'];
$mdp=$_GET['mdp'];

if(!empty($_GET['user']) && !empty($_GET['telephone']) && !empty($_GET['mail']) && !empty($_GET['mdp']))
{
$c=new Client($user,$telephone,$mail,$mdp);
$clientC=new ClientC();
$clientC->ajouterClient($c);
header('Location: log-in.html');

}}
else 
{
echo "verifier les champs";
}

?>