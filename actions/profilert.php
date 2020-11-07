<?php
	

require('connectme.php');
require('checker.php');

if(isset($_GET['namer'])){
$lot = new Checker("localhost", "Vincent", "7115p1israel", "markerwwe");
 $lot->shake();
$response= $lot->run();
if($response=="080"){
$res=$lot->regis();
if ($res=="200"){
$lot->disqualify();
}

//you should remove the next line
setcookie('Mid-start', "yes", time() + 3600, '/');
 echo $lot->responre($res);
}else{

}
}
else{
	echo " Violation Occured";
}
?>