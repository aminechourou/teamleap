<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php
include "User.php";
//$log="admin";
//$pwd="admin";
/*$servername="localhost";
	$username="root";
	$password="";
	$dbname="dblogin";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",
	$username, $password);
	$req="select * from client where user_name='$mail' && user_pass='$mdp";
	$rep=$conn->query($req);
	$res=$rep->fetchAll();
	*/
$c=new Database();
$conn=$c->connexion();
$user=new Client($_GET['mail'],$_GET['mdp'],$conn);
$u=$user->Logedin($conn,$_GET['mail'],$_GET['mdp']);

	//var_dump($u);
//$logR=$_POST['login'];
//$pwdR=$_POST['pwd'];
$vide=false;
if (!empty($_GET['mail']) && !empty($_GET['mdp'])){

	foreach($u as $t){
		$vide=true;
	if ($t['mail']==$_GET['mail'] && $t['mdp']==$_GET['mdp']){

		session_start();
		$_SESSION['l']=$_GET['mail'];
		$_SESSION['p']=$_GET['mdp'];
		$_SESSION['r']=$t['user'];
		header("Location:product.php");

		}

}
if ($vide==false) {
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">';
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=log-in.html">';
      }
}

else {
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire";
     ?> <a href="auth.html">Retour au formulaire</a>	 <?php
}

?>
</body>
</html>
