<?php
	require('connectme.php');

	/**
	 * ------NEW OPTION CLASS
	 */
	class New_Answer extends Connector
	{
		
		public function shake_($id, $quest_id, $comp_id, $optiony, $value)
		{
			# code...
			$this->id = $id;
			$this->quest_id = $quest_id;	
			$this->comp_id = $comp_id;	
			$this->optiony = $optiony;
			$this->value = $value;	
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