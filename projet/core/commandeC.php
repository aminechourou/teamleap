<?PHP
include "../config.php";
class CommandeC {
function afficherCommande ($commande){
		echo "id: ".$employe->getid()."<br>";
		echo "nom: ".$employe->getnom()."<br>";
		echo "prix: ".$employe->getprix()."<br>";
		echo "categorie: ".$employe->getcategorie()."<br>";
		
	}
	
	function ajouterCommande($commande){
		$sql="insert into commande (id,nom,categorie,prix) values (:id, :nom,:categorie,:prix)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$commande->getid();
        $nom=$commande->getnom();
        $prix=$commande->getprix();
        $categorie=$commande->getcategorie();
       
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
$req->bindValue(':categorie',$categorie);
		$req->bindValue(':prix',$prix);
		
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCommandes(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function triercommande(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From commande ORDER BY id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function supprimerCommande($id){
		$sql="DELETE FROM commande where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCommandes($commande,$id){
		$sql="UPDATE commande SET id=:idd, nom=:nom, categorie:=categorie,prix=:prix WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$commande->getid();
		$nom=$commande->getnom();
        $prix=$commande->getprix();
        $categorie=$commande->getcategorie();
        
		$datas = array(':idd'=>$idd, ':id'=>$id,':nom'=>$nom,':categorie'=>$categorie,':prix'=>$prix);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':prix',$prix);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererCommande($id){
		$sql="SELECT * from commande where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	/*function rechercherListeCommandes($tarif){
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