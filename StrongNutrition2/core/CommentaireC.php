<?php
include "configcomm.php";
class CommentaireC {
function ajouter ($commentaire)

{
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=strongnutrition;charset=utf8','root','');
	
	$ins = $bdd->prepare('INSERT INTO commentaire (idprod, user, commentaire, date) VALUES (?,?,?,NOW())');
            $ins->execute(array($_GET['idprod'],$_SESSION['r'],$commentaire));
	return true ;
}
	/*******************************************************************************************/
	function affichercom(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$idprod=$_GET['idprod'];
		$sql="SElECT * From commentaire where idprod=$idprod order by id DESC";
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