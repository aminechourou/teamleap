<?php
session_start ();
include "../core/fidelite.php";
include "../entities/fid.php";
include "../core/clientC.php";
if(isset($_GET['num']) && isset($_GET['nom']) && isset($_GET['cinn']))
{
$num=$_GET['num'];
$nom=$_GET['nom'];
$cinn=$_GET['cinn'];
if(!empty($_GET['num']) && !empty($_GET['nom']) && !empty($_GET['cinn']))
{

$f=new Fid($num,$nom,$cinn);
$fidC=new FidC();
$clientC=new ClientC();
$result=$clientC->recupererCmail($_SESSION['l']);
$s=0;
foreach($result as $ro){
$s++;}
$result=$clientC->recupererNum($_GET['num']);
$k=0;
foreach($result as $ro){
$k++;}
$result=$clientC->recupererNom($_GET['nom']);
$n=0;
foreach($result as $ro){
$n++;}
if($s!=0 && $k==0 && $n==0)
{
$fidC->ajouterFid($f);
$Name = "Equipe Strong Nutrition"; //senders name 
$email = "snt@gmail.com"; //senders e-mail adress 
$recipient = $ro['mail']; //recipient 
$mail_body = 'http://localhost/StrongWeb/views/confirmercarte.php?num='.$num.'';
$subject = "Confirmation carte fidélité"; //subject 
$header = "From: ". $Name . " <" . $email . ">\r\n"; //optional headerfields 
mail($recipient, $subject, $mail_body, $header); //mail command :) 
  echo '<body onLoad="alert(\'Mail envoyé avec succés...\')">';
header('Location: indexon.php');
}
else if($k!=0) {echo '<body onLoad="alert(\'le numéro existe déja\')">';
  echo '<meta http-equiv="refresh" content="0;URL=cartefid.php">';}
  else if($n!=0) {echo '<body onLoad="alert(\'le nom existe déja\')">';
  echo '<meta http-equiv="refresh" content="0;URL=cartefid.php">';}
}}
else { echo '<body onLoad="alert(\'Numéro existe déja...\')">';
  echo '<meta http-equiv="refresh" content="0;URL=cartefid.php">'; }
?>