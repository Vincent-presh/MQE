<?php header("Access-Control-Allow-Origin: *"); 
header("Content-Type: application/json; charset=UTF-8"); 
$conn = new mysqli("localhost", "Vincent", "7115p1israel", "markerwwe");
$email=$_COOKIE['Mid'];
 $result = $conn->query("SELECT first_name, sec_name, email, picdp,  online FROM profiles WHERE email='$email'");
  $outp = ""; 
 $rs = $result->fetch_array(MYSQLI_ASSOC);
    $outp = json_encode($rs); 
    $conn->close();
     echo($outp);
     ?>