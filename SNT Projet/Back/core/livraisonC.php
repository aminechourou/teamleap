<?PHP

class LivraisonC {
	function recupererClient($cin){
		
		$sql="SELECT * from `client` where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
function afficherLivraison ($livraison){
		echo "Id: ".$livraison->getId()."<br>";
		echo "Transporteur: ".$livraison->getTransp()."<br>";
		echo "Destination: ".$livraison->getDest()."<br>";
		echo "Adresse: ".$livraison->getAdr()."<br>";
		echo "Delais: ".$livraison->getDelais()."<br>";
		echo "Code commande: ".$livraison->getCodeC()."<br>";
		echo "Frais: ".$livraison->getFrais()."<br>";
	}
	
	function ajouterLivraison($livraison){
		$sql="INSERT INTO `livraison`(`dateL`, `Destination`, `adresse`, `frais`, `cinClient`, `idCommande`, `idTransp`) 
		VALUES (:dateL, :Destination, :adresse, :frais, :cinClient, :idCommande, :idTransp)";
		$db = config::getConnexion();
		try{
			
        $req=$db->prepare($sql);
		$dateL=$livraison->getdate();
		$dest=$livraison->getdest();
        $adresse=$livraison->getadr();
        $frais=$livraison->getfrais();
		$cinClient=$livraison->getcinClient();
		$idCommande=$livraison->getidCommande();
		$idTransp=$livraison->getidTransporteur();
		
		$req->bindValue(':dateL',$dateL);
		
		$req->bindValue(':Destination',$dest);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':frais',$frais);
		$req->bindValue(':cinClient',$cinClient);
		$req->bindValue(':idCommande',$idCommande);
		$req->bindValue(':idTransp',$idTransp);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherLivraisons(){
		//$sql="SElECT * From Livraison e inner join formationphp.Livraison a on e.cin= a.cin";
		$sql="SELECT * FROM `livraison` inner join `transporteur` on `livraison`.idTransp=`transporteur`.id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherLivraisonsCours(){
		//$sql="SElECT * From Livraison e inner join formationphp.Livraison a on e.cin= a.cin";
		$sql="SELECT * FROM `livraison` inner join `transporteur` on `livraison`.idTransp=`transporteur`.id where dateL>now() order by DateL ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherLivraisonsTerminer(){
		//$sql="SElECT * From Livraison e inner join formationphp.Livraison a on e.cin= a.cin";
		$sql="SELECT * FROM `livraison` inner join `transporteur` on `livraison`.idTransp=`transporteur`.id where dateL<now() order by DateL ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function affichernbEnCoursLivraisons(){
		//$sql="SElECT * From Livraison e inner join formationphp.Livraison a on e.cin= a.cin";
	
		 $now=date('Y-m-d'); 
		$sql="SELECT * From livraison where dateL < '$now' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherLivraisonsParDate($date){
		//$sql="SElECT * From Livraison e inner join formationphp.Livraison a on e.cin= a.cin";
		//$date2=$date->format('Y-m-d');
		
		$sql="SELECT * From livraison where dateL='$date'";
		
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherDestPlus(){
		//$sql="SElECT * From Livraison e inner join formationphp.Livraison a on e.cin= a.cin";
		//$date2=$date->format('Y-m-d');
		
		$sql="SELECT Destination,count(*) somme from livraison group by Destination ORDER BY count(*) desc limit 3 ";
		
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerLivraison($num){
		$sql="DELETE FROM `livraison` where num= :num";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':num',$num);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierLivraison($livraison,$num){
		$sql="UPDATE `livraison` SET `dateL`=:dateL,`Destination`=:Destination,`adresse`=:adresse,`frais`=:frais,`cinClient`=:cinClient,`idCommande`=:idCommande,`idTransp`=:idTransp WHERE num=:num";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
		$req=$db->prepare($sql);
		$dateL=$livraison->getdate();
		$dest=$livraison->getdest();
        $adresse=$livraison->getadr();
        $frais=$livraison->getfrais();
		$cinClient=$livraison->getcinClient();
		$idCommande=$livraison->getidCommande();
		$idTransp=$livraison->getidTransporteur();
		
		$req->bindValue(':dateL',$dateL);
		$req->bindValue(':num',$num);
		$req->bindValue(':Destination',$dest);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':frais',$frais);
		$req->bindValue(':cinClient',$cinClient);
		$req->bindValue(':idCommande',$idCommande);
		$req->bindValue(':idTransp',$idTransp);
		
		
            $s=$req->execute();
		
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererLivraison($num){
		$sql="SELECT * from livraison where num=$num";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function afficherPos($date,$id){
		//$sql="SElECT * From Livraison e inner join formationphp.Livraison a on e.cin= a.cin";
		//$date2=$date->format('Y-m-d');
		
		$sql="SELECT * From livraison where dateL='$date' and idTransp='$id'";
		
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