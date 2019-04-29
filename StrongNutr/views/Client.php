<?php
include 'dbconfig.php';
class Client{
	private $mail;
	private $mdp;
	private $user;
	private $telephone;
	public $conn;
	 public function __construct($mail,$mdp,$conn){
		
		
		$this->mail=$mail;
		$this->mdp=$mdp;
		
		$c=new Database();
		$this->conn=$c->connexion();
	}
	function getuser()
	{	return $this->user;	}
	
	function getmail(){
		return $this->mail;
	}
	
	function getmdp(){
		return $this->mdp;
	}
	function gettelephone()
	{	return $this->telephone;	}

	function setmail($mail) {$this->mail=$mail;}
function setmdp($mdp) {$this->mdp=$mdp;}
	public function Logedin($conn,$mail,$mdp)
	{
		$req="select * from client where mail='$mail' && mdp='$mdp'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
		
	}
}

?>