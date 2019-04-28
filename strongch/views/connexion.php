<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include "session.php";
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
$c=$client->Logedin($conn,$_POST['mail'],$_POST['mdp']);

	//var_dump($u);
//$logR=$_POST['login'];
//$pwdR=$_POST['pwd'];
$vide=false;
if (!empty($_POST['mail']) && !empty($_POST['mdp'])){
	
	foreach($c as $t){
		$vide=true;
	if ($t['mail']==$_POST['mail'] && $t['mdp']==$_POST['mdp']){
		
		session_start();
		$_SESSION['l']=$_POST['mail'];
		$_SESSION['p']=$_POST['mdp'];
		$_SESSION['u']=$t['user'];
		header("location:indexon.php");
		
		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Client non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=log-in.html">'; 
      } 
}	  
 
else { 
      echo '<body onLoad="alert(\'Vous devez remplir le formulaire...\')">';
  echo '<meta http-equiv="refresh" content="0;URL=log-in.php">';
}  

?> 
</body>
</html>