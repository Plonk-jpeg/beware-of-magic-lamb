<?php

class Database {
	
	protected $connect;
	protected $servername = 'localhost';
	protected $username = 'root';
	protected $password = '';
	protected $dbname ='bewareofthemagiclamb';
	//test de vconnection
	
	public function __construct(){
		
		try{
			$this->connect = new PDO("mysql:host=$this->servername;dbname=$this->dbname",$this->username, $this->password);
			//le mode erreur pour eviter les traces Zend 
			$this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e){
			echo "Erreur : " . $e->getMessage();
		}
	}
	public function getConnect() {
  		return $this->connect;
	}
}