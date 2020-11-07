<?php
 /**
  * 
  */
 class Profiler extends Connector
 {
 	
 	public function start($user)
 	{
 		# code...
 		$this->username = $user;
 	}

 	public function getp()
 	{
 		# code...
 		$conns=$this->conn;
		$result = $conns->query("SELECT * FROM profiles WHERE email='$this->username'");
		$outp = array();
		if(mysqli_num_rows($result)==1){
			while ($outp =  mysqli_fetch_array($result)) {
				$this->id=$outp['id'];
				$this->first_name=$outp['first_name'];
				$this->dept=$outp['dept'];
				$this->phone=$outp['phone'];
				$this->email=$outp['email'];
			}
		}
 	}
 }
?>