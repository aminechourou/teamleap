<?php

class ProduitC {
function ajouterprod ($Produit)
{

$sql="insert into produit (nomprod,referenceprod,categorieprod,prixprod,etatprod,quantiteprod,imageprod) values (:nomprod,:referenceprod,:categorieprod,:prixprod,:etatprod,:quantiteprod,:imageprod)";
$db=config::getConnexion();
try {

$req=$db->prepare($sql);


$nomprod=$Produit->getnomprod();
$referenceprod=$Produit->getreferenceprod();
$categorieprod=$Produit->getcategorieprod();
$prixprod=$Produit->getprixprod();
$etatprod=$Produit->getetatprod();
$quantiteprod=$Produit->getquantiteprod();
$imageprod=$Produit->getimageprod();



$req->bindValue(':nomprod', $nomprod);
$req->bindValue(':referenceprod', $referenceprod);
$req->bindValue(':categorieprod', $categorieprod);
$req->bindValue(':prixprod', $prixprod);
$req->bindValue(':etatprod', $etatprod);
$req->bindValue(':quantiteprod', $quantiteprod);
$req->bindValue(':imageprod', $imageprod);


$req->execute();
return true;
} catch (Exception $e) { echo 'erreur'.$e->getMessage() ; return false;}

}
/******************************************/

function afficherprod ($Produit){
		echo "id produit: ".$Produit->getidprod()."<br>";
    echo "nom produit: ".$Produit->getnomprod()."<br>";
    echo "reference produit: ".$Produit->getreferenceprod()."<br>";
    echo "categorie produit: ".$Produit->getcategorieprod()."<br>";
    echo "prix produit: ".$Produit->getprixprod()."<br>";
    echo "etat produit: ".$Produit->getetatprod()."<br>";
    echo "quantite produit: ".$Produit->getquantiteprod()."<br>";
    echo "image produit: ".$Produit->getimageprod()."<br>";

	}

function afficherptoduit(){

		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


/************************************************************/

	function afficherProduits3(){

		$sql="SElECT * From produit ORDER BY nomprod";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}







	/***************************************************/
	function supprimerprod($idprod){

 	$sql="DELETE FROM produit where idprod=:idprod ";
 	$db = config::getConnexion();
 			$req=$db->prepare($sql);
 	$req->bindValue(':idprod',$idprod);
 	try{
 					$req->execute();
 				 // header('Location: index.php');
 			}
 			catch (Exception $e){
 					die('Erreur: '.$e->getMessage());
 			}
 }




/********************************************************************/
function modifierprod($produit,$idprod){
	$sql="UPDATE produit SET  nomprod=:nomprod,referenceprod=:referenceprod ,categorieprod=:categorieprod, prixprod=:prixprod, etatprod=:etatprod, quantiteprod=:quantiteprod , imageprod=:imageprod where idprod= :idprod   ";
	$db = config::getConnexion();
	//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
			$req=$db->prepare($sql);
			$nomprod=$produit->getnomprod();
			$referenceprod=$produit->getreferenceprod();
			$categorieprod=$produit->getcategorieprod();
			$prixprod=$produit->getprixprod();
			$etatprod=$produit->getetatprod();
			$quantiteprod=$produit->getquantiteprod();
			$imageprod=$produit->getimageprod();


	//$datas = array(':nomprod'=>$nomprod,':categorieprod'=>$categorieprod,':prixprod'=>$prixprod,':etatprod'=>$etatprod,':quantiteprod'=>$quantiteprod,':imageprod'=>$imageprod,':referenceprod'=>$_GET['referenceprod']);

$req->bindValue(':idprod',$idprod);
$req->bindValue(':nomprod',$nomprod);
	$req->bindValue(':referenceprod',$referenceprod);
	$req->bindValue(':categorieprod',$categorieprod);
	$req->bindValue(':prixprod',$prixprod);
	$req->bindValue(':etatprod',$etatprod);
	$req->bindValue(':quantiteprod',$quantiteprod);
	$req->bindValue(':imageprod',$imageprod);



				$s=$req->execute();
				 //header('Location: index.php');
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}

}

/**************************************************************/
function recupererprod($idprod){
		$sql="SELECT * from produit where idprod=$idprod";
		$db = config::getConnexion();
		try{
		$produit=$db->query($sql);
		return $produit;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}


 ?>
