<?php
class Checker extends Connector{
	
	public function run(){
	if(!isset($_COOKIE['Mid'])){
			return "You are not logged in";
		}
	else if(!isset($_COOKIE['Mid-start'])){
		return "080";
	}
	else{
		return "081";
	}

	}

	public function disqualify(){

	}

	public function regis()
	{
		$conns=$this->conn;
		$email=$_COOKIE['Mid'];
		$query = mysqli_query($conns, "select * from profiles where email='$email'");
		$rows = mysqli_num_rows($query);
		if ($rows == 1){
			$accer =mysqli_fetch_array($query);
			$id = $accer['id'];
			$emamn=$_GET['namer'];
			$querye = mysqli_query($conns, "SELECT * from  sche_exam where name='$emamn'");
			$rowsq = mysqli_num_rows($querye);
			if( $rowsq==1 ){
				$acqr = mysqli_fetch_array($querye);
				$idw= $acqr['id'];
				$newTime = date("Y-m-d H:i:s");
				$quet= mysqli_query($conns,"INSERT INTO writers (user_id, comp_id, score, timesw) 
				VALUES ('$id', '$idw', '0', '$newTime')");
				if($quet){
					setcookie('Mid-start', "yes", time() + 3600, '/');
					return "002";
				}
				else{
					return "200";
				}
			}
			else{
				return "400";
			}
		}
		else{
			return "400";
		}
	}

	public function responre($cast)
	{
		# code...
		switch ($cast) {
			case '002':
				return "Exam is Preparing!!!";

				break;
			case '200':
				return "Duplicate Registration was attempted, You are therefore disqualified for this exam!!!";
					//YOU ARE SUPPOSED TO CHECK IF THE PERSON RESISTERED TWICE SO YOU DONT GET THE QUESTIONS
					//here you need to use the disqualify function
				break;
			case '400':
				return "Exam is Preparing!!!";

				break;
			case '300':
				return "Exam is Preparing!!!";

				break;
			
			default:
				# code...
				return "An error occured";
				break;
		}
	}

	public function Checkcomp($namer)
	{
		# code...
		$conns=$this->conn;
		$query = mysqli_query($conns, "select * from sche_exam where name='$namer'");
		$rows = mysqli_num_rows($query);
		if ($rows == 1){
			$accer =mysqli_fetch_array($query);
			$id= $accer['id'];
			return $id;
		}else{
			return "300";
		}
	}
	public function Checkques($namer)
	{
		# code...
		$conns=$this->conn;
		$query = mysqli_query($conns, "select * from sche_exam where name='$namer'");
		$rows = mysqli_num_rows($query);
		if ($rows == 1){
				$accer =mysqli_fetch_array($query);
				$id= $accer['id'];
				return $id;
		}else{
			return "300";
		}
	}

}
?>