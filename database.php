<?php

	/**
	 * 
	 */
	 class Database 
	{
		public $con;
		

		
		public function __construct(){
			$this->con = mysqli_connect("localhost","root","","sem");
			if (!$this->con) {
			echo "Error in Connecting ".mysqli_connect_error();
			}
			else{
				//echo "connected";
			}
		}
		

		

	}

	
	 class DataOperation extends Database
	{
		
		public function insert_record($table,$fileds){
			
			$sql = "";
			$sql .= "INSERT INTO ".$table;
			$sql .= " (".implode(",", array_keys($fileds)).") VALUES ";
			$sql .= "('".implode("','", array_values($fileds))."')";
			$query = mysqli_query($this->con,$sql);
			if($query){
		    return true;
		}
	}


	public function update_record($sql){
		
			$query = mysqli_query($this->con,$sql);
			if($query){
		    return true;
		}
	}
	public function query_execution($sql){
		$query = mysqli_query($this->con,$sql);
			if($query){
		    return true; 
		}
		else{
			return false;
		}
	}
	

		public function fetch_record($table,$addSql){
		//$sql = "SELECT * FROM ".$table." WHERE doctorId = ".$id;
		$sql = "SELECT * FROM  ".$table." ".$addSql;
		$array = array();
		$query = mysqli_query($this->con,$sql);
		while($row = mysqli_fetch_assoc($query)){
		$array[] = $row;
		}
		return $array;
}
		public function fetch_single_record($sql){
		
		$getInfo = mysqli_query($this->con,$sql);
		$resultInfo = mysqli_fetch_assoc($getInfo);
		
		
		return $resultInfo;
}
		/*public function select_record($table,$where){
			$sql = "";
			$condition = "";
			foreach ($where as $key => $value) {
			// id = '5' AND m_name = 'something'
			//$condition .= $key . "='" . $value . "' AND ";
				$condition .= $key . "='" . $value;
		}
			$condition = substr($condition, 0, -5);
			$sql .= "SELECT * FROM ".$table." WHERE ".$condition;
			$query = mysqli_query($this->con,$sql);
			$row = mysqli_fetch_array($query);
		return $row;

}*/

		
		
}




?>