<?php
require('connectme.php');
class Signup extends Connector{
	public function run(){
	
		if (empty($_POST['Emid']) || empty($_POST['Emfirst']) || empty($_POST['Emsec']) || empty($_POST['Emencrpyt'])) {
			$error = "Theres a Problem";
			
			echo "<script> ".$error."</script>";
			}
		else
		{
			$conns=$this->conn;
			$id =$_POST['Emid'];
$firname = mysqli_real_escape_string($conns, $_POST['Emfirst']);
$firname = stripslashes($firname); 
$secname = mysqli_real_escape_string($conns, $_POST['Emsec']);
$secname = stripslashes($secname); 
$password = mysqli_real_escape_string($conns, $_POST['Emencrpyt']);
$password = stripslashes($password); 
if(!filter_var($id, FILTER_VALIDATE_EMAIL)){
	$idw="phone";
	$idp= $_POST['Emid'];
	$ide = "not";
}
else{
	$idw="email";
     $ide= $_POST['Emid'];
     $idp= 0;
}
	$quet= mysqli_query($conns,"INSERT INTO profiles (email, phone, first_name, sec_name, password) 
	VALUES ('$ide',  '$idp', '$firname', '$secname', '$password')");
	if($quet){
  		header("Location:http://localhost/Mark-E/home");
	}
	else{
		echo "<script>alert('Error!!!')</script>";
	}
		}
	}

	public function __destruct(){

	}
	
	public function __call($name, $arguments){
	echo "A function with name: ".$name." does not
	exist\n";
	}
}

$lot = new Signup("localhost", "Vincent", "7115p1israel", "markerwwe");
 $lot->shake();
echo $lot->run();


?>