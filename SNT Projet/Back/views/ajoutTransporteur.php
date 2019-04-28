<?PHP
include "../entities/transporteur.php";
include "../core/transporteurC.php";
include "../config.php";
if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['tel']) and isset($_POST['mail']) and isset($_POST['typeV']) and isset($_POST['montant'])){
	if ($_POST['typeV']=="Moto"){
		$nbMax=2;
	}
	else if ($_POST['typeV']=="Voiture"){
		$nbMax=4;
	}
	else{
		$nbMax=10;
	}
	
	$transporteur1=new Transporteur($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['tel'],$_POST['mail'],$_POST['typeV'],$nbMax,$_POST['montant']);
	//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$transporteur1C=new TransporteurC();
$transporteur1C->ajouterTransporteur($transporteur1);
header('Location: afficherTransporteur.php');
	
}else{
	echo "vérifier les champs";
	echo $_POST['typeV'];
}
//*/

?>