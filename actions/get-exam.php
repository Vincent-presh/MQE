<?php

require('connectme.php');
require('checker.php');

/**
* 
*/
class getex extends Checker 
{
	public function action($comp_id){
		# code...
		$conns=$this->conn;
		$result = $conns->query("SELECT quet_ns.id, ques_no, quet_ns.comp_id, quwer, answ_quet.id, answ_quet.quest_id, answ_quet.optiony, answ_quet.value FROM quet_ns INNER JOIN answ_quet ON quet_ns.ques_no=answ_quet.quest_id WHERE quet_ns.comp_id='$comp_id' AND answ_quet.comp_id='$comp_id'");
		$outp = array();
		$outp = $result->fetch_all(MYSQLI_ASSOC);
		return $outp;
	}
}

  if(isset($_GET['namer'])){
	  $namer=$_GET['namer'];
	  $namer = stripslashes($namer);
	  $lot = new getex("localhost", "Vincent", "7115p1israel", "markerwwe");
 	  $lot->shake();
	  $response= $lot->run();
		$comp_id=$lot->Checkcomp($namer);
		if($comp_id!=300){
			$action =$lot->action($comp_id);
			echo json_encode($action);
		}
		else{
			echo "comp error";
		}
	}
?>