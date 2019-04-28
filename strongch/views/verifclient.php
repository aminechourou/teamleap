<?php
include "../entities/client.php";
include "../core/clientC.php";
if (isset($_GET['mail'])){
	$clientC=new ClientC();
    $result=$clientC->recupererCmail($_GET['mail']);
    $s=0;
    foreach($result as $row){
        $s++; 
    }
    if($s!=0)
   {

$Name = "Equipe Strong Nutrition"; //senders name 
$email = "snt@gmail.com"; //senders e-mail adress 
$recipient = $row['mail']; //recipient 
$mail_body = "Votre Mot de passe est: ".$row['mdp'].""; //mail body 
$subject = "Mot de passe oublié"; //subject 
$header = "From: ". $Name . " <" . $email . ">\r\n"; //optional headerfields 

mail($recipient, $subject, $mail_body, $header); //mail command :) 
  echo '<body onLoad="alert(\'Mail envoyé avec succés...\')">';
  echo '<meta http-equiv="refresh" content="0;URL=log-in.php">';
   }
   else {
echo '<body onLoad="alert(\'Mail non reconnu...\')">';
  echo '<meta http-equiv="refresh" content="0;URL=oublie.php">'; 
   }
}
		
?>