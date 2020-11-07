<?php
	require('connectme.php');

	/**
	 * ------NEW QUESTION CLASS
	 */
	class New_question extends Connector
	{
		
		public function shake_($id, $ques_no, $comp_id, $quwer, $ans)
		{
			# code...
			$this->id = $id; 
			$this->quwer = $quwer;
			$this->comp_id = $comp_id;
			$this->ques_no = $ques_no;
			$this->ans = $ans;
			print();
		}

		public function Add($index)
		{
			# code...
		}
		public function Edit($column)
		{
			# code...
		}
		public function Delete($index)
		{
			# code...
		}
		public function Search($index)
		{
			# code...
		}
	}
?>