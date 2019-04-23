<?PHP
class Commande{
	private $id;
	private $prix;
	private $categorie;
	private $nom;
	
	function __construct($id,$nom,$categorie,$prix){
		$this->id=$id;
		$this->nom=$nom;
		$this->categorie=$categorie;
		$this->prix=$prix;
		
	}
	
	function getid(){
		return $this->id;
	}
	function getnom(){
		return $this->nom;
	}
	function getprix(){
		return $this->prix;
	}
	
	function getcategorie(){
		return $this->categorie;
	}

	function setnom($nom){
		$this->nom=$nom;
	}
	function setid($id){
		$this->id;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	function setcategorie($categorie){
		$this->$categorie=$$categorie;
	}
	
}

?>