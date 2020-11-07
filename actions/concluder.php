<?php

require('connectme.php');
require('checker.php');
require('profileg.php');
/**
 * 
 */
class Conclude extends Checker
{
	public function action( $ansers, $comp_id )
	{
		# code...
		$conns = $this->conn;
		$this->comp = $comp_id;
		$result_query = $conns->query( "SELECT quet_ns.ans AS anserw FROM quet_ns WHERE quet_ns.comp_id='$comp_id'" );
		$outp = array();
		$this->results = array();
		$this->results = json_decode( $ansers );
		$count = 0;
		$r = 0;
		while ( $outp =  mysqli_fetch_array( $result_query ) ) {
			
			# code...

			if( !empty( $this->results[$r] )){

				if( $outp['anserw'] == $this->results[$r] ) {

					$count = $count + 10;

				}

				$r= $r+1;
			}
		}		

		return $count;
	}

	public function submit( $user, $score )
	{
		# code...
		$conns = $this->conn;
		$result = $conns->query("UPDATE writers SET score = '$score' WHERE user_id = '".$user."' AND comp_id='".$this->comp."'");

		if ( $result ) {
			return 1;
		}

		return;
	}
}

if( isset( $_GET['namer'] ) ){

	  $namer = $_GET['namer'];
	  $namer = stripslashes($namer);
	  $lot = new Conclude( "localhost", "Vincent", "7115p1israel", "markerwwe" );
 	  $lot->shake();
	  $response = $lot->run();
	  $comp_id = $lot->Checkcomp( $namer );
		if( $comp_id != 300 ) {
			$result = $_GET['result'];
			$usern = $_GET['username'];
			$restponse = $lot->action( $result, $comp_id, $usern );
		 	$profile = new Profiler( "localhost", "Vincent", "7115p1israel", "markerwwe" );
		  	$profile->shake();
		 	$profile->start( $usern );
		 	$profile->getp();
		 	if( $profile -> id ){
		 		$submiy = $lot->submit( $profile->id, $restponse );
				echo $restponse;
			}
			else{
				echo "ERROR";
			}
		}

}
?>