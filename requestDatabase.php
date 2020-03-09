<?php
include "database.php";
class Request 
{
	
	public function insert_request(){
		$obj = new DataOperation;
			$myArray = array(
			"location" => $_POST["location"],
			"contact" => $_POST["contact"],
			"type" => $_POST["reqtype"]
			);
			if($obj->insert_record("request",$myArray)){
			echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
			 header("Location:patientRequestFeedback.php");
			}
			else{
				echo "<script type='text/javascript'>alert('failed!')</script>";
			}
	}
	public function insert_request_instant_help(){
		$obj = new DataOperation;
			$myArray = array(
			//"location" => $_POST["location"],
			"contact" => $_POST["contact"],
			"type" => $_POST["reqtype"],
			"question" => $_POST["asking"]
			);
			if($obj->insert_record("request",$myArray)){
			echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
			 header("Location:patientRequestFeedback.php");
			}
			else{
				echo "<script type='text/javascript'>alert('failed!')</script>";
			}
	}
	public function fetch_request(){
		$obj = new DataOperation;

		$addSql ="";

		$info=$obj->fetch_record("request",$addSql);
		return $info;
	}

}

?>