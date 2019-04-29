<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include "Client.php";
	
//$log="admin";
//$pwd="admin";
/*$servername="localhost";
	$username="root";
	$password="";
	$dbname="dblogin";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", 
	$username, $password);
	$req="select * from users where user_name='$login' && user_pass='$pwd'";
	$rep=$conn->query($req);
	$res=$rep->fetchAll();
	*/
$c=new Database();
$conn=$c->connexion();
$client=new Client($_POST['mail'],$_POST['mdp'],$conn);
$u=$client->Logedin($conn,$_POST['mail'],$_POST['mdp']);

	//var_dump($u);
//$logR=$_POST['login'];
//$pwdR=$_POST['pwd'];
$vide=false;
if (!empty($_POST['mail']) && !empty($_POST['mdp'])){
	
	foreach($u as $t){
		$vide=true;
	if ($t['mail']=="aziz.arfaoui@gmail.com" && $t['mdp']=="123"){
		
		session_start();
		$_SESSION['l']=$_POST['mail'];
		$_SESSION['p']=$_POST['mdp'];
		$_SESSION['r']=$t['user'];
		header("location:index2.html");
} else if ($t['mail']==$_POST['mail'] && $t['mdp']==$_POST['mdp']){	
		session_start();
		$_SESSION['l']=$_POST['mail'];
		$_SESSION['p']=$_POST['mdp'];
		$_SESSION['r']=$t['user'];
		header("location:productPromo.php");
	
}}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=log-in.html">'; 
      } 
}	  
 
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> <a href="log-in.html">Retour au formulaire</a>	 <?php 
}  

?> 
</body>
</html>