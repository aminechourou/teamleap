<?PHP
class Commentaire{
	private $id;
	private $reference;
	private $user;
	private $commentaire;
	private $date;
	
	function __construct($id,$reference,$user,$commentaire,$date){
		$this->id=$id;
		$this->reference=$reference;
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
	function getreference(){
		return $this->reference;
	}
	function setreference($reference){
		$this->reference=$reference;
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