<?php

class Connector{
	public function __construct($host, $username, $password, $db_name){
		$this->host = $host;
		$this->username=$username;
		$this->passwpord=$password;
		$this->db_name=$db_name;
	}


	public function shake(){
	 $this->conn= mysqli_connect($this->host, $this->username, $this->passwpord, $this->db_name)or die("cannot connect");
	}

	public function __destruct(){
	// close database connections
	// close file handles
		mysqli_close($this->conn);
	}
	public function __call($name, $arguments){
		echo "A function with name: ".$name." does not
		exist\n";
	}

}
?>