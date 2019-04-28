<?PHP
class Transporteur{
	private $cin;
	private $nom;
	private $prenom;
	private $tel;
	private $mail;
	private $typeV;
	private $nbPaquet;
	private $montant;
	function __construct($cin,$nom,$prenom,$tel,$mail,$typeV,$nbPaquet,$montant){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->tel=$tel;
		$this->mail=$mail;
		$this->typeV=$typeV;
		$this->nbPaquet=$nbPaquet;
		$this->montant=$montant;

	}
	function getcin(){return $this->cin;}
	function getnom(){return $this->nom;}
	function getprenom(){return $this->prenom;}
	function gettel(){return $this->tel;}

	function getmail(){return $this->mail;}
	function gettypeV(){return $this->typeV;}
	function getnbPaquet(){return $this->nbPaquet;}
	function getmontant(){return $this->montant;}

	
}

?>