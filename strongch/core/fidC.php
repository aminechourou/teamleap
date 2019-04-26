<?PHP
include "../config.php";
class FidC {
function afficherFid ($fid){
		echo "numéro: ".$fid->getfid()."<br>";
		echo "Nom: ".$fid->getnom()."<br>";
		echo "cinn: ".$fid->getcinn()."<br>";
	}
	/*function calculerSalaire($employe){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	}*/
	function ajouterFid($fid){
		$sql="insert into cartefid (num,nom,cinn) values (:num, :nom,:cinn)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $num=$fid->getnum();
        $nom=$fid->getnom();
        $cinn=$fid->getcinn();
		$req->bindValue(':num',$num);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':cinn',$cinn);
	   $req->execute();
         return true;  
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage(); return false;
        }
		
	}
	
	function afficherFids(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From cartefid order by num asc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerFid($num){
		$sql="DELETE FROM cartefid where num= :num";
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
        function modifierFid($num){
		$sql="UPDATE cartefid SET confirmedmail=1 WHERE num=:num";
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
	function modifierFide($nom,$cinn){
		$sql="UPDATE cartefid SET nom=:nom ,modifiercarte=modifiercarte+1 WHERE cinn=:cinn";
		
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':cinn',$cinn);
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
		$req->execute();
	    }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}
	function recupererFid($num){
		$sql="select * from cartefid  where num='".$num."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	/*
	function rechercherListeEmployes($tarif){
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