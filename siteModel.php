<?php

class siteModel 
{
	private $db;
	public function __construct($dsn, $user, $pass){
		try {
			$this->db = new PDO($dsn, $user, $pass);
		} catch (PDOExeption $e) {
			echo "Couldn't query the database.";
			var_dump($e);
		}
	}//__construct
	
}//end class
?>