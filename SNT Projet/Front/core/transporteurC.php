<?PHP

class TransporteurC {
/**function afficherTransporteur ($transporteur){
		echo "Id: ".$transporteur->getId()."<br>";
		echo "Nom: ".$transporteur->getNom()."<br>";
		echo "Prénom: ".$transporteur->getPrenom()."<br>";
		echo "Tel: ".$transporteur->getTel()."<br>";
		echo "type véhicule: ".$transporteur->getTypeV()."<br>";
		echo "Immatricule: ".$transporteur->getImmat()."<br>";
	}**/
	
	function ajouterTransporteur($transporteur){
		$sql="INSERT INTO `transporteur`( `cin`, `nom`, `prenom`, `tel`, `mail`, `typeV`, `nbPaquet`, `montant`)
		VALUES (:cin, :nom, :prenom, :tel, :mail, :typeV, :nbPaquet, :montant)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
	
        $cin=$transporteur->getcin();
		$nom=$transporteur->getnom();
		$prenom=$transporteur->getprenom();
		$tel=$transporteur->gettel();
		$mail=$transporteur->getmail();
		$typeV=$transporteur->gettypeV();
		$nbPaquet=$transporteur->getnbPaquet();
		$montant=$transporteur->getmontant();
   
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':tel',$tel);
		
		$req->bindValue(':mail',$mail);
		$req->bindValue(':typeV',$typeV);
		$req->bindValue(':nbPaquet',$nbPaquet);
		$req->bindValue(':montant',$montant);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherTransporteurs(){
		//$sql="SElECT * From transporteur e inner join formationphp.transporteur a on e.cin= a.cin";
		$sql="SELECT * FROM `transporteur`";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherTransporteurs2(){
		//$sql="SElECT * From transporteur e inner join formationphp.transporteur a on e.cin= a.cin";
		$sql="SELECT * FROM `transporteur` ORDER BY nom ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherTransporteurs3(){
		//$sql="SElECT * From transporteur e inner join formationphp.transporteur a on e.cin= a.cin";
		$sql="SELECT * FROM `transporteur` ORDER BY montant ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function afficherClient(){
		//$sql="SElECT * From transporteur e inner join formationphp.transporteur a on e.cin= a.cin";
		$sql="SELECT * FROM `client` ORDER BY cin ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherCommande(){
		//$sql="SElECT * From transporteur e inner join formationphp.transporteur a on e.cin= a.cin";
		$sql="SELECT * FROM `commande` ORDER BY id ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function supprimerTransporteur($cin){
		$sql="DELETE FROM `transporteur` WHERE cin=:cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierTransporteur($transporteur,$cin){
		$sql="UPDATE `transporteur` SET `nom`=:nom,`prenom`=:prenom,`tel`=:tel,`mail`=:mail,`typeV`=:typeV,`nbPaquet`=:nbPaquet,`montant`=:montant
		WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
		$req=$db->prepare($sql);
		$nom=$transporteur->getnom();
		$prenom=$transporteur->getprenom();
		$tel=$transporteur->gettel();
		$mail=$transporteur->getmail();
		$typeV=$transporteur->gettypeV();
		$nbPaquet=$transporteur->getnbPaquet();
		$montant=$transporteur->getmontant();
   
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':tel',$tel);
		
		$req->bindValue(':mail',$mail);
		$req->bindValue(':typeV',$typeV);
		$req->bindValue(':nbPaquet',$nbPaquet);
		$req->bindValue(':montant',$montant);
		
		
            $s=$req->execute();
		
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   
        }
		
	}
	function recupererTransporteur($cin){
		$sql="SELECT * FROM `transporteur` WHERE cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recupererTransporteur2($id){
		$sql="SELECT * FROM `transporteur` WHERE id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function noterTransp($id,$note){
		$sql="UPDATE `transporteur` SET `note`=note+$note,`nbVote`=nbVote+1 where id=:id;
		";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
		$req=$db->prepare($sql);
		
   
		$req->bindValue(':id',$id);
		
		
		
            $s=$req->execute();
		
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   
        }
		
	}
	

}

?>