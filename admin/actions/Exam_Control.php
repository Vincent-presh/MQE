<?php
	require('connectme.php');

	/**
	 * NEW EXAM CLASS....
	 */
	class New_exam extends Connector
	{
	
		public function shake_($id, $name, $upper_time, $lower_time, $nopl)
		{
			# code...
			$this->id = $id;
			$this->name = $name;	
			$this->upper_time = $upper_time;	
			$this->lower_time = $lower_time;
			$this->nopl = $nopl;	
		}
		public function IfSuccess($value)
		{
			# code...
			if ($value) return true;
			return false;
		}

		private function Add( $index )
		{
			# code...
			$query = $this->conn->query( "INSERT INTO sche_exam ( name, upper_time, lower_time, nopl ) VALUES ( '$this->name', '$this->upper_time', '$this->lower_time',  '$this->nopl')'" );

			$result = $this->IfSuccess( $query );

			echo $result;

		}
		#to edit table
		private function Edit( $column, $new_value, $index )
		{
			$query = $this->conn->query( "UPDATE sche_exam SET $column = '$new_value' WHERE name = '$index'" );
			$result = $this->IfSuccess( $query );
			echo $result;

		}

		private function Delete($index)
		{
	
		}

		private function Search($index)
		{
			$query = $this->conn->query( "SELECT * FROM sche_exam WHERE name='$index'" );

			$result = $this->IfSuccess( $query );

			if ($result == "yes") {
				# code...
				$outp = array();
				$outp = mysqli_fetch_array( $query );
				return json_encode($outp);
			}

		}
		private function _PSearch($index)
		{
			# code...

		}
	}
?>