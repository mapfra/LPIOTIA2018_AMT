<?php
class cnx
{
	private $host;
	private $user;
	private $passw;
	
	private $port;
	private $base;
	
	public  $bdd;
	public  $nombase;
	public  $liberr;
	public  $messerr;
	
	public function __construct(){
		
		$this->port='3306';
		$this->host="localhost";
		$this->user="root";
		$this->passw="";
		$this->base="alertes";
		$this->nombase="base_developpement";
	}
	
	public function connect(){
		$options = [
			PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
		];
		
		try{
			$this->bdd = new PDO('mysql:host='.$this->host.';dbname='.$this->base, $this->user, $this->passw, $options);
		
		}
		catch(PDOException $e){
			$this->liberr  = $e->getMessage();
			$this->messerr = $e->getCode();
			return false;     
		}
		return true;
	}
	
	public function disconnect(){
		$this->bdd = null;
	}
}
?>