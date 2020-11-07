<?php

require('connectme.php');


class Login extends Connector{
public function run(){

if (empty($_POST['EmPhone']) || empty($_POST['EmPasso'])) {
return "Username or Password is invalid";

}
else
{

// Define $email and $password

$email=$_POST['EmPhone'];
$password_e=$_POST['EmPasso'];
$conns=$this->conn;
// To protect MySQL injection for Security purpose
$email = stripslashes($email);
$password_e = stripslashes($password_e);                                        
$email = mysqli_real_escape_string($conns, $email);
$password_e = mysqli_real_escape_string($conns, $password_e);
 
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing E-mail(Remove unexpected symbol like <,>,?,#,!, etc

// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($conns, "select * from profiles where password='$password_e' AND email='$email'");
$rows = mysqli_num_rows($query);
if ($rows == 1){
session_start();
$_SESSION['email']=$email; // Initializing Session
if(isset($_SESSION['email']) && mysqli_query($conns, "UPDATE profiles SET online = 'Yes' WHERE email = '$email'")){
	setcookie('Mid',$email, time() + 144000, '/');
return "<script> window.location= 'http://localhost/Mark-E/home';</script>";
}
}
else{
return "<script> window.location= 'http://localhost/Mark-E/?details=wrong';</script>";
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

$lot = new Login("localhost", "Vincent", "7115p1israel", "markerwwe");
 $lot->shake();
echo $lot->run();

?>