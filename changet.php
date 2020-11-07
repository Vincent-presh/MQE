<?php
require('actions/connectme.php');
class Changer extends Connector{
    public function run(){
	
        if (empty($_FILES['picpos']['name']) ){
            echo "empty";
        }
        else
		{
			$conns=$this->conn;
            $user=$_COOKIE['Mid'];
            $image= $_FILES['picpos']['name'];
            $firname = mysqli_real_escape_string($conns, $image);
            $firname = stripslashes($firname); 
            $quet= mysqli_query($conns,"UPDATE profiles SET picdp = '$firname' WHERE email = '$user'");
	        if($quet){
       
            $image = $_FILES['picpos']['name'];
            $targetmi = "userimages/".basename($image);
        
            if(move_uploaded_file($_FILES['picpos']['tmp_name'], $targetmi)){
          echo "Successful";
            }
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

$lot = new Changer("localhost", "Vincent", "7115p1israel", "markerwwe");
 $lot->shake();
echo $lot->run();
?>