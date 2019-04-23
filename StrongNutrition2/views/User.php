<?php
include 'dbconfig.php';
class Client{
  private $user;
  private $telephone;
  private $mail;
  private $mdp;
  private $cin;
  public $conn;

	public function __construct($mail,$mdp,$conn)
	{
		//$this->user=$user;
		//$this->telephone=$telephone;
		$this->mail=$mail;
		$this->mdp=$mdp;
    		//$this->cin=$cin;
		$c=new Database();
		$this->conn=$c->connexion();

	}
	function getuser()
	{	return $this->user;	}

	function gettelephone()
	{	return $this->telephone;	}

	function getmail()
	{return $this->mail;	}

	function getmdp()
	{return $this->mdp;}

	function getcin()
	{return $this->cin;	}

	public function Logedin($conn,$mail,$mdp)
	{
		$req="SELECT * FROM client where mail='$mail' && mdp='$mdp'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

	}



	?>
