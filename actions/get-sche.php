<?php
header("Access-Control-Allow-Origin: *"); 
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "Vincent", "7115p1israel", "markerwwe");

$email=$_COOKIE['Mid'];
 $result = $conn->query("SELECT * FROM sche_exam ");
$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);
$conn->close();
echo json_encode($outp);
?>