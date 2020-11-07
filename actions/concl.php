<?php

require('connectme.php');
require('checker.php');
/**
 * 
 */
class Conclude extends Checker
{
	public function action($ansers, $comp_id, $quest)
	{
		# code...
		$conns=$this->conn;
		$result = $conns->query("SELECT quet_ns.ans AS anserw FROM quet_ns INNER JOIN answ_quet ON quet_ns.ques_no=answ_quet.quest_id WHERE quet_ns.comp_id='$comp_id' AND ques_no='$quest'");
		$outp = array();
        $count=0;
		while ($outp =  mysqli_fetch_array($result)) {
			# code...
				if($outp['anserw']==$ansers) {
					$count = 10;
				}
		 }
		return $count;
	}
}

if(isset($_GET['namer'])){

	  $namer=$_GET['namer'];
	  $namer = stripslashes($namer);
	  $lot = new Conclude("localhost", "Vincent", "7115p1israel", "markerwwe");
 	  $lot->shake();
	  $response= $lot->run();
	  $comp_id=$lot->Checkcomp($namer);
		if($comp_id!=300){
			$result= $_GET['result'];
			$resultq= $_GET['quest_token'];
			$restponse=$lot->action($result, $comp_id, $resultq);
			echo $restponse;
		}

}
?>