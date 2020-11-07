<?php

require('connectme.php');
/**
* 
*/
class Getexname extends Connector 
{

	public function action($namer)
	{
	# code...
	$conns=$this->conn;
	$result = $conns->query("SELECT name FROM sche_exam WHERE name='$namer'");
	if (mysqli_num_rows($result)==1){
			return 1;
		}
		else{
			return 2;
		}
	}
}
  if(isset($_GET['namer'])){
  	$namer=$_GET['namer'];
	$lot = new Getexname("localhost", "Vincent", "7115p1israel", "markerwwe");
 	$lot->shake();
	 $restp=$lot->action($namer);
	echo $restp;
	}
	else{
		echo " Violation Occured ";
	}
?>