<?php

/**
 * 
 */
include "database.php";
class Doctor 
{
	
	/*$name = ;
	$gender = ;
	$phone = ;
	$email = ;
	$expertise = ;
	$password = ;
*/
	public function __construct(){
	}
	//public $obj = new DataOperation;

	public function doctorRegistration(){

			$obj = new DataOperation;
			$myArray = array(
			"doctorName" => $_POST["name"],
			"gender" => $_POST["gender"],
			"doctorPhone" => $_POST["phone"], 
			"doctorMail" => $_POST["email"],
			"doctorSpeciality" => $_POST["speciality"],
			"doctorPassword" => $_POST["password"]
			);
			if($obj->insert_record("doctor",$myArray)){
			echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
			}
			else{
				echo "<script type='text/javascript'>alert('failed!')</script>";
			}

		
	}
	public function doctorProfile($id){
		$obj = new DataOperation;
		$profileInfo = $obj->fetch_single_record("doctor",$id); 
		return $profileInfo;
	}





}

 $doctorObj = new Doctor;
    if(isset($_POST["doctorInfoSubmit"])){
        $doctorObj->doctorRegistration();
    }


?>