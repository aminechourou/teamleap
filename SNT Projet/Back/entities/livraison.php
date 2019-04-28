<?PHP
class Livraison{

	private $date;
	private $dest;
	private $adr;
	private $frais;
	private $cinClient;
	private $idCommande;
	private $idTransporteur;
	function __construct($date,$dest,$adr,$frais,$cinClient,$idCommande,$idTransporteur){
	
		$this->date=$date;
		$this->dest=$dest;
		$this->adr=$adr;
		$this->frais=$frais;
		$this->cinClient=$cinClient;
		$this->idCommande=$idCommande;
		$this->idTransporteur=$idTransporteur;
	}
	
	function getdate(){
		return $this->date;
	}
	function getdest(){
		return $this->dest;
	}
	function getadr(){
		return $this->adr;
	}
	function getfrais(){
		return $this->frais;
	}
	function getcinClient(){
		return $this->cinClient;
	}
	function getidCommande(){
		return $this->idCommande;
	}
	function getidTransporteur(){
		return $this->idTransporteur;
	}
	
}

?>