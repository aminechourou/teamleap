<?PHP
include "../config.php";
class ClientC {
function afficherClient ($client){
		echo "Pseudo: ".$client->getuser()."<br>";
		echo "Telephone: ".$client->gettel()."<br>";
		echo "e-mail: ".$client->getmail()."<br>";
		echo "mot de passe: ".$client->getmdp()."<br>";
	}
	/*function calculerSalaire($employe){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	}*/
	function ajouterClient($client){
		$sql="insert into client (user,telephone,mail,mdp,cin) values (:user, :telephone,:mail,:mdp,:cin)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $user=$client->getuser();
        $telephone=$client->gettel();
        $mail=$client->getmail();
        $mdp=$client->getmdp();
        $cin=$client->getcin();
		$req->bindValue(':user',$user);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':mdp',$mdp);
		$req->bindValue(':cin',$cin);
	   $req->execute();
         return true;  
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage(); return false;
        }
		
	}
	
	function afficherClients(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerClient($user){
		$sql="DELETE FROM client where user= :user";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':user',$user);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierClient($client,$user){
		$sql="UPDATE client SET user=:userr, telephone=:telephone,mail=:mail,mdp=:mdp,cin=:cin WHERE user=:user";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$userr=$client->getuser();
        $telephone=$client->gettel();
        $mail=$client->getmail();                              
        $mdp=$client->getmdp();
        $cin=$client->getcin();
    
		$datas = array(':userr'=>$userr, ':user'=>$user, ':telephone'=>$telephone,':mail'=>$mail,':mdp'=>$mdp,':cin'=>$cin);
		$req->bindValue(':userr',$userr);
		$req->bindValue(':user',$user);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':mdp',$mdp);
		$req->bindValue(':cin',$cin);
	
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererClient($user){
		$sql="select * from client  where user='".$user."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recupererNum($num){
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
	function recupererNom($nom){
		$sql="select * from cartefid  where nom='".$nom."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		function recupererCmail($mail){
		$sql="select * from client  where mail='".$mail."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recupererCtel($telephone){
		$sql="select * from client  where telephone='".$telephone."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recupererCcin($cin){
		$sql="select * from client  where cin='".$cin."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherListeClients($user){
		$sql="select * from client  where user like '%$user%'";
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