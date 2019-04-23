<?PHP
class Commentaire{
	private $id;
	private $idprod;
	private $user;
	private $commentaire;
	private $date;
	
	function __construct($id,$idprod,$user,$commentaire,$date){
		$this->id=$id;
		$this->idprod=$idprod;
		$this->user=$user;
		$this->commentaire=$commentaire;
		$this->date=$date;

	}
	function getid(){
		return $this->id;
	}
	function setid($id){
		$this->id=$id;
	}
	function getidprod(){
		return $this->idprod;
	}
	function setidprod($idprod){
		$this->idprod=$idprod;
	}
	function getuser(){
		return $this->user;
	}
	function setuser($user){
		$this->user=$user;
	}
	function getcommentaire(){
		return $this->commentaire;
	}
	function setcommentaire($commentaire){
		$this->commentaire=$commentaire;
	}
	function getdate(){
		return $this->date;
	}
	function setdate($date){
		$this->date=$date;
	}
	
}

?>