<?php
//include "../config.php";
class CommentaireC {
function ajouter ($commentaire)

{
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=snt;charset=utf8','root','');
	
	$ins = $bdd->prepare('INSERT INTO commentairep (reference,user, commentaire, date) VALUES (?,?,?,NOW())');
            $ins->execute(array($_GET['reference'],$_SESSION['r'],$commentaire));
	return true ;
}
	/*******************************************************************************************/
	function affichercom(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$reference=$_GET['reference'];
		$sql="SElECT * From commentairep where reference=$reference order by id DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	/***************************************************************************/
}