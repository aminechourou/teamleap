<?php
include "../config.php";
class PackC {
function ajouter ($pack)

{$sql="insert into pack (reference,nom,description,prix,quantite,etat,image,datee) values ( :reference , :nom , :description, :prix, :quantite , :etat , :image , :datee)" ;
	$db=config::getConnexion();
try{
	$req=$db->prepare($sql);
	  
	$reference=$pack->getreference();
	$nom=$pack->getnom();
	$description=$pack->getdescription();
	$prix=$pack->getprix();
	$quantite=$pack->getquantite();
	$etat=$pack->getetat();
	$image=$pack->getimage();
	$datee=$pack->getdatee();
	$req->bindValue(':reference',$reference);
	$req->bindValue(':nom',$nom);
	$req->bindValue(':description',$description);
	$req->bindValue(':prix',$prix);
	$req->bindValue(':quantite',$quantite);
	$req->bindValue(':etat',$etat);
	$req->bindValue(':image',$image);
	$req->bindValue(':datee',$datee);
	$req->execute();
	return true ;
} catch (Exception $e)
	
{echo 'Erreur' .$e->getMessage(); return false ;}
}
	/*******************************************************************************************/

	function modifier($pack,$reference){
		$sql="UPDATE pack SET nom=:nom, description=:description,prix=:prix,quantite=:quantite, etat=:etat,
	image=:image , datee=:datee where reference = :reference" ;
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
	$reference=$pack->getreference();
	$nom=$pack->getnom();
	$description=$pack->getdescription();
	$prix=$pack->getprix();
	$quantite=$pack->getquantite();
	$etat=$pack->getetat();
	$image=$pack->getimage();
	$datee=$pack->getdatee();
		$datas = 	array(':nom'=>$nom, ':description'=>$description, ':prix'=>$prix,':quantite'=>$quantite,':etat'=>$etat, ':image'=>$image,':datee'=>$datee,':reference'=>$_GET['reference']);

			$req->bindValue(':reference',$reference);
	$req->bindValue(':nom',$nom);
	$req->bindValue(':description',$description);
	$req->bindValue(':prix',$prix);
	$req->bindValue(':quantite',$quantite);
	$req->bindValue(':etat',$etat);
	$req->bindValue(':image',$image);
	$req->bindValue(':datee',$datee);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	/***************************************************************************/
	function recupererpack($reference){
		$sql="SELECT * from pack where reference=$reference";
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
	/*function afficherpromo ($promo){
		echo "reference: ".$promo->getreference()."<br>";
		echo "aprix: ".$promo->getaprix()."<br>";
		echo "taux: ".$promo->gettaux()."<br>";
		echo "nprix: ".$promo->getnprix()."<br>";
		echo "quantite: ".$promo->getquantite()."<br>";
		echo "etat: ".$promo->getetat()."<br>";
		echo "datee: ".$promo->getdatee()."<br>";
		
	
	}	*/
	/***************************************************************************/
	function afficherpack(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From pack";
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
	 function supprimerpack($reference){

		$sql="DELETE from pack where reference=$reference";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':$reference',$reference);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	/***************************************************************************/
	function afficherstat(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT nom, sum(quantite) From pack group by nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		/*************************************************************/
		function rechercher(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql='select * from promo WHERE reference LIKE "%'.$_GET['search'].'%"';
			
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}
?>