<?php
include "../config.php";
class CategorieC {
function ajouter ($Categorie)
{
	//$sql="UPDATE Categorie SET idcat=:idcat, nomcat=:nomcat,description=:description,affich=:affich, WHERE $idcat= :idcat";

$sql="insert into Categorie (nomcat,description,affich) values (:nomcat,:description,:affich)";
$db=config::getConnexion();
try {

$req=$db->prepare($sql);
$nomcat=$Categorie->getnomcat();
$description=$Categorie->getdescription();
$affich=$Categorie->getaffich();

$req->bindValue(':nomcat', $nomcat);
$req->bindValue(':description', $description);
$req->bindValue(':affich', $affich);

$req->execute();
return true;
} catch (Exception $e) { echo 'erreur'.$e->getMessage() ; return false;}
}


/*******************************/

function affichercat ($Categorie){
		echo "id: ".$Categorie->getidcat()."<br>";
		echo "Nom: ".$Categorie->getnomcat()."<br>";
		echo "Description: ".$Categorie->getdescription()."<br>";
		echo "Affichée: ".$Categorie->getaffich()."<br>";
	}

function affichercatt(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From Categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

/**************************************************************/

	function afficherProduits2(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From Categorie ORDER BY nomcat";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



/****************************************************************/
   function supprimercat($idcat){

		$sql="DELETE FROM Categorie where idcat= :idcat";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idcat',$idcat);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

  /*********************************************************************/
	function modifier($categorie,$idcat){
		$sql="UPDATE Categorie SET nomcat=:nomcat ,description=:description,affich=:affich where idcat=:idcat ";
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);
		    
        $nomcat=$categorie->getnomcat();
        $description=$categorie->getdescription();
        $affich=$categorie->getaffich();

		$datas = array( ':nomcat'=>$nomcat,':description'=>$description,':affich'=>$affich ,':idcat'=>$idcat);
		$req->bindValue(':idcat',$idcat);
		$req->bindValue(':nomcat',$nomcat);
		$req->bindValue(':description',$description);
		$req->bindValue(':affich',$affich);


          $s=$req->execute();
           //header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }

	}

	/**********************************************/

	function recuperercat($idcat){
		$sql="SELECT * from Categorie where idcat=$idcat";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
/*****************************************************************/








/**************************************************************
function rechercherListeCat($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
}




 ?>
