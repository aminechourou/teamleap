<?php
include "../core/clientC.php";
include "../entities/client.php";
if(isset($_GET['user']) && isset($_GET['telephone']) && isset($_GET['mail']) && isset($_GET['mdp']) && isset($_GET['cin']) && isset($_GET['age']))
{
$user=$_GET['user'];
$telephone=$_GET['telephone'];
$mail=$_GET['mail'];
$mdp=$_GET['mdp'];
$cin=$_GET['cin'];
$age=$_GET['age'];

if(!empty($_GET['user']) && !empty($_GET['telephone']) && !empty($_GET['mail']) && !empty($_GET['mdp']) && !empty($_GET['cin']) && !empty($_GET['age']))
{$clientC=new ClientC();
$result=$clientC->recupererClient($_GET['user']);
$s=0;
foreach($result as $row){
$s++;}
$result=$clientC->recupererCmail($_GET['mail']);
$k=0;
foreach($result as $row){
$k++;}

$result=$clientC->recupererCtel($_GET['telephone']);
$t=0;
foreach($result as $row){
$t++;}
$result=$clientC->recupererCcin($_GET['cin']);
$f=0;
foreach($result as $row){
$f++;}
if($k==0 && $s==0 &&  $t==0 && $f==0)
{
$c=new Client($user,$telephone,$mail,$mdp,$cin,$age);
$clientC=new ClientC();
$clientC->ajouterClient($c);
 echo '<body onLoad="alert(\'Inscription avec succés...\')">';
  echo '<meta http-equiv="refresh" content="0;URL=log-in.php">';
}
else if ($s!=0){ echo '<body onLoad="alert(\'le pseudo existe déja\')">';
  echo '<meta http-equiv="refresh" content="0;URL=log-in.php">';}
else if ($k!=0){ echo '<body onLoad="alert(\'le mail existe déja\')">';
  echo '<meta http-equiv="refresh" content="0;URL=log-in.php">';}
else if ($t!=0){ echo '<body onLoad="alert(\'le telephone existe déja\')">';
  echo '<meta http-equiv="refresh" content="0;URL=log-in.php">';}
else if ($f!=0){ echo '<body onLoad="alert(\'la carte d identite existe déja\')">';
  echo '<meta http-equiv="refresh" content="0;URL=log-in.php">';}

// Find your Account Sid and Auth Token at twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure


}}
else 
{
echo "Veuillez remplir correctement tous les champs";
} ?>
