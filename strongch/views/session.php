<?PHP
include 'dbconfig.php';
class Client{
	private $mail;
	private $mdp;
	private $user;
	public $conn;
	function __construct($mail,$mdp,$conn){
		$this->mail=$mail;
		$this->mdp=$mdp;
		$c=new Database();
		$this->conn=$c->connexion();
	}
	
	function getMail(){
		return $this->mail;
	}
	function getMdp(){
		return $this->mdp;
	}
	function getUser(){
		return $this->user;
	}
	public function Logedin($conn,$mail,$mdp)
	{
		$req="select * from client where mail='$mail' && mdp='$mdp'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
		
	}
}

?>