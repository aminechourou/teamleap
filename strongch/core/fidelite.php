<?PHP

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
		$sql="SElECT * From cartefid";
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
        function recupererid($num){
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
	}/*
	function modifierClient($client,$user){
		$sql="UPDATE client SET user=:user, telephone=:telephone,mail=:mail,mdp=:mdp WHERE user=:user";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$user=$client->getuser();
        $telephone=$client->gettel();
        $mail=$client->getmail();
        $mdp=$client->getmdp();
    
		$datas = array(':user'=>$user, ':user'=>$user, ':telephone'=>$telephone,':mail'=>$mail,':mdp'=>$mdp);
		$req->bindValue(':user',$user);
		$req->bindValue(':user',$user);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':mdp',$mdp);
	
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}*/
	function recupererCin($cinn){
		$sql="select * from cartefid  where cinn='".$cinn."'";
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